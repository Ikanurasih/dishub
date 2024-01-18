<?php
include "global/config.php";

$id=$_REQUEST['id'];
$nama_jalan=$_REQUEST['nama_jalan'];
$marka_p=$_REQUEST['marka_p'];
$marka_i=$_REQUEST['marka_i'];
$kondisi=$_REQUEST['kondisi'];
$th_pengadaan=$_REQUEST['th_pengadaan'];
$lokasi=$_REQUEST['lokasi'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");

$strsql="UPDATE lal_parkir SET 
id_jalan='$id_jalan',
nama_jalan='$nama_jalan',
marka_p='$marka_p',
marka_i='$marka_i',
kondisi='$kondisi',
th_pengadaan='$th_pengadaan',
lokasi='$lokasi'
WHERE id='$id'";

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