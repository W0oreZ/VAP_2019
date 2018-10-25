<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends frontend_Controller {

	function __construct()
	{
		parent::__construct();
	}


    function login(){
        $home = 'Home';
		($this->profile_m->loggedIn() == FALSE) || redirect($home);

		$rules = $this->profile_m->login_rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()){
			//redirecting user login successfull;
			if($this->profile_m->login() == TRUE){
				redirect($home);
			}else{
				$this->form_validation->set_message('error','<div class="alert alert-warning">Username or Password Incorrect</div>');
				redirect('User/Login','refresh');
			}
		}
		$this->load->view('User/Login/Login_Main');

		
	}

	function logout(){
		$this->profile_m->logout();
		redirect('Home');
	}

    public function Register(){

    }

}

/* End of file Controllername.php */
