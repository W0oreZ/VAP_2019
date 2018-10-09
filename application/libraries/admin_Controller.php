<?php
/**
* 
*/
class admin_Controller extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->data['meta_title']='Admin HomePage';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		$exception_uris = array('admin/user/login','admin/user/logout');
		if(in_array(uri_string(), $exception_uris) == FALSE)
		{
			if($this->user_m->loggedIn() == FALSE || $this->user_m->isAdmin() == FALSE)
			{
				redirect('admin/user/login');
			}
		}

	}


}
