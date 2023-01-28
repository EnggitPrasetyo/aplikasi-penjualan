<?php
class m_dashboard extends CI_Model{
 
    function get_data_stok(){
        $query = $this->db->query("SELECT jenis_barang,SUM(stock) AS stock FROM barang GROUP BY jumlah_terjual");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}