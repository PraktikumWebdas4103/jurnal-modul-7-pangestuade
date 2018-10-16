<?php
	$nim = $_GET['nim'];
	include"koneksi.php";
	$query = mysqli_query($koneksi,"delete from registrasi where nim='$nim'");
	if ($query) {
		header ("location: kelola.php");
	} else {
		echo "Error Dalam Menghapus Data!";
		echo "<a href='kelola.php'>Kembali</a>";
	}
?>