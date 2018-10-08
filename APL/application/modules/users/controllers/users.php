<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'users/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'users' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'u_id', 'DESC' )->get( 'users', $config[ 'per_page' ],$this->uri->segment( 3 ));
			$this->load->view('users/index',$data);
		}

		public function add(){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('user_group', 'User group', 'required');

			if($this->form_validation->run()){

				$insert = $this->db->insert('users',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('users/index'));
			}
			$this->load->view('add');
		}

		public function view($id){
			$data['data'] = $this->db->get_where('users',array('u_id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){
			$data['data'] = $this->db->get_where('users',array('u_id'=>$id))->row();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			//$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('user_group', 'User_group', 'required');

			if($this->form_validation->run()){
			$this->db->where('u_id',$id);
					$insert = $this->db->update('users',$_POST);

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('users/index'));
				}
			$this->load->view('edit',$data);
		}

		public function delete($id){
			if($this->db->delete('users',array('u_id'=>$id))){
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('users/index'));
			}
		}
}

			