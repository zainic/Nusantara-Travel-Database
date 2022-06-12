<?php 
    include 'Connection.php'; 
    $Kode_Pemandu = $_POST['Kode_Pemandu']; 
    $Nama_Pemandu = $_POST['Nama_Pemandu']; 
    $No_Hp = $_POST['No_Hp']; 

    $query="INSERT INTO `Tabel Pemandu Wisata` values (
        '$Kode_Pemandu',
        '$Nama_Pemandu',
        '$No_Hp')";
        
    mysqli_query($koneksi, $query); 
    header("location:Tabel4.php"); 
?>