<?php
$koneksi = mysqli_connect("localhost","root","","telo2");
// cek koneksi
if (!$koneksi){
die("Error koneksi: " . mysqli_connect_errno());
}
?>