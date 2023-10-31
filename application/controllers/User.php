<?php 

// Nama Class Harus Sama Dengan Nama Filenya
class User extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo '<h1>Ini Page Home!</h1>';
            $data = array(
                'judul' => 'User',
                'subjudul' => 'Halaman User Sebuah Website',
                'page' => 'v_user', //file page di folder view
            );
            $this->load->view('v_template', $data, false);

    }

}