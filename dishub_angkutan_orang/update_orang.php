<?php
include "global/config.php";

$id_trayek=$_REQUEST['id_trayek'];
$jml_realisasi=$_REQUEST['jml_realisasi'];
$jml_kebutuhan=$_REQUEST['jml_kebutuhan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$kode_trayek=$_REQUEST['kode_trayek'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="UPDATE ang_orang SET 
id_trayek='$id_trayek', 
jml_kebutuhan='$jml_kebutuhan', 
jml_realisasi='$jml_realisasi'
WHERE id='$id'";

if (empty($jenis_angkutan))
{
echo "<script>alert('Jenis Angkutan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.orang&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan&kode_trayek=$kode_trayek&jml_kebutuhan=$jml_kebutuhan&jml_realisasi=$jml_realisasi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.orang");
}
?>