<?php
    class Mcategory extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        //Truy xuat co so du lieu lay danh sach tat ca cac danh muc
        public function get_all_category_process() {
            $query = $this->db->get('category');
            return $query->result_array();

        }

        //Truy xuat CSDL lay ten danh muc theo id
        public function get_name_ct_id($ct_id) {
            $this->db->where('ct_id', $ct_id);
            return $this->db->get('category')->result_array();
        }

        //Lay cac danh muc sach tu $number den $offset
        public function get_category_process($number, $offset) {
            $this->db->limit($number, $offset);
            $query = $this->db->get('category');
            return $query->result_array();
        }

        //Dem tong so danh muc
        public function count_category_process() {
            return $this->db->count_all('category');
        }

        //Xoa mot danh muc
        public function delete_category_process($ct_id) {
            $this->db->where('ct_id',$ct_id);
            $query = $this->db->delete('category');
            if($query){
//                $this->db->where('ebook_the_loai',$ct_id);
//                $this->db->delete('ebooks');
                return true;
            }
            else{
                return false;
            }
        }

        //Them mot danh muc
        public function add_category_process() {
            $this->form_validation->set_rules('new_category', 'new_category', 'required|is_unique[category.ct_name]');
            if($this->form_validation->run() == false){
            }
            else{
                $name_category = $this->input->post('new_category');
                $data = array(
                    'ct_name' => $name_category
                );
                $query = $this->db->insert('category',$data);
                if($query){
                    return true;
                }
                else{
                    return false;
                }
            }
        }

        //Sua mot danh muc
        public function edit_category_process($name, $ct_id) {
            $this->db->where('ct_id', $ct_id);
            $data = array(
                'ct_name' => urldecode($name)
            );
            $query = $this->db->update('category', $data);
            if($query) {
                return true;
            } else {
                return false;
            }
        }

        public function get_name_ct_ebook_id($ebook_id) {
            $this->db->where('ebook_id',$ebook_id);
            $this->db->join('ebooks','ebooks.ebook_the_loai = category.ct_id');
            $query = $this->db->get('category');
            return $query->result_array();
        }

        public function get_name_ct_ebook_up_id($ebook_up_id) {
            $this->db->where('ebook_up_id',$ebook_up_id);
            $this->db->join('ebooks_up','ebooks_up.ebook_up_the_loai = category.ct_id');
            $query = $this->db->get('category');
            return $query->result_array();
        }

        public function get_name_ct_ebook_up() {
            $this->db->join('ebooks_up','ebooks_up.ebook_up_the_loai = category.ct_id');
            $query = $this->db->get('category');
            return $query->result_array();
        }
    }