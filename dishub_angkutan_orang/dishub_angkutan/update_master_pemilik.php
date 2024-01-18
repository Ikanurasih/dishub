<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];
$strsql="UPDATE ang_master_pemilik SET nama='$nama',alamat='$alamat'
WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.pemilik&nama=$nama&alamat=$alamat&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pemilik");
}
?>