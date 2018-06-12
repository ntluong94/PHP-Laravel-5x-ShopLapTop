<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Quản trị website</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">HOMESHOP</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <?php if (isset($_SESSION['admin_name'])): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['admin_name'] ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url() ?>admin/login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                     <?php endif ?>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw fa-dashboard"></i> Bảng điều khiển</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category") ?>"><i class="fa fa-list"></i> Danh mục sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>">
                            <a href="<?php echo modules("product") ?>"><i class="fa fa-database"></i> Sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : '' ?>">
                            <a href="<?php echo modules("admin") ?>"><i class="fa fa-user"></i> Admin</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
                            <a href="<?php echo modules("user") ?>"><i class="fa fa-users"></i> user</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'transaction' ? 'active' : '' ?>">
                            <a href="<?php echo modules("transaction") ?>"><i class="fa fa-archive"></i> Đơn hàng</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'banner' ? 'active' : '' ?>">
                            <a href="<?php echo modules("banner") ?>"><i class="fa fa-paint-brush"></i> Banner</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">