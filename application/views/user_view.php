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
                <li class="active"><a href="<?php echo site_url('crud/index');?>">Manage People</a></li>
              <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <br>
            <center><h1>Data User</h1>
            <br>

              <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
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
</body>
</html>