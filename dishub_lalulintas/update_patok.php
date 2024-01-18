<?php
include "global/config.php";

$id=$_REQUEST['id'];
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$jumlah=$_REQUEST['jumlah'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$id_jalan=$_REQUEST['id_jalan'];

$strsql="UPDATE lal_umum SET id_jalan='$id_jalan',jumlah='$jumlah', kondisi='$kondisi', thn_pengadaan='$tahun', lokasi='$lokasi' WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.patok_pengaman&id=$id&id_jalan=$id_jalan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.patok_pengaman");
}
?>