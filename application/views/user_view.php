<!DOCTYPE html>
<html>
<head>
	<title>Menage People</title>
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img class="navbar-brand" src="<?php echo base_url('assets/logo_putih.png');?>" >
                        <!-- <a class="navbar-brand" href="">LOGO</a> -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                        <!--ACCESS MENUS FOR ADMIN-->
                        <?php if($this->session->userdata('level')==='1'):?>
                            <li><a href="<?php echo site_url('page/index');?>">Dashboard</a></li>
                            <li><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                            <li><a href="#">List Data</a></li>
                            <li><a href="<?php echo site_url('crud/index');?>">Manage People</a></li>
                        <!--ACCESS MENUS FOR STAFF-->
                            <?php elseif($this->session->userdata('level')==='2'):?>
                            <li><a href="<?php echo site_url('page/staff');?>">Dashboard</a></li>
                            <li><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                            <li><a href="#">List Data</a></li>
                        <!--ACCESS MENUS FOR AUTHOR-->
                        <?php else:?>
                            <li class=""><a href="<?php echo site_url('page/index');?>">Dashboard</a></li>
                            <li><a href="#">List Data</a></li>
                            <?php endif;?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>
    </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <br>
            <center><h1>Data User</h1>
            <br>

              <!-- Button trigger modal -->
            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Tambah User
            </a>

            <!-- Modal -->
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
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  <?php echo form_close();?>
              </div>
            </div>


            </center>
            <br>
              <table class="table" style="margin:20px auto;" >
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
                      <?php echo anchor('crud/edit/'.$u->user_id,'Edit',['class'=>'btn btn-primary']); ?>
                      <?php echo anchor('crud/hapus/'.$u->user_id,'Hapus',['class'=>'btn btn-warning']); ?>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <script src="<?php echo base_url('assets/jquery-1.12.4.js'); ?>"></script>
<script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script>
  $('#exampleModalCenter').modal('show');
</script>
</body>
</html>