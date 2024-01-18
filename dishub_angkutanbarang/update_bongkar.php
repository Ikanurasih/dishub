<?php
include "global/config.php";

$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$jenis_izin					=$_REQUEST['jenis_izin'];
$tgl_mulai							=$_REQUEST['tgl_mulai'];
$tgl_izin							=$_REQUEST['tgl_izin'];
$jenis_barang						=$_REQUEST['jenis_barang'];
$tonase				=$_REQUEST['tonase'];

$id				=$_REQUEST['id'];

$strsql="UPDATE bar_bongkar_muat SET 
nama='$nama',
alamat='$alamat',
no_kend='$no_kend',
jenis_kend='$jenis_kend',
jenis_izin='$jenis_izin',
tgl_mulai='$tgl_mulai',
tgl_izin='$tgl_izin',
jenis_barang='$jenis_barang',
tonase='$tonase'
WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.bongkar&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.bongkar");
}
?>