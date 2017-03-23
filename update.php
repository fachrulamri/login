<!DOCTYPE html>
<html>
<head>
		<title>UPDATE ACCOUNT</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php
		require 'koneksi.php';
	
		if (isset($_POST['submit'])) {
				$no						= $_POST['1'];
				$nisn 					= $_POST['2'];
				$nis			 		= $_POST['3'];
				$nama 					= $_POST['4'];
				$jk 				= $_POST['5'];
				$quer 					= 	mysql_query("INSERT INTO `siswaskanja` (`nomor`, `nisn`, `nis`, 'nama','jk') VALUES (NULL, '$no','$nisn','$nis','$nama','$jk');");
			if($quer){
					header('location: ./read.php');
			} else{
				echo "UPDATE siswaskanja SET
						nomor='$no',
						nisn='$nisn',
						nis='$nis',
						nama='$nama',
						jk='$jk'";
			}
			}
			
		if (isset($_GET['nomor'])) {
				$id = $_GET['nomor'];
		$query = mysql_query("SELECT * FROM siswaskanja WHERE nomor ='$nomor'");
			$hasil = mysql_fetch_array($query);
			?>
		</head>
		<body>
		<u>Edit Data Berita</u>
		<form method="POST">
				<input type="hidden" name="1" value="<?php echo $hasil[1] ?>">
<table>
		
		<tr>
				<td>NISN*</td>
				<td><input type="password" maxlength="10" name="2" value="<?php echo $hasil[2] ?>"></td>
		</tr>
		<tr>
				<td>NIS*</td>
				<td><input type="text" name="3" value="<?php echo $hasil[3] ?>"></td>
		</tr>
		<tr>
				<td>Nama</td>
				<td><input type="text" name="4" value="<?php echo $hasil[4] ?>"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="5" value="Male">Male
					<input type="radio" name="5" value="Female">Female
					<input type="radio" name="5" value="Other">Other
				</td>
		<tr>
				<td>Hak Akses</td>
				<td>
					<select name="9" value="<?php echo $hasil[9] ?>">
						<option value="0">User</option>
						<option value="1">Admin</option>
					</select>
				</td>
		</tr>
		<tr>
			<td>
			Tanda(*) harus di isi
			</td>
		</tr>

<tr>
		<td><input type="submit" name="submit" value="UPDATE"></td>
</tr>
							</table>
							<?php }?>
		</form>
		</body>
		</html>