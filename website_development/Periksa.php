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
    <title>Nusantara Travel Database</title>
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
        background: rgba(211,211,211,0.9);
        color: black;
        border: 1px solid black;
        margin-left: 150px;
        margin-right: 150px;
        padding: 10px;
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
    <span style="color:white;font-family:arial;opacity:100%"><h1><b>Cek Data</b></h1></span>
    </header>
    <section style="background: rgba(128,128,128,0.3);border:5px solid black;margin-left:200px;margin-right:200px;padding:20px;">
        <div class="kotak1">
            <div class="kotak2">
                <br>
                <table style="font-family:Cambria;font-size:15pt;text-align:left;">
                <tr><td>Nama Wisatawan</td>
                <td> : <?php echo $Nama_Wisatawan;?></td></tr>
                <tr><td>Jenis Kelamin</td>
                <td> : <?php echo $Gender;?></td></tr>
                <tr><td>Nama Paket</td>
                <td> : <?php echo $Nama_Paket;?></td></tr>
                <tr><td>Harga</td>
                <td> : Rp <?php echo $Harga;?>,-</td></tr>
                <tr><td>No.Hp Wisatawan</td>
                <td> : <?php echo $No_Hp;?></td></tr>
                <tr><td>Tanggal Berangkat</td>
                <td> : <?php echo $Jadwal_Keberangkatan;?></td></tr>
                <tr><td>Tanggal Pulang</td>
                <td> : <?php echo $Jadwal_Pulang;?></td></tr>
                <tr><td>Sisa Tiket</td>
                <td> : <?php echo $Tersedia;?></td></tr>
                <tr>&emsp;</tr>
                </table>
                <form action="Pembayaran.php" method="POST" style="text-align:left;">
                    <button type="submit" value="simpan">Lanjut ke Pembayaran</button>
                    <input type="hidden" value="<?php echo $Nama_Wisatawan;?>" name="Nama_Wisatawan">
                    <input type="hidden" value="<?php echo $Gender;?>" name="Gender"> 
                    <input type="hidden" value="<?php echo $No_Hp;?>" name="No_Hp"> 
                    <input type="hidden" value="<?php echo $Nama_Paket;?>" name="Nama_Paket"> 
                    <input type="hidden" value="<?php echo $Jadwal_Keberangkatan;?>" name="Jadwal_Keberangkatan">
                </form>
                <br>
            </div>
            <form action="Pendaftaran.html">
                <button type="submit" value="Kembali" name="Kembali" style="width:200px;height:40px;font-size:15pt;font-family:Cambria"> <--Perbaiki Data--></button>
            </form>
        </div>
    </section>
</body>
</html>