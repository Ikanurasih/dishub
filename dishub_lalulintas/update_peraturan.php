<?php
include "global/config.php";

$jenis_peraturan=$_REQUEST['jenis_peraturan'];
$judul_peraturan=$_REQUEST['judul_peraturan'];
$nomor=$_REQUEST['nomor'];
$tahun=$_REQUEST['tahun'];
$id=$_REQUEST['id'];


$strsql="UPDATE lal_pp SET jenis_peraturan='$jenis_peraturan',judul_peraturan='$judul_peraturan',
nomor='$nomor',tahun='$tahun' WHERE id='$id'";

if (empty($jenis_peraturan))
{
echo "<script>alert('Jenis Peraturan Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.peraturan&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.peraturan");
}
?>