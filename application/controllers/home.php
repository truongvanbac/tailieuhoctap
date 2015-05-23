<?php
include_once 'pagination.php';
include 'check_session.php';
    class Home extends Check_Session {
        public function __construct() {
            parent::__construct();
        }

        public function __destruct() {
        }

        public function index() {
           $this->home();
        }

        //Tranh chu
        public function home() {
            $data['frontend'] = 'frontend/show_list_post';
            $pg = new Pagination_Bootstrap();
            $pg->config['base_url'] = base_url().'home/index';
            $pg->config['total_rows'] = $this->mpost->get_total_post();
            $pg->config['uri_segment'] = 3;
            $uri = $this->uri->segment(3);
            $this->pagination->initialize($pg->config);

            $data['content_cat'] = $this->mpost->get_all_post_process($pg->config['per_page'], $uri);
            $data['ct_list'] = $this->mcategory->get_all_category_process();
            $this->load->view('frontend/home', $data);
        }

        //Nguoi dung dang nhap
        public function login() {
            $data['frontend'] = 'frontend/login';
            $user_fullname = $this->muser->login_process();
            if($user_fullname){
                $this->session->set_userdata(array(
                    'logged_in'=>true,
                    'fullname'=>$user_fullname
                ));
                redirect('home');
            } else {
            }
            $data['ct_list'] = $this->mcategory->get_all_category_process();
            $this->load->view('frontend/home', $data);
        }

        //Dang xuat
        public function logout() {
            $this->session->sess_destroy();
            redirect('home');
        }

        //Dang ky
        public function sign_up() {
            $data['message'] = '';
            $data['frontend'] = 'frontend/signup';
            $data = $this->muser->signup_process();
            if($data) {
                redirect('home/login');
            } else {
                $data['frontend'] = 'frontend/signup';
            }
            $data['ct_list'] = $this->mcategory->get_all_category_process();
            $this->load->view('frontend/home', $data);
        }


        //Download
        public function download_book($ebook_id, $ebook_ten_file) {
            if($this->is_logged_in() == true || $this->is_logged_in_user() == true) {
                $file_name = $ebook_ten_file;
                $this->mpost->increase_download($ebook_id);
                $mime = 'application/force-download';
                header('Pragma: public');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Cache-Control: private',false);
                header('Content-Type: '.$mime);
                header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
                header('Content-Transfer-Encoding: binary');
                header('Connection: close');
                readfile($file_name);
            }else {
                redirect('home/login');
            }
            exit();
        }

        //Upload
        public function upload() {
            if($this->is_logged_in() == true) {
                if($this->mupload->upload_process() == true){
                    redirect('home');
                }else{
                    $data['message']='Uploads thất bại!!!';
                    $data['frontend'] = 'frontend/upload';
                }
                $data['ct_list'] = $this->mcategory->get_all_category_process();
                $this->load->view('frontend/home', $data);
            }else{
                redirect('home/login');
            }
        }

        //Tim kiem tai lieu
        public function search_data() {
            $data['frontend'] = 'frontend/show_list_post';
            $post_data = $this->input->post('title');
            $data['content_cat'] = $this->mpost->search_data_process($post_data);
            $data['ct_list'] = $this->mcategory->get_all_category_process();
            $this->load->view('frontend/home', $data);
        }

    }