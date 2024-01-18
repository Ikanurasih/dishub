<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$masa_operasi				=$_REQUEST['masa_operasi'];
$no_izin_operasi			=$_REQUEST['no_izin_operasi'];
$tgl_izin_operasi			=$_REQUEST['tgl_izin_operasi'];



$strsql="UPDATE ang_izin_operasi SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
masa_operasi='$masa_operasi',
no_izin_operasi='$no_izin_operasi',
tgl_izin_operasi='$tgl_izin_operasi'
WHERE id='$id'"; //echo $strsql;

if (empty($no_izin_operasi))
{
echo "<script>alert('No. Izin Operasi Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.izin_operasi&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.izin_operasi");
}
?>