<?php
include "global/config.php";


$tanggal					=$_REQUEST['tanggal'];
$jenis_kend_pickup			=$_REQUEST['jenis_kend_pickup'];
$jenis_kend_truk			=$_REQUEST['jenis_kend_truk'];
$jenis_kend_tgt				=$_REQUEST['jenis_kend_tgt'];
$jml_kend_1					=$_REQUEST['jml_kend_1'];
$pend_pickup					=$_REQUEST['pend_pickup'];
$pend_truk					=$_REQUEST['pend_truk'];
$pend_tgt						=$_REQUEST['pend_tgt'];
$tonase_pickup							=$_REQUEST['tonase_pickup'];
$tonase_truk				=$_REQUEST['tonase_truk'];
$tonase_tgt						=$_REQUEST['tonase_tgt'];
$jml_kend_2					=$_REQUEST['jml_kend_2'];
$jb_bbm					=$_REQUEST['jb_bbm'];
$jb_sembako					=$_REQUEST['jb_sembako'];
$jb_kelontong				=$_REQUEST['jb_kelontong'];
$jb_bangunan					=$_REQUEST['jb_bangunan'];
$jb_hewan						=$_REQUEST['jb_hewan'];
$jb_paket						=$_REQUEST['jb_paket'];
$jb_lain				=$_REQUEST['jb_lain'];
$jml_barang				=$_REQUEST['jml_barang'];
$ket				=$_REQUEST['ket'];
$id				=$_REQUEST['id'];

$strsql_cek1="select * from bar_harga where tipe='1'";
$hasil_cek1=mysql_query($strsql_cek1);
$row_cek1=mysql_fetch_array($hasil_cek1);
$pend_pickup=$jenis_kend_pickup*$row_cek1[harga];

$strsql_cek2="select * from bar_harga where tipe='2'";
$hasil_cek2=mysql_query($strsql_cek2);
$row_cek2=mysql_fetch_array($hasil_cek2);
$pend_truk=$jenis_kend_truk*$row_cek2[harga];

$strsql_cek3="select * from bar_harga where tipe='3'";
$hasil_cek3=mysql_query($strsql_cek3);
$row_cek3=mysql_fetch_array($hasil_cek3);
$pend_tgt=$jenis_kend_tgt*$row_cek3[harga];

$jml_kend_1=$jenis_kend_pickup+$jenis_kend_truk+$jenis_kend_tgt;
$jml_kend_2=$tonase_pickup+$tonase_truk+$tonase_tgt;
$jml_barang=$jb_bbm+$jb_sembako+$jb_kelontong+$jb_bangunan+$jb_hewan+$jb_paket+$jb_lain;

$strsql="UPDATE bar_izin_bongkar_muat SET 
jenis_kend_pickup='$jenis_kend_pickup',
jenis_kend_truk='$jenis_kend_truk',
jenis_kend_tgt='$jenis_kend_tgt',
jml_kend_1='$jml_kend_1',
pend_pickup='$pend_pickup',
pend_truk='$pend_truk',
pend_tgt='$pend_tgt',
tonase_pickup='$tonase_pickup',
tonase_truk='$tonase_truk',
tonase_tgt='$tonase_tgt',
jml_kend_2='$jml_kend_2',
jb_bbm='$jb_bbm',
jb_sembako='$jb_sembako',
jb_kelontong='$jb_kelontong',
jb_bangunan='$jb_bangunan',
jb_hewan='$jb_hewan',
jb_paket='$jb_paket',
jb_lain='$jb_lain',
jml_barang='$jml_barang',
ket='$ket'
WHERE id='$id'";//echo $strsql; 


mysql_query($strsql);
header("location:index.php?do=data.izin_bongkar");
?>