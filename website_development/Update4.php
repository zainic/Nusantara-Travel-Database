<?php
    include 'Connection.php';
    $Kode_Pemandu = $_GET['PK'];
    $wisatawan = mysqli_query($koneksi, "select * from `Tabel Pemandu Wisata` where Kode_Pemandu='$Kode_Pemandu'");
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
        <form method="post" action="Update4_4.php">
        <input type="hidden" value="<?php echo $row['Kode_Pemandu'];?>" name="Kode_Pemandu">
        <h2><b>Edit Data <?php echo $row['Nama_Pemandu'];?></b></h2>
        <h4 style=";font-family:arial">Kode Pemandu = <?php echo $row['Kode_Pemandu'];?></h4>
        <table>
            <tr><td>Nama Pemandu</td><td><input type="text" value="<?php echo $row['Nama_Pemandu'];?>" name="Nama_Pemandu"></td></tr>
            <tr><td>No.Hp Pemandu</td><td><input type="text" value="<?php echo $row['No.Hp_Pemandu'];?>"name="No_Hp"></td></tr>
            <tr><td><button type="submit" value="simpan">Simpan Perubahan</button></td></tr>
        </table>
        </form>
        <form action="Tabel4.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
        </div>
    </section>
</body>