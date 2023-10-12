<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "UPDATE table_parkir SET jam_keluar = NOW() WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>