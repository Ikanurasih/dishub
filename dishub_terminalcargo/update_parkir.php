<?php
include "global/config.php";

$tanggal = $_REQUEST['tanggal'];
$no_kendaraan = $_REQUEST['no_kendaraan'];
$jenis_kendaraan = $_REQUEST['jenis_kendaraan'];
$id					=$_REQUEST['id'];
$sekarang=date("Y-m-d");
$keterangan=$_REQUEST['keterangan'];
$input1=$_REQUEST['input1'];

if($input1<>""){
$jenis_kendaraan=$input1;
}

$strsql="UPDATE cargo_kendaraan SET 
tanggal='$tanggal',
no_kendaraan='$no_kendaraan',
jenis_kendaraan='$jenis_kendaraan',
keterangan='$keterangan'
 WHERE id='$id'"; //echo $strsql;

if (empty($no_kendaraan))
{
echo "<script>alert('Nomor Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.parkir&tanggal=$tanggal&jenis_kendaraan=$jenis_kendaraan&no_kendaraan=$no_kendaraan&keterangan=$keterangan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.parkir");
}
?>