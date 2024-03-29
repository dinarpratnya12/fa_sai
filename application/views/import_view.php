<div style="background-color: #f0f0f;">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <h2 style="padding: 15px">Import Form</h2>
                    <div class="row" style="padding: 15px">
                        <!-- Form invoice -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div style="background-color: #fff;">
                                    <div class="header">
                                        <h3>Upload Invoice</h3>
                                    </div>
                                    <div class="body">
                                        <form method="post" action="<?php echo site_url("Import/form"); ?>" enctype="multipart/form-data">
                                            <input type="file" name="file">
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
                                        </form>
                                        <?php if(!isset($_POST['preview'])): ?>
                                        <br>
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
                                                    <th>Invoice Number</th>
                                                    <th>Supplier</th>
                                                    <th>Invoice Value</th>
                                                    <th>QTY</th>
                                                    <th>Price @pcs</th>
                                                    <th>Tanggal</th>
                                                </thead>
                                                <?php
                                                    $numrow = 1;
                                                    $kosong = 0;
                                                    $total = 0;
                                                    // unset($sheet[1]);
                                                    foreach($sheet as $row){
                                                        if($row['Q'] > 0 && $row['J'] > 0){
                                                            $total = (double)$row['Q']/(double)$row['J'];
                                                        }


                                                    // Ambil data pada excel sesuai Kolom
                                                        $ProductID = $row['E'];
                                                        $InvoiceNumber = $row['O'];
                                                        $supplier = $row['V'];
                                                        $InvoiceValue = $row['Q'];
                                                        if(stripos($InvoiceValue,".") !== false){
                                                            $InvoiceValue = number_format($InvoiceValue,2);
                                                        }
                                                        $QuantityUnit = $row['J'];
                                                        $kalkulasi_per_pcs = $total;
                                                        $InvoiceDate = $row['P'];

                                                        if($numrow > 1){
                                                            if($row['E'] != "" || $row['E'] != null){

                                                                echo "<tr>";
                                                                echo "<td>".$ProductID."</td>";
                                                                echo "<td>".$InvoiceNumber."</td>";
                                                                echo "<td>".$supplier."</td>";
                                                                echo "<td>".$InvoiceValue."</td>";
                                                                echo "<td>".$QuantityUnit."</td>";
                                                                echo "<td>".$total."</td>";
                                                                echo "<td>".$InvoiceDate."</td>";
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
                            </div>
                        </div>
                    <!-- Form penawaran -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div style="background-color: #fff;">
                                <div class="header">
                                    <h3>Upload Penawaran</h3>
                                </div>
                                <div class="body">
                                    <form method="post" action="<?php echo site_url("Import/form2"); ?>" enctype="multipart/form-data">
                                        <input type="file" name="file">
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="preview2" value="Preview2">Preview</button>
                                    </form>
                                    <?php if(!isset($_POST['preview2'])): ?>
                                    <br>
                                    <?php endif ?>
                                    <?php
                                        if(isset($_POST['preview2'])){ // Jika user menekan tombol Preview pada form
                                            if(isset($upload_error)){ // Jika proses upload gagal
                                                echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                                die; // stop skrip
                                            }
                                            echo "<form method='post' action='".site_url("Import/import2")."'>";
                                    ?>

                                    <div class="table-responsive">
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

