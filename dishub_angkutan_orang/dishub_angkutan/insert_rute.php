<?php 
include "global/config.php";

$jenis_angkutan				=$_REQUEST['jenis_angkutan'];
$kode_trayek				=$_REQUEST['kode_trayek'];
$rute_trayek				=$_REQUEST['rute_trayek'];
$panjang_trayek				=$_REQUEST['panjang_trayek'];
$jumlah_kendaraan			=$_REQUEST['jumlah_kendaraan'];
$id_trayek					=$_REQUEST['id_trayek'];
$sekarang					=date("Y-m-d");

$strsql="INSERT INTO ang_rute (id_trayek,rute_trayek,panjang_trayek,jumlah_kendaraan,tgl_entri) 
VALUES ('$id_trayek','$rute_trayek','$panjang_trayek','$jumlah_kendaraan','$sekarang')"; //echo $strsql;

if (empty($rute_trayek))
{
echo "<script>alert('Rute Trayek Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.rute&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan&kode_trayek=$kode_trayek&rute_trayek=$rute_trayek&panjang_trayek=$panjang_trayek&jumlah_kendaraan=$jumlah_kendaraan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.rute");
}
?>