<?php
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

if (empty($password)) {
        $sql = "UPDATE `users` set `name`='$nama', `email`='$email', `username`='$username', `telpon`='$telpon', `alamat` = '$alamat' where `id`= '$id_user'";
        mysqli_query($koneksi, $sql);
        header("Location:index.php?include=profile&notif=editberhasil");
    } else {
        $sql = "UPDATE `users` set `name`='$nama', `email`='$email', `username`='$username',`passowrd`= MD5('$password'),`telpon`='$telpon', `alamat` = '$alamat' where `id`= '$id_user'";
        mysqli_query($koneksi, $sql);
        header("Location:index.php?include=profile&notif=editberhasil");
    }
}
