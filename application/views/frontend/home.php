<?php
    include 'constant.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path_bootstrap_css;?>">
    <script src="<?php echo $path_bootstrap_js;?>"></script>
    <script src="<?php echo  $path_jquery;?>"></script>
    <script src="<?php echo $path_js;?>user.js"></script>
    <style>
        #wrap{
            background-image: url("<?php echo $path_image?>/bg.png");
        }
        #header{
            background-image: url("<?php echo $path_image?>/bg2.jpg");
        }
    </style>
</head>
<body>
    <div id = 'wrap'>
        <div class="container">
            <div class="row" id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3" id="sub">
                            <ul>
                                <li>
                                    <?php if (($this->session->userdata('logged_in') == false)) { ?>
                                        <a href="<?php echo base_url()?>home/login">Đăng nhập</a>

                                        <a href="<?php echo base_url()?>home/sign_up">Đăng ký</a>
                                    <?php
                                    } else {
                                        echo "Hello, " . $this->session->userdata('fullname');?>
                                        <a href="<?php echo base_url()?>home/logout">[Thoát]</a>
                                    <?php } ?>
                                    <a href="#"> Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <?php include 'slide_show.php';?>
                    </div>
                </div>
            </div>

            <div class="row" id="menu-bar">
                <div class="col-md-2" id="trang-chu">
                    <a href="<?php echo base_url()?>home"><button type="button" class="btn btn-primary">Trang chủ</button></a>
                </div>
                <div class="col-md-8" id="tim-kiem">
<!--                    <div class="input-group">-->
<!--                        <form action="--><?php //echo base_url()?><!--home/search_data" method="post">-->
<!--                            <input type="text" class="form-control" placeholder="Nhập thông tin cần tìm kiếm..." name="data[title]">-->
<!--                        </form>-->
<!--                    <span class="input-group-btn">-->
<!--                        <button class="btn btn-default" type="button" name="btn-search">Tìm kiếm</button>-->
<!--                    </span>-->
<!--                    </div>-->
                    <form id="search" class="form-inline" action="<?php echo base_url()?>home/search_data" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập thông tin cần tìm kiếm..." name="title">
                        </div>
                        <button type="submit" class="btn btn-default" id="btn-search">Tìm kiếm</button>
                    </form>
                </div>


                <div class="col-md-2" id="btn-upload">
                    <a href="<?php echo base_url()?>home/upload"><button type="button" class="btn btn-primary">Upload</button></a>
                </div>
            </div>

            <div class="row" id="content">


                    <div class="col-md-3" id="menu-left">
                            <div class="row">
                                <div id="title">
                                    <p class="bg-primary">Thể loại</p>
                                </div>
                            </div>

                            <div class="row" id="show_ct">
                                <?php include 'show_category.php';?>
                            </div>
                    </div>

                    <div class="col-md-9" id="main-content">
                        <?php echo $this->load->view($frontend);?>
                    </div>
            </div>



            <div class="row" id="footer">
                <p class="bg-primary">&copy CopyRight by Bac Truong Van</p>
            </div>
        </div>
    </div>
</body>
</html>