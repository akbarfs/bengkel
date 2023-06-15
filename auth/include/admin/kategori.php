<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

    $sql_dh = "delete from `kategori` 
    where `id_kategori` = '$id'";
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
              <h3><i class="fas fa-database"></i>  Kategori</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Kategori</li>
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
              <a href="index.php?include=tambah-kategori" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Kategori</a>
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

            <div class="col-sm-12">
            <table class="table table-bordered">
                    <thead class="thead-dark">                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori</th>
                        <th width="30%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr>
                     <?php 
                    $no = 1;
                    $sql = "SELECT `id_kategori`,`kategori` FROM `kategori`
                    ORDER BY `id_kategori`";
                    $query = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_row($query)){
                    $id_kat = $data[0];
                    $kat = $data[1];
                     ?>
                     <td><?php echo $no;?></td>
                     <td><?php echo $kat;?></td>
                     <td align="center">
                     <a href="index.php?include=edit-kategori&data=<?= $id_kat;?>"
                     class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                     <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?= $kat; ?>?'))window.location.href='index.php?include=kategori&aksi=hapus&data=<?= $id_kat;?>&notif=hapusberhasil'"
                     class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>
                     Hapus</a>
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