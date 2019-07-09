</div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>

    <!-- Jquery Core Js -->

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/jquery-countto/jquery.countTo.js');?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/raphael/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/plugins/morrisjs/morris.js');?>"></script>

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

    <!-- Demo Js -->
    <script src="<?php echo base_url('assets/AdminBSBMaterialDesign-master/js/demo.js');?>"></script>
    <script>
        $('a[href="<?= current_url() ?>"]').parent().addClass('active');
    </script>

    <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/export/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/pdfmake.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/vfs_fonts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/export/buttons.print.min.js'); ?>"></script>

    <script>
        $(document).ready(function(){
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();

            $("#openModalInput").click(function(){
                $(".modal-backdrop").addClass('bg-primary');
            })
        } );

        function openModal(){
            $(".modal-backdrop").remove();
        }
    </script>


</body>

</html>
