<?php
include "global/config.php";

$id_trayek=$_REQUEST['id_trayek'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$kode_trayek=$_REQUEST['kode_trayek'];
$id=$_REQUEST['id'];
$sekarang=date("Y-m-d");

$strsql="UPDATE ang_ruas_jalan SET 
id_trayek='$id_trayek', 
nama_jalan='$nama_jalan'
WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.ruas_jalan&nama_jalan=$nama_jalan&kode_trayek=$kode_trayek&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan&id=$id';</script>\n";
exit();
}
elseif (empty($jenis_angkutan))
{
echo "<script>alert('Jenis Angkutan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.ruas_jalan&nama_jalan=$nama_jalan&kode_trayek=$kode_trayek&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.ruas_jalan");
}
?>