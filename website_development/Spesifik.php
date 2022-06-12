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
        margin-left: 100px;
        margin-right: 100px;
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
    <title>Pencarian Data</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>PENCARIAN DATA</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <div class="kotak1">
            <div style="background: rgba(218,218,218,0.8);border:5px solid black;padding:20px;text-align:left;">
                <h2>Masukkan Kata Kunci Data yang Ingin Dicari</h2>
                <form method="post" id="Cari">
                <table>
                    <tr><td>Kode Wisatawan</td>
                    <td>: <input type="text" name="Kode_Wisatawan"></td>
                    </tr>
                    <tr><td>Nama Wisatawan</td>
                    <td>: <input type="text" name="Nama_Wisatawan"></td>
                    </tr>
                    <tr><td>Nama Paket</td>
                    <td>: <select name="Nama_Paket" id="Nama_Paket" form="Cari">
                            <option value="">---------------</option>
                            <option value="Reguler">Reguler</option>
                            <option value="VIP">VIP</option>
                            <option value="VVIP">VVIP</option>
                        </select>
                    </td>
                    </tr>
                    <tr><td>No.Hp Wisatawan</td>
                    <td>: <input type="text" name="No_Hp"></td></tr>
                    <tr><td>Jadwal Keberangkatan</td>
                    <td>: <input type="date" name="Jadwal_Keberangkatan"></td></tr>
                    <tr><td>Jadwal Pulang</td>
                    <td>: <input type="date" name="Jadwal_Pulang"></td></tr>
                    <tr><td>Nama Pemandu</td>
                    <td>: <input type="text" name="Nama_Pemandu"></td></tr>
                    <tr><td>Urutkan Berdasarkan</td>
                    <td>: <select name="Urut" id="Urut" form="Cari">
                            <option value=" ORDER BY `tabel wisatawan`.`Kode_Wisatawan` ASC ">Kode Wisatawan (A-Z)</option>
                            <option value=" ORDER BY `tabel wisatawan`.`Kode_Wisatawan` DESC">Kode Wisatawan (Z-A)</option>
                            <option value=" ORDER BY `tabel wisatawan`.`Nama_Wisatawan` ASC">Nama Wisatawan (A-Z)</option>
                            <option value=" ORDER BY `tabel wisatawan`.`Nama_Wisatawan` DESC">Nama Wisatawan (Z-A)</option>
                            <option value=" ORDER BY `tabel paket`.`Nama_Paket` ASC"> Nama Paket (A-Z)</option>
                            <option value=" ORDER BY `tabel paket`.`Nama_Paket` DESC">Nama Paket (Z-A)</option>
                            <option value=" ORDER BY `tabel wisatawan`.`No.Hp_Wisatawan` ASC"> No.HP (0-9)</option>
                            <option value=" ORDER BY `tabel wisatawan`.`No.Hp_Wisatawan` DESC">No.HP (9-0)</option>
                            <option value=" ORDER BY `tabel jadwal`.`Jadwal_Keberangkatan` ASC"> Jadwal_Keberangkatan (0-9)</option>
                            <option value=" ORDER BY `tabel jadwal`.`Jadwal_Keberangkatan` DESC">Jadwal_Keberangkatan (9-0)</option>
                            <option value=" ORDER BY `tabel jadwal`.`Jadwal_Pulang` ASC"> Jadwal_Pulang (0-9)</option>
                            <option value=" ORDER BY `tabel jadwal`.`Jadwal_Pulang` DESC">Jadwal_Pulang (9-0)</option>
                            <option value=" ORDER BY `tabel pemandu wisata`.`Nama_Pemandu` ASC"> Nama_Pemandu (A-Z)</option>
                            <option value=" ORDER BY `tabel pemandu wisata`.`Nama_Pemandu` DESC">Nama_Pemandu (Z-A)</option>
                        </select>
                    </td></tr>
                    <?php
                        $Kode_wisatawan = @$_POST['Kode_Wisatawan']; 
                        $Nama_wisatawan = @$_POST['Nama_Wisatawan']; 
                        $Nama_paket = @$_POST['Nama_Paket']; 
                        $No_Hp = @$_POST['No_Hp']; 
                        $Jadwal_Keberangkatan = @$_POST['Jadwal_Keberangkatan'];
                        $Jadwal_Pulang = @$_POST['Jadwal_Pulang'];
                        $Nama_Pemandu = @$_POST['Nama_Pemandu'];
                        $Urut = @$_POST['Urut'];
                    ?>
                </table>
                <button type="submit" value="Cari" name="button">Cari</button>
                </form>
            </div>
        </div>
        <br>
        <div class="kotak1">
        <div style="text-align:left">
            <h4>Kata Kunci :</h4>
            <?php
                if($Kode_wisatawan != ""){
                    echo "Kode Wisatawan : ".$Kode_wisatawan."<br>";
                }
                if($Nama_wisatawan != ""){
                    echo "Nama Wisatawan : ".$Nama_wisatawan."<br>";
                }
                if($Nama_paket != ""){
                    echo "Nama Paket : ".$Nama_paket."<br>";
                }
                if($No_Hp != ""){
                    echo "No.Hp Wisatawan : ".$No_Hp."<br>";
                }
                if($Jadwal_Keberangkatan != ""){
                    echo "Jadwal Keberangkatan : ".$Jadwal_Keberangkatan."<br>";
                }
                if($Jadwal_Pulang != ""){
                    echo "Jadwal Pulang : ".$Jadwal_Pulang."<br>";
                }
                if($Nama_Pemandu != ""){
                    echo "Nama Pemandu : ".$Nama_Pemandu."<br>";
                }
            ?>
        </div>
        <div style="text-align:left">
            <h4>Urutkan Berdasarkan : </h4><?php
                if($Urut==" ORDER BY `tabel wisatawan`.`Kode_Wisatawan` DESC"){echo " Kode Wisatawan (Turun)";}
                elseif($Urut==" ORDER BY `tabel wisatawan`.`Kode_Wisatawan` ASC"){echo " Kode Wisatawan (Naik)";}
                elseif($Urut==" ORDER BY `tabel wisatawan`.`Nama_Wisatawan` DESC"){echo " Nama Wisatawan (Turun)";}
                elseif($Urut==" ORDER BY `tabel wisatawan`.`Nama_Wisatawan` ASC"){echo " Nama Wisatawan (Naik)";}
                elseif($Urut==" ORDER BY `tabel paket`.`Nama_Paket` DESC"){echo " Nama Paket (Turun)";}
                elseif($Urut==" ORDER BY `tabel paket`.`Nama_Paket` ASC"){echo " Nama Paket (Naik)";}
                elseif($Urut==" ORDER BY `tabel wisatawan`.`No.Hp_Wisatawan` DESC"){echo " Nomor HP (Turun)";}
                elseif($Urut==" ORDER BY `tabel wisatawan`.`No.Hp_Wisatawan` ASC"){echo " Nomor HP (Naik)";}
                elseif($Urut==" ORDER BY `tabel jadwal`.`Jadwal_Keberangkatan` DESC"){echo " Jadwal Keberangkatan (Turun)";}
                elseif($Urut==" ORDER BY `tabel jadwal`.`Jadwal_Keberangkatan` ASC"){echo " Jadwal Keberangkatan (Naik)";}
                elseif($Urut==" ORDER BY `tabel jadwal`.`Jadwal_Pulang` DESC"){echo " Jadwal Pulang (Turun)";}
                elseif($Urut==" ORDER BY `tabel jadwal`.`Jadwal_Pulang` ASC"){echo " Jadwal Pulang (Naik)";}
                elseif($Urut==" ORDER BY `tabel pemandu wisata`.`Nama_Pemandu` DESC"){echo " Nama Pemandu (Turun)";}
                elseif($Urut==" ORDER BY `tabel pemandu wisata`.`Nama_Pemandu` ASC"){echo " Nama Pemandu (Naik)";}
            ?>
        </div>
        <br>
        <table border="1" style="width:100%;background-color:white;">
        <tr><th> NO </th>
        <th> Kode Wisatawan </th>
        <th> Nama Wisatawan </th>
        <th> Nama Paket </th>
        <th> No.Hp Wisatawan </th>
        <th> Jadwal Keberangkatan</th>
        <th> Jadwal Pulang </th>
        <th> Nama Pemandu </th>
        <th> Detail </th></tr>
        <?php
            if($Kode_wisatawan != "" || $Nama_wisatawan != "" || $Nama_paket != "" || $No_Hp != "" || $Jadwal_Keberangkatan != "" || $Jadwal_Pulang != "" || $Nama_Pemandu != ""){
                $query=
                "SELECT * from 
                `Tabel Wisatawan` natural inner join 
                `Tabel Jadwal` natural inner join 
                `Tabel Paket` natural inner join 
                `Tabel Pemandu Wisata` natural inner join 
                `Tabel Ketersediaan`
                where ";
                if($Kode_wisatawan != ""){
                    $query=$query." `Tabel Wisatawan`.`Kode_Wisatawan` like '".$Kode_wisatawan."%' and";
                }
                if($Nama_wisatawan != ""){
                    $query=$query." `Tabel Wisatawan`.`Nama_Wisatawan` like '".$Nama_wisatawan."%' and";
                }
                if($Nama_paket != ""){
                    $query=$query." `Tabel Paket`.`Nama_Paket` like '".$Nama_paket."%' and";
                }
                if($No_Hp != ""){
                    $query=$query." `Tabel Wisatawan`.`No.Hp_Wisatawan` like '".$No_Hp."%' and";
                }
                if($Jadwal_Keberangkatan != ""){
                    $query=$query." `Tabel Jadwal`.`Jadwal_Keberangkatan` like '".$Jadwal_Keberangkatan."%' and";
                }
                if($Jadwal_Pulang != ""){
                    $query=$query." `Tabel Jadwal`.`Jadwal_Pulang` like '".$Jadwal_Pulang."%' and";
                }
                if($Nama_Pemandu != ""){
                    $query=$query." `Tabel Pemandu Wisata`.`Nama_Pemandu` like '".$Nama_Pemandu."%' and";
                }
                $query = substr_replace($query, "", -1);
                $query = substr_replace($query, "", -1);
                $query = substr_replace($query, "", -1);
                $query = $query . $Urut;
                include 'Connection.php'; $wisatawan = mysqli_query($koneksi, $query); $no = 1; 
                foreach ($wisatawan as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Paket'] . "</td>
                    <td>" . $row['No.Hp_Wisatawan'] . "</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Jadwal_Pulang'] . "</td>
                    <td>" . $row['Nama_Pemandu'] . "</td>
                    <td><a href='Detail.php?PK=$row[Kode_Wisatawan]'>Detail</a></td>
                    </tr>"; $no++;
                }
            }
            elseif(@$_POST['button']="Cari"){
                $query=
                "SELECT * from 
                `Tabel Wisatawan` natural inner join 
                `Tabel Jadwal` natural inner join 
                `Tabel Paket` natural inner join 
                `Tabel Pemandu Wisata` natural inner join 
                `Tabel Ketersediaan`";
                $query = $query . $Urut;
                include 'Connection.php'; $wisatawan = mysqli_query($koneksi, $query); $no = 1; 
                foreach ($wisatawan as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Paket'] . "</td>
                    <td>" . $row['No.Hp_Wisatawan'] . "</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Jadwal_Pulang'] . "</td>
                    <td>" . $row['Nama_Pemandu'] . "</td>
                    <td><a href='Detail.php?PK=$row[Kode_Wisatawan]'>Detail</a></td>
                    </tr>"; $no++;
                }
            }
        ?>
        </table>
        </div>
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