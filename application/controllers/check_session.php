<?php

class Check_Session extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    //Kiem tra da dang nhap hay chua
    public function is_logged_in() {
        $user = $this->session->userdata('logged_in');
        return $user;
    }

    public function is_logged_in_admin() {
        $user = $this->session->userdata('permit');
        return $user;
    }
}