<?php include 'constant.php';?>
<script src="<?php echo $path_js?>category.js"></script>
<div id="manager">
    <div id="title">
        <span>Quản lý danh mục</span>
    </div>
    <div id="add-ct">
        <button class="btn btn-success" id="btn-add">++Thêm danh mục</button>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Danh mục</th>
            <th>Số bài đăng</th>
            <th colspan=2>Tác vụ</th>
        </tr>
        <?php foreach ($ct as $ud) { ?>
            <tr>
                <td class="category"><?php echo $ud['ct_name'] ?></td>
                <td><?php echo $ud['ct_number_post'] ?></td>
                <td align="center">
                    <button class="option-edit btn btn-primary" id="<?php echo $ud['ct_id'];?>">Sửa</button>
                    <button class="option-del btn btn-primary" id="<?php echo $ud['ct_id'];?>">Xóa</button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div id="pagination"><?php echo $this->pagination->create_links(); ?></div>
</div>

<div id="del-dialog" title="Bạn có muốn xóa???"></div>


<div id="edit-dialog" title="Sửa danh mục">
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="old-name">Tên mới</label>
            <input type="text" id="edit_category" class="form-control" name="edit_category" placeholder="Nhập tên danh mục mới..." value="">
        </div>
    </form>
</div>


<div id="form-add">
    <?php echo validation_errors(); ?>
    <form class="form-horizontal" action="<?php echo base_url()?>category/add_category" method="post">
        <div class="form-group">
            <label for="old-name">Tên danh mục</label>
            <input type="text" class="form-control" name="new_category" placeholder="Nhập tên danh mục mới...">
        </div>
        <button type="submit" class="btn btn-primary" id="btn-add-ok">Thêm</button>
        <button type="reset" class="btn btn-primary" id="btn-add-cancel">Hủy</button>
    </form>
</div>


