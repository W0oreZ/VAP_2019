<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends frontEnd_Controller {

    public function index()
    {
        $this->load->view('Home/index');
    }

}

/* End of file Home.php */
