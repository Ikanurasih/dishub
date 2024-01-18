<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$id=$_REQUEST['id'];
$sekarang=date("Y-m-d");

$strsql="UPDATE lal_jalan SET nama_jalan='$nama_jalan',dari='$dari',ke='$ke'
WHERE id='$id'";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=jalan&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&alamat=$alamat&jk=$jk&lokasi=$lokasi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=jalan");
}
?>