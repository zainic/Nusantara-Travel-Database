<?php
    include 'Connection.php';
    $Nama_Paket = $_GET['PK'];
    $query="DELETE from `Tabel Paket` where Nama_Paket='$Nama_Paket'";
    mysqli_query($koneksi, $query);
    header("location:Tabel3.php");
?>