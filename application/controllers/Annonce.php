<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce extends frontEnd_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('profile_m');
	}

    public function Add(){
		$this->load->view('annonce/annonce_add');	
	}


}

