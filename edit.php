<form method="POST">

<center>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama1" length="50"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="programstd">
				<option value="1">----</option>
				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				<option value="S1 Akuntansi">S1 Akuntansi</option>
				<option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
			<option value="1">----</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal">

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="mt"></textarea></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>

	</table>

</form>



<?php 
error_reporting(0);
	include'koneksi.php';
	$nim = $_GET['nim'];
	$nama    	= $_POST['nama1'];
	$jeniskl 	= $_POST['jk'];
	$programstd = $_POST['programstd'];
	$fakultas 	= $_POST['fakultas'];
	$asal 		= $_POST['asal'];
	$motohidup 	= $_POST['mt'];

	if (isset($_POST['kirim'])) {
		$qry =mysqli_query($conn,"UPDATE `datamhs` SET `nama`='$nama', `jeniskl`='$jeniskl', `programstd`='$programstd', `fakultas`='$fakultas',`asal`='$asal',`motohidup`='$motohidup' WHERE nim = '$nim'") ;
			
		echo "Selamat,Data Anda Berhasil Diperbarui";
		echo "<br><a href='lihat.php'>Lihat Data</a>";
	}

	
 ?>