<?php
include 'koneksi.php';

$no_anggota = $_POST['no_anggota'];
$no_buku = $_POST['no_buku'];
$tgl_pinjam = date('Y-m-d', strtotime($_POST['tgl_pinjam']));
$tgl_kembali = date('Y-m-d', strtotime($_POST['tgl_kembali']));

$sql = mysqli_query($koneksi, "INSERT INTO pinjam (no_anggota,no_buku,tgl_pinjam,tgl_kembali) VALUES ($no_anggota,$no_buku,'$tgl_pinjam','$tgl_kembali')");

if ($sql) {
	echo "Berhasil";
} else {
	echo "Data tidak Masuk";
	echo "<a href=index.php>Kembali ke Dashboard</a>";
}
exit;
?>