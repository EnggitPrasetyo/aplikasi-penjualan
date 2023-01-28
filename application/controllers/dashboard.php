<?php
class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_dashboard');
        $this->load->database();
        
    }
    //public function index()
    //{
        //$data['title'] = 'Dashboard';
        //$x['data']=$this->m_dashboard->get_data_stok();
        //$this->load->view('dashboard/dashboard',$x);
        //$query = $this->db->get("dashboard");
        //$data['records'] = $query->result();
        //$this->load->helper('url');
        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar');
        //$this->load->view('templates/topbar');
        //$this->load->view('dashboard/dashboard',$data);
        //$this->load->view('templates/footer',$data);

    //}
    public function index(){
        $data = [
        'content'=>"dashboard/dashboard",
        ];
        $data['title'] = 'Dashboard';
        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/dashboard',$data);
        $this->load->view('templates/footer',$data);
    }
    function getSum($quiz)
{
    $quiz="konsumsi";
    //get percentage from the database
    $query = $this->db->select('SUM(jumlah_terjual) as jumlah')->from('barang')->where('jenis_barang', $quiz)->get();
    return $query->row()->jumlah;
    $data['quiz']          = //fill this area
    $data['jumlah'] = $this->quiz->getSum($quizid);
    $data['jumlah_terjual']         = //fill this area

    $this->load->view('dashboard/dashboard', $data);
}
} 