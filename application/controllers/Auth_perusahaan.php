<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('perusahaan_model');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Perusahaan_profil/');
        }

        $this->load->view("auth_perusahaan/login_perusahaan");
    }
    public function registrasi_pr()
    {
        if ($this->session->userdata('email')) {
            redirect('perusahaan');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[perusahaan.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);


        $this->form_validation->set_rules(
            'Password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {


            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->perusahaan_model->insert($data);

            $this->load->view("layout/header_perusahaan", $data);
            $this->load->view("perusahaan/vw_perusahaan_edit", $data);
            $this->load->view("layout/footer_perusahaan");
        } else {

            $this->load->view("auth_perusahaan/login_perusahaan");
        }
    }
    public function cek_login_perusahaan()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $perusahaan = $this->db->get_where('perusahaan', ['email' => $email])->row_array();

        if ($perusahaan) {
            if (password_verify($password, $perusahaan['password'])) {
                $data = [
                    'email' => $perusahaan['email'],
                    'id_perusahaan' => $perusahaan['id'],
                ];
                $this->session->set_userdata($data);

                if ($perusahaan['no_hp'] != null) {

                    redirect('auth_perusahaan');

                } else {
                    $this->load->view("layout/header_perusahaan", $data);
                    $this->load->view("perusahaan/vw_perusahaan_edit", $data);
                    $this->load->view("layout/footer_perusahaan");
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
                redirect('auth_perusahaan');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_perusahaan');
        redirect('A_Tampilan_awal');
    }
}
