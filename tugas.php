<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h2>Form Input Data</h2>
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required><br><br>
		<label for="tanggal_lahir">Tanggal Lahir:</label>
		<input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan" required>
			<option value="">-Pilih Pekerjaan-</option>
			<option value="Staff">Staff</option>
			<option value="Admin">Admin</option>
			<option value="Manajer">Manajer</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$nama = $_POST['nama'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			// Menghitung umur berdasarkan tanggal lahir
			$tanggal_lahir = new DateTime($tanggal_lahir);
			$sekarang = new DateTime();
			$umur = $sekarang->diff($tanggal_lahir)->y;

			// Menampilkan output
			echo "<h2>Output Data</h2>";
			echo "<p>Nama: $nama</p>";
			echo "<p>Umur: $umur tahun</p>";
			echo "<p>Pekerjaan: $pekerjaan</p>";

			// Menampilkan gaji sesuai pekerjaan
			switch ($pekerjaan) {
				case 'Staff':
					echo "<p>Gaji: Rp10.000.000/bulan</p>";
					break;
				case 'Admin':
					echo "<p>Gaji: Rp8.000.000/bulan</p>";
					break;
				case 'Manajer':
					echo "<p>Gaji: Rp15.000.000/bulan</p>";
					break;
				default:
					echo "<p>Gaji: Tidak ada data</p>";
					break;
			}
		}
	?>
</body>
</html>