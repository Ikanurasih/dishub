<?php
include "global/config.php";

$nama_penyewa=$_REQUEST['nama_penyewa'];
$alamat=$_REQUEST['alamat'];
$luas=$_REQUEST['luas'];
$no_kios=$_REQUEST['no_kios'];
$jenis_usaha=$_REQUEST['jenis_usaha'];
$no_izin=$_REQUEST['no_izin'];
$tanggal=$_REQUEST['tanggal'];
$biaya=$_REQUEST['biaya'];
$masa_berlaku_awal=$_REQUEST['masa_berlaku_awal'];
$masa_berlaku_akhir=$_REQUEST['masa_berlaku_akhir'];
$sekarang=date("Y-m-d");
$kategori=$_REQUEST['kategori'];

$strsql="insert into ter_kios (nama_penyewa, alamat, kategori, luas, no_kios, jenis_usaha, no_izin, tgl_izin, masa_berlaku_awal, masa_berlaku_akhir, biaya, tgl_entri) values
	('$nama_penyewa', '$alamat', '$kategori', '$luas', '$no_kios', '$jenis_usaha', '$no_izin', '$tanggal', '$masa_berlaku_awal', '$masa_berlaku_akhir', '$biaya', '$sekarang')";

if (empty($nama_penyewa))
{
echo "<script>alert('Nama Penyewa Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kios&nama_penyewa=$nama_penyewa&alamat=$alamat&luas=$luas&no_kios=$no_kios&jenis_usaha=$jenis_usaha&no_izin=$no_izin&tanggal=$tanggal&masa_berlaku_awal=$masa_berlaku_awal&biaya=$biaya&masa_berlaku_akhir=$masa_berlaku_akhir&kategori=$kategori';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kios");
}
?>