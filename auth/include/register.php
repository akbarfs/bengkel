<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Welcome,</b>Telo Speedshop Dashboard</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Fill form to create account</p>
      <?php if(!empty($_GET['gagal'])){?>
      <?php if($_GET['gagal']=="userKosong"){?>
      <span class="text-danger">
      Maaf Username Tidak Boleh Kosong
      </span>
      <?php } else if($_GET['gagal']=="passKosong"){?>
      <span class="text-danger">
      Maaf Password Tidak Boleh Kosong
       </span>
       <?php } else {?>
       <span class="text-danger">
       Maaf Username dan Password Anda Salah
       </span>
      <?php }?>
      <?php }?>

      <form action="index.php?include=konfirmasi-register" method="post">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama" name="nama" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Telepon" name="telpon" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Alamat" name="alamat" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  name="register" value="register" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->

          <div class="col-8">
            <p>Sudah punya akun? <a href="index.php"> Login</a></p>
          </div>
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php include("includes/script.php") ?>

</body>
</html>
