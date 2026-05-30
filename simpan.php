<?php

include 'database.php';

$nama_buah = $_POST['nama_buah'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

$stmt = $conn->prepare(
"INSERT INTO buah(nama_buah, warna, harga)
VALUES(?,?,?)"
);

$stmt->bind_param(
"ssi",
$nama_buah,
$warna,
$harga
);

if($stmt->execute()){
    header("Location:index.php");
}else{
    echo "Gagal simpan data";
}

?>
