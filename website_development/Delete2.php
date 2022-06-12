<?php
    include 'Connection.php';
    $Kode_Jadwal = $_GET['PK'];
    $query="DELETE from `Tabel Jadwal` where Kode_Jadwal='$Kode_Jadwal'";
    mysqli_query($koneksi, $query);
    header("location:Tabel2.php");
?>