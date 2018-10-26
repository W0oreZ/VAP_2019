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

	public $register_rules=array(
		'username'=>array(
			'field'=>'username',
			'label'=>'Username',
			'rules'=>'Trim|required',
			'errors' => array(
					'required' => 'You must provide a %s.',
			)
		),
		'email'=>array(
			'field'=>'email',
			'label'=>'Email',
			'rules'=>'Trim|required',
			'errors' => array(
					'required' => 'You must Enter an %s.',
			)
		),
		'password'=>array(
			'field'=>'password',
			'label'=>'Password',
			'rules'=>'Trim|required',
			'errors' => array(
				'required' => 'You must provide a %s.',
			)
		),
		'confirmpassword'=>array(
			'field'=>'confirmpassword',
			'label'=>'Confirm Password',
			'rules'=>'Trim|required|matches[password]',
			'errors' => array(
				'required' => 'You must provide a %s.',
				'matches' => 'passwords dont match'
			)
		)
		);

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function register(){
		$user_id = $this->user_m->register();
		if($user_id==null) return false;

		$data = $this->array_from_post(['nom','prenom']);
		$data['user_id']=$user_id;
		$data['account_type']='Particulier';
		$data['is_activated']=0;
		$data['is_online']=0;
		$data['rating']=0;
		$data['image']='noimg.png';
		$this->save($data);
		return true;
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
				$this->session->set_userdata($data);
				return true;
			}else{
				return false;
			}
		}
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

	public function get_new(){
		$profile = new stdclass();
		$profile->id=null;
		$profile->nom='';
		$profile->prenom='';
		$profile->telephone='';
		$profile->adresse='';
		$profile->date_naissance='';
		$profile->image='';
		$profile->rating=0;
		$profile->account_type='Particulier';
		$profile->is_activated=0;
		$profile->is_online=0;
		$profile->user_id=0;

		return $profile;
	}
 }
