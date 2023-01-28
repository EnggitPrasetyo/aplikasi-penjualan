<?php
class transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_transaksi');
        $this->load->database();
        
    }
    public function index()
    {
        $data['title'] = "Data Transaction";
        $query = $this->db->join('barang', 'barang.id_barang=transaksi.id_barang');
        $data['records'] = $this->db->get('transaksi')->result();
        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('transaksi/v_transaksi', $data);
        $this->load->view('templates/footer', $data);
    }
    public function v_edit_transaksi()
    {
        $id_transaksi = $this->uri->segment('3');
        $data['title'] = "Edit transaksi";
        $data['data_edit'] = $this->db->get('barang')->result();
        $query = $this->db->get_where("transaksi", array("id_transaksi" => $id_transaksi));
        $data['records'] = $query->result();
        $data['old_id_transaksi'] = $id_transaksi;
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/v_edit_transaksi', $data);
        $this->load->view('templates/footer', $data);
    }
    public function v_add_transaksi()
    {
        $data['title'] = "Tambah User";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $data['data_barang'] = $this->db->get('barang')->result();
        $this->load->view('transaksi/v_add_transaksi', $data);
        $this->load->view('templates/footer', $data);
    }
    public function add_transaksi()
    {
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $total = $harga * $jumlah;
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'id_barang' => $this->input->post('id_barang'),
            'Total' => $total,
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),

        );
        $this->m_transaksi->add_transaksi($data);
        redirect(base_url('transaksi'));
    }
    public function delete_transaksi()
    {
        $id_transaksi = $this->uri->segment('3');
        $this->db->delete('transaksi', 'id_transaksi =' . $id_transaksi);
        redirect(base_url('transaksi'));
    }
    
  
    public function edit_transaksi()
    {
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $total = $harga * $jumlah;
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'id_barang' => $this->input->post('id_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'Total' => $total
        );
        $old_id_transaksi = $this->input->post('id_transaksi');
        $this->m_transaksi->edit_transaksi($data, $old_id_transaksi);
        redirect(base_url('transaksi'));
    }
}