<?php
include "global/config.php";

$tanggal=$_REQUEST['tanggal'];
$jenis_au=$_REQUEST['jenis_au'];
$jml_sepeda=$_REQUEST['jml_sepeda'];
$jml_sepeda_motor=$_REQUEST['jml_sepeda_motor'];
$jml_mobil=$_REQUEST['jml_mobil'];

$sekarang=date("Y-m-d");

$strsql="insert into ter_parkir	(tanggal, jml_sepeda, jml_sepeda_motor, jml_mobil, tgl_entri)	values
	('$tanggal', '$jml_sepeda', '$jml_sepeda_motor', '$jml_mobil', '$sekarang')"; //echo $strsql;

if (empty($tanggal))
{
echo "<script>alert('Tanggal Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.parkir&tanggal=$tanggal&jml_sepeda=$jml_sepeda&jml_sepeda_motor=$jml_sepeda_motor&jml_mobil=$jml_mobil';</script>\n";
exit();
}


mysql_query($strsql);
header("location:index.php?do=data.parkir");
?>