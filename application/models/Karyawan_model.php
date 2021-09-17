<?php defined('BASEPATH') or exit('NO Direct Script allowed');


class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $NIK;
    public $nama;
    public $password;
    public $jk;
    public $tgl_lahir;
    public $telpon;
    public $tahun_masuk;

    public function rules()
    {
        return [
            [
                'field' => 'NIK',
                'label' => 'NIK',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],
            [
                'field' => 'jk',
                'label' => 'jk',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_lahir',
                'label' => 'tgl_lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'tahun_masuk',
                'label' => 'tahun_masuk',
                'rules' => 'required'
            ],


        ];
    }

    public function getAll()
    {
        return  $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["NIK" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->NIK = $post["NIK"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->jk = $post["jk"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->telpon = $post["telpon"];
        $this->tahun_masuk = $post["tahun_masuk"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->NIK = $post["NIK"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->jk = $post["jk"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->telpon = $post["telpon"];
        $this->tahun_masuk = $post["tahun_masuk"];
        return $this->db->update($this->_table, $this, array('NIK' => $post['NIK']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("NIK" => $id));
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data()
    {
        $post = $this->input->post();
        $this->NIK = $post["NIK"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->jk = $post["jk"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->telpon = $post["telpon"];
        $this->tahun_masuk = $post["tahun_masuk"];
        return $this->db->update($this->_table, $this, array('NIK' => $post['NIK']));
    }
}
