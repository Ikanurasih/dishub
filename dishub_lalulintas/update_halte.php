<?php
include "global/config.php";

$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$nama_halte=$_REQUEST['nama_halte'];
$identitas=$_REQUEST['identitas'];
$rambu=$_REQUEST['rambu'];
$papan_info=$_REQUEST['papan_info'];
$lampu=$_REQUEST['lampu'];
$tmp_duduk=$_REQUEST['tmp_duduk'];
$lokasi=$_REQUEST['lokasi'];

$strsql="UPDATE lal_halte SET id_jalan='$id_jalan',
nama_halte='$nama_halte', identitas='$identitas', rambu='$rambu', papan_info='$papan_info', lampu='$lampu', tmp_duduk='$tmp_duduk', lokasi='$lokasi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.halte&id=$id';</script>\n";
exit();
}
elseif (empty($nama_halte))
{
echo "<script>alert('Nama Halte Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.halte&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.halte");
}
?>