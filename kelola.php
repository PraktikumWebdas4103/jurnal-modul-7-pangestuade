<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body><br><br><br>
	<center><table border="1">
				<tr>
			<td><input type="text" name="nim" placeholder="NIM"></td>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Cari"></td>
		</tr>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>

<?php
$masuk = mysqli_query($koneksi,"SELECT * FROM `registrasi`");

while ($array = mysqli_fetch_array($masuk)) {
	echo "<tr>";
	echo "<td>".$array['nim']."</td>";
	echo "<td>".$array['nama']."</td>";
	
	# code...

	echo "<td>";
	echo"<a href='edit.php?nim=".$array['nim']."'>Edit</a> |";
	echo"<a href='delete.php?nim=".$array['nim']."'>Delete</a> ";
	echo"<a href='form.php?nim=".$array['nim']."'>Tambah</a> ";
	echo "</tr>";
}
// }
?>


</table>
</body>
</html>
	
	