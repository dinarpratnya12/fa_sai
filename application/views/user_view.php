    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<body class="theme-orange">

    <!-- Top Bar -->
    <nav class="navbar" style="position:fixed">
        <div class="container-fluid">
            <div class="navbar-header">
            <img style="max-width:180px;"  src="<?php echo base_url('assets/fa.png');?>" alt="">
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="body">
                                <li>
                                    <a href="<?php echo site_url('login/logout');?>">
                                    <i class="material-icons">input</i>
                                    <span>Log Out</span>
                                    </a>
                                </li>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Profile -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/images/user.png');?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?></div>
                    <div class="email"><?php echo $this->session->userdata('email');?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="<?php echo site_url('page/index');?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('import/index');?>">
                            <i class="material-icons">swap_calls</i>
                            <span>Import Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>List Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('crud/index');?>">
                            <i class="material-icons">settings</i>
                            <span>Menage People</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a>Finance Accounting PT. SAI</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- DASHBOARD -->
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
                    <button class="btn btn-warning">Delete</button>


                  </td>
                </tr>
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
