<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
// Nama Class Harus Sama Dengan Nama Filenya
class Mahasiswa extends CI_Controller {

    // Dalam Sebuah Class Terdapat Sebuah Function

    // load di constraktor
    public function __construct() {
        parent::__construct();
        $this->load->model("m_mahasiswa");
    }
    public function index()
    {
            // echo '<h1>Ini Page Home!</h1>';
            $data = [
                'judul' => 'Mahasiswa',
                'subjudul' => '',
                'mhs' => $this->m_mahasiswa->all_data(),
                'page' => 'mahasiswa/v_mahasiswa', //file page di folder view
            ];
            $this->load->view('v_template', $data, false);

    }

}