

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="nama" placeholder="nama"><br>
		<input type="text" name="nim" placeholder="nim"><br>
		<input type="date" name="tgl"><br>
		<select name="jk"><br>
			<option value="laki-laki">Laki-laki</option>
			<option value="perempuan">Perempuan</option>
		</select><br>
		<select name="program_studi"><br>
			<option value="MI">Manajemen Informatika</option>
			<option value="TK">Teknik Komputer</option>
			<option value="IF">Informatika</option>
		</select><br>
		<input type="radio" name="fk" value="FIT">FIT
		<input type="radio" name="fk" value="FIK">FIK<br>
		<input type="text" name="asal" placeholder="asal"><br>
		<textarea name="moto" placeholder="apa moto hidupmu?"></textarea><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>
</body>
</html>

<?php  
include ("konek.php");
	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$tgl=$_POST['tgl'];
		$jk=$_POST['jk'];
		$program_studi=$_POST['program_studi'];
		$fk=$_POST['fk'];
		$asal=$_POST['asal'];
		$moto=$_POST['moto'];
		$cek=true;

	}
	if (empty($nim)) {
		echo "nim tidak boleh kosong";
		$cek=false;
	}
	if ($cek) {
		mysqli_query($db,"INSERT INTO `t_jurnal7`(`nama`, `nim`, `tgl_lahir`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto`) VALUES ('$nama','$nim','$tgl','$jk','$program_studi','$fk','$asal','$moto')");
		header('location: view.php');
	}
?>