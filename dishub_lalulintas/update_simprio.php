<?php
include "global/config.php";

$id=$_REQUEST['id'];
$nama_simpang=$_REQUEST['nama_simpang'];
$nama_ruas_jalan=$_REQUEST['nama_ruas_jalan'];
$ruas_jalan_mayor=$_REQUEST['ruas_jalan_mayor'];
$no_tabel_mayor=$_REQUEST['no_tabel_mayor'];
$no_rambu_mayor=$_REQUEST['no_rambu_mayor'];
$tahun_pengadaan_mayor=$_REQUEST['tahun_pengadaan_mayor'];
$kondisi_mayor=$_REQUEST['kondisi_mayor'];
$ruas_jalan_minor=$_REQUEST['ruas_jalan_minor'];
$p_minor=$_REQUEST['p_minor'];
$l_minor=$_REQUEST['l_minor'];
$tahun_pengadaan_minor=$_REQUEST['tahun_pengadaan_minor'];
$kondisi_marka=$_REQUEST['kondisi_marka'];
$no_tabel_rambu=$_REQUEST['no_tabel_rambu'];
$no_rambu=$_REQUEST['no_rambu'];
$tahun_pengadaan_rambu=$_REQUEST['tahun_pengadaan_rambu'];
$kondisi_rambu=$_REQUEST['kondisi_rambu'];

$strsql="update lal_simprio set 
	nama_simpang='$nama_simpang', 
	nama_ruas_jalan='$nama_ruas_jalan', 
	ruas_jalan_mayor='$ruas_jalan_mayor', 
	no_tabel_mayor='$no_tabel_mayor', 
	no_rambu_mayor='$no_rambu_mayor', 
	tahun_pengadaan_mayor='$tahun_pengadaan_mayor', 
	kondisi_mayor='$kondisi_mayor', 
	ruas_jalan_minor='$ruas_jalan_minor', 
	p_minor='$p_minor', 
	l_minor='$l_minor', 
	tahun_pengadaan_minor='$tahun_pengadaan_minor', 
	kondisi_marka='$kondisi_marka', 
	no_tabel_rambu='$no_tabel_rambu', 
	no_rambu='$no_rambu', 
	tahun_pengadaan_rambu='$tahun_pengadaan_rambu', 
	kondisi_rambu='$kondisi_rambu'
	where id='$id'";

if (empty($nama_simpang))
{
echo "<script>alert('Nama Simpang Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.simpang_prioritas&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.simpang_prioritas");
}
?>