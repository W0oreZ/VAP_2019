<?php

class Dashboard extends admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){		
		$this->data['subview'] = 'admin/dashboard/index';
		$this->data['title']="Dashboard";
		$this->load->view('template/adminLTE/_main_layout',$this->data);
	}
	
	public function module(){
		$this->load->view('admin/_layout_module',$this->data);
	}

}

?>