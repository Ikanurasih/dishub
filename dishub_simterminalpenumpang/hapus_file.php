<?php
include "global/config.php"; 

$id=$_REQUEST['id'];
$upload_file=$_REQUEST['upload_file'];
$cek=$_REQUEST['cek'];

if ($upload_file<>'')
{
unlink("files/$upload_file");
}

if ($cek=="1")
{
mysql_query("update ter_legalitas set upload_file='' where id='$id'");
header("location:index.php?act=edit&do=data.legalitas&id=$id");
}

elseif ($cek=="2")
{
mysql_query("update ter_fasilitas set gambar='' where id='$id'");
header("location:index.php?act=edit&do=data.terminal&id=$id");
}
?>