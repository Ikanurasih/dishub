<?php
include "global/config.php";

$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$warna1_jml=$_REQUEST['warna1_jml'];
$warna1_kondisi=$_REQUEST['warna1_kondisi'];
$warna1_tahun=$_REQUEST['warna1_tahun'];
$warna1_lokasi=$_REQUEST['warna1_lokasi'];
$warna2_jml=$_REQUEST['warna2_jml'];
$warna2_kondisi=$_REQUEST['warna2_kondisi'];
$warna2_tahun=$_REQUEST['warna2_tahun'];
$warna2_lokasi=$_REQUEST['warna2_lokasi'];
$warna3_jml=$_REQUEST['warna3_jml'];
$warna3_kondisi=$_REQUEST['warna3_kondisi'];
$warna3_tahun=$_REQUEST['warna3_tahun'];
$warna3_lokasi=$_REQUEST['warna3_lokasi'];

$strsql="UPDATE lal_apill SET id_jalan='$id_jalan',
warna1_jml='$warna1_jml',
warna1_kondisi='$warna1_kondisi',
warna1_tahun='$warna1_tahun',
warna1_lokasi='$warna1_lokasi',
warna2_jml='$warna2_jml',
warna2_kondisi='$warna2_kondisi',
warna2_tahun='$warna2_tahun',
warna2_lokasi='$warna2_lokasi',
warna3_jml='$warna3_jml',
warna3_kondisi='$warna3_kondisi',
warna3_tahun='$warna3_tahun',
warna3_lokasi='$warna3_lokasi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.apill&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.apill");
}
?>