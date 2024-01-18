<?php
include "global/config.php";

$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_tarif=$_REQUEST['jenis_tarif'];
$dasar_hukum=$_REQUEST['dasar_hukum'];
$tarif=$_REQUEST['tarif'];


$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="UPDATE ter_tarif_taksi SET 
jenis_kendaraan='$jenis_kendaraan',
jenis_angkutan='$jenis_angkutan',
jenis_tarif='$jenis_tarif',
dasar_hukum='$dasar_hukum',
tarif='$tarif'
WHERE id='$id'"; 

mysql_query($strsql);
header("location:index.php?do=data.tarif_taksi");
?>