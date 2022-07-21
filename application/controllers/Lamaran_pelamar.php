<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamaran_pelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
        $this->load->model('loker_model');
        $this->load->model('lamaran_pelamar_model');
        $this->load->model('lamaran_simpan_model');
    }
    public function index()
    {
        $id = $this->session->userdata('id_pelamar'); 
        $data['pelamar'] = $this->pelamar_model->getById($id);
            $data['loker'] = $this->lamaran_pelamar_model->getById($id);
            $data['simpan'] = $this->lamaran_simpan_model->getById($id);
            $this->load->view("layout/header",$data);
            $this->load->view("pelamar/vw_lamaran_pelamar",$data);
            $this->load->view("layout/footer");
    }

    public function hapus_simpan_lamaran()
    {
        $id = $_GET["id_simpan_loker"];
        $this->lamaran_simpan_model->delete($id);

        redirect('Lamaran_pelamar');
    }
}
