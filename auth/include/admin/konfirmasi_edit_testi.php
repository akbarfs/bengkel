<?php
if(isset($_SESSION['id_testi'])){
    $id = $_SESSION['id_testi'];
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = '././gambar/foto-tester/'.$nama_f;

    //get gambar
    $sql_f = "SELECT `foto_tester` FROM `testi` WHERE `id_testi`='$id'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $gambar = $data_f[0];
     //echo $gambar;
} 

if(empty($nama)){
    header("Location:index.php?include=edit-testi&notif=editkosong");
}else{
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = '././gambar/foto-tester/' . $nama_file;
    if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($gambar)){
            unlink("././gambar/foto-tester/$gambar");
        }
    $sql = "UPDATE `testi` set 
    `nama_tester`='$nama',`isi_testi`='$isi', `foto_tester`='$nama_file' WHERE `id_testi`='$id'";
    mysqli_query($koneksi,$sql);

}else{
$sql = "UPDATE `testi` set 
`nama_tester`='$nama',`isi_testi`='$isi' WHERE `id_testi`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=testi&notif=editberhasil");
}
}
?>