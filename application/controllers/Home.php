<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends frontEnd_Controller {

    function __construct()
	{
		parent::__construct();
    }
    
    public function index()
    {
        $data['categories']=(array)$this->categorie_m->get();
		
        $this->load->view('Home/index',$data);
    }

}

/* End of file Home.php */
