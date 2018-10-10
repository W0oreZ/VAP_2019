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
	public function upload(){
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

		$config['upload_path']          = './VAP/public/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 8000;
		$config['max_width']            = 8000;
		$config['max_height']           = 8000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('imagefile'))
		{
				$data['error'] =array('upload' => $this->upload->display_errors());
				$this->load->view('annonce/annonce_add', $data);
		}
		else
		{
				$annonce = $this->annonce_m->array_from_post(array('titre','description','ville_id','categorie_id'));
				//$annonce['image'] =  $this->upload->data('file_name');
				$annonce['created_by'] = $this->session->userdata('id');
				$this->annonce_m->save($annonce);
				redirect('Home');
				//$this->load->view('upload_success', $data);
		}
	}

	


}

