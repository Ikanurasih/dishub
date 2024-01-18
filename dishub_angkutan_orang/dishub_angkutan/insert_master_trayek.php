<?php
include "global/config.php";

$jenis_angkutan		=$_REQUEST['jenis_angkutan'];
$jenis_trayek		=$_REQUEST['jenis_trayek'];
$jenis_pelayanan	=$_REQUEST['jenis_pelayanan'];
$kode_trayek		=$_REQUEST['kode_trayek'];
$status_trayek		=$_REQUEST['status_trayek'];
$jadwal_perjalanan	=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_master_trayek (jenis_angkutan, jenis_trayek, jenis_pelayanan, kode_trayek, status_trayek, jadwal_perjalanan, wilayah_opr, tgl_entri) 
VALUES ('$jenis_angkutan','$jenis_trayek','$jenis_pelayanan','$kode_trayek','$status_trayek','$jadwal_perjalanan','$wilayah_opr','$sekarang')";

if (empty($wilayah_opr))
{
echo "<script>alert('Wilayah Operasi Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.trayek&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_pelayanan=$jenis_pelayanan&kode_trayek=$kode_trayek&status_trayek=$status_trayek&jadwal_perjalanan=$jadwal_perjalanan&wilayah_opr=$wilayah_opr';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.trayek");
}
?>