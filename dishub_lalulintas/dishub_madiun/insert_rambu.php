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
$sekarang=date("Y-m-d");

$fileName = $_FILES['gambar']['name'];
$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['gambar']['name']);
$fileName = $_FILES['gambar']['name'];

$strsql="INSERT INTO lal_rambu (id_pangkal, jenis_rambu, no_rambu, no_tabel, posisi, spesifikasi, kondisi, lokasi, gambar, tgl_entri) VALUES 
('$id_pangkal', '$jenis_rambu', '$no_rambu', '$no_tabel', '$posisi', '$spesifikasi', '$kondisi', '$lokasi', '$fileName', '$sekarang')";

if (empty($nama))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.rambu&nama=$nama&ujung=$ujung&pangkal=$pangkal&jenis_rambu=$jenis_rambu&no_rambu=$no_rambu&no_tabel=$no_tabel&posisi=$posisi&spesifikasi=$spesifikasi&kondisi=$kondisi&lokasi=$lokasi&id_pangkal=$id_pangkal';</script>\n";
exit();
}
else
{
move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile);
mysql_query($strsql);
header("location:index.php?do=data.rambu");
}
?>