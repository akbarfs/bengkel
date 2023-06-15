<?php 
$id = $_SESSION['id'];
$id_produk = $_POST['id_produk'];
$kuantitas = $_POST['kuantitas'];
$harga = $_POST['harga'];
$total = $_POST['total'];
$hide = "no";

$sql = "INSERT INTO `keranjang` 
(`id_produk`,`id_customer`,`kuantitas`,`harga`,`total`,`hide`)
VALUES ('$id_produk','$id','$kuantitas','$harga','$total','$hide')";

//echo $sql;
mysqli_query($koneksi,$sql);
$id_item = mysqli_insert_id($koneksi);

header("Location:index.php?include=keranjang&notif=berhasil");
?>
