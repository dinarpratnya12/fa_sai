<html>
<head>
    <title>Data Penawaran</title>
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
<div style="background-color: #f0f0f0;">
      <section class="content">
        <div class="container-fluid">
    <div class="container" style="margin-top:0px !important;">
        <div class="row">
            <div class="container-fluid">
                <h3>LIST DATA PENAWARAN</h3>
                <div class="card col-lg-12">
                <div class="row">
                    <!-- Form penawaran -->
                    <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                            <center><h2>Data Penawaran</h2></center>
                            <hr>
                                <?php echo form_open('Lihat_data/hapusperiode');?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <br>
                                        <br>
                                        <label>Pilih periode yang akan dihapus :</label>
                                        <div class="row">
                                        <div class="col-md-11">
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
                                        <div class="col-md-1">
                                            <input type='submit' value="Delete" class='btn  btn-warning fa fa-trash-o'>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <?php echo form_close();?>
                                <br>
                            <div class="table-responsive-sm">
                                <table class="table warnain text2" cellpadding="" id="example2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="position: sticky;left:0px;background-color:white;">Part Number</th>
                                            <th class="th-sm">Price @pcs</th>
                                            <th class="th-sm">Currency Code</th>
                                            <th class="th-sm">BASE UOM</th>
                                            <th class="th-sm">Supplier</th>
                                            <th class="th-sm">Country CD</th>
                                            <th class="th-sm">Periode</th>
                                            <th style="position: sticky;right:0px;background-color:white;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if( ! empty($data_penawaran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_penawaran as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td style='position: sticky;left:0px; background-color:white'>".$data->partnumber."</td>";
                                            echo "<td>".$data->base_price."</td>";
                                            echo "<td>".$data->base_crcy."</td>";
                                            echo "<td>".$data->base_uom."</td>";
                                            $strsup = $data->supplier;
                                            $strsup = str_replace("YC Purchasing","HIB",$strsup);
                                            $strsup = str_replace("Daiwa Kasei (Thailand) Co. Ltd", "DAT", $strsup);
                                            $strsup = str_replace("Elcom", "COMBU-E", $strsup);
                                            $strsup = str_replace("Federal Mogul (Thailand) Ltd.","FMTH", $strsup);
                                            $strsup = str_replace("Hellermann Tyton","HELLERMANN TYTON", $strsup);
                                            $strsup = str_replace("Molex Singapore","ARROW ELECTRONICS AS", $strsup);
                                            $strsup = str_replace("PT INDOWIRE PRIMA INDUSTRINDO","PT. INDOWIRE PRIMA", $strsup);
                                            $strsup = str_replace("PT Nitto Materials Indonesia","PT. NMI", $strsup);
                                            $strsup = str_replace("Sugity PT.SUGITY CREATEIVES","SUGITY", $strsup);
                                            $strsup = str_replace("TBD Supplier","J/A", $strsup);
                                            $strsup = str_replace("PEMI","PEMI-AW", $strsup);
                                            $strsup = str_replace("Tesa Tape Asia Pacific Pte Ltd","TESA", $strsup);
                                            $strsup = str_replace("YAZAKI (CHINA) INVESTMENT CORPORATION","YGP", $strsup);
                                            $strsup = str_replace("YGP PTE. LTD.","YGP", $strsup);
                                            $strsup = str_replace("YZK AMERICAS.","YNA", $strsup);
                                            echo "<td>".$strsup."</td>";
                                            echo "<td>".$data->cntry_cd."</td>";
                                            echo "<td>".$data->period."</td>";
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
                                            <button class='btn btn-primary fa fa-trash-o pull-left' style='width:80px'>Edit</button></a>
                                            <a href='#' onclick='delete_a(".$data->id_penawaran.")' class='btn  btn-warning fa fa-trash-o pull-right' style='width:80px'>
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
                                                            <input type="number" name="base_price" id="base_price" class="form-control" required/>
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
                                                                    $supplier = $this->db->query('SELECT DISTINCT supplier.sai FROM supplier')->result();
                                                                    foreach($supplier as $row) {?>
                                                                <option value="<?= $row->sai;?>" ><?= $row->sai;?></option>
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

    <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

    <?php if(validation_errors() != null){ ?>

    <?php } ?>
    <script>
        $(document).ready(function() {
            $('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
            $('#example2 thead tr:eq(1) th').each( function (i) {
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
                        "scrollY": "400px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false
                    }
                );
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
