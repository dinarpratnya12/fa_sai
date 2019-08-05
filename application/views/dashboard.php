<div style="background-color: #f0f0f;">
    <section class="content">
        <div class="container-fluid">
            <div class = "row">
                <div class="container-fluid">
                <!-- DASHBOARD -->
                    <div class="card">
                        <div class="row" style="padding:35px">
                            <h1>Welcome <?php echo $this->session->userdata('name');?> !</h1>
                        </div>
                    </div>
                    <!-- Widgets -->
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo site_url('lihat_data/invoice');?>" style="text-decoration : none">
                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                                <div class="content">
                                    <div class="text">DATA INVOICE</div>
                                        <div class="number count-to"><?= $data_invoice[0]->total_record;?> Invoice</div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="<?php echo site_url('lihat_data/penawaran');?>" style="text-decoration : none">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">camera_rear</i>
                                </div>
                                <div class="content">
                                    <div class="text">DATA PENAWARAN</div>
                                    <div class="number count-to"><?= $data_penawaran[0]->total_record;?> Quatition</div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo site_url('lihat_data/supsai');?>" style="text-decoration : none">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="content">
                                    <div class="text">DATA SUPPLIER</div>
                                    <div class="number count-to"><?= $this->awal_models->totalsup();?> Supplier</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo site_url('crud/index');?>" style="text-decoration : none">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">account_box</i>
                                </div>
                                <div class="content">
                                    <div class="text">DATA USER</div>
                                    <div class="number count-to"><?= $tbl_users[0]->total_record;?> User</div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <!-- #END# Widgets -->
                        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="card">
                                                <div class="body bg-pink">
                                                  tess
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="card">
                                                <div class="body bg-cyan">
                                                    tessss
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="card">
                                                <div class="body bg-teal">
                                                    tesss
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- #END# Browser Usage -->
                    </div>
                </div>
            </div>
        </div>


