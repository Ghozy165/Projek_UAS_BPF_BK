<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_dasboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul']= "Halaman Admin";
        $this->load->view("layout/header_admin");
        $this->load->view("admin/vw_admin_dasboard",$data);
        $this->load->view("layout/footer_admin");
    }


}
?>