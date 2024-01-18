<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$marka_tepi_p=$_REQUEST['marka_tepi_p'];
$marka_tepi_l=$_REQUEST['marka_tepi_l'];
$marka_tepi_kondisi=$_REQUEST['marka_tepi_kondisi'];
$marka_tengah_solid_p=$_REQUEST['marka_tengah_solid_p'];
$marka_tengah_solid_l=$_REQUEST['marka_tengah_solid_l'];
$marka_tengah_solid_kondisi=$_REQUEST['marka_tengah_solid_kondisi'];
$marka_tengah_putus_p=$_REQUEST['marka_tengah_putus_p'];
$marka_tengah_putus_l=$_REQUEST['marka_tengah_putus_l'];
$marka_tengah_putus_kondisi=$_REQUEST['marka_tengah_putus_kondisi'];
$marka_lajur_solid_p=$_REQUEST['marka_lajur_solid_p'];
$marka_lajur_solid_l=$_REQUEST['marka_lajur_solid_l'];
$marka_lajur_solid_kondisi=$_REQUEST['marka_lajur_solid_kondisi'];
$marka_lajur_putus_p=$_REQUEST['marka_lajur_putus_p'];
$marka_lajur_putus_l=$_REQUEST['marka_lajur_putus_l'];
$marka_lajur_putus_kondisi=$_REQUEST['marka_lajur_putus_kondisi'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_marka (id_jalan,
marka_tepi_p,
marka_tepi_l,
marka_tepi_kondisi,
marka_tengah_solid_p,
marka_tengah_solid_l,
marka_tengah_solid_kondisi,
marka_tengah_putus_p,
marka_tengah_putus_l,
marka_tengah_putus_kondisi,
marka_lajur_solid_p,
marka_lajur_solid_l,
marka_lajur_solid_kondisi,
marka_lajur_putus_p,
marka_lajur_putus_l,
marka_lajur_putus_kondisi,
tgl_entri) 
VALUES ('$id_jalan',
'$marka_tepi_p',
'$marka_tepi_l',
'$marka_tepi_kondisi',
'$marka_tengah_solid_p',
'$marka_tengah_solid_l',
'$marka_tengah_solid_kondisi',
'$marka_tengah_putus_p',
'$marka_tengah_putus_l',
'$marka_tengah_putus_kondisi',
'$marka_lajur_solid_p',
'$marka_lajur_solid_l',
'$marka_lajur_solid_kondisi',
'$marka_lajur_putus_p',
'$marka_lajur_putus_l',
'$marka_lajur_putus_kondisi',
'$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.marka&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&marka_tepi_p=$marka_tepi_p&marka_tepi_l=$marka_tepi_l&marka_tepi_kondisi=$marka_tepi_kondisi&marka_tengah_solid_p=$marka_tengah_solid_p&marka_tengah_solid_l=$marka_tengah_solid_l&marka_tengah_solid_kondisi=$marka_tengah_solid_kondisi&marka_tengah_putus_p=$marka_tengah_putus_p&marka_tengah_putus_l=$marka_tengah_putus_l&marka_tengah_putus_kondisi=$marka_tengah_putus_kondisi&marka_lajur_solid_p=$marka_lajur_solid_p&marka_lajur_solid_l=$marka_lajur_solid_l&marka_lajur_solid_kondisi=$marka_lajur_solid_kondisi&marka_lajur_putus_p=$marka_lajur_putus_p&marka_lajur_putus_l=$marka_lajur_putus_l&marka_lajur_putus_kondisi=$marka_lajur_putus_kondisi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.marka");
}
?>