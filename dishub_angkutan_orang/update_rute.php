<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_trayek					=$_REQUEST['id_trayek'];
$kode_trayek				=$_REQUEST['kode_trayek'];
$rute_trayek				=$_REQUEST['rute_trayek'];
$panjang_trayek				=$_REQUEST['panjang_trayek'];
$jumlah_kendaraan			=$_REQUEST['jumlah_kendaraan'];

$strsql="UPDATE ang_rute SET 
id_trayek='$id_trayek',
rute_trayek='$rute_trayek',
panjang_trayek='$panjang_trayek',
jumlah_kendaraan='$jumlah_kendaraan'
WHERE id='$id'"; //echo $strsql;

if (empty($rute_trayek))
{
echo "<script>alert('Rute Trayek Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.rute&id_trayek=$id_trayek&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.rute");
}
?>