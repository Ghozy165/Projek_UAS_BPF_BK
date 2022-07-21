<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_pelamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
    }

    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Profil_pelamar/');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("pelamar/login_pelamar");
        } else {
            $this->cek_login_pelamar();
        }
    }

    public function cek_login_pelamar()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pelamar = $this->db->get_where('pelamar', ['email' => $email])->row_array();

        if ($pelamar) {
            if (password_verify($password, $pelamar['password'])) {
                $data = [
                    'id_pelamar' => $pelamar['id_pelamar'],
                    'email' => $pelamar['email']
                ];

                $this->session->set_userdata($data);

                if ($pelamar['no_hp'] != null) {
                    redirect('Profil_pelamar/');

                } else {
                    redirect('Lengkapidata_pelamar');
                }
            } else {
                redirect('Auth_pelamar/');
            }
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('Profil_pelamar');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelamar.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {

            $this->load->view('pelamar/login_pelamar');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->pelamar_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!
                Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
            redirect('Lengkapidata_pelamar');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_pelamar');
        redirect('A_Tampilan_awal');
    }
}
