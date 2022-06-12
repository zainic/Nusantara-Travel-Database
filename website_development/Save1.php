<?php 
    include 'Connection.php'; 
    $Kode_wisatawan = $_POST['Kode_wisatawan']; 
    $Nama_wisatawan = $_POST['Nama_wisatawan']; 
    $Gender = $_POST['Gender'];
    $Nama_paket = $_POST['Nama_paket']; 
    $No_Hp = $_POST['No_Hp']; 
    $Kode_Jadwal = $_POST['Kode_jadwal'];

    $query="INSERT INTO `Tabel Wisatawan` values (
        '$Kode_wisatawan',
        '$Nama_wisatawan',
        '$Gender',
        '$Nama_paket',
        '$No_Hp',
        '$Kode_Jadwal')";
        
    mysqli_query($koneksi, $query); 
    header("location:Tabel1.php"); 
?>