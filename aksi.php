<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];

 
// menginput data ke database
mysqli_query($conect,"INSERT INTO tbl_mhs2 VALUES('','$nim','$nama','$nama1')");
 
// mengalihkan halaman kembali ke index.php
header("location:UTS.php");
 
?>