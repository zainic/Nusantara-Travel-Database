<?php
    include 'Connection.php';
    $Kode_Wisatawan = $_GET['PK'];
    $query="DELETE from `Tabel Wisatawan` where Kode_Wisatawan='$Kode_Wisatawan'";
    mysqli_query($koneksi, $query);
    header("location:Tabel1.php");
?>