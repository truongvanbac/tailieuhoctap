<?php
class Mpost extends CI_Model {
    public function __construct() {
        parent::__construct();
    }


    //Lay tong so bai dang
    public function get_total_post() {
        $query = $this->db->count_all('ebooks');
        return $query;
    }

    //Lay tong so ai dang theo danh muc
    public function get_total_post_id($ct_id) {
        $this->db->where('ebook_the_loai',$ct_id);
        return $this->db->count_all_results('ebooks');
    }


    //Lay danh sach moi bai dang
    public function get_all_post_process($number, $offset) {
        $this->db->limit($number, $offset);
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai moi dang
    public function get_new_post_process($number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->order_by('ebook_ngay_dang','desc');
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai xem nhieu nhat
    public function get_most_view_process($number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->order_by('ebook_luot_xem','desc');
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai tai nhieu nhat
    public function get_most_down_process($number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->order_by('ebook_luot_tai','desc');
        $query = $this->db->get('ebooks');
        return $query-> result_array();
    }

    //Lay danh sach bai dang theo danh muc
    public function get_all_post_id_process($ct_id, $number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->where('ebook_the_loai',$ct_id);
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai moi dang theo danh muc
    public function get_new_post_id_process($ct_id, $number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->where('ebook_the_loai',$ct_id);
        $this->db->order_by('ebook_ngay_dang','desc');
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai xem nhieu nhat theo danh muc
    public function get_most_view_id_process($ct_id, $number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->where('ebook_the_loai',$ct_id);
        $this->db->order_by('ebook_luot_xem','desc');
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay danh sach bai tai nhieu nhat theo danh muc
    public function get_most_down_id_process($ct_id, $number, $offset) {
        $this->db->limit($number, $offset);
        $this->db->where('ebook_the_loai',$ct_id);
        $this->db->order_by('ebook_luot_tai','desc');
        $query = $this->db->get('ebooks');
        return $query->result_array();
    }

    //Lay chi tiet bai dang
    public function get_book_detail_process($ebook_id) {
        $this->db->where('ebook_id', $ebook_id);
        return $this->db->get('ebooks')->result_array();
    }

    //Tim kiem
    public function search_data_process($array) {
        $this->db->select();
        $this->db->like('ebook_mieu_ta',$array);
        $this->db->from('ebooks');
        $query = $this->db->get();
        return $query->result_array();
    }

    //Xoa bai dang
    public function delete_post_process($ebook_id) {
        $this->db->where('ebook_id', $ebook_id);
        $query = $this->db->delete('ebooks');
        if($query) {
            $result = $this->db->query("SELECT * FROM category INNER JOIN ebooks ON category.ct_id=ebooks.ebook_the_loai");
            $row=$result->row();
            if($row){
                $this->db->query("UPDATE category SET ct_number_post=ct_number_post-1 where ct_id=".$row->{'ebook_the_loai'});
            }
            return true;
        } else {
            return false;
        }
    }

    //Sua bai dang
    public function edit_post_process($ebook_id) {
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
                'ebook_the_loai'=>$this->input->post('ct-edit'),
                'ebook_ten' => $this->input->post('title-edit'),
                'ebook_so_trang' => $this->input->post('page-number-edit'),
                'ebook_mieu_ta' => $this->input->post('des-edit'),
                'ebook_user_up'=>$this->input->post('user-up-edit'),
                'ebook_ngay_dang' =>date('Y-m-d h:i:s'),
            );
            $this->db->where('ebook_id',$ebook_id);
            $this->db->update('ebooks',$data_array);
            return true;
        }
    }

    public function increase_view($ebook_id) {
        $query = $this->db->query("UPDATE ebooks SET ebook_luot_xem=ebook_luot_xem+1 where ebook_id=".$ebook_id);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function increase_download($ebook_id) {
        $query = $this->db->query("UPDATE ebooks SET ebook_luot_tai=ebook_luot_tai+1 WHERE ebook_id=".$ebook_id);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

}