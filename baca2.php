<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Data Account</h2>
<table border="1">
<tr>
		<<th>Nomor</th>
		<th>NISN</th>
		<th>NIS</th>
		<th>Nama</th>
</tr>
		<?php
				require 'koneksi.php';
				$nomor = 1;
				$query = mysql_query("SELECT * FROM siswaskanja");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td>
				<?php 
				if($hasil[4]==1)
				{
					echo "Admin";
				}
				else
				{
					echo "User";
				}
				?>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>
		
</body>
</html>