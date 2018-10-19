<?php  
	include('konek.php');
	$result=mysqli_query($db, "SELECT * FROM t_jurnal7");
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="jurnal7.php">input</a>
		<form action="" method="post">
			<table border="1">
				<tr>
					<td>NAMA  </td>
					<td>NIM  </td>
					<td>PROGRAM STUDI  </td>
					<td>AKSI</td>

				</tr>
				<?php  
					foreach ($result as $key) {
						echo "<tr><td>". $key['nama']. "</td>";
						echo "<td>". $key['nim']. "</td>";
						echo "<td>". $key['program_studi']. "</td>";
						echo "<td><a href='del.php?nim=".$key['nim']."'>DELETE</a></td></tr>";
					}
				?>
				
				
			</table>		
			<input type="text" name="search">
			<input type="submit" name="cari" value="cari">	
		</form>
</body>
</html>

