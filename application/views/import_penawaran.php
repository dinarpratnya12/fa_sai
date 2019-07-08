<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SAI</title>
    <!-- Favicon-->
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />

    <!-- Google Fonts -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/css.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/icon.css');?>" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/node-waves/waves.css');?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/morrisjs/morris.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/style.css');?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/AdminBSBMaterialDesign-master/css/themes/all-themes.css');?>" rel="stylesheet" />

</head>

<body class="theme-orange">

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
            <img style="max-width:230px;"  src="<?php echo base_url('assets/fa.png');?>" alt="">
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
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?></div>
                    <div class="email"><?php echo $this->session->userdata('email');?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="<?php echo site_url('import/index');?>">
                            <i class="material-icons">swap_calls</i>
                            <span>Import Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- DASHBOARD -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart">
                                <div class="container">

                            <!-- Import -->
                                <div class="row">
                                    <div class="container-fluid">
                                        <h3>Form Import</h3>
                                        <hr>
                                            <!-- Form penawaran -->
                                            <div class="col-lg-6">
                                                <div style="background-color: #f2f2f2; padding: 10px">
                                                    <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format Penawaran</a>
                                                    <br>
                                                    <br>
                                                    <form method="post" action="<?php echo site_url("Import/form2"); ?>" enctype="multipart/form-data">
                                                        <input type="file" name="file">
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn btn-primary" name="preview2" value="Preview2">Preview</button>
                                                    </form>
                                                    <?php if(!isset($_POST['preview2'])): ?>
                                                    <center><h4>Data Penawaran</h4></center>
                                                    <br>
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-striped table-bordered text2" cellpadding="" id="example2" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="th-sm">Buppin Number</th>
                                                                    <th class="th-sm">Supplier</th>
                                                                    <th class="th-sm">Price</th>
                                                                    <!-- <th class="th-sm">Periode</th> -->
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                if( ! empty($data_penawaran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                                                    foreach($data_penawaran as $data){ // Lakukan looping pada variabel siswa dari controller
                                                                        echo "<tr>";
                                                                        // $str3 = $data->buppin_number;
                                                                        // $str4 = str_replace("-","",$str);
                                                                        echo "<td>".$data->GCT_COMP_NO."</td>";
                                                                        echo "<td>".$data->SPPLY_NM."</td>";
                                                                        echo "<td>".$data->FIS_PRICE."</td>";
                                                                        // echo "<td>".$data->PERIOD."</td>";
                                                                        echo "</tr>";
                                                                    }
                                                                }else{ // Jika data tidak ada
                                                                    echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                                                }
                                                            ?>
                                                        </table>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php
                                                        if(isset($_POST['preview2'])){ // Jika user menekan tombol Preview pada form
                                                            if(isset($upload_error)){ // Jika proses upload gagal
                                                                echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                                                die; // stop skrip
                                                            }
                                                            echo "<form method='post' action='".site_url("Import/import2")."'>";
                                                    ?>
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-bordered text2" cellpadding="" id="example2">
                                                            <thead>
                                                                <th>Buppin Number</th>
                                                                <th>Supplier</th>
                                                                <th>Price(@1)</th>
                                                                <th>Periode</th>
                                                            </thead>
                                                            <?php
                                                                $numrow = 1;
                                                                $kosong = 0;
                                                                // unset($sheet[1]);
                                                                foreach($sheet as $row){
                                                                    // Ambil data pada excel sesuai Kolom
                                                                    $GCT_COMP_NO = $row['A'];
                                                                    $SPPLY_NM = $row['P'];
                                                                    $FIS_PRICE = $row['I'];
                                                                    // $PERIOD = $row['AC'];

                                                                    if($numrow > 1){
                                                                        echo "<tr>";
                                                                        echo "<td>".$GCT_COMP_NO."</td>";
                                                                        echo "<td>".$SPPLY_NM."</td>";
                                                                        echo "<td>".$FIS_PRICE."</td>";
                                                                        // echo "<td>".$PERIOD."</td>";
                                                                        echo "</tr>";
                                                                    }
                                                                    $numrow++; // Tambah 1 setiap kali looping
                                                                                }
                                                                    echo "</table>";
                                                                    if($kosong > 0){
                                                                ?>
                                                                <script>
                                                                    $(document).ready(function(){
                                                                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                                                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                                                                        $("#kosong").show(); // Munculkan alert validasi kosong
                                                                    });
                                                                </script>

                                                                <?php
                                                                    }else{ // Jika semua data sudah diisi
                                                                        echo "<hr>";

                                                                        // Buat sebuah tombol untuk mengimport data ke database
                                                                        echo "<button class='btn btn-primary' type='submit' name='import'>Import</button>";
                                                                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                                                        echo "<a href='".site_url("Import/index")."' class='btn btn-default'>Cancel</a>";
                                                                    }
                                                                    echo "</form>";
                                                                }
                                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Import -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/jquery-countto/jquery.countTo.js');?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/raphael/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/morrisjs/morris.js');?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/chartjs/Chart.bundle.js');?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/flot-charts/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/flot-charts/jquery.flot.resize.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/flot-charts/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/flot-charts/jquery.flot.categories.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/plugins/flot-charts/jquery.flot.time.js');?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/admin.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/pages/index.js');?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/demo.js');?>"></script>
</body>

</html>
