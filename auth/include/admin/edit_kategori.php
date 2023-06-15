<?php
if (isset($_GET['data'])) {
  $id_kategori = $_GET['data'];
  $_SESSION['id_kategori'] = $id_kategori;
  //get data kategori buku
  $sql_d = "SELECT `kategori` FROM `kategori` WHERE `id_kategori` = '$id_kategori'";
  $query_d = mysqli_query($koneksi, $sql_d);
  while ($data_d = mysqli_fetch_row($query_d)) {
    $kategori = $data_d[0];
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
              <h3><i class="fas fa-database"></i>  Form Edit Kategori</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Form Edit Kategori</li>
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
            <form action="index.php?include=konfirmasi-edit-kategori" method="post">
              <div class="col-6">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan kategori" value="<?php echo $kategori;?>" name="kategori">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-database"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit"  name="simpan" value="simpan" class="btn btn-primary btn-block">Simpan</button>
                </div>
                </form>

                <div class="col-4">
                  <a href="index.php?include=kategori" class="btn btn-secondary btn-block">Kembali</a>
                </div>
                <!-- /.col -->

              </div>

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