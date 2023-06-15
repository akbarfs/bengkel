<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$role = "customer";


$sql = "INSERT INTO `users`
(`name`,`username`,`email`,`password`,`telpon`,`alamat`,`role`)
VALUES ('$nama','$username','$email',md5('$password'),'$telpon','$alamat','$role')";
mysqli_query($koneksi,$sql);
$id = mysqli_insert_id($koneksi);

header("Location:index.php?include=login&notif=daftarberhasil");

?>