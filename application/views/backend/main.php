<?php include 'constant.php';?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path_bootstrap_css;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path_jquery_ui_css;?>">
    <script src="<?php echo $path_bootstrap_js;?>"></script>
    <script src="<?php echo  $path_jquery;?>"></script>
    <script src="<?php echo $path_jquery_ui_js;?>"></script>
</head>
<body>
    <div id="wrap">
        <div class="container-full">
            <div class="row" id="header">
                <a href="<?php echo base_url()?>admin/manager"><p class="bg-primary">Kay's Administrator</p></a>
            </div>

            <div class="row" id="nav">
                <div class="col-md-10">
                    <?php include 'menu.php';?>
                </div>
                <div class="col-md-2">
                    <span>Hello, <?php echo $this->session->userdata('fullname');?><a href="<?php echo base_url()?>admin/logout">[Thoát]</a></span>
                    <br>
                    <span>&copy CopyRight by Bac Truong Van</span>
                </div>
            </div>

            <div class="row" id="main-content">
                <div class="col-md-10">
                    <?php echo $this->load->view($backend);?>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>
</body>
</html>