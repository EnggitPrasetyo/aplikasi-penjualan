<?php
class m_barang extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('stock', $keyword);
        $this->db->or_like('jumlah_terjual', $keyword);
        $this->db->or_like('tanggal_transaksi', $keyword);
        $this->db->or_like('jenis_barang', $keyword);
        return $this->db->get()->result();
    }
    public function add_barang($data)
    {
        if ($this->db->insert("barang", $data)) {
            
            $this->session->set_flashdata('flash', 'Ditambahkan');
            return true;
        }
    }
    public function edit_barang($data, $old_id_barang)
    {
        $this->db->set($data);
        $this->db->where("id_barang", $old_id_barang);
        $this->db->update("barang", $data);
        $this->session->set_flashdata('flash', 'Ditambahkan');
    }
}