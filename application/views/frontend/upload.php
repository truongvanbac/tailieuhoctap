<div id="upload">
    <div id="message"><?php echo validation_errors(); ?></div>
    <form class="form-horizontal" action="<?php echo base_url()?>home/upload" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tiêu đề <span>*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
            </div>
        </div>

        <div class="form-group">
            <label for="page-number" class="col-sm-3 control-label">Số trang <span>*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="page-number" name="page-number" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label for="des" class="col-sm-3 control-label">Miêu tả <span>*</span></label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="5" name="des"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="user-up" class="col-sm-3 control-label">Người up<span>*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="user-up" name="user-up" value="<?php echo $this->session->userdata('fullname');?>">

            </div>
        </div>

        <div class="form-group">
            <label for="category" class="col-sm-3 control-label">Thể loại<span>*</span></label>
            <div class="col-sm-9">
                <select class="form-control" name="ct">
                    <?php foreach($ct_list as $ct){ ?>
                        <option value="<?php echo $ct['ct_id']?>"><?php echo $ct['ct_name'] ?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="file-upload" class="col-sm-3 control-label">Chọn file<span>*</span></label>
            <div class="col-sm-9">
                <input type="file" id="file" name="file-upload">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </form>
</div>