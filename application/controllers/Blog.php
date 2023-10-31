<?php 

// Nama Class Harus Sama Dengan Nama Filenya
class Blog extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo 'Hello World!';
            // echo 'Belajar Codigniter';
            $data = array(
                'judul' => 'Halaman Blog',
                'subjudul' => 'Halaman Blog Website',
            );
            $this->load->view('blog/v_index', $data, false);
    }

    public function comments()
    {
        
        $data = array(
            'judul' => 'Halaman Comment',
            'subjudul' => 'Halaman Comment Website',
        );           
        $this->load->view('blog/v_comment', $data, false);
            
    }

}