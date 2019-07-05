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
<link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />

    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">


<script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script>
</head>
<body>

<div class="container" style="margin-top:0px !important;">
    <div class="row">
        <div class="container-fluid">
            <h3>Form Import</h3>
            <hr>
            <div class="row">
                <!-- Form invoice -->
                <div class="col-lg-6">
                    <div style="background-color: #f2f2f2; padding: 10px">
                        <a href="<?php echo base_url("excel/Invoice File.xlsx"); ?>">Download Format Invoice</a>
                        <br>

                        <br>
                        <form method="post" action="<?php echo site_url("Import/form"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
                        </form>
                        <?php if(!isset($_POST['preview'])): ?>

                        <?php endif ?>
                        <?php
                            if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
                                if(isset($upload_error)){ // Jika proses upload gagal
                                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload

                                }
                                echo "<form method='post' action='".site_url("Import/import")."'>";
                        ?>
                        <?php if(isset($sheet)){?>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-bordered text" cellpadding="" id="example">
                                <thead>
                                    <th>Buppin Number</th>
                                    <th>Supplier</th>
                                    <th>Price</th>
                                    <th>Periode</th>
                                </thead>
                                <?php
                                    $numrow = 1;
                                    $kosong = 0;
                                    // unset($sheet[1]);

                                    foreach($sheet as $row){
                                        $qty_int = (int)$row['D'];
                                        $perseribu_int = (int)$row['G'];
                                        $total =  $perseribu_int/1000*$qty_int;

                                    // Ambil data pada excel sesuai Kolom
                                        $buppin_number = $row['C'];
                                        $supplier = $row['E'];
                                        $price_total = $total;
                                        // $periode = $row['I'];

                                        if($numrow > 1){
                                            if($row['C'] != "" || $row['C'] != null){

                                                echo "<tr>";
                                                echo "<td>".$buppin_number."</td>";
                                                echo "<td>".$supplier."</td>";
                                                echo "<td>".$price_total."</td>";
                                                // echo "<td>".$periode."</td>";
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
                        <?php } ?>
                </div>
                <?php if(!isset($_POST['preview'])){ ?>
                </div>
                <?php } ?>


                <!-- Form penawaran -->
                <div class="col-lg-6">
                    <div style="background-color: #f2f2f2; padding: 10px">
                        <a href="<?php echo base_url("excel/Penawaran File.xlsx"); ?>">Download Format Penawaran</a>
                        <br>

                        <br>
                        <form method="post" action="<?php echo site_url("Import/form2"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" name="preview2" value="Preview2">Preview</button>
                        </form>
                        <?php if(!isset($_POST['preview2'])): ?>
                        
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
                                        $PERIOD = $row['AC'];
                                        if($row['A'] != ""){
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
</div>
<div class="row">
<br>
<div class= "container">
    <div class="col-lg-12"></div>
    <div class="col-lg-12">
    <div style="background-color: #f2f2f2; padding: 10px">
    <br>
    <center>Pilih periode yang akan anda compare :</center>
    <br>
        <div class="">
        <br>
            <form method="post">
            <select class="form-control" name="periode">
                <option class="hidden" selected disabled>Pilih Periode</option>
                <?php
                    $periode = $this->db->query('SELECT DISTINCT data_penawaran.PERIOD FROM data_penawaran,data_invoice')->result();
                    foreach($periode as $row) {?>
                <option value="<?= $row->PERIOD;?>" ><?= $row->PERIOD;?></option>
                <?php } ?>
            </select>
            <br>
            <br>
            <input type="hidden" name="compare" value="Compare">
            <center><button type="submit" class="btn btn-success">Submit</button></center>
            </form>
            <br>
            <br>
            <br>

            <?php if(isset($_POST['compare'])){ ?>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Buppin Number Invoice</th>
                        <th>Supplier</th>
                        <th>Price Invoice</th>
                        <th>Price Penawaran</th>
                        <th>Beda Komper</th>
                        <th>Ket</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data_komper as $row):
                    $no++ ?>
                        <tr>
                            <td><?=$no?>
                            <td><?=$row->buppin_number ?></td>
                            <td><?=$row->supplier ?></td>
                            <td><?=$row->price_invoicesatu ?></td>
                            <td><?=$row->BASE_PRICE ?></td>
                            <td>
                                <?php
                                $sisa = $row->price_invoicesatu - $row->BASE_PRICE;
                                $str3 = str_replace("-","",$sisa);
                                if($sisa > 0){
                                    echo "".$sisa;
                                }else if($sisa < 0){
                                    echo "".$str3;
                                }else{
                                    echo "0";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $sisa = $row->price_invoicesatu - $row->BASE_PRICE;
                                $str3 = str_replace("-","",$sisa);
                                if($sisa > 0){
                                    echo "Invoice Lebih Mahal";
                                }else if($sisa < 0){
                                    echo "Invoice Lebih Murah";
                                }else{
                                    echo "Sama";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <tbody>
            </table>
            <?php } ?>


        </div>
    </div>
    </div>
</div>
</div>

<script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable(
            {
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            }
        );

    } );
</script>
<script>
    $(document).ready(function() {
        $('#example2').DataTable(
            {
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            }
        );
    } );
</script>
</body>
</html>
