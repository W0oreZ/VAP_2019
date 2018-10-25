<?php
/**
* 
*/
class User_M extends MY_Model
{
	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_order_by='username';
	

	public $rules=array(
	'email'=>array(
			'field'=>'email',
			'label'=>'Email',
			'rules'=>'Trim|required|valid_email'
		),
	'password'=>array(
			'field'=>'password',
			'label'=>'Password',
			'rules'=>'Trim|required'
		)
	);

	public $rules_admin=array(
	'username'=>array(
    			'field'=>'username',
    			'label'=>'Username',
    			'rules'=>'Trim|required|callback__unique__username'
    		),
    'email'=>array(
    			'field'=>'email',
    			'label'=>'Email',
    			'rules'=>'Trim|required|valid_email|callback__unique__email'
    		),
    'password'=>array(
    			'field'=>'password',
    			'label'=>'Password',
    			'rules'=>'Trim|matches[confirm_password]'
    		),
    'confirm_password'=>array(
    			'field'=>'confirm_password',
    			'label'=>'Confirm Password',
    			'rules'=>'Trim|matches[password]'
    		)
	);
	
	function __construct()
	{
		parent::__construct();
	}

	public function login(){
		$user = $this->get_by(array(
			'email'=>$this->input->post('email'),
			'password'=>$this->hash($this->input->post('password'))
		),TRUE);

		if(count((array)$user)>0){
			//login user
			$data = array(
				'username'=> $user->username,
				'email'=> $user->email,
				'id' => $user->id,
				'access' => $user->access,
				'loggedin' => TRUE
			);
			$this->session->set_userdata($data);
		}

	}
	public function logout(){
		$this->session->sess_destroy();
	}
	public function loggedIn(){
		return (bool) $this->session->userdata('loggedin');
	}
	public function isAdmin(){
		if($this->session->userdata('access') == 'Administrateur'){
			return true;
		}else{
			return false;
		}
	}
	public function get_new(){
		$user = new stdClass();
		$user->username = '';
		$user->email = '';
		$user->password = '';
		
		return $user;
	}

	public function register(){
		$data = $this->array_from_post(['email','username','password']);
		return $this->save($data);
	}
	
	public function hash($string){
		//return hash('sha512',$string . config_item('encryption_key'));
		return $string;
	}
}