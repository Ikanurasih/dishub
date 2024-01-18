<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$pangkal=$_REQUEST['pangkal'];
$ujung=$_REQUEST['ujung'];
$status=$_REQUEST['status'];
$kelas=$_REQUEST['kelas'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="UPDATE lal_pangkal SET
nama='$nama', 
pangkal='$pangkal', 
ujung='$ujung', 
status='$status', 
kelas='$kelas' WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.master_pangkal&nama=$nama&pangkal=$pangkal&ujung=$ujung&status=$status&kelas=$kelas&lokasi=$lokasi&titik_parkir=$titik_parkir&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.master_pangkal");
}
?>