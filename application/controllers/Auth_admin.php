<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("auth_admin/login_admin");
        
        
    }
   
}
?>