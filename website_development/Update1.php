<?php
    include 'Connection.php';
    $Kode_Wisatawan = $_GET['PK'];
    $wisatawan = mysqli_query($koneksi, "select * from `Tabel Wisatawan` where Kode_Wisatawan='$Kode_Wisatawan'");
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
        <form method="post" action="Update1_1.php" id="update">
        <input type="hidden" value="<?php echo $row['Kode_Wisatawan'];?>" name="Kode_Wisatawan">
        <h2><b>Edit Data <?php echo $row['Nama_Wisatawan'];?></b></h2>
        <h4 style=";font-family:arial">Kode Wisatawan = <?php echo $row['Kode_Wisatawan'];?></h4>
        <table>
            <tr><td>Nama Wisatawan</td>
            <td><input type="text" value="<?php echo $row['Nama_Wisatawan'];?>" name="Nama_Wisatawan"></td>
            </tr>
            <tr><td>Jenis Kelamin</td>
            <td><select name="Gender" id="Gender" form="update";">
                <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select></td>
            </tr>
            <tr><td>Nama Paket</td>
            <td><input type="text" value="<?php echo $row['Nama_Paket'];?>"name="Nama_Paket"></td>
            </tr>
            <tr><td>No.Hp Wisatawan</td>
            <td><input type="text" value="<?php echo $row['No.Hp_Wisatawan'];?>"name="No_Hp"></td></tr>
            <tr><td>Kode Jadwal</td>
            <td><input type="text" value="<?php echo $row['Kode_Jadwal'];?>" name="Kode_Jadwal"></td></tr>
            <tr><td><button type="submit" value="simpan">Simpan Perubahan</button></td></tr>
        </table>
        </form>
        <form action="Tabel1.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
        </div>
    </section>
</body>