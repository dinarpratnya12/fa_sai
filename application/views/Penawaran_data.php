<div style="background-color: #f0f0f0;">
      <section class="content">
        <!-- <div class="container-fluid"> -->
    <div class="container" style="margin-top:0px !important;">
        <div class="row">
            <div class="container-fluid">
                <div class="card col-lg-12">
                <div class="row">
                    <!-- Form penawaran -->
                    <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                            <center><h2>Data Penawaran</h2></center>
                                <?php echo form_open('Lihat_data/hapusperiode',['id'=>'form-hapusperiode']);?>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                        <br>
                                        <label>Pilih periode yang akan dihapus :</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <select class="form-control show-tick" name="selectperiode">
                                                    <option selected disabled>-- Pilih Periode --</option>
                                                    <option
                                                    <?php
                                                        $PERIOD = $this->db->query('SELECT DISTINCT data_penawaran.period FROM data_penawaran')->result();
                                                        foreach($PERIOD as $row) {?>
                                                        <option value="<?= $row->period;?>"><?= $row->period;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <input type="hidden" value="Delete" name="Delete">
                                            <div class="col-md-1">
                                            <button type="button" class='btn btn-warning' id="btn-submit-hapusperiode">Delete</button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary col-md-offset-10 pull-right" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Tambah Penawaran
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php echo form_close();?>
                                <br>
                                <!-- <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary col-md-offset-10" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambah Penawaran
                                </a>
                                <br>
                                <br> -->
                                <br>

                                <!-- Modal Add Penawaran-->
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
                                                <?php echo form_open('lihat_data/tambahpenawaran');?>
                                                <div class="col-lg-4">
                                                            <h5 align="left">Part Number : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="hidden" name="id_penawaran" id="id_penawaran" class="form-control"/>
                                                            <input type="text" name="partnumber" id="partnumber" class="form-control" required/>
                                                            <?php echo form_error('partnumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Price @pcs :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="number" step="any" name="base_price" id="base_price" class="form-control" required/>
                                                            <?php echo form_error('base_price'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Currency Code : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="base_crcy" style="text-transform: uppercase" id="base_crcy" class="form-control" required/>
                                                            <?php echo form_error('base_crcy'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">BASE UOM : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="base_uom" style="text-transform: uppercase" id="base_uom" class="form-control" required/>
                                                            <?php echo form_error('base_uom'); ?>
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
                                                            <h5 align="left">Country CD :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="cntry_cd" id="cntry_cd" style="text-transform: uppercase" class="form-control" required/>
                                                            <?php echo form_error('cntry_cd'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">periode : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="period" id="period" class="form-control" required/>
                                                            <?php echo form_error('period'); ?>
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
                                <table class="table warnain text2 nowrap" cellpadding="" id="example2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="position: sticky;left:0px;background-color:white;">Part Number</th>
                                            <th class = text-center>Price @pcs</th>
                                            <th class = text-center>Currency Code</th>
                                            <th class = text-center>Base Uom</th>
                                            <th class = text-center>Supplier</th>
                                            <th class = text-center>Country CD</th>
                                            <th class = text-center>Periode</th>
                                            <th style="position: sticky;right:0px;background-color:white;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if( ! empty($data_penawaran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_penawaran as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";

                                            $partnumber = strtoupper($data->partnumber);
                                            echo "<td style='position: sticky;left:0px; background-color:white'>".$partnumber."</td>";
                                            if(stripos($data->base_price,".") !== false){
                                                $ya = number_format($data->base_price,4);
                                                $penawaran = str_replace(",","",$ya);
                                                echo "<td class = text-center>".$penawaran."</td>";
                                            }else{
                                                echo "<td class = text-center>".$data->base_price."</td>";
                                            }
                                            $crcy = strtoupper($data->base_crcy);
                                            echo "<td class = text-center>".$crcy."</td>";
                                            $uom = strtoupper($data->base_uom);
                                            echo "<td class = text-center>".$uom."</td>";
                                            $supplier = strtoupper($data->supplier);
                                            echo "<td class = text-center>".$supplier."</td>";
                                            $cntry_cd = strtoupper($data->cntry_cd);
                                            echo "<td class = text-center>".$cntry_cd."</td>";
                                            $period = ucwords($data->period);
                                            echo "<td class = text-center>".$period."</td>";
                                            echo "<td style='position: sticky;right:0px; background-color:white'>
                                            <a href='javascript:void(0)' class='item_edit1'
                                                data-id_penawaran='".$data->id_penawaran."'
                                                data-partnumber='".$data->partnumber."'
                                                data-base_price='".$data->base_price."'
                                                data-base_crcy='".$data->base_crcy."'
                                                data-base_uom='".$data->base_uom."'
                                                data-supplier='".$data->supplier."'
                                                data-cntry_cd='".$data->cntry_cd."'
                                                data-period='".$data->period."'
                                                data-toggle='modal'
                                                data-target='#exampleModalCenter1'>
                                            <button class='btn btn-primary'><i class='material-icons'>create</i></button></a>
                                            <a href='#' onclick='delete_a(".$data->id_penawaran.")' class='btn bg-orange' >
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
                                                    <?php echo form_open('lihat_data/editpenawaran',['id' => 'form-update']);?>
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Part Number : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="hidden" name="id_penawaran" id="id_penawaran" class="form-control"/>
                                                            <input type="text" name="partnumber" id="partnumber" class="form-control" required/>
                                                            <?php echo form_error('partnumber'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Price @pcs :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="number" step="any" name="base_price" id="base_price" class="form-control" required/>
                                                            <?php echo form_error('base_price'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">Currency Code : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="base_crcy" style="text-transform: uppercase" id="base_crcy" class="form-control" required/>
                                                            <?php echo form_error('base_crcy'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">BASE UOM : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="base_uom" style="text-transform: uppercase" id="base_uom" class="form-control" required/>
                                                            <?php echo form_error('base_uom'); ?>
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
                                                            <h5 align="left">Country CD :</h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="cntry_cd" id="cntry_cd" style="text-transform: uppercase" class="form-control" required/>
                                                            <?php echo form_error('cntry_cd'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h5 align="left">periode : </h5>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="period" id="period" class="form-control" required/>
                                                            <?php echo form_error('period'); ?>
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
    </div>

    <script>
        $(document).ready(function() {
            $('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
            $('#example2 thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                    if(i !== 7){
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
                $('#example2').on('click','.item_edit1',function() {
                    var id_penawaran = $(this).data('id_penawaran');

                    var partnumber = $(this).data('partnumber');
                    var base_price = $(this).data('base_price');
                    var base_crcy = $(this).data('base_crcy');
                    var base_uom = $(this).data('base_uom');
                    var supplier = $(this).data('supplier');
                    var cntry_cd = $(this).data('cntry_cd');
                    var period = $(this).data('period');


                    $('[name="id_penawaran"]').val(id_penawaran);
                    $('[name=partnumber]').val(partnumber);
                    $('[name="base_price"]').val(base_price);
                    $('[name="base_crcy"]').val(base_crcy);
                    $('[name="base_uom"]').val(base_uom);
                    $('[name="supplier"]').val(supplier);
                    $('[name="cntry_cd"]').val(cntry_cd);
                    $('[name="period"]').val(period);

                });
                var table = $('#example2').DataTable(
                    {
                        orderCellsTop : true,
                        "sDom": "lrtip",
                        "scrollY": "400px",
                        "scrollCollapse": true,
                        "scrollX": true,
                        "paging": false,
                    }
                );

                $('#btn-submit-hapusperiode').on('click',function(){
                    swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#form-hapusperiode').submit();
                    } else {
                        swal({
                            title: "Data Aman!",
                            icon: "info",
                        })
                    }
                });
                });

            } );
            function delete_a(id){

                var url = '<?php echo base_url('lihat_data/hapuspenawaran');?>/'+id
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
