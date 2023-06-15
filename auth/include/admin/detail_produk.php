<?php
if (isset($_GET['data'])) {
  $id_produk = $_GET['data'];
  $_SESSION['id_produk'] = $id_produk;
  //get data produk
  $sql_d = "SELECT `nama_produk`,`stock`,`harga`,`deskripsi`,`kategori`.`kategori`,`foto` FROM `produk`
  INNER JOIN `kategori` ON `produk`.`id_kategori` =   `kategori`.`id_kategori`
  WHERE `id_produk` = '$id_produk'";
  $query_d = mysqli_query($koneksi, $sql_d);
  while ($data_d = mysqli_fetch_row($query_d)) {
    $nama = $data_d[0];
    $stock = $data_d[1];
    $harga = $data_d[2];
    $deskripsi = $data_d[3];
    $id_kategori = $data_d[4];
    $foto = $data_d[5];
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
              <h3><i class="fas fa-box-open"></i>  Detail Produk</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Detail Produk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header">
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-sm-12">
            <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td width="20%"><i class="fas fa-box-open"></i> <strong>PRODUK<strong></td>
                    <td width="80%"><img style="width:200px;height:200px;" src="././gambar/produk/<?php echo $foto;?>" alt="" srcset=""></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Nama produk<strong></td>
                    <td width="80%"><?= $nama; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Kategori<strong></td>
                    <td width="80%"><?= $id_kategori; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Stock<strong></td>
                    <td width="80%"><?= $stock; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Harga<strong></td>
                    <td width="80%">Rp.<?= $harga; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Deskripsi<strong></td>
                    <td width="80%"><?= $deskripsi; ?></td>
                  </tr>
                </tbody>
              </table>

              <div class="col-4">
                  <a href="index.php?include=data-produk" class="btn btn-secondary btn-block">Kembali</a>
                </div>
                
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