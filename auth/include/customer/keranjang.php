<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

    $sql_dh = "delete from `keranjang` 
    where `id_item` = '$id'";
    mysqli_query($koneksi,$sql_dh);
  }
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
              <h3><i class="fas fa-cart-plus"></i>  Keranjang</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Keranjang</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header"></div>
          <!-- /.card-header -->
          <form class="form-horizontal" action="index.php?include=order" method="post" enctype="multipart/form-data">
          <div class="card-body">
          <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div>
                <?php }?>
                <?php }?>
                </div>
            
            <div class="p-3">
            <div class="form-group row">
                <table class="table table-striped">
                  <h4 for="tag" class="col-sm-3 col-form-h4 font-weight-bold">Pilih Item</label>
                  <?php 
                    $hiden = "no";
                    $sql_g = "SELECT `id_item`,`produk`.`nama_produk`,`kuantitas`,`total` FROM `keranjang`
                    INNER JOIN `produk` ON `keranjang`.`id_produk` =   `produk`.`id_produk`
                    WHERE `hide` = '$hiden'
                    ORDER BY `id_item`";
                    $query_g = mysqli_query($koneksi, $sql_g);
                    while($data_g = mysqli_fetch_row($query_g)){
                    $id_it = $data_g[0];
                    $pr = $data_g[1];
                    $qty = $data_g[2];
                    $total = $data_g[3];
                  ?>
                <tr>
                  <td class="pl-3">
                    <input class="mr-3" type="checkbox" name="keranjang[]" value="<?php echo $id_it;?>">
                    <?php echo $pr;?><br> [Jumlah : <?php echo $qty;?> | Total : Rp.<?php echo $total;?>]
                  </td>
                  <td>
                  <a href="javascript:if(confirm('Anda yakin ingin menghapus item?'))window.location.href='index.php?include=keranjang&aksi=hapus&data=<?= $id_it;?>&notif=hapusberhasil'"
                     class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>
                     Hapus</a>
                  </td>
                </tr>
                <?php }?>
              </table>
            </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info float-right mr-5"><i class="fas fa-plus"></i> Pesan Sekarang</button>
          </form>
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