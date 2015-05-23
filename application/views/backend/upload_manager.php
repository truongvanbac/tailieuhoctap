<?php include 'constant.php';?>
<script src="<?php echo $path_js?>upload.js"></script>
<div id="manager">
    <div id="title">
        <span>Quản lý Upload</span>
    </div>

    <div>
        <table class="table table-bordered">
            <tr>
                <th>Tiêu đề</th>
                <th>Số trang</th>
                <th>Miêu tả</th>
                <th>Người up</th>
                <th>Danh mục</th>
                <th>Ngày đăng</th>
                <th>Tùy chọn</th>
                <th><a href="<?php echo base_url()?>upload/add_upload">Thêm tệp</a></th>
            </tr>
            <?php foreach($user_data as $ud){ ?>
                <tr>
                    <td><?php echo $ud['ebook_up_ten']?></td>
                    <td><?php echo $ud['ebook_up_so_trang']?></td>
                    <td><?php echo character_limiter($ud['ebook_up_mieu_ta'], 20) ?></td>
                    <td><?php echo $ud['ebook_up_user_up']?></td>
                    <td><?php echo $name_ct[0]['ct_name'];?></td>
                    <td><?php echo $ud['ebook_up_ngay_dang']?></td>
                    <td align="center">
                        <a href="<?php echo base_url()?>upload/edit_upload/<?php echo $ud['ebook_up_id'];?>"><button class="btn btn-primary">Sửa</button></a>
                        <button class="option-del btn btn-primary" id="<?php echo $ud['ebook_up_id']?>">Xóa</button>
                        <a href="<?php echo base_url()?>upload/post_upload/<?php echo $ud['ebook_up_id']?>"><button class="btn btn-success">Post</button></a>
                    </td>
                </tr>
            <?php }?>
        </table>
        <div id="pagination"><?php echo $this->pagination->create_links();?></div>
    </div>
</div>
<div id="del-dialog" title="Bạn có muốn xóa???"></div>