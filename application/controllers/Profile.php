<?php
class Profile extends frontend_Controller 
{
    function __construct(){
        parent::__construct();

    }

    public function index($id){
        $profile = $this->profile_m->get($id);

        if(count($profile)<=0){
            redirect('User/Login');
        }
        if($id != $this->session->userdata('id')){
            redirect(base_url().'Profile/index/'.$this->session->userdata('id'));
        }


        $this->load->view('User/Profile/main');


    }

    

}
