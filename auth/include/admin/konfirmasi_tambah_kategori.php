<?php 
    $kategori = $_POST['kategori'];

if(empty($kategori)){ 
        header("Location:index.php?include=tambah-kategori&notif=tambahkosong&jenis=kategori");
    }else{ 
        $sql = "INSERT INTO `kategori` 
        (`kategori`)
        VALUES ('$kategori')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=kategori&notif=tambahberhasil");
    }

?>