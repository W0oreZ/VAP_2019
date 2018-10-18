<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce extends frontEnd_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('profile_m');
		$this->load->model('categorie_m');
		$this->load->model('ville_m');
		$this->load->model('annonce_m');
		$this->load->model('annonce_image_m');
	}

	public function View($id = null){
		$data = array();
		if($id == null){
			$annonces = $this->annonce_m->get_available();
			if($annonces == false){
				echo 'error';
			}else
			{
				$result = array();
				foreach($annonces as $annonce){
					$result[$annonce->id]['titre'] = $annonce->titre;
					$result[$annonce->id]['description'] = $annonce->description;
					$result[$annonce->id]['ville_id'] = $annonce->ville_id;
					$result[$annonce->id]['ville_name'] = $this->ville_m->get_name($annonce->ville_id);
					$result[$annonce->id]['categorie_id'] = $annonce->categorie_id;
					$result[$annonce->id]['categorie_name'] = $this->categorie_m->get_name($annonce->categorie_id);;
					$result[$annonce->id]['prix'] = $annonce->prix;
					$result[$annonce->id]['created_by'] = $annonce->created_by;
					$result[$annonce->id]['primary_image'] = $this->annonce_image_m->get_primary($annonce->id);
					$result[$annonce->id]['images'] = $this->annonce_image_m->get_images($annonce->id);
				}
				$data['annonces'] = $result;
				$this->load->view('Main/_Main_Header');
				$this->load->view('annonce/display_all',$data);
				$this->load->view('Main/_Main_Footer');
			}
			
		}
	}

    public function Add(){
		$data['categories']=(array)$this->categorie_m->get();
		$data['villes']=(array)$this->ville_m->get();

		$this->load->view('annonce/annonce_add',$data);	
	}

	public function test_upload()
	{
		$data['images'] = array();
		$ImageCount = count($_FILES['imagefiles']['name']);
		for($i = 0; $i < $ImageCount; $i++)
		{
			$_FILES['file']['name']       = $_FILES['imagefiles']['name'][$i];
			$_FILES['file']['type']       = $_FILES['imagefiles']['type'][$i];
			$_FILES['file']['tmp_name']   = $_FILES['imagefiles']['tmp_name'][$i];
			$_FILES['file']['error']      = $_FILES['imagefiles']['error'][$i];
			$_FILES['file']['size']       = $_FILES['imagefiles']['size'][$i];

			// File upload configuration
		
			$config['upload_path'] = './VAP/public/uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if($this->upload->do_upload('file'))
			{
			   // Uploaded file data
			   $data['images'][$i] = $this->upload->data();
			}
		}
		if(count($data['images']) == $ImageCount)
		{ 
			
			$annonce = $this->annonce_m->array_from_post(array('titre','description','prix','ville_id','categorie_id'));
			if($this->session->userdata('id')==null)
			{
				$annonce['created_by'] = 99;
			}else{
			$annonce['created_by'] = $this->session->userdata('id');
			}
			$annonce_id = $this->annonce_m->save($annonce);
			if($annonce_id){
				if($this->annonce_image_m->save_images($annonce_id,$data['images']))
				{
					echo "success";
				}else{
					echo "an error occured";
				}
				
			}else{
				echo 'couldnt create annonce';
			}
		
		}
		else
		{
			$data['error'] = "Upload Error";
		}
		
		
	}

}

