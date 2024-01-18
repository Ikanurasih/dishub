<?php
include "global/config.php";

$id				=$_REQUEST['id'];
$no		=$_REQUEST['no'];
$tanggal		=$_REQUEST['tanggal'];
$nama_pemilik	=$_REQUEST['nama_pemilik'];
$alamat_pemilik	=$_REQUEST['alamat_pemilik'];
$no_kendaraan	=$_REQUEST['no_kendaraan'];
$no_uji	=$_REQUEST['no_uji'];
$jenis_kendaraan	=$_REQUEST['jenis_kendaraan'];
$model_kendaraan	=$_REQUEST['model_kendaraan'];
$kategori	=$_REQUEST['kategori'];
$merk	=$_REQUEST['merk'];
$type	=$_REQUEST['type'];
$tahun	=$_REQUEST['tahun'];
$cc	=$_REQUEST['cc'];
$bahan_bakar	=$_REQUEST['bahan_bakar'];
$input_bahan_bakar	=$_REQUEST['input_bahan_bakar'];
if ($bahan_bakar=="Lainnya")
{ $bahan_bakar=$input_bahan_bakar; }

$angkut_orang	=$_REQUEST['angkut_orang'];
$angkut_barang	=$_REQUEST['angkut_barang'];
$masa_berlaku	=$_REQUEST['masa_berlaku'];
$status_penggunaan	=$_REQUEST['status_penggunaan'];
$input_jenis_kendaraan=$_REQUEST['input_jenis_kendaraan'];
$input_kategori=$_REQUEST['input_kategori'];

if ($jenis_kendaraan=="Lainnya")
{ $jenis_kendaraan=$input_jenis_kendaraan; }

if ($kategori=="Lainnya")
{ $kategori=$input_kategori; }



$sekarang	=date("Y-m-d");

$strsql="UPDATE pkb_kendaraan_lulus_uji SET 
no='$no',
nama_pemilik='$nama_pemilik',
alamat_pemilik='$alamat_pemilik',
no_kendaraan='$no_kendaraan',
no_uji='$no_uji',
jenis_kendaraan='$jenis_kendaraan',
model_kendaraan='$model_kendaraan',
kategori='$kategori',
merk='$merk',
type='$type',
tahun='$tahun',
cc='$cc',
bahan_bakar='$bahan_bakar',
angkut_orang='$angkut_orang',
angkut_barang='$angkut_barang',
masa_berlaku='$masa_berlaku',
status_penggunaan='$status_penggunaan', tanggal='$tanggal'
WHERE id='$id'"; //echo $strsql;

if (empty($nama_pemilik))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kendaraan_lulus_uji&no=$no&tanggal=$tanggal&nama_pemilik=$nama_pemilik&alamat_pemilik=$alamat_pemilik&no_kendaraan=$no_kendaraan&no_uji=$no_uji&jenis_kendaraan=$jenis_kendaraan&model_kendaraan=$model_kendaraan&kategori=$kategori&merk=$merk&type=$type&tahun=$tahun&cc=$cc&angkut_oranga=$angkut_orang&angkut_barang=$angkut_barang&masa_berlaku=$masa_berlaku&status_penggunaan=$status_penggunaan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan_lulus_uji");
}
?>