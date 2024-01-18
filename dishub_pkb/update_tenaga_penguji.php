<?php
include "global/config.php";

$nama			=$_REQUEST['nama'];
$nim		=$_REQUEST['nim'];
$tempat_lahir	=$_REQUEST['tempat_lahir'];
$tanggal_lahir	=$_REQUEST['tanggal_lahir'];
$pangkat	=$_REQUEST['pangkat'];
$golongan	=$_REQUEST['golongan'];
$usia	=$_REQUEST['usia'];
$pendidikan	=$_REQUEST['pendidikan'];
$tingkatan	=$_REQUEST['tingkatan'];
$no_sk	=$_REQUEST['no_sk'];
$tanggal	=$_REQUEST['tanggal'];
$pejabat	=$_REQUEST['pejabat'];
$id				=$_REQUEST['id'];

$strsql="UPDATE pkb_tenaga_penguji SET 
nama='$nama',
nim='$nim',
tempat_lahir='$tempat_lahir',
tanggal_lahir='$tanggal_lahir',
pangkat='$pangkat',
golongan='$golongan',
usia='$usia',
pendidikan='$pendidikan',
tingkatan='$tingkatan',
no_sk='$no_sk',
tanggal='$tanggal',
pejabat='$pejabat'
WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Nama Lengkap Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.tenaga_penguji&nama=$nama&nim=$nim&tempat_lahir=$tempat_lahir&tanggal_lahir=$tanggal_lahir&pangkat=$pangkat&golongan=$golongan&usia=$usia&pendidikan=$pendidikan&tingkatan=$tingkatan&no_sk=$no_sk&tanggal=$tanggal&pejabat=$pejabat&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.tenaga_penguji");
}
?>