<?php
include "global/config.php";

$id_trayek=$_REQUEST['id_trayek'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$kode_trayek=$_REQUEST['kode_trayek'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_ruas_jalan (id_trayek, nama_jalan, tgl_entri) 
VALUES ('$id_trayek','$nama_jalan','$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.ruas_jalan&nama_jalan=$nama_jalan&kode_trayek=$kode_trayek&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan';</script>\n";
exit();
}
elseif (empty($jenis_angkutan))
{
echo "<script>alert('Jenis Angkutan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.ruas_jalan&nama_jalan=$nama_jalan&kode_trayek=$kode_trayek&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.ruas_jalan");
}
?>