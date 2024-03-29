<div style="background-color: #f0f0f0;">
    <section class="content">
        <div class="container-fluid">
    <div class="container-fluid" style="margin-top:0px !important;">
        <div class="row">
            <!-- <div class="container-fluid"> -->
                <div class="card col-lg-12">
                    <div class="row">
                    <!-- Form Supplier SAI -->
                    <div class="col-lg-12">
                        <div style="background-color: #ffffff; padding: 10px">
                            <center><h2>Data Supplier</h2></center>
                            <br>
                            <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary col-md-2 col-md-offset-10" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambah Supplier
                            </a>
                            <br>
                            <br>
                                <!-- Modal Add Form-->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLongTitle">Tambah Supplier</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                <?php echo form_open('lihat_data/tambahsai');?>
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Nama Supplier SAI : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="sai" style="text-transform: uppercase" class="form-control" value="<?php echo set_value('sai'); ?>"/>
                                                        <?php echo form_error('sai'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h5 align="left">Nama Supplier GCT : </h5>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="gct" style="text-transform: uppercase" id="gct" class="form-control" required/>
                                                        <?php echo form_error('gct'); ?>
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
                                <!-- End Add Form -->
                            <div class="table-responsive-sm">
                                <table class="table nowrap" cellpadding="" id="example2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class = text-center>No</th>
                                            <th class="th-sm">Nama Supplier SAI</th>
                                            <th class="th-sm">Nama Supplier GCT</th>
                                            <th class = text-center>Action</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    if( ! empty($supplier)){
                                        $i =1; // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                        foreach($supplier as $data3){ // Lakukan looping pada variabel siswa dari controller
                                            $kalimat_new = strtoupper($data3->sai);
                                            $kalimat_new2 = strtoupper($data3->gct);
                                            echo "<tr>";
                                            echo "<td class = text-center>".$i."</td>";
                                            echo "<td>".$kalimat_new."</td>";
                                            echo "<td>".$kalimat_new2."</td>";
                                            echo "<td style='position: sticky;right:0px; background-color:white'>

                                            <center><a href='javascript:void(0);' class='item_edit' data-id_sup='$data3->id_sup' data-sai='$data3->sai' data-gct='$data3->gct' data-toggle='modal' data-target='#exampleModalCenter1'>
                                            <button class='btn btn-primary'><i class='material-icons'>create</i></button></a>
                                            <a href='#' onclick='delete_a(".$data3->id_sup.")' class='btn bg-orange' >
                                            <i class='material-icons'>delete_forever</i></a></center></td>";
                                            echo "</tr>";
                                            $i++;
                                        }
                                    }else{ // Jika data tidak ada
                                        echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                    }
                                    ?>
                                </table>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Form Edit Supplier</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                        <?php echo form_open('lihat_data/editsai');?>
                                                            <div class="col-lg-4">
                                                                <h5 align="left">Nama Supplier SAI : </h5>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="hidden" name="id_sup" id="id_sup" class="form-control"/>
                                                                <input type="text" name="sai" style="text-transform: uppercase" class="form-control" value="<?php echo set_value('sai'); ?>"/>
                                                                <?php echo form_error('sai'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h5 align="left">Nama Supplier GCT : </h5>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="gct" style="text-transform: uppercase" id="gct" class="form-control" required/>
                                                                <?php echo form_error('gct'); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                                <!-- End Modal Edit -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#exampleModalCenter').modal('show');
    </script>
    <script>
          $(document).ready(function() {
            $('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
            $('#example2 thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                if(i == 1 || i == 2){
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
            $('#example2').on('click','.item_edit',function() {
                var id_sup = $(this).data('id_sup');
                var sai = $(this).data('sai');
                var gct = $(this).data('gct');
                // alert(id_sup);
                $('[name="sai"]').val(sai);
                $('[name="gct"]').val(gct);
                $('[name="id_sup"]').val(id_sup);
            });

            var table = $('#example2').DataTable(
                    {
                        orderCellsTop : true,
                        "sDom": "lrtip",
                        "scrollY": "450px",
                        "scrollX": true,
                        "scrollCollapse": true,
                        "paging": false
                    }
                );
            } );
            function delete_a(id){

                var url = '<?php echo base_url('lihat_data/hapussai');?>/'+id
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
