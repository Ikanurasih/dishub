<?php
include "global/config.php";

$status=$_REQUEST['status'];
$jenis=$_REQUEST['jenis'];
$uraian=$_REQUEST['uraian'];
$kondisi=$_REQUEST['kondisi'];
$jumlah=$_REQUEST['jumlah'];
$sekarang=date("Y-m-d");
$id	=$_REQUEST['id'];

$strsql="UPDATE ter_fasilitas SET
status='$status',
jenis='$jenis',
uraian='$uraian',
kondisi='$kondisi',
jumlah='$jumlah' 
WHERE id='$id'";

if (empty($jenis))
{
echo "<script>alert('Jenis Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.terminal&jenis=$jenis&jumlah=$jumlah&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.terminal");
}
?>