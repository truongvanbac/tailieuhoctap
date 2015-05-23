<?php
    class Mupload extends CI_Model {
        public function __construct() {
            parent::__construct();
        }


        public function get_all_ebook_up_process() {
            $query = $this->db->get('ebooks_up');
            return $query->result_array();
        }

        public function get_ebook_up_process($number, $offset) {
            $this->db->limit($number, $offset);
            $query = $this->db->get('ebooks_up');
            return $query->result_array();
        }

        public function count_all_ebook_up_process() {
            return $this->db->count_all('ebooks_up');
        }

        public function upload_process() {
            date_default_timezone_set('Asia/Bangkok');
            $this->form_validation->set_rules('title','Tên','required');
            $this->form_validation->set_rules('page-number','Số trang','required');
            $this->form_validation->set_rules('des','Miêu tả','required');
            $this->form_validation->set_rules('user-up','Người up','required');
            $this->form_validation->set_rules('ct','Thể loại','required');
            if($this->form_validation->run() == FALSE){
                return false;
            }
            else{
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'pdf|doc|ppt';
                $config['max_size']	= '1000000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file-upload')) {
                    echo 'LOI 2';
                }
                else {
                    $data = $this->upload->data();
                    if(isset($data)) {
                        $ebook_up_ten_file = $data['file_name'];
                    }
                    else {
                        $ebook_up_ten_file = 'default';
                    }
                    $data_array = array(
                        'ebook_up_the_loai'=>$this->input->post('ct'),
                        'ebook_up_ten' => $this->input->post('title'),
                        'ebook_up_so_trang' => $this->input->post('page-number'),
                        'ebook_up_mieu_ta' => $this->input->post('des'),
                        'ebook_up_user_up'=>$this->input->post('user-up'),
                        'ebook_up_ngay_dang' =>date('Y-m-d h:i:s'),
                        'ebook_up_ten_file' => $ebook_up_ten_file,
                    );
                    $this->db->insert('ebooks_up',$data_array);
                    return true;
                }
            }
        }


        public function post_upload_process($ebook_up_id) {
            $query = $this->db->query("select * from ebooks_up where ebook_up_id=".$ebook_up_id);
            date_default_timezone_set('Asia/Bangkok');
            if($query){
                $row = $query->row();
                $data_array = array(
                    'ebook_ten' => ($row->{'ebook_up_ten'}),
                    'ebook_so_trang'=>($row->{'ebook_up_so_trang'}),
                    'ebook_mieu_ta'=>($row->{'ebook_up_mieu_ta'}),
                    'ebook_user_up'=>($row->{'ebook_up_user_up'}),
                    'ebook_ten_file'=>($row->{'ebook_up_ten_file'}),
                    'ebook_the_loai'=>($row->{'ebook_up_the_loai'}),
                    'ebook_ngay_dang'=>date('Y-m-d h:i:s')
                );
                $this->db->insert('ebooks',$data_array);
                $this->db->where('ebook_up_id',$ebook_up_id);
                $this->db->delete('ebooks_up');
                $this->db->query("UPDATE category SET ct_number_post=ct_number_post+1 where ct_id=".$row->{'ebook_up_the_loai'});
                return true;
            } else {
                return false;
            }
        }


        public function delete_upload_process($ebook_up_id) {
            $this->db->where('ebook_up_id', $ebook_up_id);
            $query = $this->db->delete('ebooks_up');
            if($query) {
                return true;
            } else {
                return false;
            }
        }

        public function edit_upload_process($ebook_up_id) {
            date_default_timezone_set('Asia/Bangkok');
            $this->form_validation->set_rules('title-edit','Tên','required');
            $this->form_validation->set_rules('page-number-edit','Số trang','required|is_natural');
            $this->form_validation->set_rules('des-edit','Miêu tả','required');
            $this->form_validation->set_rules('user-up-edit','Người up','required');
            $this->form_validation->set_rules('ct-edit','Thể loại','required');
            if($this->form_validation->run() == FALSE){
                return false;
            }
            else{
                $data_array = array(
                    'ebook_up_the_loai'=>$this->input->post('ct-edit'),
                    'ebook_up_ten' => $this->input->post('title-edit'),
                    'ebook_up_so_trang' => $this->input->post('page-number-edit'),
                    'ebook_up_mieu_ta' => $this->input->post('des-edit'),
                    'ebook_up_user_up'=>$this->input->post('user-up-edit'),
                    'ebook_up_ngay_dang' =>date('Y-m-d h:i:s'),
                );
                $this->db->where('ebook_up_id',$ebook_up_id);
                $this->db->update('ebooks_up',$data_array);
                return true;
            }
        }

        public function get_ebook_up_detail_process($ebook_up_id) {
            $this->db->where('ebook_up_id', $ebook_up_id);
            return $this->db->get('ebooks_up')->result_array();
        }
    }