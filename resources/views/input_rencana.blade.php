<?php
	include '../Plugin/koneksi.php';
	
	// edit dan hapus
	if (isset($_GET['hal'])) {
		if ($_GET['hal'] == "edit") {
			$tampil = mysqli_query($koneksi, "SELECT * from tabel_lapkinerja where id = '$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) {
				$vnip 		= $data['NIP'];
				$vnama		= $data['tname'];
				$vjabatan	= $data['tjabatan'];
				$vopd		= $data['topd'];
				$vnipatasan	= $data['tnipatasan'];
				$vnamaatasan= $data['tnameatasan'];
				$vrencana	= $data['trencana'];
				$vtarget	= $data['ttarget'];
				$vsatuan	= $data['tsatuan'];
				$vwaktu		= $data['twaktu'];
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