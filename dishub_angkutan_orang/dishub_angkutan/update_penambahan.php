<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$tahun_penambahan			=$_REQUEST['tahun_penambahan'];
$nama			=$_REQUEST['nama'];


$strsql="UPDATE ang_penambahan_kendaraan SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
tahun_penambahan='$tahun_penambahan'
WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Pemilik Atau Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.penambahan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
elseif (empty($tahun_penambahan))
{
echo "<script>alert('Tahun Penambahan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.penambahan&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.penambahan");
}
?>