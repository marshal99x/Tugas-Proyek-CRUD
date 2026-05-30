<?php
include 'database.php';

$result = $conn->query("SELECT * FROM buah");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Buah</title>

    <style>
        body{
            font-family: Arial;
            margin: 40px;
            background: #f4f4f4;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        table, th, td{
            border: 1px solid #ccc;
        }

        th, td{
            padding: 10px;
        }

        .btn{
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }

        .tambah{
            background: green;
        }

        .edit{
            background: blue;
        }

        .hapus{
            background: red;
        }
    </style>
</head>

<body>

<h2>Data Buah</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Data</a>

<br><br>

<table>

<tr>
    <th>No</th>
    <th>Nama Buah</th>
    <th>Warna</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_buah'] ?></td>
    <td><?= $row['warna'] ?></td>
    <td>Rp <?= number_format($row['harga']) ?></td>

    <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn edit">Edit</a>

        <a href="hapus.php?id=<?= $row['id'] ?>"
           class="btn hapus"
           onclick="return confirm('Yakin hapus data?')">
           Hapus
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>
