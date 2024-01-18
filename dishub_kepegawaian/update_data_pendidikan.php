<?php
include "global/config.php";

$riwayat_sekolah			= $_REQUEST['riwayat_sekolah'];
$riwayat_jurusan			= $_REQUEST['riwayat_jurusan'];
$riwayat_status				= $_REQUEST['riwayat_status'];
$riwayat_th_lulus			= $_REQUEST['riwayat_th_lulus'];
$riwayat_no_ijazah			= $_REQUEST['riwayat_no_ijazah'];
$riwayat_tgl_ijazah			= $_REQUEST['riwayat_tgl_ijazah'];
$id_pegawai=$_REQUEST['id_pegawai'];
$id_pendidikan=$_REQUEST['id_pendidikan'];
$sekarang=date("Y-m-d");

$strsql="UPDATE peg_pendidikan SET 
id_pegawai='$id_pegawai',
riwayat_sekolah='$riwayat_sekolah',
riwayat_jurusan='$riwayat_jurusan',
riwayat_status='$riwayat_status',
riwayat_th_lulus='$riwayat_th_lulus',
riwayat_no_ijazah='$riwayat_no_ijazah',
riwayat_tgl_ijazah='$riwayat_tgl_ijazah'
WHERE id_pendidikan='$id_pendidikan'";

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