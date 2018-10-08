<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Scores extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('scores_model');
    }

    public function index() {
        $this->load->library('pagination');
        $config['base_url'] = base_url('scores/index');
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $config['total_rows'] = $this->db->get('scores')->num_rows();
        $this->pagination->initialize($config);
        $data['listing'] = true;
        // $data[ 'datas' ]   = $this->db->order_by( 'id', 'DESC' )->get( 'scores', $config[ 'per_page' ],$this->uri->segment( 3 ));

        $data['datas'] = $this->load->scores_model->getScores();
        $this->load->view('scores/index', $data);
    }

    public function add() {


        $data['teams'] = $this->load->scores_model->getTeam();
        $data['team_id'] = 0;
        $data['match_date'] = date('Y-m-d');

        //$this->form_validation->set_rules('player_id', 'Player_id', 'required|numeric');
        //$this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
        //$this->form_validation->set_rules('match_id', 'Match_id', 'required|numeric');
        // $this->form_validation->set_rules('score', 'Score', 'required|numeric');
        //$this->form_validation->set_rules('date', 'Date', 'required');
        // $this->form_validation->set_rules('created_at', 'Created_at', 'required');
        // $this->form_validation->set_rules('updated_at', 'Updated_at', 'required');
        //if($this->form_validation->run()){
        if (isset($_POST['search'])) {
            $team_id = $_POST['teams'];
            $match_date = $_POST['match_date'];

            $data['team_id'] = $team_id;
            $data['match_date'] = $match_date;
            $data['player'] = $this->load->scores_model->getPlayer($team_id, $match_date);
//            if(!$data['player'])
        }

        if (isset($_POST['update'])) {

            $arr_post = $_POST;
            print_r($arr_post);

            $arr_insert['created_at'] = time();
            $arr_insert['updated_at'] = time();
//            $d = mktime(26, 07, 2018);
            $arr_insert['date'] = $_POST['match_date'];
            $iCnt = 0;
            foreach ($arr_post['score'] as $key => $val) {
                if (!empty($val)) {
                    $arr_insert['score'] = $val;
                    $arr_insert['player_id'] = $arr_post['player'][$iCnt];
                    $arr_insert['team_id'] = $arr_post['team'][$iCnt];
                    ;
                    $arr_insert['match_id'] = $arr_post['match'][$iCnt];
                    ;
                    // echo $val;
                    if (empty($arr_post['score_id'][$iCnt])) {
                        $insert = $this->db->insert('scores', $arr_insert);
                    } else {
                        $insert = $this->db->update('scores', $arr_insert, array('id' => $arr_post['score_id'][$iCnt]));
                    }
                }
                $iCnt++;
            }
            //die;			

            if (!empty($insert)) {
                $this->session->set_flashdata('msg', 'Entry added succesfuly');
            } else {
                $this->session->set_flashdata('msg', 'Error while inserting data');
            }


            redirect(base_url('scores/index'));
        }
        $this->load->view('add', $data);
    }

    public function view($id) {
        $data['data'] = $this->db->get_where('scores', array('id' => $id))->row();
        $this->load->view('view', $data);
    }

    public function edit($id) {
		
		
        $data['data'] = $this->db->get_where('scores', array('id' => $id))->row();
      $data['datas'] = $this->load->scores_model->getScores();
        $this->form_validation->set_rules('player_id', 'Player_id', 'required|numeric');
        $this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
        $this->form_validation->set_rules('match_id', 'Match_id', 'required|numeric');
        $this->form_validation->set_rules('score', 'Score', 'required|numeric');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('created_at', 'Created_at', 'required');
        $this->form_validation->set_rules('updated_at', 'Updated_at', 'required');

        if ($this->form_validation->run()) {

            print_r($_POST);
            $this->db->where('id', $id);
            $insert = $this->db->update('scores', $_POST);

            if (!empty($insert)) {
                $this->session->set_flashdata('msg', 'Entry updated succesfuly');
            } else {
                $this->session->set_flashdata('msg', 'Error updating inserting data');
            }
            redirect(base_url('scores/index'));
        }
        $this->load->view('edit', $data);
    }

    public function delete($id) {
        if ($this->db->delete('scores', array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Entry deleted succesfuly');
            redirect(base_url('scores/index'));
        }
    }

}
