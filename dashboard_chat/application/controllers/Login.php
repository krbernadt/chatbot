<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('login_model');
	}

	public function index(){

		$this->load->view('templates/login');

	}

	public function login_aksi(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password', true);

		//rule validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() != FALSE){
			$where = array(
				'username' => $username,
				'password' => $password
			);

			$cekLogin = $this->login_model->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data = array(
					'username' => $username,
					'login' => 'OK'
				);

				$this->session->set_userdata($sess_data);

				redirect(base_url('dashboard'));

			}else{
				redirect(base_url('login'));
			}

		}else{
			$this->load->view('templates/login');
		}

	}

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url('login'));

	}
}
