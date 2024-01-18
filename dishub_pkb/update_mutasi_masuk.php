<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$pemilik_lama	=$_REQUEST['pemilik_lama'];
$pemilik_baru	=$_REQUEST['pemilik_baru'];
$alamat	=$_REQUEST['alamat'];
$no_kendaraan	=$_REQUEST['no_kendaraan'];
$no_uji	=$_REQUEST['no_uji'];
$jenis	=$_REQUEST['jenis'];
$model	=$_REQUEST['model'];
$kategori	=$_REQUEST['kategori'];
$merk	=$_REQUEST['merk'];
$type	=$_REQUEST['type'];
$tahun	=$_REQUEST['tahun'];
$cc	=$_REQUEST['cc'];
$bahan_bakar	=$_REQUEST['bahan_bakar'];
$input_bahan_bakar	=$_REQUEST['input_bahan_bakar'];

if ($input_bahan_bakar<>"")
{ $bahan_bakar=$input_bahan_bakar; }

$angkut_orang	=$_REQUEST['angkut_orang'];
$angkut_barang	=$_REQUEST['angkut_barang'];
$masa_berlaku	=$_REQUEST['masa_berlaku'];
$status_penggunaan	=$_REQUEST['status_penggunaan'];
$tgl_mutasi=$_REQUEST['tgl_mutasi'];
$jenis_mutasi=$_REQUEST['jenis_mutasi'];
$lokasi_mutasi=$_REQUEST['lokasi_mutasi'];
$input_jenis=$_REQUEST['input_jenis'];
$input_kategori=$_REQUEST['input_kategori'];


if ($jenis=="Lainnya")
{ $jenis=$input_jenis; }

if ($kategori=="Lainnya")
{ $kategori=$input_kategori; }

$sekarang					=date("Y-m-d");

$strsql="UPDATE pkb_mutasi SET 
pemilik_lama='$pemilik_lama',
pemilik_baru='$pemilik_baru',
alamat='$alamat',
no_kendaraan='$no_kendaraan',
no_uji='$no_uji',
jenis='$jenis',
model='$model',
kategori='$kategori',
merk='$merk',
type='$type',
tahun='$tahun',
cc='$cc',
bahan_bakar='$bahan_bakar',
angkut_orang='$angkut_orang',
angkut_barang='$angkut_barang',
masa_berlaku='$masa_berlaku',
status_penggunaan='$status_penggunaan',
tgl_mutasi='$tgl_mutasi',
jenis_mutasi='$jenis_mutasi',
lokasi_mutasi='$lokasi_mutasi'
WHERE id='$id'"; //echo $strsql;

if (empty($pemilik_lama))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.mutasi_masuk&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.mutasi_masuk");
}
?>