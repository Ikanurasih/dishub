<?php
include "global/config.php";
$dasar_hukum=$_REQUEST['dasar_hukum'];
$id=$_REQUEST['id'];

$strsql="update ter_dasar_hukum set dasar_hukum='$dasar_hukum' where id='$id'";

if (empty($dasar_hukum))
{
echo "<script>alert('Dasar Hukum Tidak Boleh Kosong'); document.location.href='index.php?act=edit_hukum&do=data.tarif_taksi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.tarif_taksi");
}
?>