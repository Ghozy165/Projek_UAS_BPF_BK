<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_loker extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul']= "Halaman Perusahaan";
        $this->load->view("layout/header_admin");
        $this->load->view("admin/vw_admin_loker",$data);
        $this->load->view("layout/footer_admin");
    }

}
?>