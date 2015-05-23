<?php
include 'pagination.php';
class Upload extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function get_ebook_up() {
        $data['backend'] = 'backend/upload_manager';
        $pagination = new Pagination_Bootstrap();
        $pagination->config['base_url'] = base_url().'upload/get_ebook_up';
        $pagination->config['total_rows'] = $this->mupload->count_all_ebook_up_process();
        $pagination->config['per_page'] = 10;
        $pagination->config['uri_segment'] = 3;
        $start = $this->uri->segment(3);
        $this->pagination->initialize($pagination->config);

        $data['name_ct'] = $this->mcategory->get_name_ct_ebook_up();
        $data['user_data'] = $this->mupload->get_ebook_up_process($pagination->config['per_page'], $start);
        $this->load->view('backend/main', $data);
    }

    public function upload_file() {
        if($this->mupload->upload_process() == true){
            redirect('upload/get_ebook_up');
        }
        else{
            $data['backend'] = 'backend/upload_form';
        }
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $this->load->view('backend/main', $data);

    }

    public function post_upload($ebook_up_id)
    {
        $data = $this->mupload->post_upload_process($ebook_up_id);
        if($data == true){
            redirect('upload/get_ebook_up');
        } else {
            return false;
        }
    }

    public function add_upload() {
        $data['message'] = '';
        $data['backend'] = 'backend/upload_form';
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $this->load->view('backend/main', $data);
    }

    public function delete_upload($ebook_up_id) {
        $data = $this->mupload->delete_upload_process($ebook_up_id);
        if($data) {
            redirect('upload/get_ebook_up');
        } else {
            return false;
        }
    }

    public function edit_upload($ebook_up_id) {
        $data['old_post'] = $this->mupload->get_ebook_up_detail_process($ebook_up_id);
        $data['category'] = $this->mcategory->get_all_category_process();
        $data['name_old_post'] = $this->mcategory-> get_name_ct_ebook_up_id($ebook_up_id);
        $data['backend'] = 'backend/edit_upload';
        $this->load->view('backend/main', $data);
        if(!isset($_POST['btn-edit-save'])) {
            $data = $this->mupload->edit_upload_process($ebook_up_id);
            if ($data) {
                redirect('upload/get_ebook_up');
            } else {
                $data['backend'] = 'backend/edit_upload';
            }
        }
    }

}