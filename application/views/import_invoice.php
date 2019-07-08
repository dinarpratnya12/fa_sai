
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart">
                                <div class="container">

                            <!-- Import -->
                                <div class="row">
                                    <div class="container-fluid">
                                        <h3>Form Import</h3>
                                        <hr>
                                        <div class="row">
                                            <!-- Form invoice -->
                                            <div class="col-lg-6">
                                                <div style="background-color: #f2f2f2; padding: 10px">
                                                    <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format Invoice</a>
                                                    <br>

                                                    <br>
                                                    <form method="post" action="<?php echo site_url("Import/form"); ?>" enctype="multipart/form-data">
                                                        <input type="file" name="file">
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
                                                    </form>
                                                    <?php if(!isset($_POST['preview'])): ?>
                                                    <center><h4>Data Invoice</h4></center>
                                                    <br>
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-striped table-bordered text" cellpadding="" id="example" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Buppin Number</th>
                                                                    <th>Supplier</th>
                                                                    <th>Price</th>
                                                                    <th>Tanggal</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                if( ! empty($data_invoice)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                                                    foreach($data_invoice as $data){ // Lakukan looping pada variabel siswa dari controller
                                                                        echo "<tr>";
                                                                        $str = $data->buppin_number;
                                                                        $str2 = str_replace("-","",$str);
                                                                        echo "<td>".$str2."</td>";
                                                                        echo "<td>".$data->supplier."</td>";
                                                                        echo "<td>".$data->price_total."</td>";
                                                                        echo "<td>".$data->invoice_date."</td>";
                                                                        echo "</tr>";
                                                                    }
                                                                }else{ // Jika data tidak ada
                                                                    echo "<tr><td colspan='14'>Data tidak ada</td></tr>";
                                                                }
                                                            ?>
                                                        </table>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php
                                                        if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
                                                            if(isset($upload_error)){ // Jika proses upload gagal
                                                                echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                                            }
                                                            echo "<form method='post' action='".site_url("Import/import")."'>";
                                                        ?>
                                                    <?php if(isset($sheet)){?>
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-bordered text" cellpadding="" id="example">
                                                            <thead>
                                                                <th>Buppin Number</th>
                                                                <th>Supplier</th>
                                                                <th>Price</th>
                                                                <th>Tanggal</th>
                                                            </thead>
                                                            <?php
                                                                $numrow = 1;
                                                                $kosong = 0;
                                                                // unset($sheet[1]);

                                                                foreach($sheet as $row){
                                                                    $qty_int = (int)$row['D'];
                                                                    $perseribu_int = (int)$row['G'];
                                                                    $total =  $perseribu_int/1000*$qty_int;

                                                                // Ambil data pada excel sesuai Kolom
                                                                    $buppin_number = $row['C'];
                                                                    $supplier = $row['E'];
                                                                    $price_total = $total;
                                                                    $buppin_date = $row['B'];

                                                                    if($numrow > 1){
                                                                        if($row['C'] != "" || $row['C'] != null){
                                                                            echo "<tr>";
                                                                            echo "<td>".$buppin_number."</td>";
                                                                            echo "<td>".$supplier."</td>";
                                                                            echo "<td>".$price_total."</td>";
                                                                            echo "<td>".$buppin_date."</td>";
                                                                            echo "</tr>";
                                                                        }
                                                                    }
                                                                    $numrow++; // Tambah 1 setiap kali looping
                                                                }
                                                                echo "</table></div>";

                                                                if($kosong > 0){
                                                            ?>
                                                            <script>
                                                                $(document).ready(function(){
                                                                    // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                                                    $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                                                                    $("#kosong").show(); // Munculkan alert validasi kosong
                                                                });
                                                            </script>

                                                            <?php
                                                                }else{ // Jika semua data sudah diisi
                                                                    echo "<hr>";

                                                                    // Buat sebuah tombol untuk mengimport data ke database
                                                                    echo "<button class='btn btn-primary' type='submit' name='import'>Import</button>";
                                                                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                                                    echo "<a href='".site_url("Import/index")."' class='btn btn-default'>Cancel</a>";
                                                                }
                                                                echo "</form>";
                                                        }
                                                            ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            <?php if(!isset($_POST['preview'])){ ?>
                                            </div>
                                            <?php } ?>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Import -->
                                </div>
                            </div>
                        </div>
                    </div>