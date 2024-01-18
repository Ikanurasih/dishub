<?php
include "global/config.php";

$id=$_REQUEST['id'];
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

$strsql="update ter_kios set 
nama_penyewa='$nama_penyewa', 
alamat='$alamat', 
kategori='$kategori',
luas='$luas', 
no_kios= '$no_kios',
jenis_usaha='$jenis_usaha', 
no_izin='$no_izin', 
tgl_izin='$tanggal', 
masa_berlaku_awal='$masa_berlaku_awal', 
masa_berlaku_akhir='$masa_berlaku_akhir', 
biaya='$biaya'
where id='$id'";

if (empty($nama_penyewa))
{
echo "<script>alert('Nama Penyewa Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kios&nama_penyewa=$nama_penyewa&alamat=$alamat&luas=$luas&no_kios=$no_kios&jenis_usaha=$jenis_usaha&no_izin=$no_izin&tanggal=$tanggal&masa_berlaku_awal=$masa_berlaku_awal&biaya=$biaya&masa_berlaku_akhir=$masa_berlaku_akhir&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kios");
}
?>