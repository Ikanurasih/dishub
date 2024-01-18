<?php
include "global/config.php";

$nama_simpang=$_REQUEST['nama_simpang'];
$jumlah_fase=$_REQUEST['jumlah_fase'];
$nama_kaki=$_REQUEST['nama_kaki'];
$lebar=$_REQUEST['lebar'];
$rambu=$_REQUEST['rambu'];
$stopline=$_REQUEST['stopline'];
$ltor=$_REQUEST['ltor'];
$merah=$_REQUEST['merah'];
$kuning=$_REQUEST['kuning'];
$hijau=$_REQUEST['hijau'];
$motor=$_REQUEST['motor'];
$mobil=$_REQUEST['mobil'];
$mpu=$_REQUEST['mpu'];
$bus_truk=$_REQUEST['bus_truk'];
$unmotor=$_REQUEST['unmotor'];
$jarak=$_REQUEST['jarak'];
$kapasitas=$_REQUEST['kapasitas'];
$panjang_antri=$_REQUEST['panjang_antri'];
$id_simpang=$_REQUEST['id_simpang'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_simpang_apill (id_simpang,
nama_kaki,
lebar,
rambu,
stopline,
ltor,
merah,
kuning,
hijau,
motor,
mobil,
mpu,
bus_truk,
unmotor,
jarak,
kapasitas,
panjang_antri,
tgl_entri) 
VALUES ('$id_simpang',
'$nama_kaki',
'$lebar',
'$rambu',
'$stopline',
'$ltor',
'$merah',
'$kuning',
'$hijau',
'$motor',
'$mobil',
'$mpu',
'$bus_truk',
'$unmotor',
'$jarak',
'$kapasitas',
'$panjang_antri','$sekarang')";

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.simpang_apill&nama_simpang=$nama_simpang&nama_kaki=$nama_kaki&lebar=$lebar&rambu=$rambu&stopline=$stopline&ltor=$ltor&merah=$merah&kuning=$kuning&hijau=$hijau&motor=$motor&mobil=$mobil&mpu=$mpu&bus_truk=$bus_truk&unmotor=$unmotor&jarak=$jarak&kapasitas=$kapasitas&panjang_antri=$panjang_antri';</script>\n";
exit();
}
elseif (empty($nama_kaki))
{
echo "<script>alert('Nama Kaki Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.simpang_apill&nama_simpang=$nama_simpang&nama_kaki=$nama_kaki&lebar=$lebar&rambu=$rambu&stopline=$stopline&ltor=$ltor&merah=$merah&kuning=$kuning&hijau=$hijau&motor=$motor&mobil=$mobil&mpu=$mpu&bus_truk=$bus_truk&unmotor=$unmotor&jarak=$jarak&kapasitas=$kapasitas&panjang_antri=$panjang_antri';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.simpang_apill");
}
?>