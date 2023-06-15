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
              <h3><i class="fas fa-clipboard-list"></i>  Data Pesanan</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Data Pesanan</li>
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

            <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="10%">No Pesanan</th>
                        <th width="30%">Customer</th>
                        <th width="30%">Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr>
                     <?php 
                    $no = 1;
                    $sql = "SELECT `id_transaksi`,`users`.`name`,`status`,`tanggal` FROM `transaksi`
                    INNER JOIN `users` ON `transaksi`.`id_customer` =   `users`.`id`
                    ORDER BY `id_transaksi`";
                    $query = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_row($query)){
                    $id_t = $data[0];
                    $nama = $data[1];
                    $tgl = $data[2];
                    $stts = $data[3];
                     ?>
                     <td><?php echo $no;?></td>
                     <td><?php echo $id_t;?></td>
                     <td><?php echo $nama;?></td>
                     <td><?php echo $stts;?></td>
                     <td><?php echo $tgl;?></td>
                     <td align="center">
                     <a href="index.php?include=edit-pesanan&data=<?= $id_t;?>"
                     class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                     <a href="index.php?include=detail-pesanan&data=<?=$id_t;?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
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