<?php 
include "global/config.php";

$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$cc							=$_REQUEST['cc'];
$tahun						=$_REQUEST['tahun'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jenis_angkutan				=$_REQUEST['jenis_angkutan'];
$masa_usaha					=$_REQUEST['masa_usaha'];
$no_izin_usaha				=$_REQUEST['no_izin_usaha'];
$tgl_izin_usaha				=$_REQUEST['tgl_izin_usaha'];
$sekarang					=date("Y-m-d");

$strsql="INSERT INTO ang_izin_usaha (id_kendaraan_bermotor_umum,masa_usaha,no_izin_usaha,tgl_izin_usaha,tgl_entri) 
VALUES ('$id_kendaraan_bermotor_umum','$masa_usaha','$no_izin_usaha','$tgl_izin_usaha','$sekarang')"; //echo $strsql;

if (empty($no_izin_usaha))
{
echo "<script>alert('No. Izin Usaha Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.izin_usaha&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&nama=$nama&alamat=$alamat&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&tahun=$tahun&daya_orang=$daya_orang&daya_barang=$daya_barang&jenis_angkutan=$jenis_angkutan&masa_usaha=$masa_usaha&no_izin_usaha=$no_izin_usaha&tgl_izin_usaha=$tgl_izin_usaha';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.izin_usaha");
}
?>