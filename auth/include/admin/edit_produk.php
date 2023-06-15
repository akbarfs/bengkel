<?php
if (isset($_GET['data'])) {
  $id_produk = $_GET['data'];
  $_SESSION['id_produk'] = $id_produk;
  //get data produk
  $sql_d = "SELECT `nama_produk`,`stock`,`harga`,`deskripsi`,`id_kategori` FROM `produk` WHERE `id_produk` = '$id_produk'";
  $query_d = mysqli_query($koneksi, $sql_d);
  while ($data_d = mysqli_fetch_row($query_d)) {
    $nama = $data_d[0];
    $stock = $data_d[1];
    $harga = $data_d[2];
    $deskripsi = $data_d[3];
    $id_kategori = $data_d[4];
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
              <h3><i class="fas fa-box-open"></i>  Form Edit Produk</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Form Edit Produk</li>
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
            <form action="index.php?include=konfirmasi-edit-produk" method="post" id="commentForm" enctype="multipart/form-data">
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
                <input type="text" class="form-control" value="<?php echo $nama;?>" placeholder="Masukkan nama produk" name="nama">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-box-open"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <select class="form-control" name="kategori" id="kategori">
                <option value="0">- Pilih Kategori -</option>
                <?php 
                $sql_l = "SELECT `id_kategori`,`kategori` FROM `kategori` ORDER BY `id_kategori`";
                $query_l = mysqli_query($koneksi, $sql_l);

                while($data_l = mysqli_fetch_row($query_l)){
                $id_kat = $data_l[0];
                $kat = $data_l[1];
                ?>
        
                <option value="<?php echo $id_kat;?>" 
                    <?php if($id_kat==$id_kategori){?>
                selected <?php }?>><?php echo $kat;?></option>
              
                <?php }?>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-database"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $stock;?>" placeholder="Masukkan stock produk" name="stock">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tags"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="">Rp.</span>
                  </div>
                </div>
                <input type="text" class="form-control" value="<?php echo $harga;?>" placeholder="Masukkan harga produk" name="harga">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-money-bill"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <textarea class="form-control" name="deskripsi" id="editor1" cols="5" rows="10"><?php echo $deskripsi;?></textarea>
              </div>

              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit"  name="simpan" value="simpan" class="btn btn-primary btn-block">Simpan</button>
                </div>
                </form>

                <div class="col-4">
                  <a href="index.php?include=data-produk" class="btn btn-secondary btn-block">Kembali</a>
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