<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

     //get gambar
     $sql_dh = "delete from `produk` 
     where `id_produk` = '$id'";
     $query_dh = mysqli_query($koneksi,$sql_dh); 
     
    //  $jumlah_dh = mysqli_num_rows($query_dh); 
    //  if($jumlah_dh>0){ 
    //  while($data_dh = mysqli_fetch_row($query_dh)){ 
    //  $gambar = $data_dh[0]; 
    //  //menghapus gambar 
    //  unlink("././gambar/produk/$gambar"); 
    //  } 
    //  }
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
              <h3><i class="fas fa-box-open"></i>  Data Produk</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Data Produk</li>
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
              <a href="index.php?include=tambah-produk" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Produk</a>
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
                        <th width="30%">Nama Produk</th>
                        <th width="30%">Kategori</th>
                        <th>Stock</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr>
                     <?php 
                    $no = 1;
                    $sql = "SELECT `id_produk`,`nama_produk`,`kategori`.`kategori`,`stock` FROM `produk`
                    INNER JOIN `kategori` ON `produk`.`id_kategori` =   `kategori`.`id_kategori`
                    ORDER BY `id_produk`";
                    $query = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_row($query)){
                    $id_p = $data[0];
                    $nama = $data[1];
                    $kat = $data[2];
                    $stock = $data[3];
                     ?>
                     <td><?php echo $no;?></td>
                     <td><?php echo $nama;?></td>
                     <td><?php echo $kat;?></td>
                     <td><?php echo $stock;?></td>
                     <td align="center">
                     <a href="index.php?include=edit-produk&data=<?= $id_p;?>"
                     class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                     <a href="index.php?include=detail-produk&data=<?=$id_p;?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                     <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?= $nama; ?>?'))window.location.href='index.php?include=data-produk&aksi=hapus&data=<?= $id_p;?>&notif=hapusberhasil'"
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