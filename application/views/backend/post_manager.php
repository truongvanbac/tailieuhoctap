<?php include 'constant.php';?>
<script src="<?php echo $path_js?>post.js"></script>
<script>
    $(document).ready(function(){
        $('#dynamic_select').change(function() {
            window.location = $(':selected',this).attr('href')
        });
    });
</script>
<div id="manager">
    <div id="title">
        <span>Quản lý bài đăng</span>
    </div>

    <div class="category">
        <h4>Danh mục</h4>
        <form action="" method="post">
            <select name="ct" id="dynamic_select" class="form-control">
                <option value="all">[Chọn danh mục]</option>
                <?php foreach ($category as $ct) {
                    echo '<option value="' . $ct['ct_id'] . '" href="'.base_url().'post/get_post/'.$ct['ct_id'].'">' . $ct['ct_name'] . '</option>';
                }?>
            </select>
        </form>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <td class="title" colspan="9"><?php echo $name_ct[0]['ct_name']?>: <?php echo $number_post?> bài đăng</td>
            </tr>
            <tr>
                <th>Tiêu đề</th>
                <th>Số trang</th>
                <th>Miêu tả</th>
                <th>Người up</th>
                <th>Thời gian</th>
                <th>Số lượt xem</th>
                <th>Số lượt tải</th>
                <th>Tùy chọn</th>
            </tr>
            <?php foreach ($pt as $dc) { ?>
                <tr>
                    <td><?php echo $dc['ebook_ten'] ?></td>
                    <td align="center"><?php echo $dc['ebook_so_trang'] ?></td>
                    <td><?php echo character_limiter($dc['ebook_mieu_ta'], 20) ?></td>
                    <td><?php echo $dc['ebook_user_up'] ?></td>
                    <td align="center"><?php echo $dc['ebook_ngay_dang'] ?></td>
                    <td align="center"><?php echo $dc['ebook_luot_xem'] ?></td>
                    <td align="center"><?php echo $dc['ebook_luot_tai'] ?></td>
                    <td width="140px" align="center">
                        <a href="<?php echo base_url()?>post/edit_post/<?php echo $dc['ebook_id']?>"><button class="option-edit btn btn-primary" id="">Sửa</button></a>
                        <button class="option-del btn btn-primary" id="<?php echo $dc['ebook_id']?>">Xóa</button>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <div id="pagination"><?php echo $this->pagination->create_links(); ?></div>
    </div>
</div>

<!--Dialog del-->
<div id="del-dialog" title="Bạn có muốn xóa???"></div>


