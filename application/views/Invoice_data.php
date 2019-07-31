<div style="background-color: #f0f0f;">
      <section class="content">
        <div class="container-fluid">
    <div class="container" style="margin-top:0px !important;">
        <div class="row">
            <div class="container-fluid" >
                    <h3>LIST DATA INVOICE</h3>
                <div class="card col-lg-12">
                    <div class = "row">
                        <!-- Form invoice -->
                        <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                                <center><h2>Data Invoice</h2></center>
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
                                                $invoicenumber = $this->db->query('SELECT DISTINCT data_invoice.invoicenumber FROM data_invoice')->result();
                                                foreach($invoicenumber as $row) {?>
                                            <option value="<?= $row->invoicenumber;?>"><?= $row->invoicenumber;?></option>
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
                                <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary col-md-2 col-md-offset-10" data-toggle="modal" data-target="#exampleModalCenter"><i class='material-icons'>add</i>
                                Tambah Invoice
                                </a>
                                <br>
                                <br>
                                <br>

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
                                                        <h5 align="left">Part Number : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="productid" id="productid" class="form-control" required/>
                                                        <?php echo form_error('productid'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
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
                                                        <h5 align="left">Supplier :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control show-tick" name="supplier">
                                                            <option selected disabled>-- Pilih Supplier --</option>
                                                            <?php
                                                                $supplier = $this->db->query('SELECT DISTINCT supplier.sai as supplier FROM supplier union SELECT DISTINCT supplier.gct as supplier FROM supplier ORDER BY supplier ASC')->result();
                                                                foreach($supplier as $row) {?>
                                                                <option value="<?= $row->supplier?>"><?=$row->supplier?></option>
                                                            <?php } ?>
                                                        </select>
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
                                                        <h5 align="left">Qty Invoice : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="number" name="quantityunit" id="quantityunit" class="form-control" required/>
                                                        <?php echo form_error('quantityunit'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Invoice Value :</h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="number" step="any" name="invoicevalue" id="invoicevalue" class="form-control" required/>
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
                                <table class="table warnain text nowrap" cellpadding="" id="example1" style="width:100%">
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
                                                <th class = text-center style="position: sticky;right:0px;background-color:white;">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                                foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                                    echo "<tr>";
                                                    $productid = strtoupper($data->productid);
                                                    $invoicenumber = strtoupper($data->invoicenumber);
                                                    $supplier = strtoupper($data->supplier);
                                                    $currencycode = strtoupper($data->currencycode);
                                                    $unitcode = strtoupper($data->unitcode);
                                                    $ordernumber = strtoupper($data->ordernumber);
                                                    echo "<td style='position: sticky;left:0px; background-color:white'>".$productid."</td>";
                                                    echo "<td>".$invoicenumber."</td>";
                                                    echo "<td>".$supplier."</td>";
                                                    if(stripos($data->kalkulasi_per_pcs,".") !== false){
                                                        echo "<td>".number_format($data->kalkulasi_per_pcs,4)."</td>";
                                                    }else{
                                                        echo "<td>".$data->kalkulasi_per_pcs."</td>";
                                                    }
                                                    echo "<td>".$currencycode."</td>";
                                                    echo "<td>".$data->quantityunit."</td>";

                                                    if(stripos($data->invoicevalue,".") !== false){
                                                        $ya = number_format($data->invoicevalue,2);
                                                        $invoice = str_replace(",","",$ya);
                                                        echo "<td>".$invoice."</td>";
                                                    }else{
                                                        echo "<td>".$data->invoicevalue."</td>";
                                                    }

                                                    echo "<td>".$unitcode."</td>";
                                                    echo "<td>".$ordernumber."</td>";
                                                    echo "<td>".$data->invoicedate."</td>";
                                                    echo "<td>".$data->periode."</td>";
                                                    echo "<td style='position: sticky;right:-10px; background-color:white;'>
                                                    <a href='javascript:void(0)' class='item_edit1'
                                                        data-id_='".$data->id_."'
                                                        data-productid='".$data->productid."'
                                                        data-quantityunit='".$data->quantityunit."'
                                                        data-unitcode='".$data->unitcode."'
                                                        data-invoicenumber='".$data->invoicenumber."'
                                                        data-invoicedate='".$data->invoicedate."'
                                                        data-invoicevalue='".$data->invoicevalue."'
                                                        data-currencycode='".$data->currencycode."'
                                                        data-ordernumber='".$data->ordernumber."'
                                                        data-supplier='".$data->supplier."'
                                                        data-kalkulasi_per_pcs='".$data->kalkulasi_per_pcs."'
                                                        data-periode='".$data->periode."'
                                                        data-toggle='modal' data-target='#exampleModalCenter1'>
                                                    <button class='btn btn-primary btn-circle waves-effect waves-circle waves-float'><i class='material-icons'>create</i></button></a>
                                                    <a href='#' onclick='delete_c(".$data->id_.")' class='btn bg-orange btn-circle waves-effect waves-circle waves-float' >
                                                    <i class='material-icons'>delete_forever</i></a></td>";
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
                                                    <?php echo form_open('lihat_data/editinvoice',['id' => 'form-update']);?>
                                                    <div class="col-lg-4">
                                                            <h5 align="left">Part Number :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="hidden" name="id_" id="id_" class="form-control"/>
                                                            <input type="text" name="productid" id="productid" class="form-control" required/>
                                                            <?php echo form_error('productid'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                            <h5 align="left">Invoice Number : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="invoicenumber" id="invoicenumber" class="form-control" required/>
                                                            <?php echo form_error('invoicenumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Supplier :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control show-tick" name="supplier">
                                                                <option selected disabled>-- Pilih Supplier --</option>
                                                                <?php
                                                                    $supplier = $this->db->query('SELECT DISTINCT supplier.sai as supplier FROM supplier union SELECT DISTINCT supplier.gct as supplier FROM supplier ORDER BY supplier ASC')->result();
                                                                    foreach($supplier as $row) {?>
                                                                <option value="<?= $row->supplier?>"><?=$row->supplier?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <?php echo form_error('supplier'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Qty Invoice : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="number" step="any" name="quantityunit" id="quantityunit" class="form-control" required/>
                                                            <?php echo form_error('quantityunit'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Invoice Value :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="number" step="any" name="invoicevalue" id="invoicevalue" class="form-control" required/>
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
                                    <!-- End Edit -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

        <?php if(validation_errors() != null){ ?>

        <?php } ?>
        <script>
            $(document).ready(function() {
                $('#example1 thead tr').clone(true).appendTo( '#example1 thead' );
                $('#example1 thead tr:eq(1) th').each( function (i) {
                    var title = $(this).text();
                    if(i !== 11){
                        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                        $( 'input', this ).on( 'keyup change', function () {
                            if ( table.column(i).search() !== this.value ) {
                                table
                                    .column(i)
                                    .search( this.value )
                                    .draw();
                                }
                        } );
                    }else{
                        $(this).html("");
                    }
                });
                $('#example1').on('click','.item_edit1',function() {
                    var id_ = $(this).data('id_');

                    var productid = $(this).data('productid');
                    var invoicenumber = $(this).data('invoicenumber');
                    var supplier = $(this).data('supplier');
                    var kalkulasi_per_pcs = $(this).data('kalkulasi_per_pcs');
                    var quantityunit = $(this).data('quantityunit');
                    var invoicevalue = $(this).data('invoicevalue');
                    var unitcode = $(this).data('unitcode');
                    var ordernumber = $(this).data('ordernumber');
                    var invoicedate = $(this).data('invoicedate');


                    $('[name="id_"]').val(id_);
                    $('[name=productid]').val(productid);
                    $('[name="invoicenumber"]').val(invoicenumber);
                    $('[name="supplier"]').val(supplier);
                    $('[name="kalkulasi_per_pcs"]').val(kalkulasi_per_pcs);
                    $('[name="quantityunit"]').val(parseInt(quantityunit));
                    $('[name="invoicevalue"]').val(invoicevalue);
                    $('[name="unitcode"]').val(unitcode);
                    $('[name="ordernumber"]').val(ordernumber);
                    $('[name="invoicedate"]').val(invoicedate);

                });
                var table = $('#example1').DataTable(
                    {
                        orderCellsTop : true,
                        "sDom": "lrtip",
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
