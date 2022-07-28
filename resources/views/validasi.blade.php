<?php


// koneksi database
	include '../Plugin/koneksi.php';

//jalankan validasi
$id=$_GET['id'];
$status=$_GET['status'];

$q="UPDATE tabel_lapkinerja set status=$status where id=$id";

mysqli_query($koneksi,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Style dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Css Custome -->
    <link rel="stylesheet" href="plugin/style.css">
</head>

<body>

<?php
    include "sidebar.php"
?>

<div class="container-md">

<!-- Card Tabel -->
	<div class="card mt-5">
		<div class="card-header bg-success  text-white text-center">
	    	Validasi Capaian Kinerja Pegawai (Bulan)
	  	</div>
	  	<div class="card-body table-responsive">
	   		<table class="table table-bordered">
	   			<tr class="text-center">
	   				<th>No</th>
	   				<th>NIP</th>
	   				<th>Nama</th>
	   				<th>Jabatan</th>
	   				<th>Unit Kerja</th>
	   				<th>Laporan Kinerja Bulanan</th>
	   				<th>Status</th>
	   				<th>Persentase Capaian Kinerja (%)</th>
	   			</tr>

	   			<?php
	   				$no = 1;
	   				$tampil = mysqli_query($koneksi, "SELECT *  from tabel_lapkinerja order by id desc");
	   				while ($data = mysqli_fetch_array($tampil)) :
	   					   			
	   			?>

	   			<tr class="text-center">
	   				<td><?=$no++;?></td>
	   				<td><?=$data['NIP']?></td>
	   				<td><?=$data['tname']?></td>
	   				<td><?=$data['tjabatan']?></td>
	   				<td><?=$data['topd']?></td>
	   				<td><?=$data['tlaporankinerja']?></td>
	   				<td><?php 
	   					if ($data['status'] == 1) {
	   						echo '<p><a class="btn btn-success" href="validasi.php?id='.$data['id'].'&status=0">Valid</a></p>';
	   					}	else {
	   							echo '<p><a class="btn btn-danger" href="validasi.php?id='.$data['id'].'&status=1">Tolak</a></p>';
	   						}
	   					?>
	   					</label></td>
	   				<td><?=$data['tpersen']?></td>
	   			</tr>
	   			<?php endwhile; ?>
	   		</table>
	  	</div>
	</div>
<!-- Akhir Card Tabel -->

</div>

<!-- Js boostrp 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
<footer>
	<div class="p-3"></div>
	<?php
		include 'footer.php'
	?>
</footer>