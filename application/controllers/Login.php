<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function validate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Model_login->validate($username, $password);

        if ($user) {
            redirect('awal');
        } else {
            $data['error_message'] = 'Login Gagal! Username atau Password Salah';
            $this->load->view('login', $data);
        }
    }
}
