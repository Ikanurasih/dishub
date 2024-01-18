<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$jumlah=$_REQUEST['jumlah'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$id_jalan=$_REQUEST['id_jalan'];

$strsql="INSERT INTO lal_umum (id_jalan,jumlah,kondisi,thn_pengadaan,lokasi,tipe,tgl_entri) 
VALUES ('$id_jalan','$jumlah','$kondisi','$tahun','$lokasi','3','NOW()')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.patok_pengaman&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&jumlah=$jumlah&kondisi=$kondisi&tahun=$tahun&lokasi=$lokasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.patok_pengaman");
}
?>