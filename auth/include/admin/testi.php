<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

     //get gambar
     $sql_dh = "delete from `testi` 
     where `id_testi` = '$id'";
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
              <h3><i class="fas fa-user-tie"></i>  Data Testimonial</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Data Testimonial</li>
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
              <a href="index.php?include=tambah-testi" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Testi</a>
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
                        <th>Foto</th>
                        <th width="30%">Nama tester</th>
                        <th width="30%">Isi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr>
                     <?php 
                    $no = 1;
                    $sql = "SELECT `id_testi`,`nama_tester`,`isi_testi`,`foto_tester` FROM `testi`";
                    $query = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_row($query)){
                    $id_t = $data[0];
                    $nama = $data[1];
                    $isi = $data[2];
                    $foto = $data[3];
                    ?>
                     <td><?php echo $no;?></td>
                     <td><img style="width:200px;height:200px;" src="././gambar/foto-tester/<?php echo $foto;?>" alt=""></td>
                     <td><?php echo $nama;?></td>
                     <td><?php echo $isi;?></td>
                     <td align="center">
                     <a href="index.php?include=edit-testi&data=<?= $id_t;?>"
                     class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                     <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?= $nama; ?>?'))window.location.href='index.php?include=testi&aksi=hapus&data=<?= $id_t;?>&notif=hapusberhasil'"
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