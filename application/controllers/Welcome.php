<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('templates/header');
        //$this->load->view('templates/sidebar');
        //$this->load->view('templates/topbar');
        //$this->load->view('barang/v_data';
        $this->load->view('templates/footer');
	}

	public function chart_data() {
		$data = $this->chart_model->chart_database();
		echo json_encode($data);
	}
}
