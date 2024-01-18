<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$marka_p=$_REQUEST['marka_p'];
$marka_i=$_REQUEST['marka_i'];
$kondisi=$_REQUEST['kondisi'];
$th_pengadaan=$_REQUEST['th_pengadaan'];
$lokasi=$_REQUEST['lokasi'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_parkir (id_jalan, nama_jalan, marka_p, marka_i, kondisi, th_pengadaan, lokasi, tgl_entri) 
VALUES ('$id_jalan','$nama_jalan','$marka_p','$marka_i', '$kondisi','$th_pengadaan','$lokasi','$sekarang')"; //echo $strsql;

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.parkir&nama_jalan=$nama_jalan&kondisi=$kondisi&th_pengadaan=$th_pengadaan&lokasi=$lokasi&marka_p=$marka_p&marka_i=$marka_i';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.parkir");
}
?>