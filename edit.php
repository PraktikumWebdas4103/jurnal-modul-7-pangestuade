<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body>
	<table>
		<form action=" " method="POST">
			<?php
			$nim = $_GET['nim'];
			$query = mysqli_query($koneksi,"SELECT `nim`, `nama`, `jk`, `prodi`, `fakultas`, `asal`, `moto` FROM `registrasi` WHERE `nim` = '$nim'");
			while ($d = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><input type="hidden" name="nim" value="<?php echo $d['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-laki" <?php echo $d['jk'] == "Laki-laki" ? "checked" : ""; ?>>Laki-laki
				<input type="radio" name="jk" value="Perempuan" <?php echo $d['jk'] == "Perempuan" ? "checked" : ""; ?>>Perempuan</td>
			</tr>
			<tr>
							<td>Program Studi</td>

							<td>:</td>

							<td><select name="prodi">

								<option value="MI" <?php echo $d['prodi'] == "Manajemen Informatika" ? "selected='selected'" : ""; ?>>Manajemen Informatika</option>

								<option value="MP" <?php echo $d['prodi'] == "Manajemen Pemasaran" ? "selected='selected'" : ""; ?>>Manajemen Pemasaran</option>

								<option value="KA" <?php echo $d['prodi'] == "Komputerisasi Akuntansi" ? "selected='selected'" : ""; ?>>Komputerisasi Akuntansi</option>
							</select></td>

						</tr>
			<tr>
							<td>Fakultas</td>

							<td>:</td>

							<td><select name="fakultas">

								<option value="FIT" <?php echo $d['fakultas'] == "FIT" ? "selected='selected'" : ""; ?>>Fakultas Ilmu Terapan</option>

								<option value="FTI" <?php echo $d['fakultas'] == "FTI" ? "selected='selected'" : ""; ?>>Fakultas Teknik Informatika</option>

								<option value="FIK" <?php echo $d['fakultas'] == "FIK" ? "selected='selected'" : ""; ?>>Fakultas Ildustri Kreatif</option>

								<option value="FKB" <?php echo $d['fakultas'] == "FKB" ? "selected='selected'" : ""; ?>>Fakultas Komunikasi dan Bisnis</option>

								<option value="FTE" <?php echo $d['fakultas'] == "FTE" ? "selected='selected'" : ""; ?>>Fakultas Teknik Elektro</option>

								<option value="FRI" <?php echo $d['fakultas'] == "FRI" ? "selected='selected'" : ""; ?>>Fakultas Rekayasa Industri</option>

							</select></td>

						</tr>
						<tr>
				<td>Asal </td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $d['asal']; ?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup </td>
				<td>:</td>
				<td><input type="text" name="moto" value="<?php echo $d['moto']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="edit" value="Update"></td>
			</tr>
			<?php } ?>
		</form>
	</table>
</body>
</html>
<?php 
if (isset($_POST['edit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	$query = mysqli_query($koneksi,"UPDATE `registrasi` SET `nim`= '$nim', SET `nama`='$nama', SET `jk`='$jk' , SET `prodi` = '$prodi', SET `fakultas` = '$fakultas', SET `asal` = '$asal',`moto`='$moto' WHERE `nim` = '$nim'");
	if ($query) {
		header ("location: kelola.php");
	} else {
		echo "Error Dalam update Data!";
		echo "<a href='kelola.php'>Kembali</a>";
	}
}
?>
