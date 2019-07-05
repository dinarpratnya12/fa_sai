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


<script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script>
</head>
<body>

<div class="container" style="margin-top:0px !important;">
    <div class="row">
        <div class="container-fluid">
            <h3>LIST DATA INVOICE</h3>
            <hr>
            <div class="row">
                <!-- Form invoice -->
                <div class="col-lg-8">
                    <div style="background-color: #fcab42; padding: 10px">
                        <center><h4>Data Invoice</h4></center>
                        <br>
                        <div class="table-responsive-sm">
                            <table class="table text warnain" cellpadding="" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Buppin Number</th>
                                        <th>Supplier</th>
                                        <th>Price</th>
                                        <th>Periode</th>
                                    </tr>
                                </thead>
                                <?php
                                    if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            $str = $data->buppin_number;
                                            $str2 = str_replace("-","",$str);
                                            echo "<td>".$str2."</td>";
                                            echo "<td>".$data->supplier."</td>";
                                            echo "<td>".$data->price_total."</td>";
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
                "scrollCollapse": true,
                "paging": false
            }
        );
    } );
</script>
</body>
</html>
