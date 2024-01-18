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

$id				=$_REQUEST['id'];
$strsql="UPDATE ang_master_kendaraan SET 
no_kend='$no_kend',
no_uji='$no_uji',
merk='$merk',
jenis_kend='$jenis_kend',
cc='$cc',
bahan_bakar='$bahan_bakar',
tahun='$tahun',
no_rangka='$no_rangka',
no_mesin='$no_mesin',
daya_orang='$daya_orang',
daya_barang='$daya_barang'
WHERE id='$id'"; //echo $strsql;

if (empty($no_kend))
{
echo "<script>alert('Nomer Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kendaraan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan");
}
?>