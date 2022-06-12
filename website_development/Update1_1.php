<?php
include 'Connection.php';
$Kode_Wisatawan = $_POST['Kode_Wisatawan'];
$Nama_Wisatawan = $_POST['Nama_Wisatawan'];
$Nama_Paket = $_POST['Nama_Paket'];
$Gender = $_POST['Gender'];
$No_Hp = $_POST['No_Hp'];
$Kode_Jadwal = $_POST['Kode_Jadwal'];
$query=
"UPDATE `Tabel Wisatawan` SET 
Nama_Wisatawan='$Nama_Wisatawan',
Nama_Paket='$Nama_Paket',
Gender='$Gender',
`No.Hp_Wisatawan`='$No_Hp',
Kode_Jadwal='$Kode_Jadwal' 
where Kode_Wisatawan='$Kode_Wisatawan'";
mysqli_query($koneksi, $query);
header("location:Tabel1.php");
?>