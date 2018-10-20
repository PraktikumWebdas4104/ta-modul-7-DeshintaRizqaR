<form method="POST">

	Cari Data(nim):<input type="text" name="cari">
	<button name="send">Kirim</button>

</form>



<?php
	include 'koneksi.php';

	if(isset($_POST['send'])){

		$cari = $_POST['cari'];
		
		$qry = "SELECT * FROM datamhs WHERE nim = '$cari'";
		$que = mysqli_query($conn,$qry);
		$row = mysqli_fetch_array($que);

		if($row['nim']==$cari){
			echo "<table border='1'>
				<tr>
					<th>Nama</th>
					<th>Nim</th>
					<th>Action</th>
				</tr>";

				foreach ($que as $row){
				echo "<tr>
					<td>".$row['nama']."</td>
					<td>".$row['nim']."</td>
					<td><a href='delete.php?nim=$row[nim]'>Delete</a>&nbsp;<a href='detail.php?nim=$row[nim]'>Detail</a></td>
					  </tr>";

				}
		
		}
	}	
		else{

			$qry = "SELECT * FROM datamhs";
			$que = mysqli_query($conn,$qry);
			$row = mysqli_fetch_array($que);

			echo "<table border='1'>
				<tr>
					<th>Nama</th>
					<th>Nim</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Fakultas</th>
					<th>Asal</th>
					<th>Moto Hidup</th>
				</tr>";
				foreach ($que as $row){
				echo "<tr>
					<td>".$row['nama']."</td>
					<td>".$row['nim']."</td>
					<td>".$row['jeniskl']."</td>
					<td>".$row['programstd']."</td>
					<td>".$row['fakultas']."</td>
					<td>".$row['asal']."</td>
					<td>".$row['motohidup']."</td>
				</tr>
				";
				
		}
	}

?>