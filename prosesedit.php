<?php 
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$id= $_POST ['No_HP'];
$Email = $_POST ['Email'];
$Alokasi = $_POST ['Alokasi'];
$Jumlah_Transaksi = $_POST ['Jumlah_Transaksi'];
$Jumlah_Dana = $_POST ['Jumlah_Dana'];

 
// update data ke database
mysqli_query($covid19,"UPDATE data_bantuan set Nama_Lengkap='$Nama_Lengkap', Email='$Email', Alokasi='$Alokasi', Jumlah_Transaksi='$Jumlah_Transaksi' where No_HP='$id'");



// mengalihkan halaman kembali ke index.php
header("location: data.php");
 
?> 