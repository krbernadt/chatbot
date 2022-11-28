<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chatbot extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('chatbot_model');
    }

    public function index()
    {

        $data['title'] = 'Chatbot';
        $data['chatbot'] = $this->chatbot_model->get_data('chatbot')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/chatbot');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Chatbot';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/tambah_chatbot');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules_add();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'command' => $this->input->post('command'),
                'replies' => $this->input->post('replies'),
            );
            $this->chatbot_model->insert_data($data, 'chatbot');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('chatbot');
        }
    }

    public function edit($chat_id)
    {
        $this->_rules_edit();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'chat_id' => $chat_id,
                'command' => $this->input->post('command'),
                'replies' => $this->input->post('replies'),
            );

            $this->chatbot_model->update_data($data, 'chatbot');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('chatbot');
        }
    }

    public function _rules_add()
    {
        $this->form_validation->set_rules('command', 'Command', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('replies', 'Replies', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function _rules_edit()
    {
        $this->form_validation->set_rules('command', 'Command', 'required', array(
            'required' => "%s harus diisi !!"
        ));
        $this->form_validation->set_rules('replies', 'Replies', 'required', array(
            'required' => "%s harus diisi !!"
        ));
    }

    public function delete($id)
    {
        $where = array('chat_id' => $id);

        $this->chatbot_model->delete($where, 'chatbot');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('chatbot');
    }
}
