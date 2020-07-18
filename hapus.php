<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM data_bantuan where No_HP=$id";
$hasil=mysqli_query ($covid19,$query);

if($hasil){
	header("location: data.php?pesan=hapus");
}else{
	echo "hapus data gagal";
}
?>