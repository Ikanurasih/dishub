<?php
include "global/config.php";

$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$nomor_sk = $_REQUEST['nomor_sk'];
$tgl_sk = $_REQUEST['tgl_sk'];
$masa_berlaku = $_REQUEST['masa_berlaku'];
$id	=$_REQUEST['id'];
$sekarang=date("Y-m-d");
$keterangan=$_REQUEST['keterangan'];

$strsql="UPDATE cargo_wc SET
nama='$nama',
alamat='$alamat',
nomor_sk='$nomor_sk',
tanggal_sk='$tgl_sk',
masa_berlaku='$masa_berlaku',
keterangan='$keterangan'
WHERE id='$id'"; 

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.sewa_wc&nama=$nama&alamat=$alamat&nomor_sk=$nomor_sk&tgl_sk=$tgl_sk&masa_berlaku=$masa_berlaku&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.sewa_wc");
}
?>