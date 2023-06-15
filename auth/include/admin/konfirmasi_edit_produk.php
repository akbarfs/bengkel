<?php
if(isset($_SESSION['id_produk'])){
    $id = $_SESSION['id_produk'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = '././gambar/produk/' . $nama_file;

    //get gambar
    $sql_f = "SELECT `foto` FROM `produk` WHERE `id_produk`='$id'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $gambar = $data_f[0];
     //echo $gambar;
} 

if(empty($nama)){
    header("Location:index.php?include=edit-produk&notif=editkosong");
}else{
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = '././gambar/produk/' . $nama_file;
    if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($gambar)){
            unlink("././gambar/produk/$gambar");
        }
    $sql = "UPDATE `produk` set 
    `nama_produk`='$nama',`deskripsi`='$deskripsi',`stock`='$stock',`harga`='$harga',`id_kategori`='$kategori', `foto`='$nama_file' WHERE `id_produk`='$id'";
    mysqli_query($koneksi,$sql);

}else{
$sql = "UPDATE `produk` set 
`nama_produk`='$nama',`deskripsi`='$deskripsi',`stock`='$stock',`harga`='$harga',`id_kategori`='$kategori' WHERE `id_produk`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=data-produk&notif=editberhasil");
}
}
?>