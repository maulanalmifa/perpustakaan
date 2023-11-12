<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Pustakawan</title>
</head>
<body>
<h1>Dashboard</h1>
<a href="peminjaman.php">Peminjaman</a>
<a href="anggota.php">Data Anggota</a>
<a href="buku.php">Buku</a>

<h6>Daftar Peminjaman</h6>
<table>
	<thead>
		<td>Kode Buku</td>
		<td>Peminjam</td>
		<td>Tanggal Pinjam</td>
		<td>Harus Kembali pada</td>
	</thead>
	<tbody>
		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM pinjam");
		while ($data = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $data['no_buku']; ?></td>
				<td><?php echo $data['no_anggota']; ?></td>
				<td><?php echo $data['tgl_pinjam']; ?></td>
				<td><?php echo $data['tgl_kembali']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>