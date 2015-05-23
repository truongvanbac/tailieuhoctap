<div id="signup">
    <div id="message"><?php echo validation_errors(); ?></div>
    <form class="form-horizontal" action="<?php echo base_url()?>home/sign_up" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Tên đăng nhập <span>*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Mật khẩu <span>*</span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
            </div>
        </div>

        <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label">Họ tên <span>*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ tên">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email...">
            </div>
        </div>

        <div class="form-group">
            <label for="sex" class="col-sm-3 control-label">Giới tính</label>
            <div class="col-sm-9">
                <select class="form-control" name="sex">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary" id="btn-sign">Đăng ký</button>
            </div>
        </div>
    </form>
</div>