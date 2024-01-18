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
$id=$_REQUEST['id'];

if ($input1<>"")
{ $jenis_perlengkapan=$input1; }

$strsql="update lal_perlengkapan set 
id_jalan='$id_jalan', 
jenis_perlengkapan='$jenis_perlengkapan', 
jumlah='$jumlah', 
kondisi='$kondisi', 
tahun_pengadaan='$tahun', 
lokasi='$lokasi' 
where id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.perlengkapan&id_jalan=$id_jalan&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&jenis_perlengkapan=$jenis_perlengkapan&jumlah=$jumlah&kondisi=$kondisi&tahun=$tahun&lokasi=$lokasi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.perlengkapan");
}
?>