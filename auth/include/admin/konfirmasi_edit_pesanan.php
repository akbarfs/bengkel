<?php 
if(isset($_SESSION['id_transaksi'])){
    $id = $_SESSION['id_transaksi'];
    $ongkir = $_POST['ongkir'];
    $harga_barang = $_POST['harga-barang'];
    $total = $_POST['total'];
    $status = $_POST['status']; 
} 

$sql = "UPDATE `transaksi` set 
`ongkir`='$ongkir',`harga_barang`='$harga_barang',`total`='$total',`status`='$status' WHERE `id_transaksi`='$id'";
mysqli_query($koneksi,$sql);

header("Location:index.php?include=data-pesanan&notif=editberhasil");
?>
