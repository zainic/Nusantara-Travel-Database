<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .kotak1 {
        background-color: gray;
        color: black;
        border: 2px solid black;
        margin-left: 10px;
        margin-right:10px;
        padding: 20px;
        text-align: center;
        font-family: courier;
        }
    </style>
    <style>
    .kotak2 {
        background-color: green;
        color: black;
        border: 1px solid black;
        padding: 10px;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-family: courier;
        width: 200px; 
        }
    </style>
    <style>
        body {
        background-image: url('Gunung.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
        }
    </style> 
    <title>Tabel Konfirmasi</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>MENUNGGU KONFIRMASI</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <div class="kotak1">
        <div style="text-align:left">
            <form method="POST" id="temp">
                Tampilkan :
                <select name="Tampil" id="Tampil" form="temp">
                    <option value="Unconfirmed">Belum Dikonfirmasi</option>
                    <option value="Confirmed">Sudah Dikonfirmasi</option>
                    <option value="All">Semua</option>
                </select>
                <input type="submit" value="Tampilkan">
            </form>
        </div>
        <br>
        <table border="1" style="width:100%;background-color:white;">
        <thead>
        <th>ID</th>
        <th>Waktu Upload</th>
        <th>Nama Wisatawan</th>
        <th>Paket</th>
        <th>Berangkat</th>
        <th>No.Hp</th>
        <th>L/P</th>
        <th>Ukuran</th>
        <th>Konfirmasi</th>
        <th>Download</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php 
            include 'Connection.php';
            $Tampil = @$_POST['Tampil'];
            if($Tampil!=""){
                if($Tampil == "Unconfirmed"){
                    $sql = "SELECT * FROM `Tabel Konfirmasi` where `Status`='0'";
                }
                elseif($Tampil == "Confirmed"){
                    $sql = "SELECT * FROM `Tabel Konfirmasi` where `Status`='1'";
                }
                elseif($Tampil == "All"){
                    $sql = "SELECT * FROM `Tabel Konfirmasi`";
                }
            }
            else{
                $sql = "SELECT * FROM `Tabel Konfirmasi` where `Status`='0'";
            }
            $files = mysqli_query($koneksi, $sql);
            foreach ($files as $file):
            if($file['Status']==0){
                $done="Belum";
            }
            else{
                $done="Sudah";
            }
            if($file['Download']==0){
                $down="Belum";
            }
            else{
                $down="Sudah";
            }
            echo "<tr>
              <td>".$file['No_Pendaftaran']."</td>
              <td>".$file['Waktu_Upload']."</td>
              <td>".$file['Nama_Wisatawan']."</td>
              <td>".$file['Nama_Paket']."</td>
              <td>".$file['Berangkat']."</td>
              <td>".$file['No.Hp_Wisatawan']."</td>
              <td>".$file['Gender']."</td>
              <td>".floor($file['Ukuran_File'] / 1000) . ' KB' ."</td>
              <td>".$done."</td>
              <td>".$down."</td>
              <td><a href='Download.php?file_id=$file[No_Pendaftaran]'>Download</a> <a href='Data_Baru.php?file_id=$file[No_Pendaftaran]'>Konfirmasi</a></td>
            </tr>";
          endforeach;
          ?>
        </tbody>
        </table>
        </div>
        <br><br>
        <div class="kotak2">
            <form action="Project.html">
                <input type="submit" value="Kembali Ke Halaman Utama">
            </form>
        </div>
    </section>
</body>
</html>