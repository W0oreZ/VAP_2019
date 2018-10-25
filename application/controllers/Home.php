<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends frontEnd_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('profile_m');
		$this->load->model('categorie_m');
		$this->load->model('ville_m');
		$this->load->model('annonce_m');
		$this->load->model('annonce_image_m');
    }
    
    public function index()
    {
        $data['categories']=(array)$this->categorie_m->get();
		
        $this->load->view('Home/index',$data);
    }

}

/* End of file Home.php */
