<!DOCTYPE html>
<html>
<!-- Bagian halaman HTML yang akan konvert -->

<head>
	<meta charset='UTF-8'>
	<link rel="shortcut icon" href="<?= base_url('asset/kartu/logo/') . $sekolah['logo']; ?>">
	<title>Cetak Kartu Pelajar</title>
</head>
<style>
	@media print {
		* {
			-webkit-print-color-adjust: exact;
		}
	}

	@page {
		size: 21cm 30cm;
		margin: 5mm 7mm 5mm 7mm;
		/* change the margins as you want them to be. */
	}

	table {
		border-spacing: 0px;
	}

	/* cellspacing */

	th,
	td {
		padding: 0px;
	}
</style>

<body onload='window.print()' style="font-size: 12px;margin-top:0;position:absolute;">
	<div style="width: 925px; height: 267px; margin-bottom:10px; background-image: url('<?= base_url('asset/kartu/desain/') . $sekolah['desain']; ?>');">
		<img style="border: 1px solid #ffffff;position: absolute;margin-left: 323px;margin-top: 112px;" src="<?= base_url('asset/kartu/foto/') . "muhammad andri fahrizal.png"; ?>" width="75.5px" height="94.4px">
		<img style="position: absolute;margin-left: 65px;margin-top: 135px;" src="<?= base_url('asset/kartu/qr/test.png'); ?>" width="75.5px" height="75.5px">
		<img style="position: absolute;margin-left: 20px;margin-top: 20px;" src="<?= base_url('asset/kartu/logo/') . $sekolah['logo']; ?>" width="65.5px" height="75.5px">
		<img style="position: absolute;margin-left: 530px;margin-top: 150px;" src="<?= base_url('asset/kartu/ttd/') . $sekolah['tanda_tangan']; ?>" width="60px" height="55px">
		<img style="position: absolute;margin-left: 530px;margin-top: 150px;" src="<?= base_url('asset/kartu/stempel/') . $sekolah['stempel']; ?>" width="60px" height="55px">
		<div style="padding-top: 5px;">
			<p style="margin-top: 10px; right:520px; position: absolute;font-family: Cambria;font-size: 18px;text-transform: uppercase;"><strong><?= $sekolah['sekolah']; ?></strong></p>
			<p style="margin-top: 30px; right:520px; position: absolute;font-family: Cambria;font-size: 18px;text-transform: uppercase;"><strong><?= $sekolah['lokasi']; ?></strong></p>
			<p style="margin-top: 50px; right:520px; position: absolute;font-family: Cambria;font-size: 25px;"><strong>KARTU PELAJAR</strong></p>
			<p style="margin-top: 35px; right:265px; position: absolute;font-family: Cambria;font-size: 12px;"><strong><?= $sekolah['website']; ?></strong></p>
			<table style="margin-top: 90px; position: absolute; right:610px; text-align: right; font-family: Cambria;font-size: 12px;">
				<tr>
					<td>NIS</td>
				</tr>
				<tr>
					<td>123456</td>
				</tr>
				</tr>
				<tr>
					<td>Nama</td>
				</tr>
				<tr>
					<td><strong style="font-size: 12px;">Budi Sudarsono</strong></td>
				</tr>
				</tr>
				<tr>
					<td>Tempat,tanggal lahir</td>
				</tr>
				<tr>
					<td>Brebes, 17 Agustus 1945</td>
				</tr>
				</tr>
				<tr>
					<td>Alamat</td>
				</tr>
				<tr>
					<td>Jl MT Haryono Semarang Tengah</td>
				</tr>
				</tr>
			</table>
		</div>
		<p style="font-family:Verdana; right:525px; margin-top: 210px; text-align:right; padding-left: 10px;font-size: 8px;  position: absolute;">Alamat: <?= $sekolah['alamat']; ?> - Kode Pos <?= $sekolah['kode_pos']; ?><br> Email: <?= $sekolah['email']; ?> | Telp. <?= $sekolah['telepon']; ?></p>
		<p style="margin-top:10px;margin-bottom:-5px; padding-left: 570px; color:white; font-family:monospace;font-size: 16px;text-align: right; padding-right: 20px"><strong>TATA TERTIB SEKOLAH</strong><br>
			<div style=" list-style-position: inside; padding-left: 600px; color:white;  font-family:arial, serif;font-size: 12px;text-align: right; padding-right: 20px">
				<ol>
					<?= $sekolah['visi_misi']; ?>
				</ol>
			</div>
		</p>
		<p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">
			<?= $sekolah['kota']; ?>,
			<?php
			$tanggal = date("j");
			$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
			$bulan = $bulan[date("n")];
			$tahun = date("Y");
			echo $tanggal . " " . $bulan . " " . $tahun;
			?>
		</p><br>
		<p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">Mengetahui, <br>Kepala <?= $sekolah['sekolah']; ?> <?= $sekolah['lokasi']; ?></p>
		<br>
		<p style="position: absolute;padding-left: 550px;margin-top: 20px;font-size: 10px; font-family: arial;"><strong><u><?= $sekolah['kepsek']; ?></u></strong></p>
	</div>

	</div>
</body>

</html>