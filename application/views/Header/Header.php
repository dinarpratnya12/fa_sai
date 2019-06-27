<html>
<head>
<link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
    <link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse" style="position:fixed;z-index:1000;width:91.5%">
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


</body>
</html>