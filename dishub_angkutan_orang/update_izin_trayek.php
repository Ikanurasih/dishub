<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$masa_trayek				=$_REQUEST['masa_trayek'];
$no_izin_trayek				=$_REQUEST['no_izin_trayek'];
$tgl_izin_trayek			=$_REQUEST['tgl_izin_trayek'];



$strsql="UPDATE ang_izin_trayek SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
masa_trayek='$masa_trayek',
no_izin_trayek='$no_izin_trayek',
tgl_izin_trayek='$tgl_izin_trayek'
WHERE id='$id'"; //echo $strsql;

if (empty($no_izin_trayek))
{
echo "<script>alert('No. Izin Trayek Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.izin_trayek&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.izin_trayek");
}
?>