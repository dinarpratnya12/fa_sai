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
                <div class="container-fluid">
                    <h3>LIST DATA INVOICE</h3>
                    <hr>
                    <div class="row">
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
                                                $invoice_number = $this->db->query('SELECT DISTINCT data_invoice.invoice_number FROM data_invoice')->result();
                                                foreach($invoice_number as $row) {?>
                                            <option value="<?= $row->invoice_number;?>"><?= $row->invoice_number;?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <div class="col-md-1">
                                        <input type='submit' value="Delete" class='btn  btn-warning fa fa-trash-o'>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                    </div>
                                </div>

                                <?php echo form_close();?>
                                <br>
                                <div class="table-responsive-sm">
                                    <table class="table text warnain" cellpadding="" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Invoice Number</th>
                                                <th>Part Number</th>
                                                <th>Supplier</th>
                                                <th>Kind</th>
                                                <th>Price</th>
                                                <th>Qty Invoice</th>
                                                <th>Periode</th>
                                                <th style="position: sticky;right:0px;background-color:white;">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                                foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                                    echo "<tr>";
                                                    echo "<td>".$data->invoice_number."</td>";
                                                    echo "<td>".$data->buppin_number."</td>";
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
                $('#example thead tr').clone(true).appendTo( '#example thead' );
                $('#example thead tr:eq(1) th').each( function (i) {
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
                var table = $('#example').DataTable(
                    {
                        "scrollY": "400px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false
                    }
                );
                // $('#deleteaku').on('click', function(){
                //     var a = $('[name=selectinvoice]').val();
                //     if(a != null){
                //         var url = '<?php echo base_url('lihat_data/hapus');?>/'+id
                //     swal({
                //         title: "Are you sure?",
                //         text: "Once deleted, you will not be able to recover this imaginary file!",
                //         icon: "warning",
                //         buttons: true,
                //         dangerMode: true,
                //     })
                //     .then((willDelete) => {
                //         if (willDelete) {
                //             window.location.href = url;
                //         } else {
                //             swal({
                //                 title: "Data Aman!",
                //                 icon: "info",
                //             })
                //         }
                //     });
                //     }
                // })
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
