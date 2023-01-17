<?php 

include "conn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_barang = $_POST["id_barang"]; 
    $nama_barang = $_POST["nama_barang"]; 
    $harga_barang = $_POST["harga_barang"]; 
    $jumlah_barang = $_POST["jumlah_barang"];
   

    $query =
        "UPDATE barang set id_barang='" . 
        $id_barang . 
        "', nama_barang='" . 
        $nama_barang . 
        "', harga_barang='" . 
        $harga_barang . 
        "', jumlah_barang='" . 
        $jumlah_barang . 
        "' WHERE id_barang='" . 
        $id_barang . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>