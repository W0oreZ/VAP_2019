<?php
class Profile extends frontEnd_Controller 
{
    function __construct(){
        parent::__construct();
        $this->load->model('profile_m');
    }

    public function index($id){
        $profile = $this->profile_m->get($id);

        if(count($profile)>0){
            echo var_dump($profile);
        }else{
            redirect('User/Login');
        }

        
    }
}
