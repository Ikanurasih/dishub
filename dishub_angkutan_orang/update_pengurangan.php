<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$tahun_pengurangan			=$_REQUEST['tahun_pengurangan'];
$nama			=$_REQUEST['nama'];


$strsql="UPDATE ang_pengurangan_kendaraan SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
tahun_pengurangan='$tahun_pengurangan'
WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Pemilik Atau Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.pengurangan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
elseif (empty($tahun_pengurangan))
{
echo "<script>alert('Tahun pengurangan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.pengurangan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.pengurangan");
}
?>