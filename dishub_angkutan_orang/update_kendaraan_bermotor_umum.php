<?php
include "global/config.php";

$id					=$_REQUEST['id'];
$nama				=$_REQUEST['nama'];
$no_kend			=$_REQUEST['no_kend'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$id_pemilik			=$_REQUEST['id_pemilik'];
$id_kendaraan		=$_REQUEST['id_kendaraan'];
$id_trayek			=$_REQUEST['id_trayek'];

$strsql="UPDATE ang_kendaraan_bermotor_umum SET 
id_pemilik='$id_pemilik',
id_kendaraan='$id_kendaraan',
id_trayek='$id_trayek'
WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Pemilik Atau Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
elseif (empty($no_kend))
{
echo "<script>alert('Nomor Kendaaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
elseif (empty($wilayah_opr))
{
echo "<script>alert('Nomor Kendaaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan_bermotor_umum");
}
?>