<?php
    include 'Connection.php';
    $Kode_Pemandu = $_GET['PK'];
    $query="DELETE from `Tabel Pemandu Wisata` where Kode_Pemandu='$Kode_Pemandu'";
    mysqli_query($koneksi, $query);
    header("location:Tabel4.php");
?>