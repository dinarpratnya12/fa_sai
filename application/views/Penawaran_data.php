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

    <div class="container" style="margin-top:0px !important;">
        <div class="row">
            <div class="container-fluid">
                <h3>LIST DATA PENAWARAN</h3>
                <hr>
                <div class="row">
                    <!-- Form penawaran -->
                    <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                            <center><h4>Data Penawaran</h4></center>
                            <br>
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
                                                $PERIOD = $this->db->query('SELECT DISTINCT data_penawaran.PERIOD FROM data_penawaran')->result();
                                                foreach($PERIOD as $row) {?>
                                            <option value="<?= $row->PERIOD;?>"><?= $row->PERIOD;?></option>
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
                                <table class="table warnain text2" cellpadding="" id="example2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Part Number</th>
                                            <th class="th-sm">Price ID</th>
                                            <th class="th-sm">Effect Date</th>
                                            <th class="th-sm">Expire Date</th>
                                            <th class="th-sm">Supplier</th>
                                            <th class="th-sm">Price</th>
                                            <th class="th-sm">Periode</th>
                                            <th style="position: sticky;right:0px;background-color:white;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if( ! empty($data_penawaran)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($data_penawaran as $data){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td>".$data->GCT_COMP_NO."</td>";
                                            echo "<td>".$data->PRICE_ID."</td>";
                                            echo "<td>".$data->EFFECT_DT."</td>";
                                            echo "<td>".$data->EXPIRE_DT."</td>";
                                            $strsup = $data->SPPLY_NM;
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
                                            echo "<td>".$data->FIS_PRICE."</td>";
                                            echo "<td>".$data->PERIOD."</td>";
                                            echo "<td style='position: sticky;right:0px; background-color:white'>
                                            <a href='javascript:void(0)' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter2'>
                                            Edit                                                </a>
                                            <a href='#' onclick='delete_c(".$data->id_penawaran.")' class='btn  btn-warning fa fa-trash-o'>
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

    <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

    <?php if(validation_errors() != null){ ?>

    <script>
        $('#exampleModalCenter').modal('show');
    </script>
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
                var table = $('#example2').DataTable(
                    {
                        "scrollY": "400px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false
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
