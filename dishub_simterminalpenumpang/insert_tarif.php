<?php
include "global/config.php";

$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jarak=$_REQUEST['jarak'];
$jurusan=$_REQUEST['jurusan'];
$penumpang_atas=$_REQUEST['penumpang_atas'];
$penumpang_bawah=$_REQUEST['penumpang_bawah'];
$angkutan_atas=$_REQUEST['angkutan_atas'];
$angkutan_bawah=$_REQUEST['angkutan_bawah'];

$angkutan_atas=$jarak * $penumpang_atas;
$angkutan_bawah=$jarak * $penumpang_bawah;

$sekarang=date("Y-m-d");

$strsql="INSERT INTO ter_tarif (jenis_kendaraan,jenis_angkutan,jarak,jurusan,penumpang_atas, penumpang_bawah, angkutan_atas, angkutan_bawah, tgl_entri) 
VALUES ('$jenis_kendaraan','$jenis_angkutan','$jarak','$jurusan','$penumpang_atas','$penumpang_bawah','$angkutan_atas','$angkutan_bawah','$sekarang')"; //echo $strsql;

mysql_query($strsql);
header("location:index.php?do=data.tarif");
?>