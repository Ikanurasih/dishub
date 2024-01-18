<?php
include "global/config.php";

$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
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

$strsql="UPDATE lal_marka SET id_jalan='$id_jalan',
marka_tepi_p='$marka_tepi_p',
marka_tepi_l='$marka_tepi_l',
marka_tepi_kondisi='$marka_tepi_kondisi',
marka_tengah_solid_p='$marka_tengah_solid_p',
marka_tengah_solid_l='$marka_tengah_solid_l',
marka_tengah_solid_kondisi='$marka_tengah_solid_kondisi',
marka_tengah_putus_p='$marka_tengah_putus_p',
marka_tengah_putus_l='$marka_tengah_putus_l',
marka_tengah_putus_kondisi='$marka_tengah_putus_kondisi',
marka_lajur_solid_p='$marka_lajur_solid_p',
marka_lajur_solid_l='$marka_lajur_solid_l',
marka_lajur_solid_kondisi='$marka_lajur_solid_kondisi',
marka_lajur_putus_p='$marka_lajur_putus_p',
marka_lajur_putus_l='$marka_lajur_putus_l',
marka_lajur_putus_kondisi='$marka_lajur_putus_kondisi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.marka&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.marka");
}
?>