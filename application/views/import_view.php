<html>
<head>
	<title>Form Import</title>
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
	<!-- Load File jquery.min.js yang ada difolder js -->



	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">

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
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img class="navbar-brand" src="<?php echo base_url('assets/yasaki.png');?>" >
                        <!-- <a class="navbar-brand" href="">LOGO</a> -->
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                            <!--ACCESS MENUS FOR ADMIN-->
                            <?php if($this->session->userdata('level')==='1'):?>
                                <li><a href="<?php echo site_url('page/index');?>">Dashboard</a></li>
                                <li class="active"><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                                <li><a href="#">List Data</a></li>
                                <li><a href="<?php echo site_url('crud/index');?>">Manage People</a></li>
                            <!--ACCESS MENUS FOR STAFF-->
                            <?php elseif($this->session->userdata('level')==='2'):?>
                                <li><a href="<?php echo site_url('page/staff');?>">Dashboard</a></li>
                                <li class="active"><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                                <li><a href="#">List Data</a></li>
                            <!--ACCESS MENUS FOR AUTHOR-->
                            <?php else:?>
                                <li class=""><a href="<?php echo site_url('page/index');?>">Dashboard</a></li>
                                <li><a href="#">List Data</a></li>
                            <?php endif;?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->

                </div><!--/.container-fluid -->
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="container-fluid">
            <h3>Form Import</h3>
            <hr>
            <div class="row">
                <!-- Form invoice -->
                <div class="col-lg-6">
                    <div style="background-color: #f2f2f2; padding: 10px">
                        <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
                        <br>
                        <br>
                        <br>
                        <form method="post" action="<?php echo site_url("Import/form"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
                        </form>
                        <br>
                        <br>
                        <?php if(!isset($_POST['preview'])): ?>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-bordered text" cellpadding="" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Buppin Number</th>
                                        <th>Supplier</th>
                                        <th>Price Invoice(@1)</th>
                                        <th>Periode</th>
                                    </tr>
                                </thead>
                                <?php
                                    if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td>".$data->buppin_number."</td>";
                                            echo "<td>".$data->supplier."</td>";
                                            echo "<td>".$data->price_invoicesatu."</td>";
                                            echo "<td>".$data->periode."</td>";
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
                            if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
                                if(isset($upload_error)){ // Jika proses upload gagal
                                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                    die; // stop skrip
                                }
                                echo "<form method='post' action='".site_url("Import/import")."'>";
                        ?>
                        <div class="table-responsive-sm">
                            <table class="table table-bordered text" cellpadding="" id="example">
                                <thead>
                                    <th>Buppin Number</th>
                                    <th>Supplier</th>
                                    <th>Price Invoice (@1)</th>
                                    <th>Periode</th>
                                </thead>
                                <?php
                                    $numrow = 1;
                                    $kosong = 0;
                                    unset($sheet[1]);

                                    foreach($sheet as $row){
                                    // Ambil data pada excel sesuai Kolom
                                        $buppin_number = $row['C'];
                                        $supplier = $row['E'];
                                        $price_invoicesatu = $row['H'];
                                        $periode = $row['N'];

                                        if($numrow > 1){
                                            if($row['C'] != "" || $row['C'] != null){

                                                echo "<tr>";
                                                echo "<td>".$buppin_number."</td>";
                                                echo "<td>".$supplier."</td>";
                                                echo "<td>".$price_invoicesatu."</td>";
                                                echo "<td>".$periode."</td>";
                                                echo "</tr>";
                                            }
                                        }
                                        $numrow++; // Tambah 1 setiap kali looping
                                    }
                                    echo "</table></div>";

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
                    <!-- </div> -->
                </div>

                    <!-- Form penawaran -->
                <div class="col-lg-6">
                    <div style="background-color: #f2f2f2; padding: 10px">
                        <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
                        <br>
                        <br>
                        <br>
                        <form method="post" action="<?php echo site_url("Import_penawaran/form"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" name="preview2" value="Preview">Preview</button>
                        </form>
                        <br>
                        <br>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-bordered text2" cellpadding="" id="example2" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">Buppin Number</th>
                                        <th class="th-sm">Supplier</th>
                                        <th class="th-sm">Price Penawaran(@1)</th>
                                        <th class="th-sm">Periode</th>
                                    </tr>
                                </thead>
                                <?php
                                    if( ! empty($data_penawaran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_penawaran as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td>".$data->GCT_COMP_NO."</td>";
                                            echo "<td>".$data->SPPLY_NM."</td>";
                                            echo "<td>".$data->FIS_PRICE."</td>";
                                            echo "<td>".$data->PERIOD."</td>";
                                            echo "</tr>";
                                        }
                                    }else{ // Jika data tidak ada
                                         echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                        <?php
                            if(isset($_POST['preview2'])){ // Jika user menekan tombol Preview pada form
                                if(isset($upload_error)){ // Jika proses upload gagal
                                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                    die; // stop skrip
                                }
                                echo "<form method='post' action='".site_url("Import_penawaran/import")."'>";
                        ?>
                        <div class="table-responsive-sm">
                            <table class="table table-bordered text2" cellpadding="" id="example2">
                                <thead>
                                    <th>Buppin Number</th>
                                    <th>Supplier</th>
                                    <th>Price Penawaran(@1)</th>
                                    <th>Periode</th>
                                </thead>
                                <?php
                                    $numrow = 1;
                                    $kosong = 0;
                                    unset($sheet[1]);
                                    foreach($sheet as $row){
                                        // Ambil data pada excel sesuai Kolom
                                        $GCT_COMP_NO = $row['A'];
                                        $SPPLY_NM = $row['P'];
                                        $FIS_PRICE = $row['I'];
                                        $PERIOD = $row['AC'];

                                        if($numrow > 1){
                                            echo "<tr>";
                                            echo "<td>".$GCT_COMP_NO."</td>";
                                            echo "<td>".$SPPLY_NM."</td>";
                                            echo "<td>".$FIS_PRICE."</td>";
                                            echo "<td>".$PERIOD."</td>";
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
                                            echo "<a href='".site_url("Import_penawaran/index")."' class='btn btn-default'>Cancel</a>";
                                        }
                                        echo "</form>";
                                    }
                                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class= "container">
    <div class="row">
        <div class="form-group">
            <select class="form-control" name="periode">
                <option class="hidden" selected disabled>Pilih Periode</option>
                <?php
                    $periode = $this->db->select('*')->from('data_penawaran')->group_by('PERIOD')->get()->result();
                    foreach($periode as $row) {?>
                <option value="<?= $row->PERIOD;?>" ><?= $row->PERIOD;?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/jquery-1.12.4.js'); ?>"></script>
<script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
    $(document).ready(function() {
        $('#example2').DataTable();
    } );
</script>
</body>
</html>
