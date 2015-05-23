<?php include 'constant.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path_bootstrap_css; ?>">
    <script src="<?php echo $path_bootstrap_js; ?>"></script>
    <script src="<?php echo $path_jquery; ?>"></script>
</head>
<body>
<div class="container">
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Đăng nhập trang quản trị</div>
            </div>

            <div class="panel-body">
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                <form id="loginform" class="form-horizontal" role="form" action="<?php echo base_url()?>admin/login" method="post">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value=""
                               placeholder="Tên đăng nhập">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                               placeholder="Mật khẩu">
                    </div>

                    <divclass="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input type="submit" id="btn-login" class="btn btn-success" value="Đăng nhập">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>