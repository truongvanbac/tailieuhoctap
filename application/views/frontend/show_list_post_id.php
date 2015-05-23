<div class="document-content">
    <ul class="nav nav-tabs" id="tab">
        <li role="presentation"><a href="<?php echo base_url()?>post/get_new_post_id/<?php echo $ct_id;?>">Mới nhất</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_view_id/<?php echo $ct_id;?>">Xem nhiều</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_down_id/<?php echo $ct_id;?>">Tải nhiều</a></li>
    </ul>
    <p class="doc-tit"><?php echo $ct_name[0]['ct_name'];?><?php echo $title;?></p>
    <div class="content">
        <?php
            if($count_post == 0){
                echo '<p id="message">Không có bài đăng nào</p>';
            }
        ?>
        <?php foreach($content_cat as $cc){ ?>
            <span class="title"><a href="<?php echo base_url()?>post/get_book_detail/<?php echo $cc['ebook_id']?>/<?php echo $cc['ebook_the_loai'];?>"><?php echo $cc['ebook_ten']."<br>"?></a></span>
            <?php echo character_limiter($cc['ebook_mieu_ta'],350)."<br>"?>
            <span class="detail" ><?php
                echo $cc['ebook_so_trang']." trang"." | ".
                    "Chia sẻ: ".$cc['ebook_user_up']." | ".
                    "Ngày đăng: ".$cc['ebook_ngay_dang']." | ".
                    "Số lượt xem: ".$cc['ebook_luot_xem']." | ".
                    "Số lượt tải: ".$cc['ebook_luot_tai']."<hr>"
                ?></span>
        <?php }?>
        <div class="pagination"><?php echo $this->pagination->create_links();?></div>
    </div>
</div>