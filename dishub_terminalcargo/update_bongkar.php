<?php
include "global/config.php";

$tanggal = $_REQUEST['tanggal'];
$nama = $_REQUEST['nama'];
$no_kendaraan = $_REQUEST['no_kendaraan'];
$jenis_kendaraan = $_REQUEST['jenis_kendaraan'];
$jenis_izin = $_REQUEST['jenis_izin'];
$jenis_barang = $_REQUEST['jenis_barang'];
$kg	= $_REQUEST['kg'];
$ton = $_REQUEST['ton'];
$masa_berlaku = $_REQUEST['masa_berlaku'];
$keterangan=$_REQUEST['keterangan'];
$id=$_REQUEST['id'];
$input1=$_REQUEST['input1'];

if($input1<>""){
$jenis_kendaraan=$input1;
}
if($input2<>""){
$jenis_barang=$input2;
}

$strsql="UPDATE cargo_bongkar SET 
tanggal='$tanggal',
nama='$nama',
no_kendaraan='$no_kendaraan',
jenis_kendaraan='$jenis_kendaraan',
jenis_izin='$jenis_izin',
jenis_barang='$jenis_barang',
tonase_kg='$kg',
tonase_ton='$ton',
masa_berlaku='$masa_berlaku',
keterangan='$keterangan' 
WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.bongkar_muat&tanggal=$tanggal&nama=$nama&no_kendaraan=$no_kendaraan&jenis_kendaraan=$jenis_kendaraan&jenis_izin=$jenis_izin&jenis_barang=$jenis_barang&kg=$kg&ton=$ton&masa_berlaku=$masa_berlaku&keterangan=$keterangan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.bongkar_muat");
}
?>