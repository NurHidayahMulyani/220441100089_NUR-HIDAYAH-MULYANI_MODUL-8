<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];

 
// update data ke database
mysqli_query($conect," UPDATE tbl_mhs2 SET nim ='$nim' , nama_mhs='$nama' , nama_dosen='$nama1' WHERE id_mahasiswa='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:UTS.php");
 
?>