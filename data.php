<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<body><br><br><br>
	<form action=" " method="POST">
	<center><table border="1">
		<tr>
			<td><input type="text" name="nim" placeholder="NIM"></td>
			<td ><input type="submit" name="submit" value="cari"></td>
		</tr>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>

<?php
if (isset($_POST['submit'])) {
	$nim =$_POST['nim'];

$masuk = mysqli_query($koneksi,"SELECT * FROM registrasi where nim ='$nim'");

while ($array = mysqli_fetch_array($masuk)) {
	echo "<tr>";
	echo "<td>".$array['nim']."</td>";
	echo "<td>".$array['nama']."</td>";
	
	# code...

	echo "<td>";
	echo"<a href='delete.php?nim=".$array['nim']."'>delete</a> ";
	echo "</tr>";
}
}
?>
</table>

<br><br>
<?php
$masuk = mysqli_query($koneksi,"SELECT * FROM registrasi");

while ($array = mysqli_fetch_array($masuk)) {
	echo "<tr>";
	echo "<td>".$array['nim']."</td>";
	echo "<td>".$array['nama']."</td>";
	
	# code...

	echo "<td>";
	echo"<a href='delete.php?nim=".$array['nim']."'>delete</a> ";
	echo "</tr>";
}
?>


</form>
</body>
</html>
	
	