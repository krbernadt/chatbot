<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('login');
        }
        $this->load->model('kontrak_model');
    }

	public function index()
	{

        $data['title'] = 'Kontrak';
        $data['kontrak'] = $this->kontrak_model->get_data('tabel_kontrak')->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/kontrak');
        $this->load->view('templates/footer');
    
	}

    public function tambah()
    {
        $data['title'] = 'Tambah Kontrak';

        
		$this->load->view('templates/header', $data);
        $this->load->view('templates/tambah_kontrak');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules_add();

        if ($this->form_validation->run() == FALSE){
            $this->tambah();
        } else {
            $data = array(
                'id_kontrak' => $this->input->post('id_kontrak'),
                'id_pegawai' => $this->input->post('id_pegawai'),
                'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            );
            $this->kontrak_model->insert_data($data, 'tabel_kontrak');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('kontrak');
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
                'id_kontrak' => $this->input->post('id_kontrak'),
                'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            );

            $this->kontrak_model->update_data($data, 'tabel_kontrak');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kontrak');
        }
    }

    public function _rules_add()
    {
        $this->form_validation->set_rules('id_kontrak', 'Id Kontrak', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('tanggal_kontrak', 'Tanggal Kontrak', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function _rules_edit()
    {
        $this->form_validation->set_rules('id_kontrak', 'ID Kontrak', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('tanggal_kontrak', 'Tanggal Kontrak', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function delete($id)
    {
        $where = array('id_pegawai' => $id);

        $this->kontrak_model->delete($where, 'tabel_kontrak');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('kontrak');

    }
}
