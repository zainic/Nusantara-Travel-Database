<?php 
    include 'Connection.php'; 
    $Kode_Jadwal = $_POST['Kode_Jadwal']; 
    $Jadwal_Keberangkatan = $_POST['Jadwal_Keberangkatan']; 
    $Jadwal_Pulang = $_POST['Jadwal_Pulang']; 
    $Kode_Pemandu = $_POST['Kode_Pemandu'];

    $query="INSERT INTO `Tabel Jadwal` values (
        '$Kode_Jadwal',
        '$Jadwal_Keberangkatan',
        '$Jadwal_Pulang',
        '$Kode_Pemandu')";
        
    mysqli_query($koneksi, $query); 
    header("location:Tabel2.php"); 
?>