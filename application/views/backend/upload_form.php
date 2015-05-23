<div id="manager">
    <div id="title">
        <span>Thêm tệp</span>
    </div>
    <div id="upload">
        <form class="form-horizontal" action="<?php echo base_url()?>upload/upload_file" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề <span>*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title-name" name="title" placeholder="Nhập tiêu đề">
                </div>
            </div>

            <div class="form-group">
                <label for="page-number" class="col-sm-2 control-label">Số trang <span>*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="page-number" name="page-number" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="des" class="col-sm-2 control-label">Miêu tả <span>*</span></label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="des"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="user-up" class="col-sm-2 control-label">Người up</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user-up" name="user-up" value="<?php echo $this->session->userdata('fullname');?>">

                </div>
            </div>

            <div class="form-group">
                <label for="category" class="col-sm-2 control-label">Thể loại</label>
                <div class="col-sm-10">
                    <select class="form-control" name="ct">
                        <?php foreach($ct_list as $ct){ ?>
                            <option value="<?php echo $ct['ct_id']?>"><?php echo $ct['ct_name'] ?></option>
                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="file-upload" class="col-sm-2 control-label">Chọn file</label>
                <div class="col-sm-10">
                    <input type="file" id="file" name="file-upload">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-7">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>