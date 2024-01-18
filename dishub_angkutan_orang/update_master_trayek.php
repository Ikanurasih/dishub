<?php
include "global/config.php";

$jenis_angkutan		=$_REQUEST['jenis_angkutan'];
$jenis_trayek		=$_REQUEST['jenis_trayek'];
$jenis_pelayanan	=$_REQUEST['jenis_pelayanan'];
$kode_trayek		=$_REQUEST['kode_trayek'];
$status_trayek		=$_REQUEST['status_trayek'];
$jadwal_perjalanan	=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$id					=$_REQUEST['id'];

$strsql="UPDATE ang_master_trayek SET 
jenis_angkutan='$jenis_angkutan',
jenis_trayek='$jenis_trayek',
jenis_pelayanan='$jenis_pelayanan',
kode_trayek='$kode_trayek',
status_trayek='$status_trayek',
jadwal_perjalanan='$jadwal_perjalanan',
wilayah_opr='$wilayah_opr'
WHERE id='$id'"; //echo $strsql;

if (empty($wilayah_opr))
{
echo "<script>alert('Wilayah Operasi Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.trayek&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.trayek");
}
?>