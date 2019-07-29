<!DOCTYPE html>
<html>

<head>
    <title>Compare Invoice Quotation</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Favicon-->
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />

    <!-- Google Fonts -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/css.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/icon.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/style.css');?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/themes/all-themes.css');?>" rel="stylesheet" />

    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Load File jquery.min.js yang ada difolder js -->

    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/export/jquery.dataTables.min.css');?>">
    <link href="<?php echo base_url('assets/export/buttons.dataTables.min.css');?>"><div class="row">

    <script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
    </script>

    <!-- Style -->
    <style>
        .table-condensed{
            font-size: 10px;
        }
        .datatable{
            font-family:Verdana;
            font-size:2px;
        }
        .text{
            font-family:Verdana;
            font-size:12px;
        }
        .text2{
            font-family:Verdana;
            font-size:12px;
        }
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
        }

        .warnain {
            border-collapse: separate;
            /* border-style: solid; */
            border-color: #4d4a46;
        }

    </style>

</head>

<body class="theme-orange" style="background-color: #f0f0f0;">

    <!-- Top Bar -->
    <nav class="navbar" style="position:fixed">
        <div class="container-fluid">
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
                    <div class="name" style="font-size:20px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name');?></div>
                    <div class="username" style="font-size:12px;color:#f0f0f0"><?php echo 'Username : '.$this->session->userdata('username');?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="<?php echo site_url('import/index');?>">
                            <i class="material-icons">file_upload</i>
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