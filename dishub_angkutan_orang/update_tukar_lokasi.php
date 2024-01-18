<?php
include "global/config.php";

$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$kode_trayek_lama			=$_REQUEST['kode_trayek_lama'];
$kode_trayek_baru			=$_REQUEST['kode_trayek_baru'];
$trayek_lama				=$_REQUEST['trayek_lama'];
$trayek_baru				=$_REQUEST['trayek_baru'];
$tahun_tukar_lokasi			=$_REQUEST['tahun_tukar_lokasi'];


$strsql="UPDATE ang_tukar_lokasi SET 
id_kendaraan_bermotor_umum='$id_kendaraan_bermotor_umum',
kode_trayek_lama='$kode_trayek_lama',
kode_trayek_baru='$kode_trayek_baru',
trayek_lama='$trayek_lama',
trayek_baru='$trayek_baru',
tahun_tukar_lokasi='$tahun_tukar_lokasi'
WHERE id='$id'"; //echo $strsql;

if (empty($tahun_tukar_lokasi))
{
echo "<script>alert('Tahun Tukar Lokasi Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.tukar_lokasi&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&id=$id';</script>\n";
exit();
}

else
{
mysql_query($strsql);
header("location:index.php?do=data.tukar_lokasi");
}
?>