<?php
session_start();
include "global/config.php";
require "global/global_fungsi.php";
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$do=$_REQUEST['do'];
$act=$_REQUEST['act'];
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$strsql=$_REQUEST['strsql'];
?>
<html>
<head>
<title>DISHUB MADIUN [ANGKUTAN BARANG]</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
<script language="javascript" src="global/jscript.js" type="text/javascript"></script>
<!-- popup calendar -->
		<link rel="stylesheet" href="popupcal/dhtmlgoodies_calendar.css" media="screen"></link>
		<script type="text/javascript" src="popupcal/dhtmlgoodies_calendar.js"></script>
		<!-- end popup calendar -->
</head>

<body>
<?php include "global/header.inc.php"; ?>
<?php
	if ($_SESSION['nameuser'])
	{
?>
<div id="master_menu">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>

  <td width="7%" rowspan="4" align="center"><img src="images/home_48.png" width="48" height="48" hspace="15"><br>
  <a href="index.php" class="text_pasar">Home</a></td>
  <td width="83%" align="center">
    <a href="index.php?do=data.barang" class="text_pasar">KENDARAAN ANGKUTAN BARANG</a> 
  	<a href="index.php?do=data.bongkar" class="text_pasar">DISPENSASI</a>
	<a href="index.php?do=data.gudang" class="text_pasar">LOKASI GUDANG</a><br><br>
	<a href="index.php?do=data.larangan" class="text_pasar">LARANGAN ANGUTAN BARANG</a>
	<a href="index.php?do=data.izin_bongkar" class="text_pasar">IZIN BONGKAR MUAT</a>
	<a href="index.php?do=data.harga" class="text_pasar">SET HARGA</a>
	<a href="index.php?do=data.usermanager" class="text_pasar">USER MANAGER</a>  
  <?php 
	if($_SESSION["modul"] == "1"){
	?>
  <td width="10%" rowspan="3" align="center"><img src="images/grafik.png" width="48" height="48"><br> 
  <a href="../index.php" class="text_pasar">Main</a></td>  
    <?php }else{ ?>
  <td width="10%" rowspan="3" align="center"><img src="images/user_manager.png" width="48" height="48"><br> 
  <a href="../global/logout.php" class="text_pasar">LogOut</a></td>
  <?php } ?>
   </tr>
</table>
</div>
<?php
	}
?>
<br>
<div id=master2>
<!-- silhakn include file master -->
<?php
if ($do=="data.barang")
{ include "barang.inc.php"; }
elseif ($do=="data.bongkar")
{ include "bongkar.inc.php"; }
elseif ($do=="data.gudang")
{ include "gudang.inc.php"; }
elseif ($do=="data.izin_bongkar")
{ include "izin_bongkar.inc.php"; }
elseif ($do=="data.larangan")
{ include "larangan.inc.php"; }
elseif ($do=="data.usermanager")
{ include "usermanager.inc.php"; }
elseif ($do=="data.harga")
{ include "harga.inc.php"; }
else
{ 
	if ($_SESSION['nameuser'])
	{
	include "welcome.inc.php"; 
	}
	else
	{
	include "login.php";
	}
}
?>
</div>
</div></body>
</html>
