<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('login');
        }
    }

	public function index()
	{

        $data['title'] = 'Dashboard';

		$this->load->view('templates/header', $data);
        $this->load->view('templates/dashboard');
        $this->load->view('templates/footer');
    
	}
}
