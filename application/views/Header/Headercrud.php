<!DOCTYPE html>
<html>

<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Manage User</title>

    <!-- Favicon-->
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />

    <!-- Google Fonts -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/css.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/icon.css');?>" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/style.css');?>" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/morrisjs/morris.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/style.css" rel="stylesheet');?>">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/themes/all-themes.css');?>" rel="stylesheet" />

    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Load File jquery.min.js yang ada difolder js -->

    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/export/jquery.dataTables.min.css');?>">
    <link href="<?php echo base_url('assets/export/buttons.dataTables.min.css');?>"><div class="row">

</head>
<body class="theme-orange" >
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-orange">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
<!-- Top Bar -->
<nav class="navbar" style="position:fixed">
    <div class="container-fluid" >
        <div class="navbar-header">
        <img style="max-width:180px;"  src="<?php echo base_url('assets/fa.png');?>" alt="">
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Profile -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="body">
                            <li>
                                <a href="<?php echo site_url('login/logout');?>">
                                <i class="material-icons">input</i>
                                <span>Log Out</span>
                                </a>
                            </li>
                        </li>
                    </ul>
                </li>
                <!-- #END# Profile -->
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/images/user.png');?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name');?></div>
                <div class="username" style="font-size:12px;color:#f0f0f0"><?php echo 'Username : '.$this->session->userdata('username');?></div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                    <a href="<?php echo site_url('awal/index');?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('import/index');?>">
                        <i class="material-icons">swap_calls</i>
                        <span>Import Data</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>List Data</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo site_url('lihat_data/invoice');?>" class="menu-toggle">
                                <span>Data Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('lihat_data/penawaran');?>" class="menu-toggle">
                                <span>Data Penawaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('lihat_data/supsai');?>">
                        <i class="material-icons">assignment</i>
                        <span>List Supplier</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('compare/index');?>">
                        <i class="material-icons">swap_horiz</i>
                        <span>Compare Data</span>
                    </a>
                    </li>
                <li>
                    <a href="<?php echo site_url('crud/index');?>">
                        <i class="material-icons">settings</i>
                        <span>Manage People</span>
                    </a>
                </li>
                <!-- <ul class="list">
                    <li class="header">More Option</li>
                        <a href="#">
                            <i class="material-icons">delete</i>
                            <span>Delete All Data</span>
                        </a>
                    </li>
                </ul> -->
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a>PT. Surabaya Autocomp Indonesia</a>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<!-- DASHBOARD -->
<div style="background-color: #fff;">
    <section class="content">
        <div class="container-fluid">