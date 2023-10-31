<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
// Nama Class Harus Sama Dengan Nama Filenya
class Mahasiswa extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo '<h1>Ini Page Home!</h1>';
            $data = array(
                'judul' => 'Mahasiswa',
                'subjudul' => 'Halaman Utama Sebuah Website',
                'page' => 'mahasiswa/v_mahasiswa', //file page di folder view
            );
            $this->load->view('v_template', $data, false);

    }

}