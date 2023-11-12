<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pinjam WHERE kode_pinjam = $id");

header("Location : /"); 
exit;
?>