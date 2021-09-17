<?php defined('BASEPATH') or exit('NP Direct Script allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Karyawan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $data["karyawans"] = $this->Karyawan_model->getAll();
        $this->load->view('admin/karyawan/list', $data);
    }
    public function dashboard()
    {
        $this->load->view('admin/karyawan/dashboard');
    }
    public function add()
    {
        $karyawan = $this->Karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules('NIK', 'NIK', 'required|is_unique[karyawan.NIK]');
        $validation->set_rules('nama', 'nama', 'required');
        $validation->set_rules('password', 'password', 'required');
        $validation->set_rules('jk', 'jk', 'required');
        $validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $validation->set_rules('telpon', 'telpon', 'required');
        $validation->set_rules('tahun_masuk', 'tahun_masuk', 'required');



        if ($validation->run()) {
            $karyawan->save();
            $this->session->set_flashdata('success', 'Data berhasil menyimpan data');
        } else {
        }
        $this->load->view('admin/karyawan/new_form');
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/karyawan');

        $karyawan = $this->Karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["karyawan"] = $karyawan->getById($id);
        if (!$data["karyawan"]) show_404();

        $this->load->view("admin/karyawan/edit_form", $data);
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Karyawan_model->delete($id)) {
            redirect(site_url('admin/karyawan'));
        }
    }

    function editprofile()
    {
        $where = array('NIK' => $this->session->userdata('NIK'));
        $data['user'] = $this->Karyawan_model->edit_data($where, 'karyawan')->result();
        $this->load->view('admin/karyawan/profile', $data);
    }
    function update()
    {
        if (!isset($id)) redirect('admin/karyawan/update');
        $karyawan = $this->Karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());


        if ($validation->run()) {
            $karyawan->update_data();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        redirect('karyawan/karyawan/tampilprofile');
    }
}
