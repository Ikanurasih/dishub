<?php
include "global/config.php";

$nama_alat		=$_REQUEST['nama_alat'];
$jenis_alat		=$_REQUEST['jenis_alat'];
$merk		=$_REQUEST['merk'];
$jumlah			=$_REQUEST['jumlah'];
$kondisi		=$_REQUEST['kondisi'];
$th_pengadaan	=$_REQUEST['th_pengadaan'];
$th_kalibrasi		=$_REQUEST['th_kalibrasi'];
$id				=$_REQUEST['id'];

$strsql="UPDATE pkb_peralatan_uji SET 
nama_alat='$nama_alat',
jenis_alat='$jenis_alat',
merk='$merk',
jumlah='$jumlah',
kondisi='$kondisi',
th_pengadaan='$th_pengadaan',
th_kalibrasi='$th_kalibrasi'
WHERE id='$id'"; //echo $strsql;

if (empty($nama_alat))
{
echo "<script>alert('Nama Alat Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.alat&nama_alat=$nama_alat&jenis_alat=$jenis_alat&merk=$merk&jumlah=$jumlah&kondisi=$kondisi&th_pengadaan=$th_pengadaan&th_kalibrasi=$th_kalibrasi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.alat");
}
?>