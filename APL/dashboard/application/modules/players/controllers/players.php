<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Players extends MX_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form', 'url'));
	$this->load->library(array('session','form_validation'));
	}

		public function index(){
			$this->load->library( 'pagination' );
			$config[ 'base_url' ]      = base_url( 'players/index' );
			$config[ 'per_page' ]      = 10;
			$config[ 'num_links' ]     = 2;
			$config[ 'total_rows' ] = $this->db->get( 'players' )->num_rows();
			$this->pagination->initialize( $config );
			$data[ 'listing' ] = true;
			$data[ 'datas' ]   = $this->db->order_by( 'id', 'DESC' )->get( 'players', $config[ 'per_page' ],$this->uri->segment( 3 ));
		
			$this->load->model('players_model');
			$data['teams']=$this->load->players_model->getTeam();
				$this->load->view('players/index',$data);
		}

		public function add(){

			

			$this->form_validation->set_rules('name', 'Name', 'required');
			//$this->form_validation->set_rules('image', 'Image', 'required');
			//$this->form_validation->set_rules('category', 'Category', 'required');
			//$this->form_validation->set_rules('season_id', 'Season_id', 'required|numeric');
			//$this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
			//$this->form_validation->set_rules('lifetime_sale', 'Lifetime_sale', 'required|numeric');
			//$this->form_validation->set_rules('is_active', 'Is_active', 'required');
			//$this->form_validation->set_rules('created_at', 'Created_at', 'required|numeric');
			//$this->form_validation->set_rules('updated_at', 'Updated_at', 'required|numeric');

			if($this->form_validation->run()){

$_POST['is_active'] = 1;
$_POST['created_at'] = time();
$_POST['updated_at'] = time();
				
				$config['upload_path']   = 'players/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048000;
                $this->load->library('upload', $config);
              $uploadData = $this->upload->do_upload('image');
                
                $uploadData1 = $this->upload->data();

                 $_POST['image'] = $uploadData1['file_name'];

             

				$insert = $this->db->insert('players',$_POST);

				if(!empty($insert)){
					$this->session->set_flashdata('msg','Entry added succesfuly');
				}else{
					$this->session->set_flashdata('msg','Error while inserting data');
				}
			redirect(base_url('players/index'));
			}
			$this->load->view('add');
		}

		public function view($id){
			$data['data'] = $this->db->get_where('players',array('id'=>$id))->row();
			$this->load->view('view',$data);
		}

		public function edit($id){

			$this->load->model('players_model');
			$data['teams']=$this->load->players_model->getTeam();
			$data['data'] = $this->db->get_where('players',array('id'=>$id))->row();

			$this->form_validation->set_rules('name', 'Name', 'required');
			//$this->form_validation->set_rules('image', 'Image', 'required');
			//$this->form_validation->set_rules('category', 'Category', 'required');
			//$this->form_validation->set_rules('season_id', 'Season_id', 'required|numeric');
			//$this->form_validation->set_rules('team_id', 'Team_id', 'required|numeric');
			//$this->form_validation->set_rules('lifetime_sale', 'Lifetime_sale', 'required|numeric');
			$this->form_validation->set_rules('is_active', 'Is_active', 'required');
			//$this->form_validation->set_rules('created_at', 'Created_at', 'required|numeric');
			//$this->form_validation->set_rules('updated_at', 'Updated_at', 'required|numeric');

			
			if($this->form_validation->run()){

				$config['upload_path']   = 'players/';
				 $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048000;
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image'))
                {
                	
                	 $uploadData1 = $this->upload->data();

                	 $_POST['image'] = $uploadData1['file_name'];
                	 $old_image = $_POST['image_old'];
                	 unset($_POST['image_old']);


					$this->db->where('id',$id);
					$insert = $this->db->update('players',$_POST);
					if($insert){
							unlink('players/'.$old_image);
							// echo ;die;

					}


        		}

        		else
        		{
        			 $old_image = $_POST['image_old'];
                	 unset($_POST['image_old']);
        			$this->db->where('id',$id);
					$insert = $this->db->update('players',$_POST);
        		}
              
                
              

			

					if(!empty($insert)){
						$this->session->set_flashdata('msg','Entry updated succesfuly');
					}else{
						$this->session->set_flashdata('msg','Error updating inserting data');
					}
				redirect(base_url('players/index'));
				}
			$this->load->view('edit',$data);
		}
		public function delete($id,$image){
			if($this->db->delete('players',array('id'=>$id))){
				unlink("players/".$image);
				$this->session->set_flashdata('msg','Entry deleted succesfuly');
				redirect(base_url('players/index'));
			}
		}
}

			