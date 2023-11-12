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
<a href="buku.php">Buku</a>

<h2>Daftar Anggota</h2>
<table border="1", cellpadding="4">
	<thead>
		<td>No Anggota</td>
		<td>Nama Anggota</td>
		<td>Jurusan</td>
		<td>Alamat</td>
	</thead>
	<tbody>
		<?php
		//Query Menampilkan data pada tabel anggota
		$query = mysqli_query($koneksi, "SELECT * FROM anggota");
	
		//Menampilkan data tiap baris
		while ($data = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $data['no_anggota']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jurusan']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>