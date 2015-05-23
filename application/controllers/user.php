<?php
include_once 'pagination.php';

class User extends CI_Controller {

    public function _construct() {
        parent::_construct();
    }

    public function __destruct() {
    }

    //Lay danh sach tat cac cac thanh vien
    public function get_user() {
        $data['backend'] = 'backend/user_manager';

        $pagination = new Pagination_Bootstrap();
        $pagination->config['base_url'] = base_url() . 'user/get_user';
        $pagination->config['total_rows'] = $this->muser->count_user_process();
        $pagination->config['per_page'] = 10;
        $pagination->config['uri_segment'] = 3;
        $start = $this->uri->segment(3);
        $this->pagination->initialize($pagination->config);

        $data['user_data'] = $this->muser->get_user_process($pagination->config['per_page'], $start);
        $this->load->view('backend/main', $data);
    }

    //Xoa thanh vien
    public function delete_user($user_id) {
        $data = $this->muser->delete_user_process($user_id);
        if($data) {
            redirect('user/get_user');
        } else {
            $data['message'] = 'Thao tác không thành công';
            $this->load->view('backend/main', $data);
        }
    }
}