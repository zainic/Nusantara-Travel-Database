<?php 
    include 'Connection.php'; 
    $Nama_paket = $_POST['Nama_paket']; 
    $Fasilitas = $_POST['Fasilitas']; 
    $Harga = $_POST['Harga'];
	
    $query="INSERT INTO `Tabel Paket` values (
        '$Nama_paket',
        '$Fasilitas',
        '$Harga')";
        
    mysqli_query($koneksi, $query); 
    header("location:Tabel3.php"); 
?>