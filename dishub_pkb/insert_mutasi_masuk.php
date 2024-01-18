<?php 
include "global/config.php";

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

if ($input_jenis<>"")
{ $jenis=$input_jenis; }

if ($input_kategori<>"")
{ $kategori=$input_kategori; }

$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$sekarang					=date("Y-m-d");

$strsql="INSERT INTO pkb_mutasi (pemilik_lama, pemilik_baru, alamat, no_kendaraan, no_uji, jenis, model, kategori, merk, type, tahun, cc, bahan_bakar, angkut_orang, angkut_barang, masa_berlaku, status_penggunaan,tgl_mutasi, jenis_mutasi, lokasi_mutasi, status,tgl_entri) 
VALUES ('$pemilik_lama', '$pemilik_baru', '$alamat', '$no_kendaraan', '$no_uji', '$jenis', '$model', '$kategori', '$merk', '$type',  '$tahun', '$cc', '$bahan_bakar', '$angkut_orang',  '$angkut_barang', '$masa_berlaku', '$status_penggunaan','$tgl_mutasi','$jenis_mutasi','$lokasi_mutasi','1','$sekarang')"; //echo $strsql;

if (empty($pemilik_lama))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.mutasi_masuk&pemilik_lama=$pemilik_lama&pemilik_baru=$pemilik_baru&alamat=$alamat&no_kendaraan=$no_kendaraan&no_uji=$no_uji&jenis=$jenis&model=$model&kategori=$kategori&merk=$merk&type=$type&tahun=$tahun&cc=$cc&angkut_orang=$angkut_orang&angkut_barang=$angkut_barang&masa_berlaku=$masa_berlaku&status_penggunaan=$status_penggunaan&tgl_mutasi=$tgl_mutasi';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.mutasi_masuk");
}
?>