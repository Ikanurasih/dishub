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
$id_pegawai=$_REQUEST['id_pegawai'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO peg_anak (id_pegawai, nama_anak, tgl_lahir, jenkel, kerja_sekolah, status, tgl_entri) 
VALUES ('$id_pegawai','$nama_anak','$tgl_lahir','$jenkel', '$kerja_sekolah','$status','$sekarang')"; //echo $strsql;

if (empty($nama_anak))
{
echo "<script>alert('Nama Anak Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.anak';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.anak&id=$id_pegawai");
}
?>