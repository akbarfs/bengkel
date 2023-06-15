<?php
if (isset($_GET['data'])) {
    $id_user = $_GET['data'];
    $_SESSION['id'] = $id_user;
    $sql_d = "SELECT `name`,`username`,`email`,`telpon`,`alamat` from `users` where `id` = '$id_user'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data = mysqli_fetch_array($query_d)) {
        //$id_user = $data['id_user'];
        $name = $data[0];
        $username = $data[1];
        $email = $data[2];
        $telpon = $data[3];
        $alamat = $data[4];
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
              <h3><i class="fas fa-user-tie"></i>  Form Edit Profile</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Form Edit Profile</li>
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
            <form action="index.php?include=konfirmasi-edit-profile" method="post">
              <div class="col-6">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan nama anda" value="<?php echo $name;?>" name="name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan username" value="<?php echo $username;?>" name="username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-address-card"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan email" value="<?php echo $email;?>" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan nomor telepon" value="<?php echo $telpon;?>" name="telpon">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan alamat" value="<?php echo $alamat;?>" name="alamat">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-map"></span>
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
                  <a href="index.php?include=profile" class="btn btn-secondary btn-block">Kembali</a>
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