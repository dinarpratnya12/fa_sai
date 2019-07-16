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
    <!-- <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet"> -->

    <link href="<?php echo base_url('assets/export/jquery.dataTables.min.css');?>">
    <link href="<?php echo base_url('assets/export/buttons.dataTables.min.css');?>">

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
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">
<body>

<div class="container" style="margin-top:0px !important;">
    <div class="row">
        <div class="container-fluid">
            <h2>Compare Form</h2>
            <hr>
            <div class="row">
                <!-- Form invoice -->
                <div class="col-lg-6">
                    <div style="background-color: #fff; padding: 10px">
                    <h3>Upload Invoice</h3>
                    <br>
                        <a href="<?php echo base_url("excel/Invoice File.xlsx"); ?>">Download Format Invoice</a>
                        <br>
                        <br>
                        <form method="post" action="<?php echo site_url("Import/form"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text" cellpadding="" id="example">
                                <thead>
                                    <th>Part Number</th>
                                    <th>Supplier</th>
                                    <th>Price</th>
                                    <th>Tanggal</th>
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
                                        $tanggal = $row['B'];

                                        if($numrow > 1){
                                            if($row['C'] != "" || $row['C'] != null){

                                                echo "<tr>";
                                                echo "<td>".$buppin_number."</td>";
                                                echo "<td>".$supplier."</td>";
                                                echo "<td>".$price_total."</td>";
                                                echo "<td>".$tanggal."</td>";
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
                        <br>
                        <?php } ?>
                </div>
                <?php if(!isset($_POST['preview'])){ ?>

                </div>

                <?php } ?>



                <!-- Form penawaran -->
                <div class="col-lg-6">
                    <div style="background-color: #fff; padding: 10px">
                    <h3>Upload Penawaran</h3>
                    <br>
                        <a href="<?php echo base_url("excel/Penawaran File.xlsx"); ?>">Download Format Penawaran</a>
                        <br>

                        <br>
                        <form method="post" action="<?php echo site_url("Import/form2"); ?>" enctype="multipart/form-data">
                            <input type="file" name="file">
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
                                    <th>Part Number</th>
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
                                        $gct = $row['A'];
                                        $gct_split = str_split($gct,4);
                                        $gct_implode = implode("-",$gct_split);
                                        $GCT_COMP_NO = $gct_implode;
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
                                    <!-- <br>
                                    <br> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

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
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false
            }
        );
    } );
</script>

    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell

             $('#example3 thead tr').clone(true).appendTo( '#example3 thead' );
                $('#example3 thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search( this.value )
                            .draw();
                    }
                } );
                });
            var table = $('#example3').DataTable(
                {
                    "scrollY": "400px",
                    "scrollCollapse": true,
                    "scrollX": true,
                    "paging": false,
                    dom: 'Bfrtip',
                    buttons: [
                        {extend: 'copy', className: 'btn btn-primary'},
                        {extend: 'csv', className: 'btn btn-primary'},
                        {extend: 'excel', className: 'btn btn-primary'},
                        {extend: 'pdf', className: 'btn btn-primary'},
                        {extend: 'print', className: 'btn btn-primary'},
                    ]

                } );


            } );

    </script>

    <script src="<?php echo base_url('assets/css/sweetalert.min.js')?>"></script>
    <?php if($this->session->flashdata('swal') != null){ ?>
    <?php
    $swal_data = $this->session->flashdata('swal');
    $swa = explode('|',$swal_data);
    ?>
        <script>
                swal("<?= $swa[0] ?>", "<?= $swa[1] ?>", "<?= $swa[2] ?>");
        </script>
    <?php } ?>
