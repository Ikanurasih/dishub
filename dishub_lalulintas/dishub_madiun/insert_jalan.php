<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_jalan (nama_jalan, dari, ke, tgl_entri) 
VALUES ('$nama_jalan','$dari','$ke','$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=jalan&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&alamat=$alamat&jk=$jk&lokasi=$lokasi&titik_parkir=$titik_parkir';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=jalan");
}
?>