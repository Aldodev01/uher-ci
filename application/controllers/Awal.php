<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
// Pastikan file hanya bisa diakses melalui CodeIgniter dan tidak langsung diakses.

class Awal extends CI_Controller { 
    // Definisi kelas 'Awal' yang merupakan controller di CodeIgniter.

    public function index() 
    {
        echo "Welcome"; 
        // Fungsi 'index' menampilkan teks "Welcome" saat diakses.
    }
}
