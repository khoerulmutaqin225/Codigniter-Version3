<?php 

// Nama Class Harus Sama Dengan Nama Filenya
class Home extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function
    public function index()
    {
            // echo '<h1>Ini Page Home!</h1>';
            $this->load->view('v_home');

    }

    public function about()
    {
        $this->load->view('v_about');
    }

}