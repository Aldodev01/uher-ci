<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
// Pastikan file hanya bisa diakses melalui CodeIgniter dan tidak langsung diakses.

class Login extends CI_Controller { 
    // Definisi kelas 'Login' yang merupakan controller di CodeIgniter.

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Model_login'); 
        // Memuat model 'Model_login' untuk digunakan dalam controller ini.
        $this->load->helper('url'); 
        // Memuat helper 'url' untuk membantu dengan URL routing dan redirecting.
    }

    public function index() 
    {
        $this->load->view('login'); 
        // Memuat view 'login' saat fungsi 'index' dipanggil.
    }

    public function validate() 
    {
        $username = $this->input->post('username'); 
        // Mengambil input 'username' dari form POST.
        $password = $this->input->post('password'); 
        // Mengambil input 'password' dari form POST.
        $user = $this->Model_login->validate($username, $password); 
        // Memanggil metode 'validate' dari 'Model_login' untuk memeriksa username dan password.

        if ($user) { 
            // Jika user ditemukan (validasi berhasil)
            redirect('awal'); 
            // Redirect ke controller 'Awal'.
        } else { 
            // Jika user tidak ditemukan (validasi gagal)
            $data['error_message'] = 'Login Gagal! Username atau Password Salah'; 
            // Menyimpan pesan error dalam array $data.
            $this->load->view('login', $data); 
            // Memuat kembali view 'login' dengan pesan error.
        }
    }
}
