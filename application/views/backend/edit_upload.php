<?php include 'constant.php';?>
<script src="<?php echo $path_js?>upload.js"></script>
<div id="manager">
    <div id="title">
        <span>Sửa bài đăng</span>
    </div>
    <form class="form-horizontal" action="<?php echo base_url()?>upload/edit_upload/<?php echo $old_post[0]['ebook_up_id']?>" method="post">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Tiêu đề <span>*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title-name" name="title-edit" placeholder="Nhập tiêu đề" value="<?php echo $old_post[0]['ebook_up_ten']?>">
            </div>
        </div>

        <div class="form-group">
            <label for="page-number" class="col-sm-2 control-label">Số trang <span>*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="page-number" name="page-number-edit" value="<?php echo $old_post[0]['ebook_up_so_trang']?>" placeholder="Nhập số trang">
            </div>
        </div>

        <div class="form-group">
            <label for="des" class="col-sm-2 control-label">Miêu tả <span>*</span></label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="des-edit"><?php echo $old_post[0]['ebook_up_mieu_ta']?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="user-up" class="col-sm-2 control-label">Người up</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user-up" name="user-up-edit" value="<?php echo $old_post[0]['ebook_up_user_up']?>">
            </div>
        </div>


        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Thể loại cũ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="" name="" value="<?php echo $name_old_post[0]['ct_name'];?>">
            </div>
        </div>


        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Thể loại mới</label>
            <div class="col-sm-10">
                <select class="form-control" name="ct-edit">
                    <?php foreach($category as $ct){ ?>
                        <option value="<?php echo $ct['ct_id']?>"><?php echo $ct['ct_name'] ?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <button type="submit" class="btn btn-primary" id="btn-edit-save">Lưu</button>
                <button type="reset" class="btn btn-primary" id="btn-cancel">Hủy</button>
            </div>
        </div>
    </form>
</div>