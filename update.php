<?php

include 'database.php';

$id = $_POST['id'];
$nama_buah = $_POST['nama_buah'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

$stmt = $conn->prepare(
"UPDATE buah SET nama_buah=?, warna=?, harga=? WHERE id=?"
);

$stmt->bind_param(
"ssii",
$nama_buah,
$warna,
$harga,
$id
);

if($stmt->execute()){
    header("Location:index.php");
}else{
    echo "Gagal update data";
}

?>
