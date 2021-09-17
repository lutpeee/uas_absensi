<?php defined('BASEPATH') or exit('NO Direct Script allowed');

/**
 * 
 */
class Absensi_model extends CI_Model
{
    private $_table = "absen_keluar";



    function tampil()
    {
        return $this->db->get('absen_keluar');
    }
    function tampilkaryawan()
    {
        return $this->db->get('absen_keluar');
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function simpan($data)
    {
        $this->db->insert('absensi', $data);
    }
    function simpankeluar($data)
    {
        $this->db->insert('absen_keluar', $data);
    }
    function simpanmasuk($data)
    {
        $this->db->insert('absen_masuk', $data);
    }
    function tampilmasuk()
    {
        return $this->db->get('absen_masuk');
    }
    function tampilkeluar()
    {
        return $this->db->get('keluar');
    }
}
