<?php 
session_start();
include_once 'koneksi.php';
if (isset($_SESSION["nim"])) {
	header(" ");
}
?>
<!DOCTYPE html>
<html>
<body>
	<center><h2>Form Mahasiswa Baru</h2><br>
	<form action="kelola.php " method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-laki" >Laki-laki
				<input type="radio" name="jk" value="Perempuan" >Perempuan</td>
			</tr>
			<tr>
							<td>Program Studi</td>

							<td>:</td>

							<td><select name="prodi">

								<option value="MI" >Manajemen Informatika</option>

								<option value="MP" >Manajemen Pemasaran</option>

								<option value="KA" >Komputerisasi Akuntansi</option>
							</select></td>

						</tr>
			<tr>
							<td>Fakultas</td>

							<td>:</td>

							<td><select name="fakultas">

								<option value="FIT">Fakultas Ilmu Terapan</option>

								<option value="FTI">Fakultas Teknik Informatika</option>

								<option value="FIK">Fakultas Ildustri Kreatif</option>

								<option value="FKB">Fakultas Komunikasi dan Bisnis</option>

								<option value="FTE">Fakultas Teknik Elektro</option>

								<option value="FRI">Fakultas Rekayasa Industri</option>

							</select></td>

						</tr>
						<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" ></td>
			</tr>
			<tr>
				<td>Moto Hidup </td>
				<td>:</td>
				<td><input type="text" name="moto" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="kirim"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
		
<?php 
if(isset($_POST['submit'])){
	print_r($_POST['nim']);
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	$masuk = mysqli_query($koneksi,"INSERT INTO `registrasi`(`nim`, `nama`, `jk`,`prodi`, `fakultas`, `asal`, `moto`) VALUES ('$nim','$nama', '$jk', '$prodi', '$fakultas', '$asal', '$moto')");
	if ($masuk) {
		$_SESSION['nim'] = $nim;
		header("location: kelola.php");
	} 
}
?>