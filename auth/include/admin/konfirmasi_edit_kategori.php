<?php 
if(isset($_SESSION['id_kategori'])){
    $id = $_SESSION['id_kategori'];
    $kategori = $_POST['kategori'];
} 

$sql = "UPDATE `kategori` set 
`kategori`='$kategori' WHERE `id_kategori`='$id'";
mysqli_query($koneksi,$sql);

header("Location:index.php?include=kategori&notif=editberhasil");
?>
