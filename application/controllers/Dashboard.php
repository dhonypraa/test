<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('back/dashboard');
    }
}

/* End of file Dashboard.php */
