<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buah</title>
</head>

<body>

<h2>Tambah Data Buah</h2>

<form action="simpan.php" method="POST">

<p>
Nama Buah:<br>
<input type="text" name="nama_buah" required>
</p>

<p>
Warna:<br>
<input type="text" name="warna" required>
</p>

<p>
Harga:<br>
<input type="number" name="harga" required>
</p>

<button type="submit">Simpan</button>

</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>
