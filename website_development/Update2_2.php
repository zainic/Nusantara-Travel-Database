<?php
    include 'Connection.php';
    $Kode_Jadwal = $_POST['Kode_Jadwal'];
    $Jadwal_Keberangkatan = $_POST['Jadwal_Keberangkatan'];
    $Jadwal_Pulang = $_POST['Jadwal_Pulang'];
    $Kode_Pemandu = $_POST['Kode_Pemandu'];
    
    $query=
    "UPDATE `Tabel Jadwal` SET 
    Jadwal_Keberangkatan ='$Jadwal_Keberangkatan',
    `Jadwal_Pulang`='$Jadwal_Pulang',
    Kode_Pemandu='$Kode_Pemandu' 
    where Kode_Jadwal='$Kode_Jadwal'";

    mysqli_query($koneksi, $query);
    header("location:Tabel2.php");
?>