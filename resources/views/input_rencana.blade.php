<?php
	include '../Plugin/koneksi.php';

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
											rencana 	= '$_POST[trencana]',
											target 	= '$_POST[ttarget]',
											satuan 	= '$_POST[tsatuan]',
											waktu = '$_POST[twaktu]'
											where id = '$_GET[id]'
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

		

		// $nip=$_POST['NIP'];
		// $nama=$_POST['tname'];
		// $jabatan=$_POST['tjabatan'];
		// $opd=$_POST['opd'];
		// $nipatasan=$_POST['tnipatasan'];
		// $namaatasan=$_POST['tnameatasan'];
		// $laporan=$_POST['tlaporankinerja'];
	
		// $q=mysqli_query($koneksi, "SELECT * from tabel_lapkinerja where NIP='$nip'");
		// $cek=mysqli_num_rows($q);	

			// if ($cek==0) 
			// {
			// 	mysqli_query($koneksi, "INSERT INTO tabel_lapkinerja values ('tnip','tname','tjabatan','topd','tnipatasan','tnameatasan','tlaporankinerja')");
			// }

			// echo "NIP sudah terdaftar !";
	}	

?>