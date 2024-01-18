<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$nama_halte=$_REQUEST['nama_halte'];
$identitas=$_REQUEST['identitas'];
$rambu=$_REQUEST['rambu'];
$papan_info=$_REQUEST['papan_info'];
$lampu=$_REQUEST['lampu'];
$tmp_duduk=$_REQUEST['tmp_duduk'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");
$lokasi=$_REQUEST['lokasi'];

$strsql="INSERT INTO lal_halte (id_jalan,nama_halte,identitas,rambu,papan_info,lampu,tmp_duduk,tgl_entri,lokasi) 
VALUES ('$id_jalan','$nama_halte','$identitas','$rambu','$papan_info','$lampu','$tmp_duduk','$sekarang','$lokasi')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.halte&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&nama_halte=$nama_halte&identitas=$identitas&rambu=$rambu&papan_info=$papan_info&lampu=$lampu&tmp_duduk=$tmp_duduk&lokasi=$lokasi&id_jalan=$id_jalan';</script>\n";
exit();
}
elseif (empty($nama_halte))
{
echo "<script>alert('Nama Halte Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.halte&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&nama_halte=$nama_halte&identitas=$identitas&rambu=$rambu&papan_info=$papan_info&lampu=$lampu&tmp_duduk=$tmp_duduk&lokasi=$lokasi&id_jalan=$id_jalan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.halte");
}
?>