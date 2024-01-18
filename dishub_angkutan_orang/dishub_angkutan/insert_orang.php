<?php
include "global/config.php";

$id_trayek=$_REQUEST['id_trayek'];
$jml_realisasi=$_REQUEST['jml_realisasi'];
$jml_kebutuhan=$_REQUEST['jml_kebutuhan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$kode_trayek=$_REQUEST['kode_trayek'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_orang (id_trayek, jml_kebutuhan, jml_realisasi, tgl_entri) 
VALUES ('$id_trayek','$jml_kebutuhan','$jml_realisasi','$sekarang')";

if (empty($jenis_angkutan))
{
echo "<script>alert('Jenis Angkutan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.orang&id_trayek=$id_trayek&jenis_angkutan=$jenis_angkutan&kode_trayek=$kode_trayek&jml_kebutuhan=$jml_kebutuhan&jml_realisasi=$jml_realisasi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.orang");
}
?>