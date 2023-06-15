<?php 
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = '././gambar/foto-tester/'.$nama_f;

if(empty($nama)){ 
        header("Location:index.php?include=tambah-testi&notif=tambahkosong&jenis=nama");
    }else if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-testi&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `testi` 
        (`nama_tester`,`isi_testi`,`foto_tester`)
        VALUES ('$nama','$isi','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id_produk = mysqli_insert_id($koneksi);

        header("Location:index.php?include=testi&notif=tambahberhasil");
    }

?>