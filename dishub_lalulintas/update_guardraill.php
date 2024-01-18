<?php
include "global/config.php";

$id=$_REQUEST['id'];
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$p_guardraill=$_REQUEST['jumlah'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$sekarang=date("Y-m-d");

$strsql="UPDATE lal_umum SET id_jalan='$id_jalan', jumlah='$p_guardraill', kondisi='$kondisi', thn_pengadaan='$tahun', lokasi='$lokasi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.guardraill&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.guardraill");
}
?>