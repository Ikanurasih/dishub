<?php
include "global/config.php"; 
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$tipe2=$_REQUEST['tipe2'];

$strsql="INSERT INTO usermanager (login,pwd,tipe,aktif,modul) VALUES ('$username','$password','$tipe2','1','2')";

if (empty($username))
{
echo "<script>alert('Anda belum memasukkan USERNAME'); document.location.href='index.php?act=add&do=data.usermanager&username=$username&password=$password&tipe2=$tipe2';</script>\n";
exit();
}
elseif (empty($password))
{
echo "<script>alert('Anda belum memasukkan PASSWORD'); document.location.href='index.php?act=add&do=data.usermanager&username=$username&password=$password&tipe2=$tipe2';</script>\n";
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
echo "<script>alert('Silahkan Anda gunakan USERNAME yang lain'); document.location.href='index.php?act=add&do=data.usermanager&username=$username&password=$password';</script>\n";
exit();
}
?>