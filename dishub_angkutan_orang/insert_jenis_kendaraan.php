<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_jenis_kendaraan (jenis_kendaraan) 
VALUES ('$nama')";

if (empty($nama))
{
echo "<script>alert('Nama Jenis Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.jenis_kendaraan&nama=$nama&alamat=$alamat';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.jenis_kendaraan");
}
?>