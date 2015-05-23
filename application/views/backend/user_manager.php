<?php include 'constant.php';?>
<script src="<?php echo $path_js?>user.js"></script>
<div id="manager">
    <div id="title">
        <span>Quản lý thành viên</span>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Email</th>
            <th>Tùy chọn</th>
        </tr>

        <?php foreach ($user_data as $ud) { ?>
            <tr class="active">
                <td><?php echo $ud['user_userName'] ?></td>
                <td><?php echo $ud['user_pass'] ?></td>
                <td><?php echo $ud['user_fullName'] ?></td>
                <td>
                    <?php
                    if ($ud['user_sex'] == 0) {
                        echo "Nữ";
                    } else {
                        echo "Nam";
                    }
                    ?>
                </td>
                <td><?php echo $ud['user_email'] ?></td>
                <td align="center">
                    <button class="option btn btn-primary" id="<?php echo $ud['user_id']?>">Xóa</button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div id="pagination"><?php echo $this->pagination->create_links(); ?></div>

    <div id="del-dialog" title="Bạn có muốn xóa???"></div>
</div>