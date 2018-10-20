<?php 

	include 'koneksi.php';

	$nim = $_GET['nim'];

	$sql = mysqli_query($conn,"DELETE FROM datamhs WHERE nim = '$nim'");

	echo "Data Berhasil Dihapus";
	echo "<br><a href='lihat.php'>Lihat Data</a>"

 ?>