<?php
    include 'Connection.php';
    $Jadwal_Keberangkatan = $_GET['PK'];
    $query="DELETE from `Tabel Ketersediaan` where Jadwal_Keberangkatan='$Jadwal_Keberangkatan'";
    mysqli_query($koneksi, $query);
    header("location:Tabel5.php");
?>