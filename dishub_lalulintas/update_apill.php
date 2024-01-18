<?php
include "global/config.php";

$nama_simpang=$_REQUEST['nama_simpang'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jenis_lampu=$_REQUEST['jenis_lampu'];
$jumlah_warna=$_REQUEST['jumlah_warna'];
$jumlah_dop_neon=$_REQUEST['jumlah_dop_neon'];
$kondisi1=$_REQUEST['kondisi1'];
$tahun_pengadaan=$_REQUEST['tahun_pengadaan'];
$lokasi3=$_REQUEST['lokasi3'];
$patok_pengaman=$_REQUEST['patok_pengaman'];
$jumlah=$_REQUEST['jumlah'];
$kondisi2=$_REQUEST['kondisi2'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="update lal_apill_baru set 
nama_simpang='$nama_simpang', 
nama_jalan='$nama_jalan', 
jenis_lampu='$jenis_lampu', 
jumlah_warna='$jumlah_warna', 
jumlah_dop_neon='$jumlah_dop_neon', 
kondisi1='$kondisi1', 
tahun_pengadaan='$tahun_pengadaan', 
lokasi='$lokasi', 
patok_pengaman='$patok_pengaman', 
jumlah='$jumlah', 
kondisi2='$kondisi2'
where id='$id'"; 

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.apill&id=$id&nama_jalan=$nama_jalan&jenis_lampu=$jenis_lampu&jumlah_warna=$jumlah_warna&jumlah_dop_neon=$jumlah_dop_neon&kondisi1=$kondisi1&tahun_pengadaan=$tahun_pengadaan&lokasi=$lokasi&patok_pengaman=$patok_pengaman&jumlah=$jumlah&kondisi2=$kondisi2';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.apill");
}
?>