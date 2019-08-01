                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>


    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/chartjs/Chart.bundle.js');?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.resize.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.categories.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.time.js');?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/admin.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/pages/index.js');?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.print.min.js');?>"></script>

    <script src="<?php echo base_url('assets/css/sweetalert.min.js')?>"></script>

    <!-- Jquery Datatable biasa -->

    <?php if(validation_errors() != null){ ?>

    <?php } ?>

    <script>
        $(document).ready(function(){

            // Sembunyikan alert validasi kosong
            $("#kosong").hide();

            $("#openModalInput").click(function(){
                $(".modal-backdrop").addClass('bg-primary');
            });
        } );

        // function openModal(){
        //     $(".modal-backdrop").remove();
        // }

        $('a[href="<?= current_url() ?>"]').parent().addClass('active');
    </script>


    <?php if($this->session->flashdata('swal') != null){ ?>
    <?php
    $swal_data = $this->session->flashdata('swal');

    $swa = explode('|',$swal_data);
    ?>
        <script>
                swal("<?= $swa[0] ?>", "<?= $swa[1] ?>", "<?= $swa[2] ?>");
        </script>
    <?php } ?>
</body>

</html>
