<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("auth_user/login_user");
    }
    public function registrasi()
    {
        $this->load->view("auth_user/vw_daftar_user");
    }
}
?>