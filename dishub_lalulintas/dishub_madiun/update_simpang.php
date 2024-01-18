<?php
include "global/config.php";

$nama_simpang=$_REQUEST['nama_simpang'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$id=$_REQUEST['id'];
$sekarang=date("Y-m-d");
$jumlah_fase=$_REQUEST['jumlah_fase'];

$strsql="UPDATE lal_simpang SET nama_simpang='$nama_simpang', jumlah_fase='$jumlah_fase' WHERE id='$id'";

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.simpang&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&alamat=$alamat&jk=$jk&lokasi=$lokasi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.simpang");
}
?>