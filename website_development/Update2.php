<?php
    include 'Connection.php';
    $Kode_Jadwal = $_GET['PK'];
    $wisatawan = mysqli_query($koneksi, "select * from `Tabel Jadwal` where Kode_Jadwal='$Kode_Jadwal'");
    $row = mysqli_fetch_array($wisatawan);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    .kotak1 {
        background-color: lightgray;
        color: black;
        border: 2px solid black;
        padding: 10px;
        margin-left: 40px;
        margin-right: 100px;
        width: 500px; 
        }
    </style>
    <style>
        body {
        background-image: url('Gunung.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
        }
    </style> 
    <title>EDIT DATA</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>EDIT DATA</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:2px;padding:20px;">
        <div class="kotak1">
        <form method="post" action="Update2_2.php">
        <input type="hidden" value="<?php echo $row['Kode_Jadwal'];?>" name="Kode_Jadwal">
        <h2><b>Edit Data <?php echo $row['Jadwal_Keberangkatan'];?></b></h2>
        <h4 style=";font-family:arial">Kode Jadwal = <?php echo $row['Kode_Jadwal'];?></h4>
        <table>
            <tr><td>Jadwal Keberangkatan</td><td><input type="date" value="<?php echo $row['Jadwal_Keberangkatan'];?>" name="Jadwal_Keberangkatan"></td></tr>
            <tr><td>Jadwal Pulang</td><td><input type="date" value="<?php echo $row['Jadwal_Pulang'];?>"name="Jadwal_Pulang"></td></tr>
            <tr><td>Kode Pemandu</td><td><input type="text" value="<?php echo $row['Kode_Pemandu'];?>" name="Kode_Pemandu"></td></tr>
            <tr><td><button type="submit" value="simpan">Simpan Perubahan</button></td></tr>
        </table>
        </form>
        <form action="Tabel2.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
        </div>
    </section>
</body>