<?php
include "global/config.php"; 

$harga=$_REQUEST['harga'];
$id=$_REQUEST['id'];

$strsql="UPDATE bar_harga SET harga='$harga' WHERE id='$id'";

if (empty($harga))
{
echo "<script>alert('Harga Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.harga&id=$id&retribusi=$retribusi';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.harga");
}
?>