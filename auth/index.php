<?php
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
    $include = $_GET["include"];
    if($include=="konfirmasi-login"){
        include("include/konfirmasilogin.php");
    }else if($include=="konfirmasi-register"){
        include("include/konfirmasi_register.php");
    }else if($include=="konfirmasi-edit-profile"){
        include("include/konfirmasi_edit_profile.php");
    }else if($include=="konfirm-tambah-keranjang"){
        include("include/customer/konfirm_tambah_keranjang.php");
    }else if($include=="order"){
        include("include/customer/order.php");
    }else if($include=="detail-order"){
        include("include/customer/detail_order.php");
    }else if($include=="konfirmasi-tambah-kategori"){
        include("include/admin/konfirmasi_tambah_kategori.php");
    }else if($include=="konfirmasi-edit-kategori"){
        include("include/admin/konfirmasi_edit_kategori.php");
    }else if($include=="konfirmasi-tambah-produk"){
        include("include/admin/konfirmasi_tambah_produk.php");
    }else if($include=="konfirmasi-edit-produk"){
        include("include/admin/konfirmasi_edit_produk.php");
    }else if($include=="konfirmasi-tambah-testi"){
        include("include/admin/konfirmasi_tambah_testi.php");
    }else if($include=="konfirmasi-edit-testi"){
        include("include/admin/konfirmasi_edit_testi.php");
    }else if($include=="detail-pesanan"){
        include("include/admin/detail_pesanan.php");
    }else if($include=="konfirmasi-edit-orderan"){
        include("include/admin/konfirmasi_edit_pesanan.php");
    }else if($include=="logout"){
        include("include/logout.php");
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<body>
    <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if(isset($_SESSION['id'])){
                $id = $_SESSION['id'];
                $sql = "select `name`,`username`, `role`,`telpon`,`email`,`alamat` from `users` where `id`='$id'";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_row($query)){                
                $name = $data[0];
                $username = $data[1];
                $role = $data[2];
                $telpon = $data[3];
                $email = $data[4];
                $alamat = $data[5];
                }

                if($include=="produk"){
                    include("include/customer/produk.php");
                }else if($include=="tambah-keranjang"){
                    include("include/customer/tambah_keranjang.php");
                }else if($include=="keranjang"){
                    include("include/customer/keranjang.php");
                }else if($include=="my-orders"){
                    include("include/customer/my_orders.php");
                }else if($include=="prosedur"){
                    include("include/customer/prosedur_pemesanan.php");
                }else if($include=="kategori"){
                    include("include/admin/kategori.php");
                }else if($include=="edit-kategori"){
                    include("include/admin/edit_kategori.php");
                }else if($include=="tambah-kategori"){
                    include("include/admin/tambah_kategori.php");
                }else if($include=="data-produk"){
                    include("include/admin/data_produk.php");
                }else if($include=="tambah-produk"){
                    include("include/admin/tambah_produk.php");
                }else if($include=="edit-produk"){
                    include("include/admin/edit_produk.php");
                }else if($include=="detail-produk"){
                    include("include/admin/detail_produk.php");
                }else if($include=="data-pesanan"){
                    include("include/admin/data_pesanan.php");
                }else if($include=="edit-pesanan"){
                    include("include/admin/edit_pesanan.php");
                }else if($include=="testi"){
                    include("include/admin/testi.php");
                }else if($include=="tambah-testi"){
                    include("include/admin/tambah_testi.php");
                }else if($include=="edit-testi"){
                    include("include/admin/edit_testi.php");
                }else if($include=="edit-profile"){
                    include("include/edit_profile.php");
                }else if($include=="profile"){
                include("include/profile.php");
                } 

                }else if($include=="register"){
                    include("include/register.php");
                }else{
                    include("include/login.php");
                }                 }else{
                if(isset($_SESSION['id_user'])){
                //pemanggilan ke halaman-halaman profil jika ada session
                include("include/profile.php");

                }else{
                //pemanggilan halaman form login
                include("include/login.php");
                }
               }            
        ?>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="side/js/scripts.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>    
</html>