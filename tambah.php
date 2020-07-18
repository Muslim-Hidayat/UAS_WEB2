
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tambah Data Rekapitulasi Bantuan Sosial COVID-19</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<form action="proses.php" method="post">
		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px;">Tambah Data Rekapitulasi Bantuan Sosial COVID-19</h3>
		</div>

			<div class="container">
<!-- 	<form action="<?= BASE_URL."module/data-anggota/input.php?No_Anggota=$No_Anggota"; ?>" method="POST"> -->
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="Nama_Lengkap" class="form-control" placeholder="Masukkan Nama" required>
				</div>
				<div class="form-group">
					<label>No HP</label>
					<input type="text" name="No_Hp" class="form-control" placeholder="Masukkan No HP" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="Email" class="form-control" placeholder="Masukkan Email" required>
				</div>
				<div class="form-group">
					<label>Alokasi</label>
					<select name="Alokasi" style="width: 100%; height: 40px;" required>
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
					<input type="text" name="Jumlah_Transaksi" class="form-control" placeholder="Jumlah Transaksi" required>
				</div>
				<div class="form-group">
					<label>Jumlah Dana</label>
					<input type="text" name="Jumlah_Dana" class="form-control" placeholder="Jumlah Dana" required>
				</div>
								
				<div class="form-group">
					<input type="submit" name="button" value="Kirim"  class="btn btn-primary tombol ml-auto">
				</div>
		</form>

		<script src="bootstrap.min.js"></script>
	</body>
</html>