<?php

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {

        $this->load->view('Login');
    }

    function verifyUser() {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $this->load->model('LoginModel');
        $data = $this->LoginModel->Loginn($username, $password);
        if ($this->LoginModel->Loginn($username, $password)) {
//            echo $data[0]['username'];
            $this->session->set_userdata('username', $data[0]['username']);
            redirect(base_url('Index/dashboard'));
        } else {

            $data = array(
                'msg' => 'Authentication Fail!'
            );
            $this->session->set_flashdata('msg', 'Authentication Fail!');
            redirect(base_url('Index'));
        }
    }

    public function dashboard() {

        $this->load->view('dashboard');
    }

}

?>