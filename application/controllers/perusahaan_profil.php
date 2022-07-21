<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perusahaan_profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul']= "Halaman Perusahaan";
        $this->load->view("layout/header_perusahaan",$data);
        $this->load->view("perusahaan/vw_perusahaan_profil",$data);
        $this->load->view("layout/footer_perusahaan");
    }
    public function edit_profil()
    {
        $data['judul']= "Halaman Perusahaan";
        $this->load->view("layout/header_perusahaan",$data);
        $this->load->view("perusahaan/vw_perusahaan_edit",$data);
        $this->load->view("layout/footer_perusahaan");
    }

}
?>