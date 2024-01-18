<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="UPDATE ang_jenis_kendaraan SET jenis_kendaraan='$nama' WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Jenis Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.jenis_kendaraan&nama=$nama&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.jenis_kendaraan");
}
?>