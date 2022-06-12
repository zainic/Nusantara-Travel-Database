<?php
    include 'Connection.php';
    $Nama_Paket = $_POST['Nama_Paket'];
    $Fasilitas = $_POST['Fasilitas'];
    $Harga = $_POST['Harga'];
	
    $query=
    "UPDATE `Tabel Paket` SET 
    Fasilitas ='$Fasilitas',
    Harga='$Harga'
    where Nama_Paket='$Nama_Paket'";

    mysqli_query($koneksi, $query);
    header("location:Tabel3.php");
?>