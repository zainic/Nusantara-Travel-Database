<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .kotak1 {
        background-color: gray;
        color: black;
        border: 2px solid black;
        margin-left: 100px;
        margin-right:100px;
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
    <title>Tabel Wisatawan</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>TABEL WISATAWAN</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <div class="kotak1">
            <div style="text-align:left;">
            <h4>Urutkan Berdasarkan :</h4><form method="POST" id="tabel">
                <select name="urut" id="urut" form="tabel" style="width: 300pt;height:25px;font-size:medium;font-family:'Times New Roman'">
                <option value="ORDER BY Kode_Wisatawan ASC">Kode Wisatawan (A-Z)</option>
                <option value="ORDER BY Kode_Wisatawan DESC">Kode Wisatawan (Z-A)</option>
                <option value="ORDER BY Nama_Wisatawan ASC">Nama Wisatawan (A-Z)</option>
                <option value="ORDER BY Nama_Wisatawan DESC">Nama Wisatawan (Z-A)</option>
                <option value="ORDER BY Nama_Paket ASC">Nama Paket (A-Z)</option>
                <option value="ORDER BY Nama_Paket DESC">Nama Paket (Z-A)</option>
                <option value="ORDER BY `No.Hp_Wisatawan` ASC">No.Hp Wisatawan (0-9)</option>
                <option value="ORDER BY `No.Hp_Wisatawan` DESC">No.Hp Wisatawan (9-0)</option>
                <option value="ORDER BY Kode_Jadwal ASC">Kode Jadwal (A-Z)</option>
                <option value="ORDER BY Kode_Jadwal DESC">Kode Jadwal (Z-A)</option>
                </select><input type="submit" value="Urutkan" name="Urutkan">
            </form>
            <?php
                $Urut = @$_POST['urut'];
            ?>
            </div>
            <br>
        <table border="1" style="width:100%;background-color:white;">
        <tr><th> NO </th>
        <th> Kode Wisatawan </th>
        <th> Nama Wisatawan </th>
        <th> L/P </th>
        <th> Nama Paket </th>
        <th> No.Hp Wisatawan </th>
        <th> Kode Jadwal </th>
        <th> Edit </th></tr>
        <?php
            include 'Connection.php'; 
            $query = "SELECT * from `Tabel Wisatawan`"; 
            $PK = @$_POST['pk'];
            if($PK!=""){
                $query = "SELECT * from `Tabel Wisatawan` where Kode_Wisatawan='$PK'";
                $wisatawan = mysqli_query($koneksi, $query); $no = 1;
                $row = mysqli_fetch_array($wisatawan);
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Wisatawan'] . "</td>
                    <td>" . $row['Gender'] . "</td>
                    <td>" . $row['Nama_Paket'] . "</td>
                    <td>" . $row['No.Hp_Wisatawan'] . "</td>
                    <td>" . $row['Kode_Jadwal'] . "</td>
                    <td><a href='Update1.php?PK=$row[Kode_Wisatawan]'>Edit</a> 
                    <a href='Delete1.php?PK=$row[Kode_Wisatawan]'>Delete</a></td>
                    </tr>";
            }
            else{
                $wisatawan = mysqli_query($koneksi, $query . $Urut); $no = 1;
                foreach ($wisatawan as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Wisatawan'] . "</td>
                    <td>" . $row['Nama_Wisatawan'] . "</td>
                    <td>" . $row['Gender'] . "</td>
                    <td>" . $row['Nama_Paket'] . "</td>
                    <td>" . $row['No.Hp_Wisatawan'] . "</td>
                    <td>" . $row['Kode_Jadwal'] . "</td>
                    <td><a href='Update1.php?PK=$row[Kode_Wisatawan]'>Edit</a> 
                    <a href='Delete1.php?PK=$row[Kode_Wisatawan]'>Delete</a></td>
                    </tr>"; $no++;
                }
            }
        ?>
        </table>
        </div>
        <br><br>
        <div class="kotak2">
            <form action="Insert1.php">
                <input type="submit" value="Tambahkan Data">
            </form>
        </div>
        <div class="kotak2">
            <form action="Project.html">
                <input type="submit" value="Kembali Ke Halaman Utama">
            </form>
        </div>
    </section>
</body>
</html>