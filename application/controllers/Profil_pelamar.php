<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_pelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
    }

    public function index()
    {
        $id = $this->session->userdata('id_pelamar'); 
        $data['pelamar'] = $this->pelamar_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil_pelamar", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $id = $_GET["id"];
        $data['pelamar'] = $this->pelamar_model->getById($id);
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'keahlian' => $this->input->post('keahlian'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat')
        ];
        $upload_image = $_FILES['cv']['nama'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/cv_pelamar/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('cv')) {
                $old_image = $data['pelamar']['cv'];
                if ($old_image != 'default_cv.jpg') {
                    unlink(FCPATH . 'assets/img/cv_pelamar/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('cv', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        
        $id_pelamar = $this->input->post('id_pelamar');
        $this->pelamar_model->update(['id_pelamar' => $id], $data,$upload_image);
    }
}
