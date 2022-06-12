<?php 
    include 'Connection.php'; 
    $Jadwal_Keberangkatan = $_POST['Jadwal_Keberangkatan']; 
    $Tersedia = $_POST['Tersedia']; 

    $query="INSERT INTO `Tabel Ketersediaan` values ('$Jadwal_Keberangkatan','$Tersedia')";
        
    mysqli_query($koneksi, $query); 
    header("location:Tabel5.php"); 
?>