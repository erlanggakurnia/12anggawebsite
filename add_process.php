<?php 

// add_process.php
include "conn.php";

if(count($_POST) > 0) {
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"]; 
    $harga_barang = $_POST["harga_barang"]; 
    $jumlah_barang = $_POST["jumlah_barang"]; 
    

    $query = "INSERT INTO barang (id_barang, nama_barang, harga_barang, jumlah_barang ) VALUES ('$id_barang', '$nama_barang', '$harga_barang', '$jumlah_barang')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>