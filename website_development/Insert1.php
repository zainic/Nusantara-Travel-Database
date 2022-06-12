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
        <span style="color:white;font-family:arial;"><h1><b>ISI DATA WISATAWAN</b></h1></span>
        <h5 style="color:white;font-family:courier">Treat Your Life With Our Service</h5>
    </header>
    <section style="background: rgba(188,188,188,0.7);border:5px solid black;padding:20px;">
        <form action="save1.php" method="post" id="save">
            <table>
                <tr>
                <td style="font-family:arial;"><b>Kode Wisatawan</b></td>
                <td><input type="text" name="Kode_wisatawan"></td></tr>
                <tr>
                <td style="font-family:arial;"><b>Nama Wisatawan</b></td>
                <td><input type="text" name="Nama_wisatawan"></td></tr>
                <tr>
                <td style="font-family:arial;"><b>Jenis Kelamin</b></td>
                <td><select name="Gender" id="Gender" form="save">
                <option value="">-----------</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
                </select></td></tr>
                <tr>
                <td style="font-family:arial;"><b>Nama Paket</b></td>
                <td><input type="text" name="Nama_paket"></td></tr>
                <tr>
                <td style="font-family:arial;"><b>No.Hp Wisatawan</b></td>
                <td><input type="text" name="No_Hp"></td><tr>
                <tr>
                <td style="font-family:arial;"><b>Kode Jadwal</b></td>
                <td><input type="text" name="Kode_jadwal"></td></tr>
                <tr><tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Simpan Data</button></td></tr>
            </table>
        </form>
        <form action="Tabel1.php" style="margin-left:3px">
            <input type="submit" value="Kembali">
        </form>
    </section>
</body>
</html>