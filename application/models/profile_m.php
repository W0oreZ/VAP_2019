<?php 

 class profile_m extends MY_Model
 {
 	protected $_table_name = 'profiles';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	public $login_rules=array(
		'username'=>array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'Trim|required'
			),
		'password'=>array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'Trim|required'
			)
		);
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function login(){
		
		$user = $this->user_m->get_by(array(
			'username'=>$this->input->post('username'),
			'password'=>$this->hash($this->input->post('password'))
		),TRUE);

		if(count((array)$user)>0){
			//login user
			$profile = $this->get_by(array('user_id'=>$user->id),TRUE);
			
			$data = array(
				'username'=> $user->username,
				'email'=> $user->email,
				'firstname' => $profile->firstname,
				'lastname' => $profile->lastname,
				'image' => $profile->image,
				'id' => $profile->id,
				'access' => $user->access,
				'loggedin' => TRUE
			);
			$this->session->set_userdata($data);
			return true;
		}
	}

	public function loggedIn(){
		return (bool) $this->session->userdata('loggedin');
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function hash($string){
		//return hash('sha512',$string . config_item('encryption_key'));
		return $string;
	}
 }