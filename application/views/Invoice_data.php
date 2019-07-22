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


    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">

</head>
<body>
    <div class="container" style="margin-top:0px !important;">
        <div class="row">
            <div class="container-fluid" >
                    <h3>LIST DATA INVOICE</h3>
                    <hr>
                    <div class = "row">
                        <!-- Form invoice -->
                        <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                                <center><h2>Data Invoice</h2></center>
                                <br>
                                <hr>
                                <?php echo form_open('Lihat_data/hapusnumber');?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <br>
                                        <br>
                                        <label>Pilih Invoice Number yang akan dihapus :</label>
                                        <div class="row">
                                        <div class="col-md-11">
                                        <select class="form-control show-tick" name="selectinvoice">
                                            <option selected disabled>-- Pilih Invoice Number --</option>
                                            <option
                                            <?php
                                                $InvoiceNumber = $this->db->query('SELECT DISTINCT data_invoice.InvoiceNumber FROM data_invoice')->result();
                                                foreach($InvoiceNumber as $row) {?>
                                            <option value="<?= $row->InvoiceNumber;?>"><?= $row->InvoiceNumber;?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <div class="col-md-1">
                                            <input type='submit' value="Delete" class='btn  btn-warning fa fa-trash-o'>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <?php echo form_close();?>
                                <br>
                                <div class="table-responsive-sm">
                                <table class="table warnain text" cellpadding="" id="example1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="position: sticky;left:0px;background-color:white;">Invoice Number</th>
                                                <th>Part Number</th>
                                                <th>Supplier</th>
                                                <th>Price @pcs</th>
                                                <th>Currency Code</th>
                                                <th>Qty Invoice</th>
                                                <th>Invoice Value</th>
                                                <th>Unit Code</th>
                                                <th>Order Number</th>
                                                <th>Tanggal</th>
                                                <th>Periode</th>
                                                <th style="position: sticky;right:0px;background-color:white;">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                                foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                                    echo "<tr>";
                                                    echo "<td style='position: sticky;left:0px; background-color:white'>".$data->InvoiceNumber."</td>";
                                                    echo "<td>".$data->ProductID."</td>";
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
                                                    if(stripos($data->kalkulasi_per_pcs,".") !== false){
                                                        echo "<td>".number_format($data->kalkulasi_per_pcs,2)."</td>";
                                                    }else{
                                                        echo "<td>".$data->kalkulasi_per_pcs."</td>";
                                                    }
                                                    echo "<td>".$data->CurrencyCode."</td>";
                                                    echo "<td>".$data->QuantityUnit."</td>";
                                                    if(stripos($data->InvoiceValue,".") !== false){
                                                        echo "<td>".number_format($data->InvoiceValue,2)."</td>";
                                                    }else{
                                                        echo "<td>".$data->InvoiceValue."</td>";
                                                    }
                                                    echo "<td>".$data->UnitCode."</td>";
                                                    echo "<td>".$data->OrderNumber."</td>";
                                                    echo "<td>".$data->InvoiceDate."</td>";
                                                    echo "<td>".$data->periode."</td>";
                                                    echo "<td style='position: sticky;right:0px; background-color:white'>
                                                    <a href='javascript:void(0)' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter2'>
                                                    Edit
                                                    </a>
                                                    <a href='#' onclick='delete_c(".$data->id_.")' class='btn  btn-warning fa fa-trash-o'>
                                                    Delete</a></td>";
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

        <script src="<?php echo base_url('assets/jquery-1.12.4.js'); ?>"></script>
        <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>

        <?php if(validation_errors() != null){ ?>

        <script>
          $('#exampleModalCenter').modal('show');
        </script>
        <?php } ?>
        <script>
            $(document).ready(function() {
                $('#example1 thead tr').clone(true).appendTo( '#example1 thead' );
                $('#example1 thead tr:eq(1) th').each( function (i) {
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
                var table = $('#example1').DataTable(
                    {
                        "scrollY": "400px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false,
                    }
                );
            } );
            function delete_c(id){

                var url = '<?php echo base_url('lihat_data/hapus');?>/'+id
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                 .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = url;
                    } else {
                        swal({
                            title: "Data Aman!",
                            icon: "info",
                        })
                    }
            });
        }
        </script>
    </body>
</html>
