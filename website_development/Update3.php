<?php
    include 'Connection.php';
    $Nama_Paket = $_GET['PK'];
    $paket = mysqli_query($koneksi, "select * from `Tabel Paket` where Nama_Paket='$Nama_Paket'");
    $row = mysqli_fetch_array($paket);
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
        <form method="post" action="Update3_3.php">
        <input type="hidden" value="<?php echo $row['Nama_Paket'];?>" name="Nama_Paket">
        <h2><b>Edit Data <?php echo $row['Nama_Paket'];?></b></h2>
        <h4 style=";font-family:arial">Nama Paket = <?php echo $row['Nama_Paket'];?></h4>
        <table>
            <tr><td>Fasilitas</td><td><input type="text" value="<?php echo $row['Fasilitas'];?>" name="Fasilitas"></td></tr>
            <tr><td>Harga</td><td><input type="text" value="<?php echo $row['Harga'];?>"name="Harga"></td></tr>
            <tr><td><button type="submit" value="simpan">Simpan Perubahan</button></td></tr>
        </table>
        </form>
        <form action="Tabel3.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
        </div>
    </section>
</body>