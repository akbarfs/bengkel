<?php 
    $id_kategori = $_POST['kategori'];
    $nama = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    $lokasi_f = $_FILES['foto']['tmp_name'];
    $nama_f = $_FILES['foto']['name'];
    $direktori = '././gambar/produk/'.$nama_f;


if(empty($id_kategori)){ 
        header("Location:index.php?include=tambah-data-produk&notif=tambahkosong&jenis=kategori");
    }else if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-data-produk&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `produk` 
        (`nama_produk`,`id_kategori`,`deskripsi`,`stock`,`harga`,`foto`)
        VALUES ('$nama','$id_kategori','$deskripsi','$stock','$harga','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id_produk = mysqli_insert_id($koneksi);

        header("Location:index.php?include=data-produk&notif=tambahberhasil");
    }

?>