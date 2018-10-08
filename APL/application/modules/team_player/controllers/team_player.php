<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Team_player extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'team_player/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'team_player' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'id', 'DESC' )->get( 'team_player', $config[ 'per_page' ],$this->uri->segment( 3 ));
			$this->load->model('team_player_model');
			$data['players']=$this->team_player_model->getPlayers();
			$data['teams']=$this->team_player_model->getTeams();
			$this->load->view('team_player/index',$data);

		}

		public function add(){

			$this->load->model('team_player_model');
			$data['players']=$this->team_player_model->getPlayers();
			$data['teams']=$this->team_player_model->getTeams();

			$this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
			$this->form_validation->set_rules('player_id', 'Player_id', 'required|numeric');
			// $this->form_validation->set_rules('is_active', 'Is_active', 'required');
			// $this->form_validation->set_rules('creted_at', 'Creted_at', 'required|numeric');
			// $this->form_validation->set_rules('ended_at', 'Ended_at', 'required|numeric');

			if($this->form_validation->run()){
$_POST['is_active'] = 1;
$_POST['created_at'] = time();


				$insert = $this->db->insert('team_player',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('team_player/index'));
			}
			$this->load->view('add',$data);
		}

		public function view($id){
			$data['data'] = $this->db->get_where('team_player',array('id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){
			$data['data'] = $this->db->get_where('team_player',array('id'=>$id))->row();

			$this->load->model('team_player_model');
			$data['players']=$this->team_player_model->getPlayers();
			$data['teams']=$this->team_player_model->getTeams();

			$this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
			$this->form_validation->set_rules('player_id', 'Player_id', 'required|numeric');
			$this->form_validation->set_rules('is_active', 'Is_active', 'required');
			//$this->form_validation->set_rules('created_at', 'Creted_at', 'required|numeric');
			//$this->form_validation->set_rules('ended_at', 'Ended_at', 'required|numeric');

			if($this->form_validation->run()){
			$this->db->where('id',$id);
					$insert = $this->db->update('team_player',$_POST);

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('team_player/index'));
				}
			$this->load->view('edit',$data);
		}

		public function delete($id){
			if($this->db->delete('team_player',array('id'=>$id))){
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('team_player/index'));
			}
		}
}

			