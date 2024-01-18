<?php
include "global/config.php";

$riwayat_pekerjaan	=$_REQUEST['riwayat_pekerjaan'];
$input_riwayat_pekerjaan	=$_REQUEST['input_riwayat_pekerjaan'];
if($input_riwayat_pekerjaan<>""){
$riwayat_pekerjaan=$input_riwayat_pekerjaan;
}

$riwayat_jbt_nama		= $_REQUEST['riwayat_jbt_nama'];
$riwayat_jbt_tmt		= $_REQUEST['riwayat_jbt_tmt'];

$riwayat_jbt_eselon	=$_REQUEST['riwayat_jbt_eselon'];
$input_riwayat_jbt_eselon	=$_REQUEST['input_riwayat_jbt_eselon'];
if($input_riwayat_jbt_eselon<>""){
$riwayat_jbt_eselon=$input_riwayat_jbt_eselon;
}

$riwayat_sat_kerja		= $_REQUEST['riwayat_sat_kerja'];
$riwayat_no_sk		= $_REQUEST['riwayat_no_sk'];
$riwayat_tgl_sk		= $_REQUEST['riwayat_tgl_sk'];
$riwayat_pejabat_sk		= $_REQUEST['riwayat_pejabat_sk'];

$riwayat_pangkat	=$_REQUEST['riwayat_pangkat'];
$input_riwayat_pangkat	=$_REQUEST['input_riwayat_pangkat'];
if($input_riwayat_pangkat<>""){
$riwayat_pangkat=$input_riwayat_pangkat;
}

$riwayat_golongan		= $_REQUEST['riwayat_golongan'];
$input_riwayat_golongan	=$_REQUEST['input_riwayat_golongan'];
if($input_riwayat_golongan<>""){
$riwayat_golongan=$input_riwayat_golongan;
}

$id_pekerjaan=$_REQUEST['id_pekerjaan'];
$id_pegawai=$_REQUEST['id_pegawai'];
$sekarang=date("Y-m-d");

$strsql="UPDATE peg_pekerjaan SET 
id_pegawai='$id_pegawai',
riwayat_pekerjaan='$riwayat_pekerjaan',
riwayat_jbt_nama='$riwayat_jbt_nama',
riwayat_jbt_tmt='$riwayat_jbt_tmt',
riwayat_jbt_eselon='$riwayat_jbt_eselon',
riwayat_sat_kerja='$riwayat_sat_kerja',
riwayat_no_sk='$riwayat_no_sk',
riwayat_tgl_sk='$riwayat_tgl_sk',
riwayat_pejabat_sk='$riwayat_pejabat_sk',
riwayat_pangkat='$riwayat_pangkat',
riwayat_golongan='$riwayat_golongan'
WHERE id_pekerjaan='$id_pekerjaan'";

if (empty($riwayat_pekerjaan))
{
echo "<script>alert('Nama Pekerjaan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.pekerjaan&id=$id_pegawai&id_pekerjaan=$id_pekerjaan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pekerjaan&id=$id_pegawai");
}
?>