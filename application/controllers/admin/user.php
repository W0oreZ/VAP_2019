<?php
/**
* 
*/
class user extends admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->data['users'] = $this->user_m->get();
		$this->data['subview'] = 'admin/user/index';
		$this->load->view('admin/_layout_main',$this->data);

	}

	function edit($id = NULL){

		if($id){
			$this->data['user'] = $this->user_m->get($id);

			count((array)$this->data['user']) || $this->data['errors'][] = 'User not found';

		}
		else{
			$this->data['user'] = $this->user_m->get_new();

		}


		$rules = $this->user_m->rules_admin;
		$id || (string)$rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()){
			$data = $this->user_m->array_from_post(array('username','email','password'));
			$data['password']=$this->user_m->hash($data['password']);
			$this->user_m->save($data,$id);
			redirect('admin/user');
			
		}
		
		$this->data['subview'] = 'admin/user/edit';
		$this->load->view('admin/_layout_main',$this->data);


	}
	function delete($id){
		$this->user_m->delete($id);
		redirect('admin/user');

	}

	function login(){
		$dashboard = 'admin/dashboard';
		($this->user_m->loggedIn() == FALSE or $this->user_m->isAdmin() == FALSE) || redirect($dashboard);

		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()){
			//redirecting user login successfull;
			if($this->user_m->login() == TRUE){
				redirect($dashboard);
			}else{
				$this->form_validation->set_message('error','<div class="alert alert-warning">email : %s already exists</div>');
				//$this->session->set_flashdata('error','email/password incorrect');
				redirect('admin/user/login','refresh');
			}
		}
		$this->data['subview'] = 'admin/user/login';
		$this->load->view('template/adminLTE/_modal_layout',$this->data);
		//$this->load->view('admin/_layout_module',$this->data);
	}
	function logout(){
		$this->user_m->logout();
		redirect('admin/user/login');
	}
	public function _unique__email($str){
		$id = $this->uri->segment(4);
		$this->db->where('email',$this->input->post('email'));
		!$id || $this->db->where('id !=',$id);
		$user = $this->user_m->get();
		if(count((array)$user)){
			$this->form_validation->set_message('_unique__email','<div class="alert alert-warning">email : %s already exists</div>');
			return FALSE;
		}

		return TRUE;
	}
	public function _unique__username($str){
		$id = $this->uri->segment(4);
		$this->db->where('username',$this->input->post('username'));
		!$id || $this->db->where('id !=',$id);
		$user = $this->user_m->get();
		if(count((array)$user)){
			$this->form_validation->set_message('_unique__username','username : %s already exists');
			return FALSE;
		}

		return TRUE;
	}
}