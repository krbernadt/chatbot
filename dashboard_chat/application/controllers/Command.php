<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Command extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['command'] = $this->command_model->get_data('chatbot')->result();
    }

    public function process()
    {
        $this->input->post('text');
    }
}
