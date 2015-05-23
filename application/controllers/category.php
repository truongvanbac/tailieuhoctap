<?php
include_once 'pagination.php';

class Category extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }


    //Lay danh sach tat cac cac category
    public function get_category() {
        $data['backend'] = 'backend/category_manager';
        $pagination = new Pagination_Bootstrap();
        $pagination->config['base_url'] = base_url() . 'category/get_category';
        $pagination->config['total_rows'] = $this->mcategory->count_category_process();
        $pagination->config['per_page'] = 9;
        $pagination->config['uri_segment'] = 3;
        $start = $this->uri->segment(3);
        $this->pagination->initialize($pagination->config);

        $data['ct'] = $this->mcategory->get_category_process($pagination->config['per_page'], $start);
        $data['all_category'] = $this->mcategory->get_all_category_process();
        $this->load->view('backend/main', $data);
    }

    //Xoa category
    public function delete_category($ct_id) {
        $data = $this->mcategory->delete_category_process($ct_id);
        if($data) {
            redirect('category/get_category', $data);
        }
    }

    //Them category
    public function add_category() {
        if(!isset($_POST['btn-add-ok'])) {
            $data = $this->mcategory->add_category_process();
            if ($data) {
                redirect('category/get_category');
            } else {
            }
        }
    }

    //Sua category
    public function edit_category($name, $id) {
        $data = $this->mcategory->edit_category_process($name, $id);
        if($data) {
            redirect('category/get_category');
        }else {
        }
    }
}