<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perusahaan extends CI_Controller
{
    //public $table = 'Perusahaan';
    //public $id = 'id.perusahaan';
    function __construct()

    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul']= "Halaman Perusahaan";
        $this->load->view("layout/header_perusahaan");
        $this->load->view("perusahaan/vw_perusahaan_dasboard",$data);
        $this->load->view("layout/footer_perusahaan");
    }
    public function lihat_pelamar()
    {
        $data['judul']= "Halaman Lihat Pelamar";
        $data['user']= "Halaman Lihat Pelamar";
        $this->load->view("layout/header_perusahaan");
        $this->load->view("perusahaan/vw_perusahaan_dasboard_lihatlamaran",$data);
        $this->load->view("layout/footer_perusahaan");
    }
   


}
