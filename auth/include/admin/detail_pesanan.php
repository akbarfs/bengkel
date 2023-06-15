<?php 
if (isset($_GET['data'])) {
  $id_transaksi = $_GET['data'];
  $_SESSION['id_transaksi'] = $id_transaksi;
  
  $sql_g = "SELECT `t`.`total`,`t`.`status`,`t`.`ongkir`,`u`.`name`,`t`.`harga_barang`,`t`.`tanggal` FROM `transaksi` `t`
  INNER JOIN `users` `u` ON `t`.`id_customer` = `u`.`id` 
  WHERE `t`.`id_transaksi` = '$id_transaksi'";
  $query_g = mysqli_query($koneksi, $sql_g);
  while($data_g = mysqli_fetch_row($query_g)){
  $total1 = $data_g[0];
  $status = $data_g[1];
  $ongkir = $data_g[2];
  $customer = $data_g[3];
  $harga = $data_g[4];
  $tanggal = $data_g[5];
}
?>

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
              <h3><i class="fas fa-clipboard-list"></i>  Detail Pesanan</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Detail Pesanan</li>
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
            <table class="table table-bordered">
                  <thead class=" text-primary">
                    <tr>
                        <td style="width:20%;font-weight:600;">No Pesanan</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $id_transaksi;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Customer</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $customer;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Produk yang dipesan</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td>
                     <?php
                          //get item
                            $sql_h = "SELECT `p`.`nama_produk`,`k`.`total`,`k`.`kuantitas` from `orders` `o`
                            inner join `keranjang` `k` ON `o`.`id_keranjang` = `k`.`id_item` 
                            inner join `produk` `p` ON `k`.`id_produk` = `p`.`id_produk` 
                            where `o`.`id_transaksi`='$id_transaksi'";
                            $query_h = mysqli_query($koneksi,$sql_h);
                            while($data_h = mysqli_fetch_row($query_h)){
                            $produk = $data_h[0];
                            $total= $data_h[1];
                            $jumlah = $data_h[2];
                            ?>
                            <li><?php echo $produk;?> [Jumlah : <?php echo $jumlah;?> | Total harga : <?php echo $total;?>]</li>
                      <?php }?>
                     </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Ongkir</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;">
                          <?php if($ongkir<1){ ?>
                          Menghitung Biaya Ongkir
                          <?php }else{ ?>
                            Rp.<?php echo $ongkir;?>
                          <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Harga Barang</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;">
                          <?php if($harga<1){ ?>
                          Menghitung Harga Barang
                          <?php }else{ ?>
                            Rp.<?php echo $harga;?>
                          <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Total</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;">
                          <?php if($total1<1){ ?>
                          Menghitung Total Harga
                          <?php }else{ ?>
                            Rp.<?php echo $total1;?>
                          <?php }?>
                        </td>
                   </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Status</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $status;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Tanggal Pesanan</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;"><?php echo $tanggal;?></td>
                    </tr>

                    <?php }?>
                  </tbody>
                </table>

                <button class="btn btn-secondary"><a href="index.php?include=data-pesanan">Kembali</a></button>

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