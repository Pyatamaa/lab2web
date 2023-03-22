# lab2web
repository khusus untuk penempatan tugas pertemuan 3 menggunakan bahasa PHP

---

## Penjelasan

Form input ditampilkan dengan menggunakan tag HTML form, table, dan input. Setiap input memiliki name yang digunakan untuk mengakses nilai input di sisi server.

```html
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
```

Setelah form di submit (dalam kondisi **$_post**), input diambil dari variabel **$_post** dan umurnya dihitung menggunakan fungsi **date_diff**

```php
    if(isset($_POST['submit'])) {
			$nama = $_POST['nama'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

        //menghitung umur berdasarkan tanggal lahir
		$tanggal_lahir = new DateTime($tanggal_lahir);
		$sekarang = new DateTime();
		$umur = $sekarang->diff($tanggal_lahir)->y;

            //menampitkan output
			echo "<h2>Output Data</h2>";
			echo "<p>Nama: $nama</p>";
			echo "<p>Umur: $umur tahun</p>";
			echo "<p>Pekerjaan: $pekerjaan</p>";

            //menampilkan gaji sesuai pekerjaan
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
```

---


## Screenshot output


