<?php
// Downloads files
include 'Connection.php';
if (isset($_GET['file_id'])) {
$id = $_GET['file_id'];
// fetch file to download from database
$sql = "SELECT * FROM `Tabel Konfirmasi` WHERE No_Pendaftaran='$id'";
$result = mysqli_query($koneksi, $sql);
$file = mysqli_fetch_assoc($result);
$filepath = 'Img/' . $file['Nama_File'];
#$extension = pathinfo($filename, PATHINFO_EXTENSION);
if (file_exists($filepath)) {
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($filepath));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize('Img/' . $file['Nama_File']));
readfile('Img/' . $file['Nama_File']);
// Now update downloads count
$newCount1 = $file['Download'] + 1;
$updateQuery = "UPDATE `Tabel Konfirmasi` SET Download=$newCount1 WHERE No_Pendaftaran='$id'";
mysqli_query($koneksi, $updateQuery);
header('location:Konfirmasi.php');
}
}
else{
header('location:Konfirmasi.php');
}
?>