<?php
include "global/config.php";
$nama_pemilik=$_REQUEST['nama_pemilik'];
$nama_pengemudi=$_REQUEST['nama_pengemudi'];
$alamat_pemilik=$_REQUEST['alamat_pemilik'];
$alamat_pengemudi=$_REQUEST['alamat_pengemudi'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$lokasi_jalan=$_REQUEST['lokasi_jalan'];
$lokasi_tempat=$_REQUEST['lokasi_tempat'];

$id=$_REQUEST['id'];
$sekarang=date("Y-m-d");


$strsql="UPDATE ang_ojek SET 
nama_pemilik='$nama_pemilik', 
nama_pengemudi='$nama_pengemudi', 
alamat_pemilik='$alamat_pemilik', 
alamat_pengemudi='$alamat_pengemudi', 
jenis_kendaraan='$jenis_kendaraan', 
lokasi_jalan='$lokasi_jalan',
lokasi_tempat='$lokasi_tempat'
WHERE id='$id'";

if (empty($nama_pemilik))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.ojek&nama_pemilik=$nama_pemilik&nama_pengemudi=$nama_pengemudi&alamat_pemilik=$alamat_pemilik&alamat_pengemudi=$alamat_pengemudi&jenis_kendaraan=$jenis_kendaraan&lokasi_jalan=$lokasi_jalan&lokasi_tempat=$lokasi_tempat&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.ojek");
}
?>