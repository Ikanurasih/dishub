<?php
//include file koneksi database
include "global/config.php";
//ambil var
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
//tgl+jam
//$jam = date("H:i:s");                         
$sekarang=date("y-m-d, H:i:s");
//$sekarang="$hari $jam";
//echo $sekarang;
//ambil tabel

$perintah="SELECT id,login,pwd,tipe,aktif FROM ang_usermanager WHERE login='$username' AND pwd='$password' AND aktif='1'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
if (empty($username))
{
echo "<script>alert('Anda belum memasukkan Username.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}

if (empty($password))
{
echo "<script>alert('Anda belum memasukkan Password.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}
if ($row[login]==$username AND $row[pwd]==$password)
{
session_start();
session_register("nameuser");
session_register("passuser");
session_register("tipe");
$nameuser=$row[login];
$passuser=$row[pwd];
$tipe=$row[tipe];
		$str_insert="UPDATE ang_usermanager SET last_login='$sekarang' WHERE login='$username'";
		mysql_query($str_insert);
		header("location:index.php");
}
else
{
echo "<script>alert('Silahkan masukkan Username dan Password Anda dengan benar.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}
?>