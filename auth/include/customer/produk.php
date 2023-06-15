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
              <h3><i class="fas fa-box-open"></i>  Produk</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Produk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header"></div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-sm-12">
            <div class="w-full h-fit grid grid-cols-2 md:grid-cols-5 gap-[24px] my-[42px]">
                <?php 
                    $sql_p = "SELECT `id_produk`,`nama_produk`,`harga`,`foto`,`stock`,`deskripsi` FROM `produk` ";

                    $sql_p .= " order by `id_produk` asc limit 6";
                    $query_p = mysqli_query($koneksi,$sql_p); 
                    while($data_p = mysqli_fetch_row($query_p)){ 
                    $id_produk = $data_p[0]; 
                    $nama_produk = $data_p[1]; 
                    $harga = $data_p[2];
                    $foto = $data_p[3];
                    $stock = $data_p[4];
                    $desk = $data_p[5];
                ?>
                <table class="table-striped">
                  <th class="p-3">
                    <img style="width:200px;height:200px;border:solid black 1px;" src="././gambar/produk/<?php echo $foto;?>" alt="" srcset="">
                  </th>
                  <th class="p-3">
                    <h3 class="font-weight-bold"><?php echo $nama_produk; ?></h3>
                    <div class="row pl-2">
                    <p class="btn btn-secondary mr-3">Harga : Rp.<?php echo $harga;?></p>
                    <p class="btn btn-secondary">Stock : <?php echo $stock; ?></p>
                    </div>
                    <p style="font-weight:400;"><?php echo $desk;?></p>
                    <a href="index.php?include=tambah-keranjang&data=<?php echo $id_produk;?>"><button class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Tambah Keranjang</button></a> 
                  </th>
                </table><br>
                <?php } ?>
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