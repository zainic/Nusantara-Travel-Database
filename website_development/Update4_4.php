<?php
    include 'Connection.php';
    $Kode_Pemandu = $_POST['Kode_Pemandu'];
    $Nama_Pemandu = $_POST['Nama_Pemandu'];
    $No_Hp = $_POST['No_Hp'];
    
    $query=
    "UPDATE `Tabel Pemandu Wisata` SET 
    Nama_Pemandu='$Nama_Pemandu',
    `No.Hp_Pemandu`='$No_Hp'
    where Kode_Pemandu='$Kode_Pemandu'";

    mysqli_query($koneksi, $query);
    header("location:Tabel4.php");
?>