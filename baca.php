<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Data Account</h2>
<table border="1">
<tr>
		<th>Nomor</th>
		<th>NISN</th>
		<th>NIS</th>
		<th>Nama</th>
</tr>
		<?php
				require 'koneksi.php';
				$nomor= 1;
				$query = mysql_query("SELECT * FROM siswaskanja");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td>
				<?php 
				if($hasil[3]==1)
				{
					echo "Admin";
				}
				else
				{
					echo "User";
				}
				?>
				</td>
				<td> 
				<a href="update.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Update"></a>
				<a href="delete.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Delete"></a>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="create.php"><input type= "submit" name="submit" value ="Create new account"></td>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>
		
</body>
</html>