<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('login'))){
            redirect('login');
        }
        $this->load->model('pegawai_model');
    }

	public function index()
	{

        $data['title'] = 'Pegawai';
        $data['pegawai'] = $this->pegawai_model->get_data('tabel_pegawai')->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/pegawai');
        $this->load->view('templates/footer');
    
	}

    public function tambah()
    {
        $data['title'] = 'Tambah Pegawai';

        
		$this->load->view('templates/header', $data);
        $this->load->view('templates/tambah_pegawai');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules_add();

        if ($this->form_validation->run() == FALSE){
            $this->tambah();
        } else {
            $data = array(
                'id_pegawai' => $this->input->post('id_pegawai'),
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->pegawai_model->insert_data($data, 'tabel_pegawai');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('pegawai');
        }
    }

    public function edit($id_pegawai)
    {
        $this->_rules_edit();
        
        if  ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_pegawai' => $id_pegawai,
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'alamat' => $this->input->post('alamat'),
            );

            $this->pegawai_model->update_data($data, 'tabel_pegawai');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('pegawai');
        }
    }

    public function _rules_add()
    {
        $this->form_validation->set_rules('id_pegawai', 'Id Pegawai', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function _rules_edit()
    {
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function delete($id)
    {
        $where = array('id_pegawai' => $id);

        $this->pegawai_model->delete($where, 'tabel_pegawai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('pegawai');

    }

    
}
