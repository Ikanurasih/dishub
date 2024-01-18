<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
$jenis_perlengkapan=$_REQUEST['jenis_perlengkapan'];
$jumlah=$_REQUEST['jumlah'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$input1=$_REQUEST['input1'];

$sekarang=date("Y-m-d");

if ($input1<>"")
{ $jenis_perlengkapan=$input1; }

$strsql="insert into lal_perlengkapan (id_jalan, jenis_perlengkapan, jumlah, kondisi, tahun_pengadaan, lokasi) values ('$id_jalan', '$jenis_perlengkapan', '$jumlah', '$kondisi', '$tahun', '$lokasi')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.perlengkapan&id_jalan=$id_jalan&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&jenis_perlengkapan=$jenis_perlengkapan&jumlah=$jumlah&kondisi=$kondisi&tahun=$tahun&lokasi=$lokasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.perlengkapan");
}
?>