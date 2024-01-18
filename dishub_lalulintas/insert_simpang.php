<?php
include "global/config.php";

$nama_simpang=$_REQUEST['nama_simpang'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$jumlah_fase=$_REQUEST['jumlah_fase'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_simpang (nama_simpang, tgl_entri, jumlah_fase) 
VALUES ('$nama_simpang','$sekarang', '$jumlah_fase')";

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.simpang&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&alamat=$alamat&jk=$jk&lokasi=$lokasi&jumlah_fase=$jumlah_fase';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.simpang");
}
?>