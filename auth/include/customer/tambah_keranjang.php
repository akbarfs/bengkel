<?php 
      if(isset($_GET['data'])){
      $id_produk = $_GET['data'];

      $sql = "SELECT `nama_produk`,`harga` FROM `produk`
      WHERE `id_produk`='$id_produk'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $nama_produk = $data[0];
        $harga = $data[1];
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
              <h3><i class="fas fa-shopping-basket"></i>  Tambah ke keranjang</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Tambah ke keranjang</li>
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
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirm-tambah-keranjang" >
            <div class="col-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $id_produk;?>" name="id_produk" placeholder="Masukkan id produk" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-box"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $nama_produk;?>" name="nama" placeholder="Masukkan nama produk" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-box-open"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $harga?>" placeholder="Harga per item" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control" name="kuantitas" id="kuantitas" placeholder="Masukkan jumlah barang" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-shopping-basket"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="total" id="total"placeholder="Total harga barang" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-receipt"></span>
                  </div>
                </div>
              </div>
              </div>
              </div>

            <div class="row p-1 ml-2">
              <button class="btn btn-primary mr-3" type="submit">Masukkan keranjang</button>

          </form>
            <a href="index.php?include=produk">
              <button class="btn btn-secondary">Batal</button>
            </a>
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

  <script>
      $(document).on('change', '#kuantitas', function(){
        var total = $('#harga').val() * $('#kuantitas').val();

        $('#total').val(total);
      })
  </script>
</body>