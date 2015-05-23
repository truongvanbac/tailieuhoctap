<?php
class Muser extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    //Dang nhap
    public function login_process() {
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        if ($this->form_validation->run() == FALSE) {
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->db->where('user_userName', $username);
            $this->db->where('user_pass', $password);
            $query = $this->db->get('user');
            $return = $query->result_array();
            if ($query->num_rows() > 0) {
                return $return[0]['user_fullName'];
            } else {
                return false;
            }
        }
    }

    //Admin dang nhap
    public function admin_login_process() {
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        if ($this->form_validation->run() == FALSE) {
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->db->where('user_userName', $username);
            $this->db->where('user_pass', $password);
            $this->db->where('user_status', 1);
            $query = $this->db->get('user');
            $return = $query->result_array();
            if ($query->num_rows() > 0) {
                return $return[0]['user_fullName'];
            } else {
            }
        }
    }

    //Dang ky
    public function signup_process() {
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|is_unique[user.user_userName]');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        $this->form_validation->set_rules('fullname', 'Tên đầy đủ', 'required');
        $this->form_validation->set_rules('sex', 'Sex');
        $this->form_validation->set_rules('email', 'Email');
        if($this->form_validation->run() == FALSE){
            return false;
        }
        else{
            $data = array (
                'user_userName' => $this->input->post('username'),
                'user_pass' => md5($this->input->post('password')),
                'user_fullName' => $this->input->post('fullname'),
                'user_sex' => $this->input->post('sex'),
                'user_email' =>$this->input->post('email')
             );

            $query = $this->db->insert('user',$data);
            if($query) {
                return true;
            } else {
                return false;
            }
        }
    }

    //Lay danh sach cac thanh vien
    public function get_user_process($number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->where('user_status', 0);
        $query = $this->db->get('user');
        return $query->result_array();
    }

    //Dem tong so thanh vien
    public function count_user_process() {
        return $this->db->count_all('user');
    }

    //Xoa thanh vien
    public function delete_user_process($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->delete('user');
        if($query) {
            return true;
        }else{
            return false;
        }
    }
}