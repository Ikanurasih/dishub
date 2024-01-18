<?php
include "global/config.php";

$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_tarif=$_REQUEST['jenis_tarif'];
$dasar_hukum=$_REQUEST['dasar_hukum'];
$tarif=$_REQUEST['tarif'];

$sekarang=date("Y-m-d");

$strsql="INSERT INTO ter_tarif_taksi (jenis_kendaraan,jenis_angkutan,jenis_tarif, tarif, dasar_hukum, tgl_entri) 
VALUES ('$jenis_kendaraan','$jenis_angkutan','$jenis_tarif','$tarif','$dasar_hukum','$sekarang')"; //echo $strsql;

mysql_query($strsql);
header("location:index.php?do=data.tarif_taksi");
?>