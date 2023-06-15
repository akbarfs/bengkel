<?php
if (isset($_GET['data'])) {
  $id_testi = $_GET['data'];
  $_SESSION['id_testi'] = $id_testi;
  $sql_d = "SELECT `nama_tester`,`isi_testi` FROM `testi` WHERE `id_testi` = '$id_testi'";
  $query_d = mysqli_query($koneksi, $sql_d);
  while ($data_d = mysqli_fetch_row($query_d)) {
    $nama = $data_d[0];
    $isi = $data_d[1];
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
              <h3><i class="fas fa-box-comment"></i>  Form Edit Tester</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Form Edit Tester</li>
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
            <form action="index.php?include=konfirmasi-edit-testi" method="post" id="commentForm" enctype="multipart/form-data">
              <div class="col-6">
              <div class="input-group mb-3">  
                <input type="file" class="form-control" name="gambar">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-image"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $nama;?>" placeholder="Masukkan nama tester" name="nama">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <textarea class="form-control" name="isi" id="editor1" cols="5" rows="10"><?php echo $isi;?></textarea>
              </div>

              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit"  name="simpan" value="simpan" class="btn btn-primary btn-block">Simpan</button>
                </div>
                </form>

                <div class="col-4">
                  <a href="index.php?include=testi" class="btn btn-secondary btn-block">Kembali</a>
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