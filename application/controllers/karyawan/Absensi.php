<?php

defined('BASEPATH') or exit('No direct access allowed');

/**
 * 
 */
class Absensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Absensi_model');
        $this->load->library('form_validation');
        $this->load->library('Pdf');
    }
    function index()
    {
        $this->load->view('admin/karyawan/dashboard');
    }
    function aboutus()
    {
        $this->load->view('admin/karyawan/about_us');
    }

    function tampilkeluar()
    {
        $data['keluar'] = $this->Absensi_model->tampil()->result();

        $this->load->view('admin/absensi/data_keluar', $data);
    }

    function tampilmasuk()
    {
        $data['masuk'] = $this->Absensi_model->tampilmasuk()->result();
        $data['karyawan'] = $this->Absensi_model->tampilkaryawan()->result();
        $this->load->view('admin/absensi/data_masuk', $data);
    }
    function tampilbyidkeluar()
    {
        $where = array('NIK' => $this->session->userdata('NIK'));
        $data['masuk'] = $this->Absensi_model->edit_data($where, 'absen_keluar')->result();
        $this->load->view("admin/absensi/data_keluar_profile", $data);
    }
    function tampilbyidmasuk()
    {
        $where = array('NIK' => $this->session->userdata('NIK'));
        $data['masuk'] = $this->Absensi_model->edit_data($where, 'absen_masuk')->result();
        $this->load->view("admin/absensi/data_masuk_profile", $data);
    }


    function inputabsen()
    {
        $this->load->view('admin/absensi/absen_masuk');
    }

    function masuk()
    {

        $nik  = $_POST['NIK'];
        $query = $this->db->get_where('karyawan', array(
            'NIK' => $nik
        ));
        $tanggal = $_POST['tanggal'];
        $query_cek_absen = $this->db->get_where('absen_masuk', array('NIK' => $nik, 'tanggal' => $tanggal));


        $cek_absen = $query_cek_absen->num_rows();
        $count = $query->num_rows(); //counting result from query
        if ($cek_absen <= 0) {
            if ($count != 0) {
                $data = array(
                    'NIK' => $this->input->post('NIK'),
                    'kode_absen' => $this->input->post('kode_absen'),
                    'tanggal' => $this->input->post('tanggal'),
                    'jam' => $this->input->post('jam')
                );
                $proses = $this->Absensi_model->simpanmasuk($data);
                // $this->session->set_flashdata('success', 'Berhasil disimpan');

                echo "<script>alert('Berhasil Melakukan Absensi Masuk.');window.location.href='" . base_url('karyawan/absensi/inputabsen') . "'</script>";
                //ECHO $count;


            } else {
                echo "<script>alert('NIK TIDAK TERDAFTAR.');window.location.href='" . base_url('karyawan/absensi/inputabsen') . "'</script>";
            }
        } else {
            echo "<script>alert('Anda Sudah Melakukan Absensi .');window.location.href='" . base_url('karyawan/absensi/inputabsen') . "'</script>";
        }
    }
    function keluarabsen()
    {
        $this->load->view('admin/absensi/absen_keluar');
    }
    function keluar()
    {
        $NIK  = $this->input->post('NIK');
        $query = $this->db->get_where('karyawan', array(
            'NIK' => $NIK
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count != 0) {
            $data = array(
                'NIK' => $this->input->post('NIK'),
                'kode_absen' => $this->input->post('kode_absen'),
                'tanggal' => $this->input->post('tanggal'),
                'jam' => $this->input->post('jam')
            );
            $proses = $this->Absensi_model->simpankeluar($data);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            echo "<script>alert('Berhasil Melakukan Absensi Keluar.');window.location.href='" . base_url('karyawan/absensi/keluarabsen') . "'</script>";
            // redirect(site_url('absen/absensi/keluarabsen')); 
            //ECHO $count;
        } else {
            echo "<script>alert('NIK TIDAK TERDAFTAR.');window.location.href='" . base_url('absen/absensi/keluarabsen') . "'</script>";
        }
    }
    function pdfmasuk()
    //  error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
    {
        $pdf = new FPDF('L', 'mm', 'Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'Data Absensi Karyawan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'NIM', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Kode Absensi', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Jam', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $mahasiswa = $this->db->get('absen_masuk')->result();
        $no = 0;
        foreach ($mahasiswa as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->NIK, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->kode_absen, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->tanggal, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->jam, 1, 1, 'C');
        }
        $pdf->Output();
    }
    function pdf()
    //  error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
    {
        $pdf = new FPDF('L', 'mm', 'Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'Data Absensi Karyawan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'NIM', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Kode Absensi', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Jam', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $mahasiswa = $this->db->get('absen_keluar')->result();
        $no = 0;
        foreach ($mahasiswa as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->NIK, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->kode_absen, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->tanggal, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->jam, 1, 1, 'C');
        }
        $pdf->Output();
    }
}
