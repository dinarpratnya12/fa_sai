<html>
<head>
    <title>Supplier SAI</title>
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <!-- Load File jquery.min.js yang ada difolder js -->


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
                <h3>LIST SUPPLIER SAI</h3>
                <hr>
                <div class="card col-lg-8">
                <div class="row">
                    <!-- Form Supplier SAI -->
                    <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                            <center><h4>Data Supplier SAI</h4></center>
                            <br>
                            <hr>
                            <div class="table-responsive">
                                <table class="table warnain text2" cellpadding="" id="example2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class = text-center>No</th>
                                            <th class="th-sm">Nama Supplier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    if( ! empty($sup_sai)){
                                        $i =1; // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($sup_sai as $data3){ // Lakukan looping pada variabel siswa dari controller
                                            echo "<tr>";
                                            echo "<td class = text-center>".$i."</td>";
                                            echo "<td>".$data3->nama_supsai."</td>";
                                            echo "<td style='position: sticky;right:0px; background-color:white'>
                                            <a href='javascript:void(0)' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter2'>
                                            Edit</a>
                                            <a href='#' onclick='delete_a(".$data3->id_supsai.")' class='btn  btn-warning fa fa-trash-o'>
                                            Delete</a></td>";
                                            echo "</tr>";
                                            $i++;
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
