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

        .warnain {
            border-collapse: separate;
            /* border-style: solid; */
            border-color: #4d4a46;
        }
    </style>
</head>
<body>
<link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />

    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">


<!-- <script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script> -->
</head>
<body>

<div class="container" style="margin-top:0px !important;">
    <div class="row">
        <div class="container-fluid">
            <h3>LIST DATA INVOICE</h3>
            <hr>
            <div class="row">
                <!-- Form invoice -->
                <div class="col-lg-11">
                    <div style="background-color: #ffffff; padding: 10px">
                        <center><h4>Data Invoice</h4></center>
                        <br>
                        <div class="table-responsive-sm">
                            <table class="table text warnain" cellpadding="" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Buppin Number</th>
                                        <th>Supplier</th>
                                        <th>Kind</th>
                                        <th>Price</th>
                                        <th>Qty Invoice</th>
                                        <th>Periode</th>
                                    </tr>
                                </thead>
                                <?php
                                    if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td>".$data->invoice_number."</td>";
                                            $str = $data->buppin_number;
                                            $str2 = str_replace("-","",$str);
                                            echo "<td>".$str2."</td>";
                                            $strs = $data->supplier;
                                            $strs = str_replace("IRC INOAC","PASI",$strs);
                                            $strs = str_replace("NIDEC","PASI",$strs);
                                            $strs = str_replace("NIFCO","PASI",$strs);
                                            $strs = str_replace("PLASSES","PASI",$strs);
                                            $strs = str_replace("PT. CATURINDO AGUNG","PASI",$strs);
                                            $strs = str_replace("PT. INDONESIA KYOUEI","PASI",$strs);
                                            $strs = str_replace("PT. KMK PLASTICS IND","PASI",$strs);
                                            $strs = str_replace("PT. KOJIMA INDONESIA","PASI",$strs);
                                            $strs = str_replace("PT. NANBU PLASTICS I","PASI",$strs);
                                            $strs = str_replace("PT. OGATA INDONESIA","PASI",$strs);
                                            $strs = str_replace("PT. PIOLAX INDONESIA","PASI",$strs);
                                            $strs = str_replace("PT. SATO SEIKI","PASI",$strs);
                                            $strs = str_replace("PT. TENMA INDONESIA","PASI",$strs);
                                            $strs = str_replace("SCHLEMMER","PASI",$strs);
                                            $strs = str_replace("TOKAI RIKA JP","PASI",$strs);
                                            $strs = str_replace("YAMANASHI INDONESIA","PASI",$strs);
                                            $strs = str_replace("TAP-AW","TAP",$strs);
                                            $strs = str_replace("TAP-INJ","TAP",$strs);
                                            $strs = str_replace("TAP-VT","TAP",$strs);
                                            echo "<td>".$strs."</td>";
                                            echo "<td>".$data->kind."</td>";
                                            echo "<td>".$data->price_total."</td>";
                                            echo "<td>".$data->qty_invoice."</td>";
                                            echo "<td>".$data->periode."</td>";
                                            echo "</tr>";
                                        }
                                    }else{ // Jika data tidak ada
                                        echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
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
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false
            }
        );
    } );
</script>
</body>
</html>
