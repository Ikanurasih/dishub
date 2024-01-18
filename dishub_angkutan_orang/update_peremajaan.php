<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$kondisi					=$_REQUEST['kondisi'];
$tahun_peremajaan			=$_REQUEST['tahun_peremajaan'];
$nama			=$_REQUEST['nama'];


$strsql="UPDATE ang_peremajaan_angkutan SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
kondisi='$kondisi',
tahun_peremajaan='$tahun_peremajaan'
WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Pemilik Atau Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.peremajaan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
elseif (empty($tahun_peremajaan))
{
echo "<script>alert('Tahun Peremajaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.peremajaan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.peremajaan");
}
?>