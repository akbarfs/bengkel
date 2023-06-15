<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php include("includes/header.php") ?>
    <?php include("includes/sidebar.php") ?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3><i class="fas fa-clipboard-list"></i>  Pesanan Saya</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Pesanan Saya</li>
              </ol>
            </div>  
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header">
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-sm-12">
            <table class="table table-striped">
                    <thead class="thead-dark">                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">No Pesanan</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php 
                          $id = $_SESSION['id'];
                          $no = 1;
                          $sql_g = "SELECT `id_transaksi`,`total`,`bukti_pembayaran`,`status` FROM `transaksi` WHERE `id_customer`='$id;'
                          ORDER BY `tanggal`";
                          $query_g = mysqli_query($koneksi, $sql_g);
                          while($data_g = mysqli_fetch_row($query_g)){
                          $id_t = $data_g[0];
                          $total = $data_g[1];
                          $pay = $data_g[2];
                          $stts = $data_g[3];
                        ?>

                     <td class="center"><?php echo $no;?></td>
                     <td><?php echo $id_t;?></td>
                      <td>
                      <?php if($total<1){ ?>
                        Menghitung Total Harga
                      <?php }else{ ?>
                        <?php echo $total;?>
                      <?php }?>
                      </td>
                      <td>
                      <?php if($pay<1){ ?>
                        Belum bayar
                      <?php }else{ ?>
                        Sudah Bayar
                      <?php }?>
                      </td>
                     <td><?php echo $stts;?></td>
                     <td>
                       <a href="index.php?include=detail-order&data=<?= $id_t;?>">
                         <i class="btn btn-xs btn-info"><i class="fas fa-eye"></i></i>
                       </a>
                     </td>
                     </tr>
                     <?php $no++;}?>
                    </tbody>
                  </table>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">&nbsp;</div>
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("includes/footer.php") ?>

  </div>
  <!-- ./wrapper -->

  <?php include("includes/script.php") ?>
</body>