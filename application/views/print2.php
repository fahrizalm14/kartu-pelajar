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
</style>

<body onload='window.print()' style="font-family: arial;font-size: 12px;position:absolute;">
	<div style="width: 750px;height: 243px;margin: 50px;background-image: url('<?= base_url('asset/kartu/desain/') . $sekolah['desain']; ?>');">
		<img style="position: absolute;padding-left: 12px;padding-top: 5px;" class="img-responsive img" alt="logo image" src="<?= base_url('asset/kartu/logo/') . $sekolah['logo']; ?>" width="40px">
		<img style="position: absolute;padding-left: 312px;padding-top: 5px;" class="img-responsive img" alt="dinas image" src="<?= base_url('asset/kartu/dinas/') . $sekolah['dinas']; ?>" width="50px">
		<img style="position: absolute;margin-left: 400px;margin-top: 135px;" src="<?= base_url('asset/kartu/qr/test.png'); ?>" width="50px" height="50px">
		<p style="position: absolute; font-family: arial; font-size: 10px; color: #fff; padding-left: 85px;text-transform: uppercase; text-align: center;"><?= $sekolah['lembaga']; ?><br><?= $sekolah['domisili']; ?> <?= $sekolah['kota']; ?> <br><b style="font-size: 12px"><?= $sekolah['sekolah']; ?> <?= $sekolah['lokasi']; ?></b></p>
		<p style="padding-left: 123px;padding-top: 70px; "><b>KARTU PELAJAR</b></p>
		<img style="border: 1px solid #ffffff;position: absolute;margin-left: 20px;margin-top: -20px;" alt="foto" src="<?= base_url('asset/kartu/foto/')  . "muhammad andri fahrizal.png"; ?>" width="80px">
		<table style="margin-top: -10px;padding-left: 120px; position: relative;font-family: arial;font-size: 11px;">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?= $s['nama']; ?></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><?= $s['nis']; ?></td>
			</tr>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><?= $s['tempat_lahir']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?= $s['tanggal_lahir']; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?= $s['jk']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?= $s['alamat']; ?></td>
			</tr>
			<tr>
				<td>Berlaku</td>
				<td>:</td>
				<td>Selama Menjadi Siswa/i</td>
			</tr>
		</table>
		<p style="padding-left: 10px;font-size: 8px; font-family: arial;position: absolute;">Alamat: <?= $sekolah['alamat']; ?> - Kode Pos <?= $sekolah['kode_pos']; ?><br> Email: <?= $sekolah['email']; ?>| Telp: <?= $sekolah['telepon']; ?><br>Website: <?= $sekolah['website']; ?></p>
		<p style="margin-top: -200px;padding-left: 480px;padding-top: 10px;"><b>TATA TERTIB SEKOLAH</b><br>
			<ol style="padding-left: 400px;color: #FFFFFF; font-family: arial;font-size: 11px;text-align: justify;padding-right: 10px">
				<?= $sekolah['visi_misi']; ?>
			</ol>
		</p><br>
		<p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">
			<?= $sekolah['kota']; ?>,
			<?php
			$tanggal = date("j");
			$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
			$bulan = $bulan[date("n")];
			$tahun = date("Y");
			echo $tanggal . " " . $bulan . " " . $tahun;
			?>
		</p>
		<br>
		<p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">Mengetahui, <br><?= $sekolah['sekolah']; ?></p>
		<img style="position: absolute;padding-left: 530px;padding-top: 5px;" class="img-responsive img" src="<?= base_url('asset/kartu/ttd/') . $sekolah['tanda_tangan']; ?>" width="70px">
		<br><img style="position: absolute;padding-left: 530px;margin-top: -20px;" class="img-responsive img" src="<?= base_url('asset/kartu/stempel/') . $sekolah['stempel']; ?>" width="50px">
		<p style="position: absolute;padding-left: 550px;margin-top: 20px;font-size: 10px; font-family: arial;"><b><u><?= $sekolah['kepsek']; ?></u></b><br><?= $sekolah['nip']; ?></p>
	</div>


</body>

</html>
