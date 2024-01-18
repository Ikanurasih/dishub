<?php
session_start();
$nameuser=$_SESSION['nameuser'];
$passuser=$_SESSION['passuser'];
$tipe=$_SESSION['tipe'];
include "config.php";

$perintah="select username,password,tipe from ms_usermanager where username='$nameuser' and password='$passuser'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
$cek=mysql_num_rows($hasil);

if ($cek!=='1' AND $row[tipe]!=='1')
{
	echo "<script>alert('Try Again.'); document.location.href='../login.php';</script>\n";
		exit();
}
?>