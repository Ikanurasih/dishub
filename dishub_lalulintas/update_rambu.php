<?php
include "global/config.php";
$nama=$_REQUEST['nama'];
$ujung=$_REQUEST['ujung'];
$pangkal=$_REQUEST['pangkal'];
$jenis_rambu=$_REQUEST['jenis_rambu'];
$no_rambu=$_REQUEST['no_rambu'];
$no_tabel=$_REQUEST['no_tabel'];
$posisi=$_REQUEST['posisi'];
$spesifikasi=$_REQUEST['spesifikasi'];
$kondisi=$_REQUEST['kondisi'];
$lokasi=$_REQUEST['lokasi'];
$gambar=$_REQUEST['gambar'];
$id_pangkal=$_REQUEST['id_pangkal'];

$id=$_REQUEST['id'];

$strsql="UPDATE lal_rambu SET 
jenis_rambu='$jenis_rambu', 
no_rambu='$no_rambu', 
no_tabel='$no_tabel', 
posisi='$posisi', 
spesifikasi='$spesifikasi', 
kondisi='$kondisi', 
lokasi='$lokasi'
WHERE id='$id'"; 
/*
if (empty($nama))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.rambu&nama=$nama&ujung=$ujung&pangkal=$pangkal&jenis_rambu=$jenis_rambu&no_rambu=$no_rambu&no_tabel=$no_tabel&posisi=$posisi&spesifikasi=$spesifikasi&kondisi=$kondisi&lokasi=$lokasi&id_pangkal=$id_pangkal&id=$id&id_pangkal=$id_pangkal';</script>\n";
exit();
}
else
{
*/
mysql_query($strsql);
header("location:index.php?do=data.rambu&id_pangkal=$id_pangkal");
//}
?>