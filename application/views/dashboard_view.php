<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SAI</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="container-fluid"></div>
          <div class="jumbotron jumbotron-fluid">
            <h3>Welcome <?php echo $this->session->userdata('username');?></h3>
          </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
