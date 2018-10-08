<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Point_table extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	$this->load->model('point_table_model');
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'point_table/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'point_table' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'points_id', 'DESC' )->get( 'point_table', $config[ 'per_page' ],$this->uri->segment( 3 ));
			
			$data['team']=$this->load->point_table_model->getTeam();
			$this->load->view('point_table/index',$data);
		}

		public function add(){

			
			$data['team']=$this->load->point_table_model->getTeam();

			$this->form_validation->set_rules('team_name', 'Team_name', 'required');
			$this->form_validation->set_rules('matches', 'Matches', 'required|numeric');
			$this->form_validation->set_rules('won', 'Won', 'required|numeric');
			$this->form_validation->set_rules('lost', 'Lost', 'required|numeric');
			$this->form_validation->set_rules('tied', 'Tied', 'required|numeric');
			$this->form_validation->set_rules('points', 'Points', 'required|numeric');

			if($this->form_validation->run()){

				$insert = $this->db->insert('point_table',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('point_table/index'));
			}
			$this->load->view('add',$data);
		}

		public function view($id){
			$data['data'] = $this->db->get_where('point_table',array('points_id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){

				$data['team']=$this->load->point_table_model->getTeam();
			$data['data'] = $this->db->get_where('point_table',array('points_id'=>$id))->row();

			$this->form_validation->set_rules('team_name', 'Team_name', 'required');
			$this->form_validation->set_rules('matches', 'Matches', 'required|numeric');
			$this->form_validation->set_rules('won', 'Won', 'required|numeric');
			$this->form_validation->set_rules('lost', 'Lost', 'required|numeric');
			$this->form_validation->set_rules('tied', 'Tied', 'required|numeric');
			$this->form_validation->set_rules('points', 'Points', 'required|numeric');

			if($this->form_validation->run()){
			$this->db->where('points_id',$id);
					$insert = $this->db->update('point_table',$_POST);

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('point_table/index'));
				}
			$this->load->view('edit',$data);
		}

		public function delete($id){
			if($this->db->delete('point_table',array('points_id'=>$id))){
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('point_table/index'));
			}
		}
}

			