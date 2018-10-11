<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends frontEnd_Controller {

	
	public function index()
	{
		redirect('admin/dashboard');
		//$this->load->view('welcome_message');
	}
}
