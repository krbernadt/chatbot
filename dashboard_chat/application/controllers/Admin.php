<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('admin_model');
    }

    public function index()
    {

        $data['title'] = 'Admin';
        $data['admin'] = $this->admin_model->get_data('tabel_user')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Admin';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/tambah_admin');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules_add();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $this->admin_model->insert_data($data, 'tabel_user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin');
        }
    }

    public function edit($id_user)
    {
        $this->_rules_edit();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_user' => $id_user,
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $this->admin_model->update_data($data, 'tabel_user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin');
        }
    }

    public function _rules_add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function _rules_edit()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function delete($id)
    {
        $where = array('id_user' => $id);

        $this->admin_model->delete($where, 'tabel_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('admin');
    }
}
