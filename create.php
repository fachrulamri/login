<!DOCTYPE html>
<html>
<head>
		<title>BUAT AKUN BARU</title>
		<?php
		require 'koneksi.php';
		if (isset($_POST['submit'])) {
				$no 					= $_POST['1'];
				$nisn			 		= $_POST['2'];
				$nis 					= $_POST['3'];
				$nama 					= $_POST['4'];
				$jk 					=$_POST['5'];
				$quer 					= 	mysql_query("INSERT INTO `siswaskanja` (`nomor`, `nisn`, `nis`, 'nama','jk') VALUES (NULL, '$no','$nisn','$nis','$nama','$jk');");
			if($quer){
					header('location: ./read.php');
			} else{
				?>
				<script type="text/javascript">
					alert("Username Sudah ada atau belum terisi dengan benar");
				</script>
				<?php
			}
			}
				?>
</head>
<body>
<h2>Form Cread New Account</h2>
<form method="POST">
<table>
		<tr>
				<td>Nomor*</td>
				<td><input type="text" name="1"></td>
		</tr>
		<tr>
				<td>NISN*</td>
				<td><input type="password" maxlength="10" name="2"></td>
		</tr>
		<tr>
				<td>NIS*</td>
				<td><input type="text" name="3"></td>
		</tr>
		<tr>
				<td>Nama</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="5" value="Male">Male
					<input type="radio" name="5" value="Female">Female
					<input type="radio" name="5" value="Other">Other
				</td>
		</tr>
		<tr>
			<td>
			Tanda(*) harus di isi
			</td>
		</tr>
		<tr>
				<td><input type="submit" name="submit" value="SIMPAN"></td>
				
		</tr>
		
</table>
</form>
</body>
</html>