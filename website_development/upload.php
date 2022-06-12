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
date_default_timezone_set('Asia/Jakarta');
$real = date('Y-m-d h:i:s');
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
// name of the uploaded file
$filename = @$_FILES['myfile']['name'];
// destination of the file on the server
$destination = 'Img/' . $filename;
// get the file extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);
// the physical file on a temporary uploads directory on the server
$file = @$_FILES['myfile']['tmp_name'];
$size = @$_FILES['myfile']['size'];
if (!in_array($extension, ['jpg','jpeg', 'pdf', 'png'])) {
echo "You file extension must be .jpg, .jpeg, .png or .pdf";
} elseif (@$_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
echo "File too large!";
} else {
// move the uploaded (temporary) file to the specified destination
if (move_uploaded_file($file, $destination)) {
$sql = "INSERT INTO `Tabel Konfirmasi` (Nama_File, Waktu_Upload, Berangkat, Nama_Wisatawan, Nama_Paket, `No.Hp_Wisatawan`, Gender, Ukuran_File, `Status`, Download) VALUES (
'$filename','$real','$Jadwal_Keberangkatan','$Nama_Wisatawan','$Nama_Paket','$No_Hp','$Gender','$size','0','0')";
if ($koneksi) {
mysqli_query($koneksi, $sql);
Header('location:Berhasil.html');
}
} else {
echo "Failed to upload file.";
}
}
}