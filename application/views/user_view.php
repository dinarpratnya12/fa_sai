    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<body class="theme-orange">

    <!-- Ada di note -->

    <section class="content">
        <div class="container-fluid">

            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">

        <div class="container">
          <div class="row">
            <div class="col-md-8 ">
            <br>

            <center><h1>Data User</h1>
            <br>

              <!-- Button trigger modal -->

            <a href="#" onclick="openModal()" id="openModalInput" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Tambah User
            </a>

            <!-- Modal Add User-->
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
                      <?php echo form_open('crud/tambah');?>
                      <div class="col-lg-4">
                        <h5 align="left">Nama Lengkap :</h5>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>"/>
                        <?php echo form_error('name'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <h5 align="left">Email : </h5>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>"/>
                        <?php echo form_error('email'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <h5 align="left">Password : </h5>
                      </div>
                        <div class="col-lg-8">
                          <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>
                          <?php echo form_error('password'); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <h5 align="left">Konfirmasi Password : </h5>
                      </div>
                      <div class="col-lg-8">
                        <input type="password" name="password_conf" class="form-control" value="<?php echo set_value('password_conf'); ?>"/>
                        <?php echo form_error('password_conf'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  <?php echo form_close();?>
              </div>
            </div>
            <!-- End Modal Add Data -->

            </center>
            <br>
            <div class="table-responsive-sm">
              <table class="table table-bordered text" cellpadding="" id="example">
              <!-- <table class="table" style="margin:20px auto;" > -->
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach($tbl_users as $u){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->user_name ?></td>
                  <td><?php echo $u->user_email ?></td>
                  <td>
                    <!-- Button trigger modal -->
                    <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
                      Edit
                    </a>
                    <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $this->session->userdata('user_id');?>"> Hapus</a>


                  </td>
                </tr>
                <!-- ============ MODAL HAPUS BARANG =============== -->
                  <div class="modal fade" id="modal_hapus<?php echo $this->session->userdata('username');?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                          <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                      </div>
                      <form class="form-horizontal" method="post" action="<?php echo base_url().'crud/hapus'?>">
                          <div class="modal-body">
                              <p>Anda yakin mau menghapus <b><?php echo $this->session->userdata('username');?></b></p>
                          </div>
                          <div class="modal-footer">
                              <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
                              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                              <button class="btn btn-danger">Hapus</button>
                          </div>
                      </form>
                      </div>
                      </div>
                  </div>
              <!--END MODAL HAPUS BARANG-->
                <?php } ?>
              </table>
              </div>
            </div>
          </div>
        </div>
        <script src="<?php echo base_url('assets/jquery-1.12.4.js'); ?>"></script>
        <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script>


        <?php if(validation_errors() != null){ ?>
        <script>
          $('#exampleModalCenter').modal('show');
        </script>
        <?php } ?>

        <script>
          $(document).ready(function() {
            $('#example').DataTable(
              {
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
              }
            );
          } );
        </script>

</body>

</html>
