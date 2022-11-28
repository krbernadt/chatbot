<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('login');
        }

        $this->load->model('jabatan_model');
    }

	public function index()
	{

        $data['title'] = 'Jabatan';
        $data['jabatan'] = $this->jabatan_model->get_data('tabel_jabatan')->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/jabatan');
        $this->load->view('templates/footer');
    
	}

    public function tambah()
    {
        $data['title'] = 'Tambah Jabatan';

        
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/tambah_jabatan');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules_add();

        if ($this->form_validation->run() == FALSE){
            $this->tambah();
        } else {
            $data = array(
                'id_jabatan' => $this->input->post('id_jabatan'),
                'id_pegawai' => $this->input->post('id_pegawai'),
                'jabatan' => $this->input->post('jabatan'),
            );
            $this->jabatan_model->insert_data($data, 'tabel_jabatan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          redirect('jabatan');
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
                'id_jabatan' => $this->input->post('id_jabatan'),
                'jabatan' => $this->input->post('jabatan'),
            );

            $this->jabatan_model->update_data($data, 'tabel_jabatan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('jabatan');
        }
    }

    public function _rules_add()
    {
        $this->form_validation->set_rules('id_jabatan', 'Id Jabatan', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function _rules_edit()
    {
        $this->form_validation->set_rules('id_jabatan', 'ID Jabatan', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function delete($id)
    {
        $where = array('id_pegawai' => $id);

        $this->jabatan_modal->delete($where, 'tabel_kontrak');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('jabatan');

    }
}
