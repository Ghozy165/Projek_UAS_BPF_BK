<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lamaran_simpan_model extends CI_Model
{
    public $table = 'simpan_loker';
    public $id = 'simpan_loker.id_simpan_loker';
    public function __construct()
    {
        parent::__construct();
    }
    public function getById($id)
    {
        $this->db->select('k.* ,p.*');
        $this->db->from('simpan_loker k');
        $this->db->join('loker p', 'k.id_loker = p.id_loker');
        $this->db->where('k.id_pelamar', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->attracted_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
