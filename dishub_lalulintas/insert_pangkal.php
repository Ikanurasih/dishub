<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$pangkal=$_REQUEST['pangkal'];
$ujung=$_REQUEST['ujung'];
$status=$_REQUEST['status'];
$kelas=$_REQUEST['kelas'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_pangkal (nama, pangkal, ujung, status, kelas, tgl_entri) 
VALUES ('$nama','$pangkal','$ujung','$status','$kelas','$sekarang')";

if (empty($nama))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.master_pangkal&nama=$nama&pangkal=$pangkal&ujung=$ujung&status=$status&kelas=$kelas&lokasi=$lokasi&titik_parkir=$titik_parkir';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.master_pangkal");
}
?>