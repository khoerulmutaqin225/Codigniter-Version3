<?php 

// Nama Class Harus Sama Dengan Nama Filenya
class Home extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo '<h1>Ini Page Home!</h1>';
            $data = array(
                'judul' => 'Halaman Home',
                'subjudul' => 'Halaman Utama Sebuah Website',
            );
            $this->load->view('v_home', $data, false);

    }

    public function about()
    {
        $data = array(
            'judul' => 'Halaman About',
            'subjudul' => 'Tentang Website',
        );
        $this->load->view('v_about', $data, false);
    }

}