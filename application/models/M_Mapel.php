<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Mapel extends CI_Model
{
    public function listMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function listDetailMapel()
    {
        $this->db->select('*');
        $this->db->from('mapel_detail d');
        $this->db->join('mapel m', 'm.kd_mapel = d.kd_mapel');
        $this->db->join('guru g', 'g.nip_nik = d.guru');
        $this->db->join('kelas k', 'k.kd_kelas = d.kd_kelas');
        $this->db->order_by('k.tahun', 'asc');
        return $this->db->get()->result_array();
    }
    public function addMapel($data)
    {
        return $this->db->insert('mapel', $data);
    }
    public function addMapelDetail($data)
    {
        return $this->db->insert('mapel_detail', $data);
    }
    public function getLast()
    {
        return $this->db->get('mapel')->last_row('array');
    }
    public function getMapel($nama)
    {
        return $this->db->get_where('mapel', array('nama_mapel' => $nama))->row_array();
    }
}