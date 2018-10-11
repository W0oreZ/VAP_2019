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
	}

    public function Add(){
		$categories=(array)$this->categorie_m->get();
		$villes=(array)$this->ville_m->get();

		$option = array();
		for($i = 0 ; $i<count($categories);$i++) {
			$option[$categories[$i]->id] = $categories[$i]->nom;
		}
		$data['categories'] = $option;

		$option = array();
		foreach ($villes as $vil) {
			$option[$vil->id] = $vil->nom;
		}
		$data['villes'] = $option;
		$data['error'] = '';

		$this->load->view('annonce/annonce_add',$data);	
	}

	public function upload_Form(){
		

		$data = array();
		$upload_status = false;
    	
    	
		$cpt = count((array)$_FILES['imagefiles']['name']);
		$config['upload_path'] = './VAP/public/uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
			
    	for($i=0; $i<$cpt; $i++)
    	{ 
			$_FILES['file']['name']       = $_FILES['imagefiles']['name'][$i];
			$_FILES['file']['type']       = $_FILES['imagefiles']['type'][$i];
			$_FILES['file']['tmp_name']   = $_FILES['imagefiles']['tmp_name'][$i];
			$_FILES['file']['error']      = $_FILES['imagefiles']['error'][$i];
			$_FILES['file']['size']       = $_FILES['imagefiles']['size'][$i];
			

			// Upload file to server
			if($this->upload->do_upload('file')){
				// Uploaded file data
				$imageData = $this->upload->data();
				$uploadImgData[$i]['imagefiles'] = $imageData['file_name'];

			}


    	    $this->upload->initialize($this->set_upload_options());
    	    if(!$this->upload->do_upload('file')){
				echo $this->upload->display_errors();
				$upload_status = false;
				

			}else{
				echo 'success';
				$upload_status = true;
				$data['images'] = $this->upload->data();
			}
    	    
		}
		if($upload_status){

			$annonce = $this->annonce_m->array_from_post(array('titre','description','prix','ville_id','categorie_id'));
			if(!$this->session->userdata('id')){
				$annonce['created_by'] = 99;
			}
				$annonce['created_by'] = $this->session->userdata('id');
				$annonce_id = $this->annonce_m->save($annonce);
				if($annonce_id){
					if($this->annonce_image_m->save_images($annonce_id,$data['images'])){
						redirect('Annonce/view/'.$annonce_id);
					}else{
						$data['error'] = "an error occured";
					}
				}else{
					$data['error'] = "an error occured";
				}
			
			//$this->load->view('upload_success', $data);

		}else{
			$data['error'] = "Upload Error";
		}
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
				/*if($this->annonce_image_m->save_images($annonce_id,$data['images'])){
					redirect('Annonce/view/'.$annonce_id);
				}else{
					$data['error'] = "an error occured";
				}*/
				echo var_dump($data['images']);
			}else{
				$data['error'] = "an error occured";
			}
		
		}
		else
		{
			$data['error'] = "Upload Error";
		}
		
		
	}

}

