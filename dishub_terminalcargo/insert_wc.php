<?php
include "global/config.php";

$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$nomor_sk = $_REQUEST['nomor_sk'];
$tgl_sk = $_REQUEST['tgl_sk'];
$masa_berlaku = $_REQUEST['masa_berlaku'];
$id					=$_REQUEST['id'];
$sekarang=date("Y-m-d");
$keterangan=$_REQUEST['keterangan'];

$strsql="INSERT INTO cargo_wc (nama,alamat,nomor_sk,tanggal_sk,status,masa_berlaku,tgl_entri,keterangan) 
VALUES ('$nama','$alamat','$nomor_sk','$tgl_sk','1','$masa_berlaku','$sekarang','$keterangan')"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.sewa_wc&nama=$nama&alamat=$alamat&nomor_sk=$nomor_sk&tgl_sk=$tgl_sk&masa_berlaku=$masa_berlaku&keterangan=$keterangan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.sewa_wc");
}
?>