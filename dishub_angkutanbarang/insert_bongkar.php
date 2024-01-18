<?php
include "global/config.php";

$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$jenis_izin					=$_REQUEST['jenis_izin'];
$jenis_barang						=$_REQUEST['jenis_barang'];
$tgl_mulai							=$_REQUEST['tgl_mulai'];
$tgl_izin							=$_REQUEST['tgl_izin'];
$tonase				=$_REQUEST['tonase'];
$sekarang			=date("Y-m-d");

$strsql="INSERT INTO bar_bongkar_muat (nama, alamat, no_kend, jenis_kend ,jenis_izin, tgl_mulai, tgl_izin, jenis_barang, tonase, tgl_entri) 
VALUES ('$nama','$alamat','$no_kend', '$jenis_kend','$jenis_izin', '$tgl_mulai', '$tgl_izin','$jenis_barang', '$tonase','$sekarang')"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.bongkar&nama=$nama&alamat=$alamat&no_kend=$no_kend&jenis_kend=$jenis_kend&jenis_izin=$jenis_izin&tgl_mulai=$tgl_mulai&tgl_izin=$tgl_izin&jenis_barang=$jenis_barang&tonase=$tonase';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.bongkar");
}
?>