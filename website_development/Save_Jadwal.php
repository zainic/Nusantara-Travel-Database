<?php 
include 'Connection.php';
$awal=$_POST['awal'];
$akhir=$_POST['akhir'];
$time=date("Y-m-d");
$data = mysqli_query($koneksi,"SELECT MAX(Jadwal_Keberangkatan) as MX FROM `tabel jadwal`");
$row = mysqli_fetch_array($data);$MX = $row['MX']; 
if($awal > $akhir){
    $summon1="No1";
    header("location:Generating_Jadwal.php?summon1=$summon1");
}
elseif($awal < $time){
    $summon1="No2";
    header("location:Generating_Jadwal.php?summon1=$summon1");
}
elseif($awal <= $MX){
    $summon1="No3";
    header("location:Generating_Jadwal.php?summon1=$summon1");
}
else{
$data1 = mysqli_query($koneksi,"SELECT MAX(substring(Kode_Jadwal,2,5)) as Maximum FROM `tabel jadwal`");
$row1 = mysqli_fetch_array($data1);$n = $row1['Maximum']; 
$data2 = mysqli_query($koneksi,"SELECT * FROM `tabel pemandu wisata`");
$all2 = mysqli_fetch_all($data2, MYSQLI_ASSOC); $column2 = array_column($all2,'Kode_Pemandu');
$len = count($column2);$s = "0000";
$summon1 = "";
$awal1 = strtotime($awal);
$akhir1 = strtotime($akhir);
$datediff = $akhir1 - $awal1;
$No=round($datediff / (60 * 60 * 24));
for($i=0;$i<=$No;$i++){
$awal2 = date('Y-m-d', strtotime($awal. ' + '.$i.' days'));
$akhir2 = date('Y-m-d', strtotime($awal2. ' + 3 days'));
$k = rand(1,$len);
$Kode_Jadwal = "J".str_pad($n + $i + 1, 4, 0, STR_PAD_LEFT);
$Kode_Pemandu = "Q".str_pad($s + $k, 4, 0, STR_PAD_LEFT);
#echo $awal2." dan ".$akhir2." dan ".$Kode_Jadwal." dan ".$Kode_Pemandu." dan ".$len."<br>";
$query1="INSERT INTO `Tabel Jadwal` values ('$Kode_Jadwal','$awal2','$akhir2','$Kode_Pemandu')"; 
$query2="INSERT INTO `Tabel Ketersediaan` values ('$awal2','200')"; 
mysqli_query($koneksi, $query1);
mysqli_query($koneksi, $query2);
}
header("location:Tabel2.php");
}
?>