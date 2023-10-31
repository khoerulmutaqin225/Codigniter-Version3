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
    
    public function input_mahasiswa(){
        // Validation form
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);
        
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            // Jika validatsi form gagal tau tidak lolos
            $data = array(
                'judul' => 'Input Mahasiswa',
                'page' => 'mahasiswa/v_input_mahasiswa', //file page di folder view
            );
            $this->load->view('v_template', $data, false);

        } else {
            // Jika lolos validasi
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
            );
            $this->m_mahasiswa->insert_data($data);
            $this->session->set_flashdata('pesan', 'Data Mahasiswa Berhasil Ditambahkan !!!');
            redirect('mahasiswa/index');
            # code...
        }
    }

    public function edit_mahasiswa($id_mahasiswa){
        // Validation form
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);
        
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required',[
            'required'=> '%s Wajib Diisi!'
        ]);
        if ($this->form_validation->run() == FALSE) {

        // Validation form
         $data = array(
                'judul' => 'Edit Mahasiswa',
                'mhs' => $this->m_mahasiswa->detail_data($id_mahasiswa),
                'page' => 'mahasiswa/v_edit_mahasiswa', //file page di folder view
            );
            $this->load->view('v_template', $data, false);
        } else{
            $data = array(
                'id_mahasiswa' => $id_mahasiswa,
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
            );
            $this->m_mahasiswa->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Mahasiswa Berhasil Di Update !!!');
            redirect('mahasiswa/index');
            # code...
        }
     }
}