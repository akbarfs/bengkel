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
              <h3><i class="fas fa-user-tie"></i> Profil</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Profil</li>
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
              <a href="index.php?include=edit-profile&data=<?php echo $id;?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-sm-12">
              <!-- <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                </div> -->
              <?php if (!empty($_GET['notif'])) {
                if ($_GET['notif'] == "editberhasil") { ?>
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Diubah</div>
                <?php } ?>
              <?php } ?>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td colspan="2"><i class="fas fa-user-circle"></i> <strong>PROFIL<strong></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Nama<strong></td>
                    <td width="80%"><?= $name; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Username<strong></td>
                    <td width="80%"><?= $username; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Email<strong></td>
                    <td width="80%"><?= $email; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>No telpon<strong></td>
                    <td width="80%"><?= $telpon; ?></td>
                  </tr>
                  <tr>
                    <td width="20%"><strong>Alamat<strong></td>
                    <td width="80%"><?= $alamat; ?></td>
                  </tr>
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