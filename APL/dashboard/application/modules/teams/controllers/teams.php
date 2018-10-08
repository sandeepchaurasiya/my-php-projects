<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Teams extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'teams/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'teams' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'id', 'DESC' )->get( 'teams', $config[ 'per_page' ],$this->uri->segment( 3 ));
			$this->load->model('teams_model');
			$data['groups'] = $this->teams_model->getPlayers();
			$this->load->view('teams/index',$data);
		}

		public function add(){

			$this->load->model('teams_model');
				$data['groups'] = $this->teams_model->getPlayers();
			//$this->form_validation->set_rules('logo', 'Logo', 'required');
			$this->form_validation->set_rules('tname', 'Tname', 'required');
			//$this->form_validation->set_rules('captain_id', 'Captain_id', 'required|numeric');
			//$this->form_validation->set_rules('lifetime_score', 'Lifetime_score', 'required|numeric');
			//$this->form_validation->set_rules('created_at', 'Created_at', 'required|numeric');
			//$this->form_validation->set_rules('updated_at', 'Updated_at', 'required|numeric');
			//$this->form_validation->set_rules('is_active', 'Is_active', 'required');

			if($this->form_validation->run()){
				
				$_POST['is_active'] = 1;
				$_POST['created_at'] = time();
				$_POST['updated_at'] = time();
				$config['upload_path']   = 'teams/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048000;
                $this->load->library('upload', $config);
              $uploadData = $this->upload->do_upload('logo');
                
                $uploadData1 = $this->upload->data();

                 $_POST['logo'] = $uploadData1['file_name'];
               
				$insert = $this->db->insert('teams',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('teams/index'));
			}
			$this->load->view('add',$data);
		}

		public function view($id){
			$data['data'] = $this->db->get_where('teams',array('id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){
			$data['data'] = $this->db->get_where('teams',array('id'=>$id))->row();
			$this->load->model('teams_model');
			$data['groups'] = $this->teams_model->getPlayers();
			//$this->form_validation->set_rules('logo', 'Logo', 'required');
			$this->form_validation->set_rules('tname', 'Tname', 'required');
			$this->form_validation->set_rules('captain_id', 'Captain_id', 'required|numeric');
			$this->form_validation->set_rules('lifetime_score', 'Lifetime_score', 'required|numeric');
			//$this->form_validation->set_rules('created_at', 'Created_at', 'required|numeric');
			//$this->form_validation->set_rules('updated_at', 'Updated_at', 'required|numeric');
		//	$this->form_validation->set_rules('is_active', 'Is_active', 'required');

						if($this->form_validation->run()){

				$config['upload_path']   = 'teams/';
				 $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048000;
                $this->load->library('upload', $config);
                if($this->upload->do_upload('logo'))
             {

				$uploadData1 = $this->upload->data();

                 $_POST['logo'] = $uploadData1['file_name'];

                  $old_image = $_POST['image_old'];
                	 unset($_POST['image_old']);


			$this->db->where('id',$id);
					$insert = $this->db->update('teams',$_POST);
					if($insert){
							unlink('teams/'.$old_image);
						}

             }

             else
             {

             	  $old_image = $_POST['image_old'];
                	 unset($_POST['image_old']);

             	$this->db->where('id',$id);
					$insert = $this->db->update('teams',$_POST);
             }
                
                


			

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('teams/index'));
				}
			$this->load->view('edit',$data);
		}


		public function delete($id,$logo){
			if($this->db->delete('teams',array('id'=>$id))){
				unlink("teams/".$logo);
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('teams/index'));
			}
		}
}

			