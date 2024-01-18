<?php
include "global/config.php";

$kapasitas=$_REQUEST['kapasitas'];
$jenis_au=$_REQUEST['jenis_au'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ter_parkir_au (jenis_au,kapasitas_parkir, jenis_kendaraan, tgl_entri) 
VALUES ('$jenis_au','$kapasitas', '$jenis_kendaraan', '$sekarang')"; //echo $strsql;

mysql_query($strsql);
header("location:index.php?do=data.parkir_au");
?>