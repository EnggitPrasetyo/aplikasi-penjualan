<?php
class m_transaksi extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->join('book', 'book.book_id=sale.book_id');
        $this->db->from('sale', 'sale.price as price_sale');
        $this->db->like('book_title', $keyword);
        $this->db->or_like('author', $keyword);
        $this->db->or_like('publisher', $keyword);
        $this->db->or_like('book_category', $keyword);
        $this->db->or_like('quantity', $keyword);
        $this->db->or_like('total_price', $keyword);
        $this->db->or_like('date', $keyword);
        return $this->db->get()->result();
    }
    public function add_transaksi($data)
    {
        if ($this->db->insert("transaksi", $data)) {
            return true;
        }
    }
    public function edit_transaksi($data, $old_id_transaksi)
    {
        $this->db->set($data);
        $this->db->where("id_transaksi", $old_id_transaksi);
        $this->db->update("transaksi", $data);
    }
    
}
