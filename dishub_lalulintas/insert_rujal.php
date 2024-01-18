<?php
include "global/config.php";

$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$panjang=$_REQUEST['panjang'];
$lebar=$_REQUEST['lebar'];
$trotoar=$_REQUEST['trotoar'];
$drainase=$_REQUEST['drainase'];
$bahu=$_REQUEST['bahu'];
$tipe2=$_REQUEST['tipe2'];
$status=$_REQUEST['status'];
$kelas=$_REQUEST['kelas'];
$motor=$_REQUEST['motor'];
$mobil=$_REQUEST['mobil'];
$mpu=$_REQUEST['mpu'];
$bus_truk=$_REQUEST['bus_truk'];
$unmotor=$_REQUEST['unmotor'];
$kapasitas=$_REQUEST['kapasitas'];
$vc_ratio=$_REQUEST['vc_ratio'];
$jpo=$_REQUEST['jpo'];
$pelican=$_REQUEST['pelican'];
$zebra=$_REQUEST['zebra'];
$iya_tidak=$_REQUEST['iya_tidak'];
$arah=$_REQUEST['arah'];
$id_jalan=$_REQUEST['id_jalan'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_ruas_jalan (id_jalan,
panjang,
lebar,
trotoar,
drainase,
bahu,
tipe,
status,
kelas,
motor,
mobil,
mpu,
bus_truk,
unmotor,
kapasitas,
vc_ratio,
jpo,
pelican,
zebra,
iya_tidak,
arah,
tgl_entri) 
VALUES ('$id_jalan',
'$panjang',
'$lebar',
'$trotoar',
'$drainase',
'$bahu',
'$tipe2',
'$status',
'$kelas',
'$motor',
'$mobil',
'$mpu',
'$bus_truk',
'$unmotor',
'$kapasitas',
'$vc_ratio',
'$jpo',
'$pelican',
'$zebra',
'$iya_tidak',
'$arah','$sekarang')";

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.ruas_jalan&nama_jalan=$nama_jalan&dari=$dari&ke=$ke&panjang=$panjang&lebar=$lebar&trotoar=$trotoar&drainase=$drainase&bahu=$bahu&tipe2=$tipe2&status=$status&kelas=$kelas&motor=$motor&mobil=$mobil&mpu=$mpu&bus_truk=$bus_truk&unmotor=$unmotor&kapasitas=$kapasitas&vc_ratio=$vc_ratio&jpo=$jpo&pelican=$pelican&zebra=$zebra&iya_tidak=$iya_tidak&arah=$arah';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.ruas_jalan");
}
?>