<?php
    include 'Connection.php';
    $Kode_Wisatawan = $_GET['PK'];
    $query=
        "SELECT * from 
        `Tabel Wisatawan` natural inner join 
        `Tabel Jadwal` natural inner join 
        `Tabel Paket` natural inner join 
        `Tabel Pemandu Wisata` natural inner join 
        `Tabel Ketersediaan` 
        where Kode_Wisatawan='$Kode_Wisatawan'
        ";
    $wisatawan = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($wisatawan);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
          display: grid;
          grid-template-columns: 1fr 1fr;
          grid-gap: 10px 2em;
          margin-left:20px;
        }

        .box :first-child {
            align-self: center;
        }
    </style>
    <style>
        .box2 {
          display: grid;
          grid-template-columns: 1fr 1fr;
          grid-gap: 10px;
        }

        .box2 :first-child {
            align-self: center;
        }
    </style>
    <style>
    .kotak1 {
        background-color: lightgray;
        color: black;
        border: 2px solid black;
        padding: 10px;
        margin-left: 40px;
        margin-right: 40px;
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
        <span style="color:white;font-family:arial;"><h1><b>DETAIL DATA</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:2px;padding:20px;">
        <div class="kotak1">
        <input type="hidden" value="<?php echo $row['Kode_Wisatawan'];?>" name="Kode_Wisatawan">
        <h2><b>Detail Data <?php echo $row['Nama_Wisatawan']."  ( ".$row['Kode_Wisatawan']." )";?></b></h2>
        <div class="box">
            <div style="border:4px solid red;padding:10px;background:rgba(228,228,228,0.7);width:500px;">
            <table>
                <tr><td><b>Kode Wisatawan</b></td>
                <td><b>: <?php echo $row['Kode_Wisatawan'];?></b></td></tr>
                <tr><td>Nama Wisatawan</td>
                <td>: <?php echo $row['Nama_Wisatawan'];?></td></tr>
                <tr><td>No.Hp Wisatawan</td>
                <td>: <?php echo $row['No.Hp_Wisatawan'];?></td></tr>
            </table>
            <br>
            <div class="kotak2">
                <form action="Tabel1.php" method="POST">
                    <input type="hidden" value="<?php echo $row['Kode_Wisatawan'];?>" name="pk">
                    <input type="submit" value="Temukan di Tabel Wisatawan">
                </form>
            </div>
            <br>
            </div>            
            <div style="border:4px solid yellow;padding:10px;background:rgba(228,228,228,0.7);width:500px;">
            <table>
                <tr><td><b>Kode Pemandu Wisata</b></td>
                <td><b>: <?php echo $row['Kode_Pemandu'];?></b></td></tr>
                <tr><td>Nama Pemandu</td>
                <td>: <?php echo $row['Nama_Pemandu'];?></td></tr>
                <tr><td>No.Hp Pemandu</td>
                <td>: <?php echo $row['No.Hp_Pemandu'];?></td></tr>
            </table>
            <br>
            <div class="kotak2">
                <form action="Tabel4.php" method="POST">
                    <input type="hidden" value="<?php echo $row['Kode_Pemandu'];?>" name="pk">
                    <input type="submit" value="Temukan di Tabel Pemandu Wisata">
                </form>
            </div>
            <br>
            </div>
            <div style="border:4px solid maroon;padding:10px;background:rgba(228,228,228,0.7);width:500px;">
            <table>
                <tr><td><b>Nama Paket</b></td>
                <td><b>: <?php echo $row['Nama_Paket'];?></b></td></tr>
                <tr><td>Fasilitas</td>
                <td>: <?php echo $row['Fasilitas'];?></td></tr>
                <tr><td>Harga</td>
                <td>: <?php echo $row['Harga'];?></td></tr>
                <tr><td>&#160;</td>
                <td>&#160;</td></tr>
            </table>
            <br>
            <div class="kotak2">
                <form action="Tabel3.php" method="POST">
                    <input type="hidden" value="<?php echo $row['Nama_Paket'];?>" name="pk">
                    <input type="submit" value="Temukan di Tabel Paket">
                </form>
            </div>
            <br>
            </div>
            <div style="border:4px solid blue;padding:10px;background:rgba(228,228,228,0.7);width:500px;">
            <table>
                <tr><td><b>Kode Jadwal</b></td>
                <td><b>: <?php echo $row['Kode_Jadwal'];?></b></td></tr>
                <tr><td>Jadwal Keberangkatan</td>
                <td>: <?php echo $row['Jadwal_Keberangkatan'];?></td></tr>
                <tr><td>Jadwal Pulang</td>
                <td>: <?php echo $row['Jadwal_Pulang'];?></td></tr>
                <tr><td>Sisa Tiket Saat ini</td>
                <td>: <?php echo $row['Tersedia'];?></td></tr>
            </table>
            <br>
            <div class="box2" style="margin-left=0px">
                <div class="kotak2">
                    <form action="Tabel2.php" method="POST">
                        <input type="hidden" value="<?php echo $row['Kode_Jadwal'];?>" name="pk">
                        <input type="submit" value="Temukan di Tabel Jadwal">
                    </form>
                </div>
                <div class="kotak2">
                    <form action="Tabel5.php" method="POST">
                        <input type="hidden" value="<?php echo $row['Jadwal_Keberangkatan'];?>" name="pk">
                        <input type="submit" value="Temukan di Tabel Ketersediaan">
                    </form>
                </div>
            </div>
            <br>
            </div>
        </div>
        <br>
        <form action="Spesifik.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
        </div>
    </section>
</body>