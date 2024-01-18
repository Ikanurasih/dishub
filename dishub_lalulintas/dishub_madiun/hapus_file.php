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
mysql_query("update lal_pp set upload_file='' where id='$id'");
header("location:index.php?act=edit&do=data.peraturan&id=$id");
}
else
{
mysql_query("update lal_rambu set gambar='' where id='$id'");
header("location:index.php?act=edit&do=data.rambu&id=$id");
}

?>