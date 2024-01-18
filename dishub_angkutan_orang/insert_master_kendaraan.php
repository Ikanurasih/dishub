<?php
include "global/config.php";

$no_kend		=$_REQUEST['no_kend'];
$no_uji			=$_REQUEST['no_uji'];
$merk			=$_REQUEST['merk'];
$jenis_kend		=$_REQUEST['jenis_kend'];
$cc				=$_REQUEST['cc'];
$bahan_bakar	=$_REQUEST['bahan_bakar'];
$tahun			=$_REQUEST['tahun'];
$no_rangka		=$_REQUEST['no_rangka'];
$no_mesin		=$_REQUEST['no_mesin'];
$daya_orang		=$_REQUEST['daya_orang'];
$daya_barang	=$_REQUEST['daya_barang'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_master_kendaraan (no_kend, no_uji, merk, jenis_kend, cc, bahan_bakar, tahun, no_rangka, no_mesin, daya_orang, daya_barang, tgl_entri) 
VALUES ('$no_kend','$no_uji','$merk','$jenis_kend','$cc','$bahan_bakar','$tahun','$no_rangka','$no_mesin','$daya_orang','$daya_barang','$sekarang')";

if (empty($no_kend))
{
echo "<script>alert('No Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kendaraan&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&bahan_bakar=$bahan_bakar&tahun=$tahun&no_rangka=$no_rangka&no_mesin=$no_mesin&daya_orang=$daya_orang&daya_barang=$daya_barang';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan");
}
?>