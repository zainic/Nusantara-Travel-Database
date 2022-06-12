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
    <style>
        .box {
          display: grid;
          grid-template-columns: 1fr 1fr;
          grid-gap: 10px;
        }

        .box :first-child {
            align-self: center;
        }
    </style>
    <title>Tabel Jadwal</title>
</head>
<body>
    <header style="background: rgba(0,0,0,0.8);border:5px solid black;padding:20px;text-align:center;">
        <span style="color:white;font-family:arial;"><h1><b>TABEL JADWAL</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <div class="kotak1">
        <table border="1" style="width:100%;background-color:white;">
        <tr><th> NO </th><th> Kode Jadwal </th><th> Jadwal Keberangkatan </th><th> Jadwal Pulang </th><th> Kode Pemandu </th><th> Edit </th></tr>
        <?php
            include 'Connection.php'; 
            $PK = @$_POST['pk'];
            if($PK!=""){
                $query = "SELECT * from `Tabel Jadwal` where Kode_Jadwal='$PK'";
                $wisatawan = mysqli_query($koneksi, $query); $no = 1;
                $row = mysqli_fetch_array($wisatawan);
                echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Jadwal'] . "</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Jadwal_Pulang'] . "</td>
                    <td>" . $row['Kode_Pemandu'] . "</td>
                    <td><a href='Update2.php?PK=$row[Kode_Jadwal]'>Edit</a> <a href='Delete2.php?PK=$row[Kode_Jadwal]'>Delete</a></td>
                    </tr>"; $no++;
            }
            else{
                $wisatawan = mysqli_query($koneksi, "SELECT * from `Tabel Jadwal`"); $no = 1; 
                foreach ($wisatawan as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['Kode_Jadwal'] . "</td>
                    <td>" . $row['Jadwal_Keberangkatan'] . "</td>
                    <td>" . $row['Jadwal_Pulang'] . "</td>
                    <td>" . $row['Kode_Pemandu'] . "</td>
                    <td><a href='Update2.php?PK=$row[Kode_Jadwal]'>Edit</a> <a href='Delete2.php?PK=$row[Kode_Jadwal]'>Delete</a></td>
                    </tr>"; $no++;
                }
            }
        ?>
        </table>
        </div>
        <br><br>
        <div class="box">
            <div>
                <div class="kotak2">
                    <form action="Insert2.php">
                        <input type="submit" value="Tambahkan Data">
                    </form>
                </div>
                <div class="kotak2">
                    <form action="Project.html">
                        <input type="submit" value="Kembali Ke Halaman Utama">
                    </form>
                </div>
            </div>
            <div>
                <div class="kotak2">
                    <form action="Generating_Jadwal.php">
                        <input type="submit" value="Tambahkan Banyak Jadwal">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>