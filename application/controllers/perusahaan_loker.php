<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perusahaan_loker extends CI_Controller
{
    function __construct()
    {
        //public $table = 'perusahaan';
        //public $id = 'id.perusahaan';
        parent::__construct();
    }
    public function index()
    {
        $data['judul']= "Halaman Perusahaan";
        $this->load->view("layout/header_perusahaan");
        $this->load->view("perusahaan/vw_perusahaan_loker",$data);
        $this->load->view("layout/footer_perusahaan");
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);;
        $query = $this->db->get();
        return $query->row_array();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
?>