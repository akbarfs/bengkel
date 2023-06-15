
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
              <h3><i class="fas fa-box-open"></i>  Form Tambah Produk</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Form Tambah Produk</li>
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
            <form action="index.php?include=konfirmasi-tambah-produk" method="post" id="commentForm" enctype="multipart/form-data">
              <div class="col-6">
              <div class="input-group mb-3">  
                <input type="file" class="form-control" name="foto">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-image"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-box-open"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <select class="form-control" name="kategori" id="kategori">
                    <option value="">-- Pilih Kategori --</option>
                    <?php 
                    $sql_k = "SELECT `id_kategori`,`kategori` FROM 
                    `kategori` ORDER BY `kategori`";
                    $query_k = mysqli_query($koneksi, $sql_k);
                    while($data_k = mysqli_fetch_row($query_k)){
                    $id_lay = $data_k[0];
                    $lay = $data_k[1];
                    ?>
                    <option value="<?php echo $id_lay;?>"><?php echo $lay;?></option>
                    
                    <?php }?>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-database"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan stock produk" name="stock">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tags"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan harga produk" name="harga">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-money-bill"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <textarea class="form-control" name="deskripsi" id="editor1" cols="5" rows="10"></textarea>
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