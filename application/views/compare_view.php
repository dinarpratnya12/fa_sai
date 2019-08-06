<!-- Select -->
    <div style="background-color: #f0f0f0;">
      <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SELECT
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                            <form method="post">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="periode">
                                        <option selected disabled>-- Pilih Periode --</option>
                                        <?php
                                            $periode = $this->db->query('SELECT DISTINCT data_penawaran.period FROM data_penawaran')->result();
                                            foreach($periode as $row) {?>
                                        <option value="<?= $row->period;?>" ><?= $row->period;?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <br>
                                </div>
                                <input type="hidden" name="compare" value="Compare">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </form>
                            </div>
                            <?php if(isset($_POST['compare'])){ ?>
                            <div class="table-responsive">
                                <table class="table table-striped text" cellpadding="" id="example3" bordered=>
                                    <thead>
                                        <tr>
                                            <th style="position: sticky;left:0px;background-color:white;">Part Number</th>
                                            <th>Invoice Number</th>
                                            <th>Tanggal</th>
                                            <th>Periode</th>
                                            <th>Supplier</th>
                                            <th>Price Invoice (pcs)</th>
                                            <th>Price Quatition (pcs)</th>
                                            <th>Price Different</th>
                                            <th>Remark</th>
                                            <th>Qty Material di Invoice</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($data_komper as $row):
                                        ?>
                                        <tr>
                                            <td style='position: sticky;left:0px; background-color:white'><?=$row->productid ?></td>
                                            <td><?=$row->invoicenumber?></td>
                                            <td><?=$row->invoicedate?></td>
                                            <td><?=$row->period ?></td>
                                            <td><?=$row->supplier ?></td>
                                            <td>
                                                <?php
                                                    if(stripos($row->kalkulasi_per_pcs,".") !== false){
                                                        echo "".number_format($row->kalkulasi_per_pcs,4);
                                                    }else{
                                                        echo "".$row->kalkulasi_per_pcs;
                                                }?>
                                            </td>
                                            <td>
                                                <?php
                                                    if(stripos($row->base_price,".") !== false){
                                                        echo "".number_format($row->base_price,4);
                                                    }else{
                                                        echo "".$row->base_price;
                                                }?>
                                            </td>
                                            <td>
                                                <?php
                                                    $sisa = $row->base_price - $row->kalkulasi_per_pcs;
                                                    $str3 = str_replace("-","",$sisa);
                                                    if(stripos($str3,".") !== false){
                                                        echo "".number_format($str3,2);
                                                    }else if(stripos($str3,".") !== false){
                                                        echo "".$str3;
                                                    }else{
                                                        echo "0";
                                                }?>

                                            </td>
                                            <td>
                                                <?php
                                                    $sisa = ((double) number_format($row->base_price,4)) - ((double) number_format($row->kalkulasi_per_pcs,4));

                                                    if($sisa == 0){
                                                        echo "Price Sama";
                                                    }else if($sisa > 0){
                                                        echo "Price di Invoice Lebih Murah";
                                                    }else {
                                                        echo "Price di Invoice Lebih Mahal";
                                                    }
                                                    ?>
                                            </td>
                                            <td><?=$row->quantityunit ?></td>
                                            <td>
                                                <?php
                                                    $sisa2 = $row->kalkulasi_per_pcs - $row->base_price;
                                                    $amount = (int)$row->quantityunit * $sisa2;
                                                    $strqty = str_replace("-","",$amount);
                                                    if(stripos($strqty,".") !== false){
                                                        echo "".number_format($strqty,2);
                                                    }else{
                                                        echo "".$strqty;
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <tbody>
                                    <br>
                                </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>

    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell

             $('#example3 thead tr').clone(true).appendTo( '#example3 thead' );
                $('#example3 thead tr:eq(1) th').each( function (i) {
                    var title = $(this).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                    $( 'input', this ).on( 'keyup change', function () {
                        if ( table.column(i).search() !== this.value ) {
                            table
                                .column(i)
                                .search( this.value )
                                .draw();
                        }
                    } );
                });
            var table = $('#example3').DataTable(
                {
                    orderCellsTop : true,
                    "scrollY": "400px",
                    "scrollCollapse": true,
                    "scrollX": true,
                    "paging": false,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            } );

    </script>
