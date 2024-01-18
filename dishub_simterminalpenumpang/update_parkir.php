<?php
include "global/config.php";

$tanggal=$_REQUEST['tanggal'];
$jenis_au=$_REQUEST['jenis_au'];
$jml_sepeda=$_REQUEST['jml_sepeda'];
$jml_sepeda_motor=$_REQUEST['jml_sepeda_motor'];
$jml_mobil=$_REQUEST['jml_mobil'];
$id=$_REQUEST['id'];
$sekarang=date("Y-m-d");

$strsql="update ter_parkir	set 
tanggal='$tanggal', 
jml_sepeda='$jml_sepeda', 
jml_sepeda_motor='$jml_sepeda_motor', 
jml_mobil='$jml_mobil'
where id='$id'";

mysql_query($strsql);
header("location:index.php?do=data.parkir");
?>