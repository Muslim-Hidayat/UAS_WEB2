
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Rekapitulasi Penerimaan Bantuan Sosial COVID-19</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px;">Rekapitulasi Penerimaan Bantuan Sosial COVID-19
			<br>
			Sampai dengan
			<?php
			date_default_timezone_set('Asia/Jakarta');
			echo date('d-m-Y H:i:s');
			?>
			</h3>
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
</tr>

<?php
}
?>
</table>
<script>
	window.print();
</script>
</div>
		<script src="bootstrap.min.js"></script>
	</body>
</html>