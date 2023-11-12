<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peminjaman Kilat</title>
</head>
<body>
<h1>Peminjaman Kilat</h1>
<a href="index.php">Kembali ke Dashboard</a><br>
<a href="anggota.php">Data Anggota</a><br>
<a href="buku.php">Buku</a>

<h4>Form Peminjaman</h4>
<form action="proses_pinjam.php" method="POST">
	<label for="no_anggota">Nomor Anggota</label>
	<select name="no_anggota" id="no_anggota">
		<option value="---">---</option>
		<?php
			$query = mysqli_query($koneksi, "SELECT * FROM anggota");
			while ($data = mysqli_fetch_array($query)) { ?>
				<option value="<?php echo $data['no_anggota']; ?>"><?php echo $data['no_anggota']."-".$data['nama']; ?></option>
		<?php } ?>
	</select>
	<br>
	<label for="no_buku">Nomor Buku</label>
	<select name="no_buku" id="no_buku">
		<option value="---">---</option>
		<?php
			$query = mysqli_query($koneksi, "SELECT * FROM buku");
			while ($data = mysqli_fetch_array($query)) { ?>
				<option value="<?php echo $data['no_buku']; ?>"><?php echo $data['no_buku']."-".$data['judul']; ?></option>
		<?php } ?>
	</select>
	<br>
		<label for="tgl_pinjam">Tanggal Peminjaman</label>
		<input type="date" name="tgl_pinjam" id="tgl_pinjam">
	<br>
		<label for="tgl_kembali">Tanggal Harus Kembali</label>
		<input type="date" name="tgl_kembali" id="tgl_kembali">
	<br>
		<input type="submit" name="pinjam" id="pinjam" value="Konfirmasi Peminjaman">
</form>