<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Isi Data Jadwal</title>
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
        <span style="color:white;font-family:arial;"><h1><b>ISI JADWAL</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <form action="save2.php" method="post">
            <table>
                <tr><td></td><td style="font-family:arial;"><b>Kode jadwal</b></td>
                <td><input type="text" name="Kode_Jadwal"></td></tr>
                <tr><td></td><td style="font-family:arial;"><b>Jadwal Keberangkatan</b></td>
                <td><input type="date" name="Jadwal_Keberangkatan"></td></tr>
                <tr><td></td><td style="font-family:arial;"><b>Jadwal Pulang</b></td>
                <td><input type="date" name="Jadwal_Pulang"></td></tr>
                <tr><td></td><td style="font-family:arial;"><b>Kode Pemandu</b></td>
                <td><input type="text" name="Kode_Pemandu"></td></tr>
                <tr><tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Simpan Data</button></td></tr>
            </table>
        </form>
        <form action="Tabel2.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
    </section>
</body>
</html>