<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Pustakawan</title>
</head>
<body>
<h1>Dashboard</h1>
<a href="peminjaman.php">Peminjaman Kilat</a><br>
<a href="index.php">Dashboard</a><br>
<a href="anggota.php">Daftar Anggota</a>

<h2>Daftar Anggota</h2>
<table border="1", cellpadding="4">
	<thead>
		<td>No Buku</td>
		<td>Judul</td>
		<td>Pengarang</td>
		<td>tahun Terbit</td>
		<td>Penerbit</td>
	</thead>
	<tbody>
		<?php
		//Query Menampilkan data pada tabel anggota
		$query = mysqli_query($koneksi, "SELECT * FROM buku");
	
		//Menampilkan data tiap baris
		while ($data = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $data['no_buku']; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['pengarang']; ?></td>
				<td><?php echo $data['tahun_terbit']; ?></td>
				<td><?php echo $data['penerbit']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>