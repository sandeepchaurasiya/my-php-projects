<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Matches extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'matches/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'matches' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'id', 'DESC' )->get( 'matches', $config[ 'per_page' ],$this->uri->segment( 3 ));
			$this->load->model('matches_model');
			$data['seasons']=$this->load->matches_model->getSeason();
			$data['teams']=$this->load->matches_model->getTeam();
			$this->load->view('matches/index',$data);
		}

		public function add(){

			$this->load->model('matches_model');
			$data['seasons']=$this->load->matches_model->getSeason();
			$data['teams']=$this->load->matches_model->getTeam();

			$this->form_validation->set_rules('season_id', 'Season_id', 'required|numeric');
			$this->form_validation->set_rules('match_date', 'Match_date', 'required');
			$this->form_validation->set_rules('team_a_id', 'Team_a_id', 'required|numeric');
			//$this->form_validation->set_rules('team_a_score', 'Team_a_score', 'required|numeric');
			$this->form_validation->set_rules('team_b_id', 'Team_b_id', 'required|numeric');
			//$this->form_validation->set_rules('team_b_score', 'Team_b_score', 'required|numeric');
			//$this->form_validation->set_rules('winner_team_id', 'Winner_team_id', 'required|numeric');

			if($this->form_validation->run()){

				$insert = $this->db->insert('matches',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('matches/index'));
			}
			$this->load->view('add',$data);
		}

		public function view($id){
			$data['data'] = $this->db->get_where('matches',array('id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){
			$data['data'] = $this->db->get_where('matches',array('id'=>$id))->row();
			$this->load->model('matches_model');
			$data['seasons']=$this->load->matches_model->getSeason();
			$data['teams']=$this->load->matches_model->getTeam();

			$this->form_validation->set_rules('season_id', 'Season_id', 'required|numeric');
			$this->form_validation->set_rules('match_date', 'Match_date', 'required');
			$this->form_validation->set_rules('team_a_id', 'Team_a_id', 'required|numeric');
			$this->form_validation->set_rules('team_a_score', 'Team_a_score', 'required|numeric');
			$this->form_validation->set_rules('team_b_id', 'Team_b_id', 'required|numeric');
			$this->form_validation->set_rules('team_b_score', 'Team_b_score', 'required|numeric');
			//$this->form_validation->set_rules('winner_team_id', 'Winner_team_id', 'required|numeric');

			if($this->form_validation->run()){
			$this->db->where('id',$id);
					$insert = $this->db->update('matches',$_POST);

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('matches/index'));
				}
			$this->load->view('edit',$data);
		}

		public function delete($id){
			if($this->db->delete('matches',array('id'=>$id))){
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('matches/index'));
			}
		}
}

			