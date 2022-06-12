<?php
    include 'Connection.php';
        if (isset($_GET['file_id'])) {
        $id = $_GET['file_id'];
        $result = mysqli_query($koneksi, "SELECT * FROM `Tabel Konfirmasi` WHERE No_Pendaftaran='$id'");
        $row = mysqli_fetch_array($result);
        $data1 = mysqli_query($koneksi,"SELECT MAX(substring(Kode_Wisatawan,2,5)) as Maximum FROM `tabel wisatawan`");
        $row1 = mysqli_fetch_array($data1);$n = $row1['Maximum']; 
        $Kode_Wisatawan = "P".str_pad($n + 1, 4, 0, STR_PAD_LEFT);
        $Nama_Wisatawan = $row['Nama_Wisatawan'];
        $Gender = $row['Gender'];
        $Nama_Paket = $row['Nama_Paket'];
        $No_Hp = $row['No.Hp_Wisatawan'];
        $Jadwal_Keberangkatan = $row['Berangkat'];
        $Jadwal = mysqli_query($koneksi, "SELECT * FROM `Tabel Jadwal` WHERE Jadwal_Keberangkatan='$Jadwal_Keberangkatan'");
        $J = mysqli_fetch_array($Jadwal);
        $Kode_Jadwal = $J['Kode_Jadwal'];

        $query="INSERT INTO `Tabel Wisatawan` values (
            '$Kode_Wisatawan',
            '$Nama_Wisatawan',
            '$Gender',
            '$Nama_Paket',
            '$No_Hp',
            '$Kode_Jadwal')";
        mysqli_query($koneksi, $query);

        $newCount1 = $file['Status'] + 1;
        $updateQuery = "UPDATE `Tabel Konfirmasi` SET `Status`=$newCount1 WHERE No_Pendaftaran='$id'";
        mysqli_query($koneksi, $updateQuery);
        header('location:Konfirmasi.php');
    }
?>