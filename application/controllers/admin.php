<?php
include 'check_session.php';
class Admin extends Check_Session {
    public function __construct() {
        parent::__construct();
    }

    //Neu chua login, chuyen den trang login, nguoc lai chuyen den trang chu
    public function index() {
        if (!$this->is_logged_in()) {
            $this->login();
        } else {
            redirect('admin/manager');
        }
    }

    //Controller login
    public function login() {
        $data = $this->muser->admin_login_process();
        if($data) {
            $this->session->set_userdata(array(
                'logged_in' => true,
                'fullname' => $data,
                'permit' => true
            ));
            redirect('admin/manager');
        }else {
        }
        $this->load->view('backend/login');
    }

    //Controller logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin');
    }

    //COntroller Manager
    public function manager() {
        if (!$this->is_logged_in_admin()) {
            $this->login();
        } else {
            $data['backend'] = 'backend/item';
            $this->load->view('backend/main', $data);
        }
    }
}