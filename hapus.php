<?php

include 'database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM buah WHERE id=?");

$stmt->bind_param("i", $id);

if($stmt->execute()){
    header("Location:index.php");
}else{
    echo "Gagal hapus data";
}

?>
