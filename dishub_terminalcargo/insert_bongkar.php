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
$input1=$_REQUEST['input1'];
$input2=$_REQUEST['input2'];

if($input1<>""){
$jenis_kendaraan=$input1;
}
if($input2<>""){
$jenis_barang=$input2;
}
$sekarang=date("Y-m-d");

$strsql="INSERT INTO cargo_bongkar (tanggal,nama,no_kendaraan,jenis_kendaraan,jenis_izin,jenis_barang,tonase_kg,tonase_ton,masa_berlaku,tgl_entri,keterangan) 
VALUES ('$tanggal','$nama','$no_kendaraan','$jenis_kendaraan','$jenis_izin','$jenis_barang','$kg','$ton','$masa_berlaku','$tgl_entri','$keterangan')"; 

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.bongkar_muat&tanggal=$tanggal&nama=$nama&no_kendaraan=$no_kendaraan&jenis_kendaraan=$jenis_kendaraan&jenis_izin=$jenis_izin&jenis_barang=$jenis_barang&kg=$kg&ton=$ton&masa_berlaku=$masa_berlaku&keterangan=$keterangan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.bongkar_muat");
}
?>