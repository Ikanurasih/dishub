<?php
include "global/config.php";

$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
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

$strsql="UPDATE lal_parkir SET id_jalan='$id_jalan',
tp1_lokasi='$tp1_lokasi',
tp1_pmarka='$tp1_pmarka',
tp1_lmarka='$tp1_lmarka',
tp2_lokasi='$tp2_lokasi',
tp2_pmarka='$tp2_pmarka',
tp2_lmarka='$tp2_lmarka',
tp3_lokasi='$tp3_lokasi',
tp3_pmarka='$tp3_pmarka',
tp3_lmarka='$tp3_lmarka',
tp4_lokasi='$tp4_lokasi',
tp4_pmarka='$tp4_pmarka',
tp4_lmarka='$tp4_lmarka' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.parkir&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.parkir");
}
?>