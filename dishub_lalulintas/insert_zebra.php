<?php
include "global/config.php";

$nama_simpang=$_REQUEST['nama_simpang'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jumlah_batangan=$_REQUEST['jumlah_batangan'];
$panjang_batangan=$_REQUEST['panjang_batangan'];
$lebar_batangan=$_REQUEST['lebar_batangan'];
$total_batangan=$_REQUEST['total_batangan'];
$panjang_tegak=$_REQUEST['panjang_tegak'];
$lebar_tegak=$_REQUEST['lebar_tegak'];
$total_tegak=$_REQUEST['total_tegak'];
$panjang_mendatar=$_REQUEST['panjang_mendatar'];
$lebar_mendatar=$_REQUEST['lebar_mendatar'];
$total_mendatar=$_REQUEST['total_mendatar'];
$tahun_pengadaan=$_REQUEST['tahun_pengadaan'];
$lokasi=$_REQUEST['lokasi'];
$kondisi=$_REQUEST['kondisi'];
$sekarang=date("Y-m-d");

$strsql="insert into lal_zebra_cross 
	(nama_simpang, nama_jalan, jumlah_batangan, panjang_batangan, 
	lebar_batangan, total_batangan, panjang_tegak, lebar_tegak, 
	total_tegak, panjang_mendatar, lebar_mendatar, total_mendatar, 
	tahun_pengadaan, kondisi, lokasi, tgl_entri)
	values
	('$nama_simpang', '$nama_jalan', '$jumlah_batangan', '$panjang_batangan', 
	'$lebar_batangan', '$total_batangan', '$panjang_tegak', '$lebar_tegak', 
	'$total_tegak', '$panjang_mendatar', '$lebar_mendatar', '$total_mendatar', 
	'$tahun_pengadaan', '$kondisi', '$lokasi', '$sekarang')";

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.zebra&nama_simpang=$nama_simpang&nama_jalan=$nama_jalan&jumlah_batangan=$jumlah_batangan&lebar_batangan=$lebar_batangan&panjang_batangan=$panjang_batangan&total_batangan=$total_batangan&panjang_tegak=$panjang_tegak&lebar_tegak=$lebar_tegak&total_tegak=$total_tegak&panjang_mendatar=$panjang_mendatar&lebar_mendatar=$lebar_mendatar&total_mendatar=$total_mendatar&tahun_pengadaan=$tahun_pengadaan&kondisi=$kondisi&lokasi=$lokasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.zebra");
}
?>