<?php
include "global/config.php";

$nama_gudang		=$_REQUEST['nama_gudang'];
$nama_pemilik		=$_REQUEST['nama_pemilik'];
$alamat_gudang		=$_REQUEST['alamat_gudang'];
$alamat_pemilik		=$_REQUEST['alamat_pemilik'];
$id				=$_REQUEST['id'];
$luas_gudang=$_REQUEST['luas_gudang'];

$strsql="UPDATE bar_lok_gudang SET 
nama_gudang='$nama_gudang',
nama_pemilik='$nama_pemilik',
alamat_gudang='$alamat_gudang',
alamat_pemilik='$alamat_pemilik',
luas_gudang='$luas_gudang'
WHERE id='$id'"; //echo $strsql;

if (empty($nama_gudang))
{
echo "<script>alert('Nama Gudang Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.gudang&id=$id';</script>\n";
exit();
}
elseif (empty($nama_pemilik))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.gudang&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.gudang");
}
?>