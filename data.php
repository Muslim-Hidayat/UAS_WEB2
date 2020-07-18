
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data Rekapitulasi Penerimaan Bantuan Sosial COVID-19</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px; color: black; font-family: Times new roman; ">Rekapitulasi Penerimaan Bantuan Sosial COVID-19
			<br>
			Sampai dengan
			<?php
			date_default_timezone_set('Asia/Jakarta');
			?>
			<?php
			echo date('d-m-Y H:i:s');
			?>
			</h3>
		<center>
			<a href="cetak.php" target="_blank">
				<button class="btn btn-info tombol ml-auto">Cetak</button>
			</a>
			<a href="logout.php">
				<button class="btn btn-info tombol ml-auto">Logout</button>
			</a>
		</center>
		</div>

		<form action="tambah.php" method="POST">		
		<div class="form-group" align="left">
			<input type="submit" name="button" value="Add Data" class="btn btn-info tombol ml-auto">
		</div>
		</form>

			<div class="card-body table-responsive p-0">
              <table class="table table-bordered">
                <thead>
                  <tr style="background-color: aqua">
                    <th>Nomor</th>
                    <th>Nama Lengkap</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Alokasi</th>
                    <th>Jumlah Transaksi</th>
                    <th>Jumlah Dana</th>
                    <th colspan="2" align="center">Action</th>               
                   </tr>
              </thead>
		
<?php
include "koneksi.php";
$no=1;
$sql = mysqli_query ($covid19, "SELECT*FROM data_bantuan");
while ($sql2= mysqli_fetch_array($sql)){
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $sql2 ['Nama_Lengkap']; ?></td>
	<td><?php echo $sql2 ['No_HP']; ?></td> 
	<td><?php echo $sql2 ['Email']; ?></td>  
	<td><?php echo $sql2 ['Alokasi']; ?></td> 
	<td><?php echo $sql2 ['Jumlah_Transaksi']; ?></td> 
	<td><?php echo $sql2 ['Jumlah_Dana']; ?></td>


	<td>
		<a href="hapus.php?id=<?php echo $sql2 ['No_HP']; ?>">
			<button class="btn btn-warning btn-sm">Delete </button>
		</a>
		<a href="edit.php?id=<?php echo $sql2 ['No_HP'];?>">
			<button class="btn btn-success btn-sm">Update </button>
		</a>
	</td> 
</tr>

<?php
}
?>
</table>
</div>
		<script src="bootstrap.min.js"></script>
	</body>
</html>