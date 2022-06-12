<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Isi Data Wisatawan</title>
    </head>
    <style>
        body {
        background-image: url('Gunung.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
        }
    </style> 
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>MENAMBAHKAN SEJUMLAH JADWAL</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
<form action="Save_Jadwal.php" method="post">
<table>
<tr><td></td><td style="font-family:arial;"><b>Tambahkan Jadwal</b></td></tr>
<tr><td></td><td style="font-family:arial;"> Tanggal saat ini : <?php echo date("Y-m-d");?></td><tr>
<tr><td></td><td style="font-family:arial;">Dari</td>
<td>:&emsp;<input type="date" name="awal"></td></tr>
<tr><td></td><td style="font-family:arial;">Hingga</td>
<td>:&emsp;<input type="date" name="akhir"></td></tr>
<tr><td></td><td style="font-family:arial;color:rgb(225,0,0);-webkit-text-stroke: 0.3px black;"><b>
<?php 
$summon=@$_GET['summon1'];
if($summon=="No1"){
    echo "! ! ! Dimohon untuk Masukkan Tanggal Dengan Benar ! ! !";
}
elseif($summon=="No2"){
    echo "! ! ! Tanggal awal anda adalah masa lalu ! ! !";
}
elseif($summon=="No3"){
    echo "! ! ! Sudah ada di Tabel ! ! !";
}
else{
    echo "&emsp;";
}
?></b></td></tr>
<tr><td colspan="2"><button type="submit" value="simpan">Tambahkan Data</button></td></tr>
</table>
</form>
        <form action="Tabel2.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
    </section>
</body>
</html>