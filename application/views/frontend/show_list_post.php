<div class="document-content">
    <ul class="nav nav-tabs" id="tab">
        <li role="presentation"><a href="<?php echo base_url()?>post/get_new_post">Mới nhất</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_view">Xem nhiều</a></li>
        <li role="presentation"><a href="<?php echo base_url()?>post/get_most_down">Tải nhiều</a></li>
    </ul>
    <div class="content">
        <?php foreach($content_cat as $cc){ ?>
            <span class="title"><a href="<?php echo base_url()?>post/get_book_detail/<?php echo $cc['ebook_id']?>/<?php echo $cc['ebook_the_loai'];?>"><?php echo $cc['ebook_ten']."<br>"?></a></span>
            <span class="des"><?php echo character_limiter($cc['ebook_mieu_ta'],350)."<br>"?></span>
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