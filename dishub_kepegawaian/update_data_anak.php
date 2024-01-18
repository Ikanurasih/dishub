<?php
include "global/config.php";

$nama_anak=$_REQUEST['nama_anak'];
$tgl_lahir=$_REQUEST['tgl_lahir'];
$jenkel=$_REQUEST['jenkel'];

$kerja_sekolah	=$_REQUEST['kerja_sekolah'];
$input_kerja_sekolah=$_REQUEST['input_kerja_sekolah'];
if($input_kerja_sekolah<>""){
$kerja_sekolah=$input_kerja_sekolah;
}

$status=$_REQUEST['status'];

$id_anak=$_REQUEST['id_anak'];
$id_pegawai=$_REQUEST['id_pegawai'];
$sekarang=date("Y-m-d");

$strsql="UPDATE peg_anak SET 
id_pegawai='$id_pegawai',
nama_anak='$nama_anak',
tgl_lahir='$tgl_lahir',
jenkel='$jenkel',
kerja_sekolah='$kerja_sekolah',
status='$status'
WHERE id_anak='$id_anak'";

if (empty($nama_anak))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.anak&id=$id_pegawai&id_anak=$id_anak';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.anak&id=$id_pegawai");
}
?>