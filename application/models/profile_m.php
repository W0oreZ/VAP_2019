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
			if(count((array)$profile)>0){
				$data = array(
					'username'=> $user->username,
					'email'=> $user->email,
					'firstname' => $profile->nom,
					'lastname' => $profile->prenom,
					'image' => $profile->image,
					'id' => $profile->id,
					'access' => $user->access,
					'loggedin' => TRUE
				);
			}else{
				$data = array(
					'username'=> $user->username,
					'email'=> $user->email,
					'access' => $user->access,
					'loggedin' => FALSE
				);
				$this->session->set_userdata($data);
				return false;
			}
			
			$this->session->set_userdata($data);
			return true;
		}
		$this->session->set_userdata($data);

		return false;
	}

	public function loggedIn(){
		return (bool) $this->session->userdata('loggedin');
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function get_name($id){
        $profile = $this->profile_m->get($id,true);
        if($profile){
            return $profile->nom . ' ' . $profile->prenom;
        }else{
            return false;
        }
	}
	
	public function update_profile($profileid=null,$userid=null){
		if($profileid){

			$data = $this->array_from_post(['nom','prenom','telephone','account_type']);
			return $this->save($data,$profileid);

		}elseif ($userid) {

			$profile = $this->get_by(array('user_id'=>$userid),true);
			if($profile){
				$data = $this->array_from_post(['nom','prenom','telephone','account_type']);
				return $this->save($data,$profile->id);
			}else{
				return false;
			}

		}else{
			return false;
		} 
    }

	public function hash($string){
		//return hash('sha512',$string . config_item('encryption_key'));
		return $string;
	}
 }
