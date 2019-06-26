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
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <img class="navbar-brand" src="<?php echo base_url('assets/yasaki.png');?>" >
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
              <?php echo anchor('crud/tambah','Tambah Data'); ?>
            </center>
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
                  <!-- <td>
                      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                      <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
                  </td> -->
                </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
</body>
</html>