<?php
require 'koneksi.php';
if (isset($_GET['no'])) {
		$id = $_GET['no'];
		$query = mysql_query("DELETE FROM siswaskanja WHERE no ='$no'");
		if($query){
				echo "Berhasil Hapus";
				header('location: ./read.php');
		}else{
				echo "Gagal Hapus";
				header('location: ./read.php');
		}
}
?>