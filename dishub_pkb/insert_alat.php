<?php
include "global/config.php";

$nama_alat		=$_REQUEST['nama_alat'];
$jenis_alat		=$_REQUEST['jenis_alat'];
$merk		=$_REQUEST['merk'];
$jumlah			=$_REQUEST['jumlah'];
$kondisi		=$_REQUEST['kondisi'];
$th_pengadaan	=$_REQUEST['th_pengadaan'];
$th_kalibrasi		=$_REQUEST['th_kalibrasi'];
$sekarang		=date("Y-m-d");

$strsql="INSERT INTO pkb_peralatan_uji (nama_alat, jenis_alat, merk, jumlah, kondisi,th_pengadaan, th_kalibrasi, tgl_entri) 
VALUES ('$nama_alat','$jenis_alat','$merk','$jumlah','$kondisi','$th_pengadaan','$th_kalibrasi','$sekarang')"; //echo $strsql;

if (empty($nama_alat))
{
echo "<script>alert('Nama Alat Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.alat&nama_alat=$nama_alat&jenis_alat=$jenis_alat&merk=$merk&jumlah=$jumlah&kondisi=$kondisi&th_pengadaan=$th_pengadaan&th_kalibrasi=$th_kalibrasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.alat");
}
?>