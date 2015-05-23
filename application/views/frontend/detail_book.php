<?php include_once 'constant.php';?>
<div class="document-content">
    <ul class="nav nav-tabs" id="tab">
        <li role="presentation"><a href="<?php echo base_url()?>post/get_new_post_id/<?php echo $ct_id;?>">Mới nhất</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_view_id/<?php echo $ct_id;?>">Xem nhiều</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_down_id/<?php echo $ct_id;?>">Tải nhiều</a></li>
    </ul>
    <p class="doc-tit"><?php echo $ct_name[0]['ct_name'];?><?php echo $title;?><?php echo $content_cat[0]['ebook_ten']?></p>
    <div class="content">
        <?php echo $content_cat[0]['ebook_mieu_ta'].'<br>' ?>
        <span class="detail" ><?php
            echo $content_cat[0]['ebook_so_trang']." trang"." | ".
                "Chia sẻ: ".$content_cat[0]['ebook_user_up']." | ".
                "Ngày đăng: ".$content_cat[0]['ebook_ngay_dang']." | ".
                "Số lượt xem: ".$content_cat[0]['ebook_luot_xem']." | ".
                "Số lượt tải: ".$content_cat[0]['ebook_luot_tai']."<hr>"
            ?></span>
    </div>
    <div>
        <a href="<?php echo base_url()?>home/download_book/<?php echo $content_cat[0]['ebook_id']?>
        /<?php echo $content_cat[0]['ebook_ten_file']?>/" target="_blank"><span>Download</span></a>
    </div>
</div>