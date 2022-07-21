<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_pelamar extends CI_Controller
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
            $data['loker'] = $this->loker_model->get();
            $this->load->view("layout/header",$data);
            $this->load->view("pelamar/vw_dashboard_pelamar",$data);
            $this->load->view("layout/footer");
    }

    public function simpan_lamaran()
    {
        $id = $this->session->userdata('id_pelamar'); 
        $loker = $_GET["id_loker"];
        $data = [
            'id_pelamar' => $id,
            'id_loker' => $loker
        ];
        
        $this->lamaran_simpan_model->insert($data);

       redirect('Lamaran_pelamar');
    }
}
?>