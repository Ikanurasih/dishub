<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$masa_usaha					=$_REQUEST['masa_usaha'];
$no_izin_usaha				=$_REQUEST['no_izin_usaha'];
$tgl_izin_usaha				=$_REQUEST['tgl_izin_usaha'];



$strsql="UPDATE ang_izin_usaha SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
masa_usaha='$masa_usaha',
no_izin_usaha='$no_izin_usaha',
tgl_izin_usaha='$tgl_izin_usaha'
WHERE id='$id'"; //echo $strsql;

if (empty($no_izin_usaha))
{
echo "<script>alert('No. Izin Usaha Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.izin_usaha&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.izin_usaha");
}
?>