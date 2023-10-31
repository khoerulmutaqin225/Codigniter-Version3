<?php 

// Nama Class Harus Sama Dengan Nama Filenya
class Blog extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo 'Hello World!';
            // echo 'Belajar Codigniter';
            $this->load->view('blog/v_index');
    }

    public function comments()
    {
        $this->load->view('blog/v_comment');
            
    }

}