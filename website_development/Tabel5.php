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
    <title>Tabel 5</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>TABEL KETERSEDIAAN</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <div class="kotak1">
        <table border="1" style="width:100%;background-color:white;">
        <tr><th> NO </th>
		<th> Jadwal_Keberangkatan </th>
		<th> Tersedia </th>
		<th> Edit </th></tr><?php
            include 'Connection.php'; 
            $PK = @$_POST['pk'];
            if($PK!=""){
                $query = "SELECT * from `Tabel Ketersediaan` where Jadwal_Keberangkatan='$PK'";
                $Ketersediaan = mysqli_query($koneksi, $query); $no = 1;
                $row = mysqli_fetch_array($Ketersediaan);
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Tersedia'] . "</td>
                    <td><a href='Update5.php?PK=$row[Jadwal_Keberangkatan]'>Edit</a> <a href='Delete5.php?PK=$row[Jadwal_Keberangkatan]'>Delete</a></td>
                    </tr>"; $no++;
            }
            else{
                $Ketersediaan = mysqli_query($koneksi, "SELECT * from `Tabel Ketersediaan`"); $no = 1; 
                foreach ($Ketersediaan as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Tersedia'] . "</td>
                    <td><a href='Update5.php?PK=$row[Jadwal_Keberangkatan]'>Edit</a> <a href='Delete5.php?PK=$row[Jadwal_Keberangkatan]'>Delete</a></td>
                    </tr>"; $no++;
                }
            }
        ?>
        </table>
        </div>
        <br><br>
        <div class="kotak2">
            <form action="Insert5.php">
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