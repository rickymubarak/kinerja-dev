<?php
// koneksi database
	include '../public/koneksi.blade.php';

	if (isset($_POST['bsimpan'])) 
	{
		// pengujian data di simpan atau edit
		if ($_GET['hal'] == "edit") 
		{
			// data akan di edit
			$edit = mysqli_query($koneksi,"UPDATE tabel_lapkinerja set
											NIP 			= '$_POST[tnip]',
											tname 			= '$_POST[tname]',
											tjabatan 		= '$_POST[tjabatan]',
											topd 			= '$_POST[topd]',
											tnipatasan 		= '$_POST[tnipatasan]',
											tnameatasan 	= '$_POST[tnameatasan]',
											rencana 		= '$_POST[trencana]',
											target 			= '$_POST[ttarget]',
											satuan 			= '$_POST[tsatuan]',
											waktu 			= '$_POST[twaktu]'
											where 		id 	= '$_GET[id]'
											");

			if ($edit) 
			{
				echo "<script>
						alert('Edit data Berhasil!');
						document.location='rencana.php';
					</script>";
			}
			else
			{
				echo "<script>
						alert('Edit data Gagal!');
						document.location='rencana.php';
					</script>";
			}

		} else
		{
			//Data akan di simpan
			$simpan = mysqli_query($koneksi,"INSERT into tabel_lapkinerja (NIP, tname, tjabatan, topd, tnipatasan, tnameatasan, rencana, target, satuan, waktu) 
										values 	('$_POST[tnip]',
												'$_POST[tname]',
												'$_POST[tjabatan]',
												'$_POST[topd]',
												'$_POST[tnipatasan]',
												'$_POST[tnameatasan]',
												'$_POST[trencana]',
												'$_POST[ttarget]',
												'$_POST[tsatuan]',
												'$_POST[twaktu]')
										");

			if ($simpan) 
			{
				echo "<script>
						alert('Simpan data Berhasil!');
						document.location='rencana.php';
					</script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data Gagal!');
						document.location='rencana.php';
					</script>";
			}
		}

	}
?>

{{-- menggunakan templat tampilan web --}}
@extends('layouts.tampilan')
@section('content')

<div class="container-md">
	
<!-- Card Input -->
	<div class="card mt-5">
		<div class="card-header bg-primary text-white text-center">
	    	Input Rencana Kinerja Pegawai
	  	</div>
	  	<div class="card-body">
	   		<form method="post" action="{{ "rencana" }}">
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
					<label for="exampleFormControlInput1" class="form-label textUbah">Rencana Kinerja</label>
					<input type="text" name="trencana" value="<?=@$vrencana?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Rencana Kinerja" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Target</label>
					<input type="text" name="ttarget" value="<?=@$vtarget?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jumlah Output" required>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Satuan</label>
					<input type="text" name="tsatuan" value="<?=@$vsatuan?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Output Rencana Kinerja" required>
				</div>
				<div class="row g-3 align-item-center mb-3">
					<label for="exampleFormControlInput1" class="form-label textUbah">Waktu (Bulan)</label>
					<div class="col-auto mt-0">
						<input type="text" name="twaktu" value="<?=@$vwaktu?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan angka" required>
					</div>
					<div class="col-auto mt-0">
						<span class="form-text">BULAN</span>
					</div>
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
	   				<th>NIP Atasan Langsung</th>
	   				<th>Nama Atasan Langsung</th>
	   				<th>Rencana Kinerja</th>
	   				<th>Target Waktu (Bulan)</th>
	   				<th>Status</th>
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
	   				<td><?=$data['tnipatasan']?></td>
	   				<td><?=$data['tnameatasan']?></td>
	   				<td><?=$data['target']?><br><?=$data['satuan']?><br><?=$data['rencana']?></td>
	   				<td><?=$data['waktu']?><br>Bulan</td>
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

@endsection