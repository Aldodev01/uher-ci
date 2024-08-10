<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
// Pastikan file hanya bisa diakses melalui CodeIgniter dan tidak langsung diakses.

class Model_login extends CI_Model { 
    // Definisi kelas Model_login yang merupakan model di CodeIgniter.

    public function __construct() 
    {
        parent::__construct();
        $this->load->database(); 
        // Memuat database agar bisa digunakan dalam model ini.
    }

    public function validate($username, $password) 
    {
        $this->db->where('username', $username); 
        // Menambahkan kondisi pencarian berdasarkan kolom 'username'.
        $this->db->where('password', md5($password)); 
        // Menambahkan kondisi pencarian berdasarkan kolom 'password' yang telah dienkripsi dengan md5.
        $query = $this->db->get('login'); 
        // Melakukan query untuk mendapatkan data dari tabel 'login' yang sesuai dengan kondisi di atas.

        if ($query->num_rows() == 1) { 
            // Jika jumlah baris hasil query adalah 1 (artinya ada data yang cocok).
            return $query->row(); 
            // Mengembalikan baris data tersebut.
        } else {
            return false; 
            // Jika tidak ada data yang cocok, mengembalikan false.
        }
    }
}
