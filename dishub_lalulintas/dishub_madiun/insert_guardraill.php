<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$p_guardraill=$_REQUEST['p_guardraill'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$sekarang=date("Y-m-d");
$jumlah=$_REQUEST['jumlah'];

$strsql="INSERT INTO lal_umum (id_jalan,jumlah,kondisi,thn_pengadaan,lokasi,tipe,tgl_entri) 
VALUES ('$id_jalan','$p_guardraill','$kondisi','$tahun','$lokasi','2','$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.guardraill&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&p_guardraill=$p_guardraill&kondisi=$kondisi&tahun=$tahun&lokasi=$lokasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.guardraill");
}
?>