<?php
include "koneksi.php";

$Nama_Lengkap = $_POST['Nama_Lengkap'];
$No_Hp= $_POST ['No_Hp'];
$Email = $_POST ['Email'];
$Alokasi = $_POST ['Alokasi'];
$Jumlah_Transaksi = $_POST ['Jumlah_Transaksi'];
$Jumlah_Dana = $_POST ['Jumlah_Dana'];

$query = mysqli_query($covid19, "INSERT INTO data_bantuan (Nama_Lengkap,No_Hp,Email,Alokasi,Jumlah_Transaksi,Jumlah_Dana) VALUES 
	('$Nama_Lengkap','$No_Hp','$Email','$Alokasi','$Jumlah_Transaksi','$Jumlah_Dana')");

header("Location: data.php");
?>

