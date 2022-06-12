<?php
    include 'Connection.php';
    $Jadwal_Keberangkatan = $_POST['Jadwal_Keberangkatan'];
    $Tersedia = $_POST['Tersedia'];
    
    $query=
    "UPDATE `Tabel Ketersediaan` SET 
    Tersedia ='$Tersedia'
    where Jadwal_Keberangkatan='$Jadwal_Keberangkatan'";

    mysqli_query($koneksi, $query);
    header("location:Tabel5.php");
?>