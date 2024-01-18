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

$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$angkutan_atas=$jarak * $penumpang_atas;
$angkutan_bawah=$jarak * $penumpang_bawah;

$strsql="UPDATE ter_tarif SET 
jenis_kendaraan='$jenis_kendaraan',
jenis_angkutan='$jenis_angkutan',
jarak='$jarak',
jurusan='$jurusan',
penumpang_atas='$penumpang_atas',
penumpang_bawah='$penumpang_bawah',
angkutan_atas='$angkutan_atas',
angkutan_bawah='$angkutan_bawah'

WHERE id='$id'"; 

mysql_query($strsql);
header("location:index.php?do=data.tarif");
?>