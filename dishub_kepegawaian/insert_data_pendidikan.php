<?php
include "global/config.php";

$riwayat_sekolah			= $_REQUEST['riwayat_sekolah'];
$riwayat_jurusan			= $_REQUEST['riwayat_jurusan'];
$riwayat_status				= $_REQUEST['riwayat_status'];
$riwayat_th_lulus			= $_REQUEST['riwayat_th_lulus'];
$riwayat_no_ijazah			= $_REQUEST['riwayat_no_ijazah'];
$riwayat_tgl_ijazah			= $_REQUEST['riwayat_tgl_ijazah'];
$id_pegawai=$_REQUEST['id_pegawai'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO peg_pendidikan (id_pegawai, riwayat_sekolah, riwayat_jurusan, riwayat_status, riwayat_th_lulus, riwayat_no_ijazah, riwayat_tgl_ijazah, tgl_entri) 
VALUES ('$id_pegawai','$riwayat_sekolah','$riwayat_jurusan','$riwayat_status', '$riwayat_th_lulus','$riwayat_no_ijazah', '$riwayat_tgl_ijazah', '$sekarang')"; //echo $strsql;

if (empty($riwayat_sekolah))
{
echo "<script>alert('Nama Sekolah Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pendidikan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pendidikan&id=$id_pegawai");
}
?>