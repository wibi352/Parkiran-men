<?php

//include koneksi database
include('koneksi.php');

//get data dari for
$jenis_kendaraan =$_POST['jenis_kendaraan'];
$nama_kendaraan  = $_POST['nama_kendaraan'];
$plat_nomer     = $_POST['plat_nomer'];
$jam_masuk       = $_POST['jam_masuk'];


//query insert data ke dalam database
$query = "INSERT INTO table_parkir (jenis_kendaraan, nama_kendaraan, plat_nomer, jam_masuk) VALUES ('$jenis_kendaraan','$nama_kendaraan', '$plat_nomer', NOW())";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}     