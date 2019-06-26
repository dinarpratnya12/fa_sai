<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <meta charset="utf-8">
    <title>SAI</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <style>
      .navbar-inverse {
      background-color: #f4d081;
      font-size:14px;
      font color:
      }
    </style>
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-inverse" style="navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <img class="navbar-brand" src="<?php echo base_url('assets/yasaki.png');?>" >
              <!-- <a class="navbar-brand" href="">LOGO</a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a href="<?php echo site_url('page/index');?>">Dashboard</a></li>
                  <li><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                  <li><a href="#">List Data</a></li>
                  <li><a href="<?php echo site_url('crud/index');?>">Manage People</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a href="<?php echo site_url('page/staff');?>">Dashboard</a></li>
                  <li><a href="<?php echo site_url('import/index');?>">Import Data</a></li>
                  <li><a href="#">List Data</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">List Data</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

        <div class="jumbotron jumbotron-fluid">
          <h3>Welcome <?php echo $this->session->userdata('username');?></h3>
        </div>

      </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
