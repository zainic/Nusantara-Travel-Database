<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Isi Data Paket</title>
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
        <span style="color:white;font-family:arial;"><h1><b>ISI DATA PAKET</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <form action="save3.php" method="post">
            <table>
                <tr><td></td><td style="font-family:arial;"><b>Nama Paket</b></td><td><input type="text" name="Nama_paket"></td></tr>
                <tr><td></td><td style="font-family:arial;"><b>Fasilitas</b></td><td><input type="text" name="Fasilitas"></td></tr>
                <tr><td></td><td style="font-family:arial;"><b>Harga</b></td><td><input type="text" name="Harga"></td></tr>
                <tr><tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Simpan Data</button></td></tr>
            </table>
        </form>
        <form action="Tabel3.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
    </section>
</body>
</html>