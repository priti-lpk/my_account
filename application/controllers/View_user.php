<?php

class View_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('username')) {
            
        } else {
            redirect(base_url(index));
        }
    }
    public function index() {
        $this->load->model('HomeModel');
        $data['user'] = $this->HomeModel->fetch_User();
        $this->load->view('view_user', $data);
    }

}
