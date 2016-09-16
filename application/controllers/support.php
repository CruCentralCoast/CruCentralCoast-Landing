<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Support extends CI_Controller {

    public function index() {
        $this->load->view('support');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */