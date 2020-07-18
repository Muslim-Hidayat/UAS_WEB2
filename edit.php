<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$data = mysqli_query($covid19,	"SELECT*FROM data_bantuan where No_HP='$id'");
	while($d = mysqli_fetch_array($data)){
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Edit Rekapitulasi Bantuan Sosial COVID-19</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<center><br><h1>Edit Rekapitulasi Bantuan Sosial COVID-19</h1></center>
		<form method="post" action="prosesedit.php">
				<div class="container">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="Nama_Lengkap" class="form-control" value="<?php echo $d['Nama_Lengkap']; ?>">
				</div>
				<div class="form-group">
					<label>No HP</label>
					<input type="hidden" name="No_HP" value="<?php echo $d['No_HP']; ?>">
					<input type="text" name="No_HP" class="form-control" value="<?php echo $d['No_HP']; ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="Email" class="form-control" value="<?php echo $d['Email']; ?>">
				</div>
				<div class="form-group">
					<label>Alokasi</label>
					<select name="Alokasi" style="width: 100%; height: 40px;" value="<?php echo $d['Alokasi']; ?>">
						<option disabled selected value>Jenis Alokasi</option>
		                <option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
		                <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
		                <option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
		                <option value="Hand Sanitizer">Hand Sanitizer</option>
		                <option value="Sembako Masyarakat">Sembako Masyarakat</option>
		                
		            </select>
				</div>
				<div class="form-group">
					<label>Jumlah Transaksi</label>
					<input type="text" name="Jumlah_Transaksi" class="form-control" value="<?php echo $d['Jumlah_Transaksi']; ?>">
				</div>
				<div class="form-group">
					<label>Jumlah Dana</label>
					<input type="text" name="Jumlah_Dana" class="form-control" value="<?php echo $d['Jumlah_Dana']; ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="button" value="Kirim"  class="btn btn-info tombol ml-auto">
				</div>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>