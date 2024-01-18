<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$tp1_lokasi=$_REQUEST['tp1_lokasi'];
$tp1_pmarka=$_REQUEST['tp1_pmarka'];
$tp1_lmarka=$_REQUEST['tp1_lmarka'];
$tp2_lokasi=$_REQUEST['tp2_lokasi'];
$tp2_pmarka=$_REQUEST['tp2_pmarka'];
$tp2_lmarka=$_REQUEST['tp2_lmarka'];
$tp3_lokasi=$_REQUEST['tp3_lokasi'];
$tp3_pmarka=$_REQUEST['tp3_pmarka'];
$tp3_lmarka=$_REQUEST['tp3_lmarka'];
$tp4_lokasi=$_REQUEST['tp4_lokasi'];
$tp4_pmarka=$_REQUEST['tp4_pmarka'];
$tp4_lmarka=$_REQUEST['tp4_lmarka'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_parkir (id_jalan,tp1_lokasi,tp1_pmarka,tp1_lmarka,tp2_lokasi,tp2_pmarka,tp2_lmarka,tp3_lokasi,tp3_pmarka,tp3_lmarka,tp4_lokasi,tp4_pmarka,tp4_lmarka,tgl_entri) 
VALUES ('$id_jalan','$tp1_lokasi','$tp1_pmarka','$tp1_lmarka','$tp2_lokasi','$tp2_pmarka','$tp2_lmarka','$tp3_lokasi','$tp3_pmarka','$tp3_lmarka','$tp4_lokasi','$tp4_pmarka','$tp4_lmarka','$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.parkir&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&tp1_lokasi=$tp1_lokasi&tp1_pmarka=$tp1_pmarka&tp1_lmarka=$tp1_lmarka&tp2_lokasi=$tp2_lokasi&tp2_pmarka=$tp2_pmarka&tp2_lmarka=$tp2_lmarka&tp3_lokasi=$tp3_lokasi&tp3_pmarka=$tp3_pmarka&tp3_lmarka=$tp3_lmarka&tp4_lokasi=$tp4_lokasi&tp4_pmarka=$tp4_pmarka&tp4_lmarka=$tp4_lmarka';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.parkir");
}
?>