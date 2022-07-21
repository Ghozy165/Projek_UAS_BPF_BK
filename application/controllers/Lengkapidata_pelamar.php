<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lengkapidata_pelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
    }
    
    public function index()
    {

        $this->load->view("pelamar/vw_lengkapidata_pelamar");
        
    }

    public function lengkapi()
    {

        $id = $this->session->userdata('id_pelamar');  
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'keahlian' => $this->input->post('keahlian'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
        ];

/*

        $upload_image1 = $_FILES['foto']['name'];
        if ($upload_image1) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = '.\assets\img\profile_pelamar';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $old_image = $this->upload->$data['pelamar']['foto'];
                if ($old_image != 'default_foto.jpg') {
                    unlink(FCPATH . 'assets\img\profile_pelamar' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $upload_image2 = $_FILES['cv']['name']; 
        if ($upload_image2) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = '.\assets\img\cv_pelamar';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $old_image = $this->upload->$data['pelamar']['cv'];
                if ($old_image != 'default_cv.pdf') {
                    unlink(FCPATH . 'assets\img\cv_pelamar' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('cv', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $upload_image3 = $_FILES['sertifikat']['name'];
        if ($upload_image3) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = '.\assets\img\sertifikat_pelamar';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $old_image = $this->upload->$data['pelamar']['sertifikat'];
                if ($old_image != 'default_serfikat.pdf') {
                    unlink(FCPATH . 'assets\img\sertifikat_pelamar' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('sertifikat', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

*/

        $this->pelamar_model->update(['id_pelamar' => $id], $data );
        redirect('Profil_pelamar');
    }
}
