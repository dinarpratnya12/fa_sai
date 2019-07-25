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
                                <?php echo form_open('Lihat_data/hapusnumber',['id'=>'form-hapusnumber']);?>
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
                                        <input type="hidden" value="Delete" name="Delete">
                                        <div class="col-md-1">
                                            <button type="button" class='btn  btn-warning' id="btn-submit-hapusnumber">delete</button>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <?php echo form_close();?>
                                <br>
                                <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambah Invoice
                                </a>

                                <!-- Modal Add Invoice-->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLongTitle">Tambah User</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                <?php echo form_open('lihat_data/tambahinvoice');?>
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Invoice Number : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="invoicenumber" class="form-control" value="<?php echo set_value('invoicenumber'); ?>"/>
                                                        <?php echo form_error('invoicenumber'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Product ID : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="productid" id="productid" class="form-control" required/>
                                                        <?php echo form_error('productid'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Supplier :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="supplier" id="supplier" class="form-control" required/>
                                                        <?php echo form_error('supplier'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Currency Code :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="currencycode" id="currencycode" class="form-control" required/>
                                                        <?php echo form_error('currencycode'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Quantity Unit : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="quantityunit" id="quantityunit" class="form-control" required/>
                                                        <?php echo form_error('quantityunit'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Invoice Value :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="invoicevalue" id="invoicevalue" class="form-control" required/>
                                                        <?php echo form_error('invoicevalue'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Unit Code : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="unitcode" id="unitcode" class="form-control" required/>
                                                        <?php echo form_error('unitcode'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Ordernumber :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="ordernumber" id="ordernumber" class="form-control" required/>
                                                        <?php echo form_error('Ordernumber'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Invoice Date :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="date" name="invoicedate" id="invoicedate" class="form-control" required/>
                                                        <?php echo form_error('invoicedate'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Add Data -->

                                <div class="table-responsive-sm">
                                <table class="table warnain text" cellpadding="" id="example1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="position: sticky;left:0px;background-color:white;">Part Number</th>
                                                <th>Invoice Number</th>
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
                                                    echo "<td style='position: sticky;left:0px; background-color:white'>".$data->productid."</td>";
                                                    echo "<td>".$data->invoicenumber."</td>";
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
                                                    echo "<td>".$data->currencycode."</td>";
                                                    echo "<td>".$data->quantityunit."</td>";
                                                    if(stripos($data->invoicevalue,".") !== false){
                                                        echo "<td>".number_format($data->invoicevalue,2)."</td>";
                                                    }else{
                                                        echo "<td>".$data->invoicevalue."</td>";
                                                    }
                                                    echo "<td>".$data->unitcode."</td>";
                                                    echo "<td>".$data->ordernumber."</td>";
                                                    echo "<td>".$data->invoicedate."</td>";
                                                    echo "<td>".$data->periode."</td>";
                                                    echo "<td style='position: sticky;right:0px; background-color:white'>
                                                    <a href='javascript:void(0)' class='item_edit1' data-id_='".$data->id_."' data-productid='".$data->productid."' data-quantityunit='".$data->quantityunit."' data-unitcode='".$data->unitcode."' data-invoicenumber='".$data->invoicenumber."' data-invoicedate='".$data->invoicedate."' data-invoicevalue='".$data->invoicevalue."' data-currencycode='".$data->currencycode."' data-ordernumber='".$data->ordernumber."' data-supplier='".$data->supplier."' data-kalkulasi_per_pcs='".$data->kalkulasi_per_pcs."' data-periode='".$data->periode."' data-toggle='modal' data-target='#exampleModalCenter1'>
                                                    <button class='btn  btn-primary fa fa-trash-o' >Edit</button></a>
                                                    <a href='#' onclick='delete_c(".$data->id_.")' class='btn  btn-warning fa fa-trash-o'>
                                                    Delete</a></td>";
                                                    echo "</tr>";
                                                }
                                            }else{ // Jika data tidak ada
                                                echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                            }
                                        ?>
                                    </table>
                                    <!-- Edit -->
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Form Edit</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                    <?php echo form_open('lihat_data/editinvoice');?>
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Number : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="hidden" name="id_" id="id_" class="form-control"/>
                                                            <input type="text" name="invoicenumber" id="invoicenumber" class="form-control" required/>
                                                            <?php echo form_error('invoicenumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Product ID :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="productid" id="productid" class="form-control" required/>
                                                            <?php echo form_error('productid'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Supplier :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="supplier" id="supplier" class="form-control" required/>
                                                            <?php echo form_error('supplier'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Kalkulasi @pcs :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="kalkulasi_per_pcs" id="kalkulasi_per_pcs" class="form-control" readonly/>
                                                            <?php echo form_error('kalkulasi_per_pcs'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Currency Code :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="currencycode" id="currencycode" class="form-control" readonly/>
                                                            <?php echo form_error('currencycode'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Quantity Unit : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="quantityunit" id="quantityunit" class="form-control" required/>
                                                            <?php echo form_error('quantityunit'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Value :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="invoicevalue" id="invoicevalue" class="form-control" required/>
                                                            <?php echo form_error('invoicevalue'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Unit Code : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="unitcode" id="unitcode" class="form-control" required/>
                                                            <?php echo form_error('unitcode'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Ordernumber :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="ordernumber" id="ordernumber" class="form-control" required/>
                                                            <?php echo form_error('Ordernumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Date :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="date" name="invoicedate" id="invoicedate" class="form-control" required/>
                                                            <?php echo form_error('invoicedate'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Periode :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="periode" id="periode" class="form-control" readonly/>
                                                            <?php echo form_error('periode'); ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                    <!-- End Edit -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="<?php echo base_url('assets/jquery-1.12.4.js'); ?>"></script> -->
        <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
        <!-- <script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script> -->

        <?php if(validation_errors() != null){ ?>

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
                $('#example1').on('click','.item_edit1',function() {
                    var id_ = $(this).data('id_');

                    var productid = $(this).data('productid');
                    var invoicenumber = $(this).data('invoicenumber');
                    var supplier = $(this).data('supplier');
                    var kalkulasi_per_pcs = $(this).data('kalkulasi_per_pcs');
                    var currencycode = $(this).data('currencycode');
                    var quantityunit = $(this).data('quantityunit');
                    var invoicevalue = $(this).data('invoicevalue');
                    var unitcode = $(this).data('unitcode');
                    var ordernumber = $(this).data('ordernumber');
                    var invoicedate = $(this).data('invoicedate');
                    var periode = $(this).data('periode');



                    $('[name="id_"]').val(id_);
                    $('[name=productid]').val(productid);
                    $('[name="invoicenumber"]').val(invoicenumber);
                    $('[name="supplier"]').val(supplier);
                    $('[name="kalkulasi_per_pcs"]').val(kalkulasi_per_pcs);
                    $('[name="currencycode"]').val(currencycode);
                    $('[name="quantityunit"]').val(quantityunit);
                    $('[name="invoicevalue"]').val(invoicevalue);
                    $('[name="unitcode"]').val(unitcode);
                    $('[name="ordernumber"]').val(ordernumber);
                    $('[name="invoicedate"]').val(invoicedate);
                    $('[name="periode"]').val(periode);

                });
                var table = $('#example1').DataTable(
                    {
                        "scrollY": "400px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false,
                    }
                );

                $('#btn-submit-hapusnumber').on('click',function(){
                    swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#form-hapusnumber').submit();
                    } else {
                        swal({
                            title: "Data Aman!",
                            icon: "info",
                        })
                    }
                });
                });
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
