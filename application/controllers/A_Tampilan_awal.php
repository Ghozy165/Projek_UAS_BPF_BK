<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_Tampilan_awal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->view("tampilan_awal/header_tamp");
        $this->load->view("tampilan_awal/vw_tampilan_awal");
        $this->load->view("tampilan_awal/footer_tamp");
    }
}
?>