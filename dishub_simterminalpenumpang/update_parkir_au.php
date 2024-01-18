<?php
include "global/config.php";

$kapasitas=$_REQUEST['kapasitas'];
$jenis_au=$_REQUEST['jenis_au'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="UPDATE ter_parkir_au SET
jenis_au='$jenis_au',
kapasitas_parkir='$kapasitas',
jenis_kendaraan='$jenis_kendaraan'
WHERE id='$id'"; //echo $strsql;

mysql_query($strsql);
header("location:index.php?do=data.parkir_au");
?>