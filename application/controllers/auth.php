<?php
class Auth extends  CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('auth_templates/header', $data);
        $this->load->view('login');
        $this->load->view('auth_templates/footer');
    }
    public function logout()
    {
        $data['title'] = 'Login Page';
        $this->load->view('auth_templates/header', $data);
        $this->load->view('login');
        $this->load->view('auth_templates/footer');
    }

}
