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
                                                    echo "<td style='position: sticky;left:0px; background-color:white'>".$data->ProductID."</td>";
                                                    echo "<td>".$data->InvoiceNumber."</td>";
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
                                                    echo "<td>".$data->orderNumber."</td>";
                                                    echo "<td>".$data->InvoiceDate."</td>";
                                                    echo "<td>".$data->periode."</td>";
                                                    echo "<td style='position: sticky;right:0px; background-color:white'>
                                                    <a href='javascript:void(0)' class='item_edit1' data-id_='".$data->id_."' data-productid='".$data->ProductID."' data-quantityunit='".$data->QuantityUnit."' data-unitcode='".$data->UnitCode."' data-invoicenumber='".$data->InvoiceNumber."' data-invoicedate='".$data->InvoiceDate."' data-invoicevalue='".$data->InvoiceValue."' data-currencycode='".$data->CurrencyCode."' data-ordernumber='".$data->orderNumber."' data-supplier='".$data->supplier."' data-kalkulasi_per_pcs='".$data->kalkulasi_per_pcs."' data-periode='".$data->periode."' data-toggle='modal' data-target='#exampleModalCenter1'>
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
                                                            <input type="text" name="InvoiceNumber" id="InvoiceNumber" class="form-control" required/>
                                                            <?php echo form_error('InvoiceNumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Product ID :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="ProductID" id="ProductID" class="form-control" required/>
                                                            <?php echo form_error('ProductID'); ?>
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
                                                            <input type="text" name="CurrencyCode" id="CurrencyCode" class="form-control" readonly/>
                                                            <?php echo form_error('CurrencyCode'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Quantity Unit : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="QuantityUnit" id="QuantityUnit" class="form-control" required/>
                                                            <?php echo form_error('QuantityUnit'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Value :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="InvoiceValue" id="InvoiceValue" class="form-control" required/>
                                                            <?php echo form_error('InvoiceValue'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Unit Code : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="UnitCode" id="UnitCode" class="form-control" required/>
                                                            <?php echo form_error('UnitCode'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">OrderNumber :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="orderNumber" id="orderNumber" class="form-control" required/>
                                                            <?php echo form_error('OrderNumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Date :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="InvoiceDate" id="InvoiceDate" class="form-control" readonly/>
                                                            <?php echo form_error('InvoiceDate'); ?>
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

                    var ProductID = $(this).data('productid');
                    var InvoiceNumber = $(this).data('invoicenumber');
                    var supplier = $(this).data('supplier');
                    var kalkulasi_per_pcs = $(this).data('kalkulasi_per_pcs');
                    var CurrencyCode = $(this).data('currencycode');
                    var QuantityUnit = $(this).data('quantityunit');
                    var InvoiceValue = $(this).data('invoicevalue');
                    var UnitCode = $(this).data('unitcode');
                    var orderNumber = $(this).data('ordernumber');
                    var InvoiceDate = $(this).data('invoicedate');
                    var periode = $(this).data('periode');



                    $('[name="id_"]').val(id_);
                    $('[name=ProductID]').val(ProductID);
                    $('[name="InvoiceNumber"]').val(InvoiceNumber);
                    $('[name="supplier"]').val(supplier);
                    $('[name="kalkulasi_per_pcs"]').val(kalkulasi_per_pcs);
                    $('[name="CurrencyCode"]').val(CurrencyCode);
                    $('[name="QuantityUnit"]').val(QuantityUnit);
                    $('[name="InvoiceValue"]').val(InvoiceValue);
                    $('[name="UnitCode"]').val(UnitCode);
                    $('[name="orderNumber"]').val(orderNumber);
                    $('[name="InvoiceDate"]').val(InvoiceDate);
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
