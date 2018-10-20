<form method="POST">

<center>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="50"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="15"></td>
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
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "ta7";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$nama    	= $_POST['nama'];
	$nim     	= $_POST['nim'];
	$jeniskl 	= $_POST['jk'];
	$programstd = $_POST['programstd'];
	$fakultas 	= $_POST['fakultas'];
	$asal 		= $_POST['asal'];
	$motohidup 	= $_POST['mt'];

	$sql = $conn->query("INSERT INTO datamhs
						 VALUES ('$nama','$nim','$jeniskl','$programstd','$fakultas','$asal','$motohidup')");
	
	echo "Anda Berhasil Input Data !!"."<br>";
	echo "<a href = 'lihat.php'>Klik</a> lanjut";
}
 ?>