    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/jquery.dataTables.min.css');?>" rel="stylesheet">
<body class="theme-orange">

    <!-- Ada di note -->
<div style="background-color: #fff;">
        <div class="container-fluid">
        <div class="container" >
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
                        <h5 align="left">Username : </h5>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>"/>
                        <?php echo form_error('username'); ?>
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
                    <button type="submit" class="btn btn-primary">Save</button>
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
                  <th>Username</th>
                  <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach($tbl_users as $u){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->user_name?></td>
                  <td><?php echo $u->user_username ?></td>
                  <td>
                    <!-- Button trigger modal -->
                    <a href="javascript:void(0);" class="item_edit" data-id="<?php echo $u->user_id ; ?>" data-name="<?php echo $u->user_name ; ?>" data-username="<?php echo $u->user_username ; ?>" data-toggle="modal" data-target="#exampleModalCenter1">
                    <button class="btn  btn-primary fa fa-trash-o" >Edit</button></a>

                    <a href="#" onclick="delete_c(<?php echo $u->user_id; ?>)" class="btn  btn-warning fa fa-trash-o">
                    Delete</a></td>
                  </td>
                </tr>
                <?php } ?>
              </table>

              <!-- Modal Edit -->
              <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Form Edit User</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <?php echo form_open('crud/edit');?>
                        <div class="col-lg-4">
                          <h5 align="left">Nama Lengkap :</h5>
                        </div>
                        <div class="col-lg-8">
                        <input type="hidden" name="user_id" id="user_id" class="form-control"/>
                          <input type="text" name="name" id="name" class="form-control" required/>
                          <?php echo form_error('name'); ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h5 align="left">Username : </h5>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" name="username" id="username" class="form-control" required/>
                          <?php echo form_error('username'); ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h5 align="left">Password : </h5>
                        </div>
                          <div class="col-lg-8">
                            <input type="password" name="password" class="form-control" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_conf.pattern = this.value;" required/>
                            <?php echo form_error('password'); ?>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h5 align="left">Konfirmasi Password : </h5>
                        </div>
                        <div class="col-lg-8">
                          <input type="password" name="password_conf" id="password_conf" class="form-control" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" required/>
                          <?php echo form_error('password_conf'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="reset" class="btn btn-info">Reset</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <?php echo form_close();?>
                </div>
              </div>
              <!-- End Modal Edit -->

              </div>
            </div>
          </div>
        </div>
        <script src="<?php echo base_url('assets/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/jquery-3.3.1.js'); ?>"></script>
        <?php if(validation_errors() !=null){?>
              <script>
              jQuery.noConflict();
              $('#exampleModalCenter').modal({
        show: 'true'
    });
    </script>
          <?php }?>
          <script>
          $(document).ready(function() {
            $('#example').on('click','.item_edit',function() {
            var userid = $(this).data('id');
            var name = $(this).data('name');
            var username = $(this).data('username');

	            // // Isi nilai pada field
	            // modal.find('#user_id').attr("value",div.data('id'));
	            // modal.find('#user_name').attr("value",div.data('name'));
	            // modal.find('#user_username').attr("value",div.data('username'));


              $('[name="name"]').val(name);
              $('[name="username"]').val(username);
              $('[name="user_id"]').val(userid);
              //alert(username);
              //$('#exampleModalCenter1').modal();
	            //modal.find('#user_password').attr("value",div.data('user_password'));
	            });

            $('#example').DataTable(
              {
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
              }
            );
          } );

          function delete_c(id){

            var url = '<?php echo base_url('crud/hapus');?>/'+id
            swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location.href = url;
              } else {
                swal("Your imaginary file is safe!");
              }
            });
          }
        </script>

    <?php if($this->session->flashdata('swal') != null){ ?>
    <?php
    $swal_data = $this->session->flashdata('swal');
    // $swa = explode('|',$swal_data);
    ?>

        <script>
                swal("<?= $swa[0] ?>", "<?= $swa[1] ?>", "<?= $swa[2] ?>");
        </script>
    <?php } ?>


</body>

</html>
