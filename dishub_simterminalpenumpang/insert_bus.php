<?php
include "global/config.php";

$no_agen=$_REQUEST['no_agen'];
$nama_po=$_REQUEST['nama_po'];
$perwakilan_agen=$_REQUEST['perwakilan_agen'];
$ukuran_kios=$_REQUEST['ukuran_kios'];
$masa_berlaku=$_REQUEST['masa_berlaku'];
$no_sk=$_REQUEST['no_sk'];
$tgl_izin=$_REQUEST['tgl_izin'];
$biaya=$_REQUEST['biaya'];

$sekarang=date("Y-m-d");

$strsql="INSERT INTO ter_bus (no_agen,nama_po, perwakilan_agen, ukuran_kios, masa_berlaku, no_sk, tgl_izin, biaya, tgl_entri) 
VALUES ('$no_agen','$nama_po', '$perwakilan_agen', '$ukuran_kios', '$masa_berlaku', '$no_sk', '$tgl_izin',  '$biaya', '$sekarang')"; //echo $strsql;

if (empty($no_agen))
{
echo "<script>alert('No Agen Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.bus&no_agen=$no_agen&nama_po=$nama_po&perwakilan_agen=$perwakilan_agen&ukuran_kios=$ukuran_kios&masa_berlaku=$masa_berlaku&no_sk=$no_sk&tgl_izin=$tgl_izin&biaya=$biaya';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.bus");
}
?>