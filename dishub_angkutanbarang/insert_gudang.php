<?php
include "global/config.php";

$nama_gudang		=$_REQUEST['nama_gudang'];
$nama_pemilik		=$_REQUEST['nama_pemilik'];
$alamat_gudang		=$_REQUEST['alamat_gudang'];
$alamat_pemilik		=$_REQUEST['alamat_pemilik'];
$sekarang			=date("Y-m-d");
$luas_gudang=$_REQUEST['luas_gudang'];

$strsql="INSERT INTO bar_lok_gudang (nama_gudang, nama_pemilik, alamat_gudang, alamat_pemilik, tgl_entri, luas_gudang) 
VALUES ('$nama_gudang','$nama_pemilik','$alamat_gudang','$alamat_pemilik','$sekarang','$luas_gudang')"; //echo $strsql;

if (empty($nama_gudang))
{
echo "<script>alert('Nama Gudang  Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.gudang&nama_gudang=$nama_gudang&nama_pemilik=$nama_pemilik&alamat_pemilik=$alamat_pemilik&alamat_gudang=$alamat_gudang&luas_gudang=$luas_gudang';</script>\n";
exit();
}
elseif (empty($nama_pemilik))
{
echo "<script>alert('Nama Pemilik  Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.gudang&nama_gudang=$nama_gudang&nama_pemilik=$nama_pemilik&alamat_pemilik=$alamat_pemilik&alamat_gudang=$alamat_gudang&luas_gudang=$luas_gudang';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.gudang");
}
?>