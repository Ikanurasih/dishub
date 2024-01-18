<?php
include "global/config.php"; 
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$id=$_REQUEST['id'];
$tipe2=$_REQUEST['tipe2'];

$strsql="UPDATE usermanager SET PWD='$password',LOGIN='$username',TIPE='$tipe2' WHERE id='$id'";

if (empty($username))
{
echo "<script>alert('Anda belum memasukkan USERNAME'); document.location.href='index.php?act=edit&do=data.usermanager&id=$id';</script>\n";
exit();
}
elseif (empty($password))
{
echo "<script>alert('Anda belum memasukkan PASSWORD'); document.location.href='index.php?act=edit&do=data.usermanager&id=$id';</script>\n";
exit();
}
else
{
$hasil=mysql_query($strsql);
}
if ($hasil)
{
header("location:index.php?do=data.usermanager");
}
else
{
echo "<script>alert('Silahkan Anda gunakan USERNAME yang lain'); document.location.href='index.php?act=edit&do=data.usermanager&id=$id';</script>\n";
exit();
}
?>