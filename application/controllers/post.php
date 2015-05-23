<?php
include_once 'pagination.php';
class Post extends CI_Controller {
    public function __constrcut() {
        parent::__construct();
    }

    //Lay danh sach bai dang moi
    public function get_new_post() {
        $data['frontend'] = 'frontend/show_list_post';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_new_post';
        $pg->config['total_rows'] = $this->mpost->get_total_post();
        $uri = $this->uri->segment(3);
        $pg->config['uri_segment'] = 3;
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_new_post_process($pg->config['per_page'], $uri);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach xem nhieu nhat
    public function get_most_view() {
        $data['frontend'] = 'frontend/show_list_post';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_most_view';
        $pg->config['total_rows'] = $this->mpost->get_total_post();
        $uri = $this->uri->segment(3);
        $pg->config['uri_segment'] = 3;
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_most_view_process($pg->config['per_page'], $uri);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach tai nhieu nhat
    public function get_most_down() {
        $data['frontend'] = 'frontend/show_list_post';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_most_down';
        $pg->config['total_rows'] = $this->mpost->get_total_post();
        $uri = $this->uri->segment(3);
        $pg->config['uri_segment'] = 3;
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_most_down_process($pg->config['per_page'], $uri);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach moi baci dang theo danh muc
    public function get_all_post_id() {
        $ct_id = $this->uri->segment(3);
        $data['frontend'] = 'frontend/show_list_post_id';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_all_post_id/'.$ct_id.'/';
        $pg->config['total_rows'] = $this->mpost->get_total_post_id($ct_id);
        $pg->config['uri_segment'] = 4;
        $uri = $this->uri->segment(4);
        $this->pagination->initialize($pg->config);


        $data['ct_id'] = $ct_id;
        $data['content_cat'] = $this->mpost->get_all_post_id_process($ct_id, $pg->config['per_page'], $uri);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $data['ct_name'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['title'] = '';
        $data['count_post'] = $pg->config['total_rows'];
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach bai moi dang theo danh muc
    public function get_new_post_id() {
        $ct_id = $this->uri->segment(3);
        $data['frontend'] = 'frontend/show_list_post_id';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_new_post_id/'.$ct_id.'/';
        $pg->config['total_rows'] = $this->mpost->get_total_post_id($ct_id);
        $pg->config['uri_segment'] = 4;
        $uri = $this->uri->segment(4);
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_new_post_id_process($ct_id, $pg->config['per_page'], $uri);
        $data['ct_id'] = $ct_id;
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $data['ct_name'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['title'] = ' >> Mới nhất';
        $data['count_post'] = $pg->config['total_rows'];
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach bai xem nhieu nhat theo danh muc
    public function get_most_view_id() {
        $ct_id = $this->uri->segment(3);
        $data['frontend'] = 'frontend/show_list_post_id';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_most_view_id/'.$ct_id.'/';
        $pg->config['total_rows'] = $this->mpost->get_total_post_id($ct_id);
        $pg->config['uri_segment'] = 4;
        $uri = $this->uri->segment(4);
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_most_view_id_process($ct_id, $pg->config['per_page'], $uri);
        $data['ct_id'] = $ct_id;
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $data['ct_name'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['title'] = ' >> Xem nhiều nhất';
        $data['count_post'] = $pg->config['total_rows'];
        $this->load->view('frontend/home', $data);
    }

    //Lay danh sach tai nhieu nhat theo thu muc
    public function get_most_down_id() {
        $ct_id = $this->uri->segment(3);
        $data['frontend'] = 'frontend/show_list_post_id';
        $pg = new Pagination_Bootstrap();
        $pg->config['base_url'] = base_url().'post/get_most_down_id/'.$ct_id.'/';
        $pg->config['total_rows'] = $this->mpost->get_total_post_id($ct_id);
        $pg->config['uri_segment'] = 4;
        $uri = $this->uri->segment(4);
        $this->pagination->initialize($pg->config);

        $data['content_cat'] = $this->mpost->get_most_down_id_process($ct_id, $pg->config['per_page'], $uri);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $data['ct_id'] = $ct_id;
        $data['ct_name'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['title'] = ' >> Tải nhiều nhất';
        $data['count_post'] = $pg->config['total_rows'];
        $this->load->view('frontend/home', $data);
    }

    //Lay thong tin chi tiet cua tai lieu
    public function get_book_detail($ebook_id, $ct_id) {
        $this->mpost->increase_view($ebook_id);
        $data['frontend'] = 'frontend/detail_book';
        $data['ct_name'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['content_cat'] = $this->mpost->get_book_detail_process($ebook_id);
        $data['ct_list'] = $this->mcategory->get_all_category_process();
        $data['ct_id'] = $ct_id;
        $data['title'] = ' >> ';
        $this->load->view('frontend/home', $data);
    }


    /*====================================ADMIN====================================*/

    //Lay danh sach moi bai dang
    public function get_all_post() {
        $data['backend'] = 'backend/post_manager';
        $pagination = new Pagination_Bootstrap();
        $pagination->config['base_url'] = base_url() . 'post/get_all_post';
        $pagination->config['total_rows'] = $this->mpost->get_total_post();
        $pagination->config['per_page'] = 7;
        $pagination->config['uri_segment'] = 3;
        $start = $this->uri->segment(3);
        $this->pagination->initialize($pagination->config);

        $data['pt'] = $this->mpost->get_all_post_process($pagination->config['per_page'], $start);
        $data['category'] = $this->mcategory->get_all_category_process();
        $data['number_post'] = $this->mpost->get_total_post();
        $data['name_ct']=array(array(
            'ct_name'=>'Tất cả'
        ));
        $this->load->view('backend/main', $data);
    }

    //Lay danh sach bai dang theo danh muc
    public function get_post($ct_id) {
        $data['backend'] = 'backend/post_manager';

        $pagination = new Pagination_Bootstrap();
        $pagination->config['base_url'] = base_url().'post/get_post/'.$ct_id.'/';
        $pagination->config['total_rows'] = $this->mpost->get_total_post_id($ct_id);
        $pagination->config['per_page'] = 7;
        $pagination->config['uri_segment'] = 4;
        $start = $this->uri->segment(4);
        $this->pagination->initialize($pagination->config);

        $data['pt'] = $this->mpost->get_all_post_id_process($ct_id, $pagination->config['per_page'], $start);
        $data['name_ct'] = $this->mcategory->get_name_ct_id($ct_id);
        $data['category'] = $this->mcategory->get_all_category_process();
        $data['number_post'] = $this->mpost->get_total_post_id($ct_id);
        $this->load->view('backend/main', $data);
    }

    //Xoa bai dang
    public function delete_post($ebook_id) {
        $data = $this->mpost->delete_post_process($ebook_id);
        if($data) {
            redirect('post/get_all_post');
        }
    }

    //Sua bai dang
    public function edit_post($ebook_id) {
        $data['old_post'] = $this->mpost->get_book_detail_process($ebook_id);
        $data['category'] = $this->mcategory->get_all_category_process();
        $data['name_old_post'] = $this->mcategory-> get_name_ct_ebook_id($ebook_id);
        $data['backend'] = 'backend/edit_post';
        $this->load->view('backend/main', $data);
        if(!isset($_POST['btn-save'])) {
            $data = $this->mpost->edit_post_process($ebook_id);
            if ($data) {
                redirect('post/get_all_post');
            } else {
                $data['backend'] = 'backend/edit_post';
            }
        }
    }
}