<?php
include "global/config.php";
$dasar_hukum=$_REQUEST['dasar_hukum'];

$strsql="insert into ter_dasar_hukum (dasar_hukum, tipe) values ('$dasar_hukum','2')";

if (empty($dasar_hukum))
{
echo "<script>alert('Dasar Hukum Tidak Boleh Kosong'); document.location.href='index.php?act=tambah_hukum&do=data.tarif_taksi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.tarif_taksi");
}
?>