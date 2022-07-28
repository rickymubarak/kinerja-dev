<?php
	// koneksi database
	include '../Plugin/koneksi.php';
	if (isset($_GET['hal'])) {
		if ($_GET['hal'] == "edit") {
			$tampil = mysqli_query($koneksi, "SELECT * from tabel_lapkinerja where id = '$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) {
				$vnip 			= $data['NIP'];
				$vnama			= $data['tname'];
				$vjabatan		= $data['tjabatan'];
				$vopd			= $data['topd'];
				$vnipatasan		= $data['tnipatasan'];
				$vnamaatasan	= $data['tnameatasan'];
				$vlaporankinerja= $data['tlaporankinerja'];
				$vtargetlaporan	= $data['targetlaporan'];
			}
		}
		else {
			if ($_GET['hal'] == "hapus") {
				$hapus = mysqli_query($koneksi, "DELETE from tabel_lapkinerja where id = '$_GET[id]' ");
				if ($hapus) {
					echo "	<script>
								alert('Hapus Data Berhasil!!');
								document.location='laporan.php';
							</script>";
				}
			}
		}

	}
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

<!-- Card Input -->
<?php
// masukan data
include'tambah.php';
?>
	<div class="card mt-5">
		<div class="card-header bg-primary text-white text-center">
	    	Input Data Capaian Kinerja Pegawai
	  	</div>
	  	<div class="card-body">
	   		<form method="post" action="">
	   			<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">nip</label>
					<input type="text" name="tnip" value="<?=@$vnip?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan NIP tanpa spasi !" required>
				</div>
	   			<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Nama</label>
					<input type="text" name="tname" value="<?=@$vnama?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Jabatan</label>
					<input type="text" name="tjabatan" value="<?=@$vjabatan?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jabatan" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Unit Kerja</label>
					<select class="form-select" aria-label="Default select example" name="topd" required>
						<option selected>Pilih Instansi</option>
						<option value="<?=@$vopd?>"><?=@$vopd?>BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</option>
						<option value="2">SEKRETARIAT DAERAH</option>
						<option value="3">INSPEKTORAT</option>
						<option value="4">BADAN PERENCANAAN PEMBANGUNAN DAERAH</option>
						<option value="5">SATUAN POLISI PAMONG PRAJA</option>
						<option value="6">DINAS KOMUNIKASI DAN INFORMATIKA</option>
						<option value="7">DINAS PENGENDALIAN PENDUDUKAN, KELUARGA BERENCANA, PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">nip atasan langsung</label>
					<input type="text" name="tnipatasan" value="<?=@$vnipatasan?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan NIP Atasan tanpa spasi !" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Nama Atasan</label>
					<input type="text" name="tnameatasan" value="<?=@$vnamaatasan?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Atasan" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Laporan Kinerja</label>
					<input type="text" name="tlaporankinerja" value="<?=@$vlaporankinerja?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Capaian Kinerja" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Jumlah</label>
					<input type="text" name="ttargetlaporan" value="<?=@$vtargetlaporan?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jumlah" required>
				</div>
				<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
				<button type="reset" class="btn btn-danger" name="breset">Kosongkan Halaman</button>
	   		</form>
	  	</div>
	</div>
<!-- Akhir Card Input -->

<!-- Card Tabel -->
	<div class="card mt-5">
		<div class="card-header bg-success  text-white text-center">
	    	Rekapan Laporan Kinerja (Bulan)
	  	</div>
	  	<div class="card-body table-responsive">
	   		<table class="table table-bordered">
	   			<tr class="text-center">
	   				<th>No</th>
	   				<th>NIP</th>
	   				<th>Nama</th>
	   				<th>Jabatan</th>
	   				<th>Unit Kerja</th>
	   				<th>Rencana Kinerja</th>
	   				<th>Target Waktu (Bulan)</th>
	   				<th>Laporan Kinerja Bulanan</th>
	   				<th>Status</th>
	   				<th>Persentase Capaian Kinerja (%)</th>
	   				<th>Aksi</th>
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
	   				<td><?=$data['target']?><br><?=$data['satuan']?><br><?=$data['rencana']?></td>
	   				<td><?=$data['waktu']?><br>Bulan</td>
	   				<td><?=$data['targetlaporan']?><br><?=$data['tlaporankinerja']?></td>
	   				<td><label class="btn 
	   					<?php if ($data['status'] == 1) {
	   						echo 'btn-success';
	   					}	elseif ($data['status'] == 0) {
	   							echo 'btn-danger';
	   						}
	   							else {
	   								echo 'btn-secondary';
	   							}
	   					?> ">

	   					<?php if ($data['status'] == 1) {
	   							echo 'Valid';
	   						}	elseif ($data['status'] == 0) {
	   								echo "Ditolak";
	   							}
	   								else {
	   									echo 'Belum Valid';
	   								} 
	   					?>
	   					</label></td>
	   				<td><?php
	   						$rencana 	= $data['target'];
	   						$realisasi	= $data['targetlaporan'];
	   						$persen		= ($realisasi / $rencana) * 100;
	   	
	   						echo $persen; echo ' %';
	   					?>
	   				</td>
	   				<td>
	   					<a href="laporan.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning mb-2">Ubah</a>
	   					<a href="laporan.php?hal=hapus&id=<?=$data['id']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?)" class="btn btn-danger">Hapus</a>
	   				</td>
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