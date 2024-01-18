<?php
include "global/config.php";

$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$nama_simpang=$_REQUEST['nama_simpang'];
$jmayor_ruas=$_REQUEST['jmayor_ruas'];
$jmayor_status=$_REQUEST['jmayor_status'];
$jmayor_rambu=$_REQUEST['jmayor_rambu'];
$jminor_ruas=$_REQUEST['jminor_ruas'];
$jminor_marka_p=$_REQUEST['jminor_marka_p'];
$jminor_marka_l=$_REQUEST['jminor_marka_l'];
$jminor_rambu=$_REQUEST['jminor_rambu'];
$jminor_kondisi=$_REQUEST['jminor_kondisi'];

$strsql="UPDATE lal_simpang_prioritas SET id_jalan='$id_jalan',
nama_simpang='$nama_simpang',
jmayor_ruas='$jmayor_ruas',
jmayor_status='$jmayor_status',
jmayor_rambu='$jmayor_rambu',
jminor_ruas='$jminor_ruas',
jminor_marka_p='$jminor_marka_p',
jminor_marka_l='$jminor_marka_l',
jminor_rambu='$jminor_rambu',
jminor_kondisi='$jminor_kondisi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.simpang_prioritas&id=$id';</script>\n";
exit();
}
if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.simpang_prioritas&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.simpang_prioritas");
}
?>