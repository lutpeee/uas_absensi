<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index()
    {
        $this->load->view('v_login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->Login_model->cek_login("user", $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'ses_id', ['NIK'],
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("admin/karyawan"));
        } else {
            $this->session->set_flashdata('sukses', ' username atau password salah');
            redirect('login');
        }
    }

    function cek_login()
    {
        $data = array(
            'username' => $this->input->post('username', TRUE),
            'password' => ($this->input->post('password', TRUE))
        );
        // $this->load->model('model_user'); // load model_user
        $hasil = $this->Login_model->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['NIK'] = $sess->NIK;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $sess_data['status'] = "login";
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == '1') {
                redirect('admin/karyawan');
            } elseif ($this->session->userdata('level') == '2') {
                redirect('karyawan/absensi');
            }
        } else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
