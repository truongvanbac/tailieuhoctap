<?php
    include_once 'constant.php';
?>
<div id="form-login">
    <div id="message"><?php echo validation_errors(); ?></div>
    <form class="form-horizontal" action="<?php echo base_url()?>home/login" method="post">
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập...">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu...">
        </div>
        <button type="submit" class="btn btn-primary" id="btn-login">Đăng nhập</button>
        <p>Chưa có tài khoản? <a href="<?php echo base_url()?>home/sign_up">Đăng ký</a></p>
    </form>
</div>