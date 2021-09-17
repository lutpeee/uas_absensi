<?php

/**
 * 
 */
class Page extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    function index()
    {
        $this->load->view('admin/karyawan/dashboard');
    }

    function data_karyawan()
    {
        if ($this->session->userdata('akses') == '1') {
            $this->load->view('admin/karyawan/list_karyawan');
        } else {
            echo " Anda tidak berhask mengakses halaman ini";
        }
    }
    function input_data()
    {
        if ($this->session->userdata('akses') == '1') {
            $this->load->view('admin/master/new_form');
        }
    }
    function hist_masuk()
    {
        if ($this->session->userdata('akses') == '1') {
            $this->load->view('admin/absensi/data_masuk');
        } else {
            echo "Anda Tidak berhak mengakses halaman ini";
        }
    }
    function hist_keluar()
    {
        if ($this->session->userdata('akses') == '1') {
            $this->load->view('admin/absensi/data_keluar');
        } else {
            echo "Anda Tidak berhak mengakses halaman ini";
        }
    }
}
