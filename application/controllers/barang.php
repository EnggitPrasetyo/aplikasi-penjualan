<?php
class barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_barang');
        $this->load->database();
        
    }
    public function index()
    {
        $data['title'] = 'Data Barang';
        $query = $this->db->get("barang");
        $data['records'] = $query->result();
        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('barang/v_data',$data);
        $this->load->view('templates/footer',$data);

    }
    
    public function v_add_barang()
    {
        $data['title'] = "Tambah Barang";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('barang/v_add_barang', $data);
        $this->load->view('templates/footer', $data);
    }
    public function add_barang()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'stock' => $this->input->post('stock'),
            'jumlah_terjual' => $this->input->post('jumlah_terjual'),
            'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
            'jenis_barang' => $this->input->post('jenis_barang'),
        );
        $this->m_barang->add_barang($data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success wrapper fadeInDown" role="alert">
        Data Berhasil ditambahkan</div>');
        redirect(base_url('barang'));
    }
    public function v_edit_barang()
    {
        $id_barang = $this->uri->segment('3');
        $data['title'] = "Edit Barang";
        $query = $this->db->get_where("barang", array("id_barang" => $id_barang));
        $data['records'] = $query->result();
        $data['old_id_barang'] = $id_barang;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('barang/v_edit_barang', $data);
        $this->load->view('templates/footer', $data);
    }
    public function edit_barang()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'stock' => $this->input->post('stock'),
            'jumlah_terjual' => $this->input->post('jumlah_terjual'),
            'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
            'jenis_barang' => $this->input->post('jenis_barang'),
        );
        $old_id_barang = $this->input->post('id_barang');
        $this->m_barang->edit_barang($data, $old_id_barang);
        $this->session->set_flashdata('pesan','<div class="alert alert-success wrapper fadeInDown" role="alert">
        Data Berhasil diubah</div>');
        redirect(base_url('barang'));
    }
    public function delete_barang()
    {
        $id_barang = $this->uri->segment('3');
        $this->db->delete('barang', 'id_barang =' . $id_barang);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger wrapper fadeInDown" role="alert">
        Data Berhasil dihapus</div>');
        redirect(base_url('barang'));
    }
}