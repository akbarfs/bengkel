<?php
if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  $sql = "select `role` from `users` where `id`='$id'";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){                
  $role = $data[0];
  }
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>

          <!-- Akses Admin -->
          <?php
            if ($role=="admin"){?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Data Master
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?include=kategori" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kategori Produk</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.php?include=data-produk" class="nav-link">
                  <i class="nav-icon fas fa-box-open"></i>
                  <p>
                    Data Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=data-pesanan" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>
                    Data Pesanan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=testi" class="nav-link">
                  <i class="nav-icon fas fa-comments"></i>
                  <p>
                    Testimonial
                  </p>
                </a>
              </li>
        <?php }?>

        <!-- Akses Pelanggan -->
        <?php
          if ($role=="customer"){?>
            <li class="nav-item">
              <a href="index.php?include=produk" class="nav-link">
                <i class="nav-icon fas fa-box-open"></i>
                <p>
                  Produk
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?include=keranjang" class="nav-link">
                <i class="nav-icon fas fa-cart-plus"></i>
                <p>
                  Keranjang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?include=my-orders" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                  Pesanan Saya
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?include=prosedur" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  Prosedur Pemesanan
                </p>
              </a>
            </li>
        <?php }?>

          <li class="nav-item">
            <a href="index.php?include=logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php }?>