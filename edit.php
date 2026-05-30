<?php

include 'database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buah WHERE id=?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buah</title>
</head>

<body>

<h2>Edit Data Buah</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<p>
Nama Buah:<br>
<input type="text" name="nama_buah" value="<?= $data['nama_buah'] ?>" required>
</p>

<p>
Warna:<br>
<input type="text" name="warna" value="<?= $data['warna'] ?>" required>
</p>

<p>
Harga:<br>
<input type="number" name="harga" value="<?= $data['harga'] ?>" required>
</p>

<button type="submit">Update</button>

</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>
