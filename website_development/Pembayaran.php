<?php
include 'Connection.php';
$Nama_Wisatawan = @$_POST['Nama_Wisatawan'];
$No_Hp = @$_POST['No_Hp'];
$Nama_Paket = @$_POST['Nama_Paket'];
$Gender = @$_POST['Gender'];
$Paket = mysqli_query($koneksi, "select * from `Tabel Paket` where Nama_Paket='$Nama_Paket'");
$row1 = mysqli_fetch_array($Paket);
$Harga = $row1['Harga'];
$Jadwal_Keberangkatan = @$_POST['Jadwal_Keberangkatan'];
$Jadwal_Pulang = date('Y-m-d', strtotime($Jadwal_Keberangkatan. ' + 3 days'));
$Ketersediaan1 = mysqli_query($koneksi, "select * from `Tabel Ketersediaan` where Jadwal_Keberangkatan='$Jadwal_Keberangkatan'");
$row2 = mysqli_fetch_array($Ketersediaan1);
$Tersedia = $row2['Tersedia'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
    <title>Upload Bukti Pembayaran</title>
    <style>
        .kotak1 {
        background: rgba(0,128,0,0.7);
        color: black;
        border: 2px solid black;
        margin: 20px;
        padding: 20px;
        text-align: center;
        font-family: courier;
        opacity: 100%;
        }
    </style>
    <style>
        .kotak2 {
        background: rgba(179, 117, 165, 0.808);
        color: black;
        border: 1px solid black;
        margin-left: 70px;
        margin-right: 70px;
        padding: 10px;
        text-align: center;
        font-family: courier;
        opacity: 100%;
        }
    </style>
    <style>
        .kotak3 {
        background: rgba(167, 161, 165, 0.908);
        color: black;
        border: 1px solid black;
        margin-left: 85px;
        margin-right: 85px;
        padding: 10px;
        text-align: center;
        font-family: courier;
        opacity: 100%;
        }
    </style>
    <style>
        body {
        background-image: url('Gunung.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
        }
    </style> 
</head>
<body>
    <header style="background: rgba(3,4,5,0.5);border: 5px solid black;margin-top:20px;margin-left:200px;margin-right:200px;padding:20px;text-align:center;">
    <span style="color:white;font-family:arial;opacity:100%"><h1><b>Upload Bukti Pembayaran</b></h1></span>
    <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(128,128,128,0.3);border:5px solid black;margin-left:200px;margin-right:200px;padding:20px;">
        <div class="kotak1">
            <div class="kotak2">
                <form action="upload.php" method="post" enctype="multipart/form-data" >
                    <input type="hidden" value="<?php echo $Nama_Wisatawan;?>" name="Nama_Wisatawan">
                    <input type="hidden" value="<?php echo $Gender;?>" name="Gender"> 
                    <input type="hidden" value="<?php echo $No_Hp;?>" name="No_Hp"> 
                    <input type="hidden" value="<?php echo $Nama_Paket;?>" name="Nama_Paket"> 
                    <input type="hidden" value="<?php echo $Jadwal_Keberangkatan;?>" name="Jadwal_Keberangkatan">
                    <h2 style="text-align:left"><b>Pembayaran dapat melalui :</b></h2><br>
                    <table style="text-align:left;font-family:cambria;">
                        <tr><td>Bank BCA        </td><td>&emsp;(No.Rek. 192792644793530)</td><td>&emsp;(a.n Carl Johnson)</td></tr>
                        <tr><td>Bank BRI        </td><td>&emsp;(No.Rek. 639462448402423)</td><td>&emsp;(a.n Cesar Vialpando)</td></tr>
                        <tr><td>Bank BNI        </td><td>&emsp;(No.Rek. 91642749362493) </td><td>&emsp;(a.n Woozie)</td></tr>
                        <tr><td>Bank MANDIRI    </td><td>&emsp;(No.Rek. 3263462926)     </td><td>&emsp;(a.n Madd Dogg)</td></tr>
                    </table>
                    <h3>Silahkan Upload Bukti Pembayaran Disini :</h3>
                    <div class="kotak3"><input type="file" name="myfile"> MAX(5 MB)</div> <br>
                    <button type="submit" name="save">upload</button>
                  </form>
                  <br>
                  <br>
            </div>
            <form action="Periksa.php" method="POST">
                <input type="hidden" value="<?php echo $Nama_Wisatawan;?>" name="Nama_Wisatawan">
                <input type="hidden" value="<?php echo $Gender;?>" name="Gender"> 
                <input type="hidden" value="<?php echo $No_Hp;?>" name="No_Hp"> 
                <input type="hidden" value="<?php echo $Nama_Paket;?>" name="Nama_Paket"> 
                <input type="hidden" value="<?php echo $Jadwal_Keberangkatan;?>" name="Jadwal_Keberangkatan">
                <button type="submit" name="Kembali" style="width:200px;height:40px;font-size:15pt;font-family:Cambria"> Kembali</button>
            </form>
            <br>
        </div>
    </section>
</body>
</html>