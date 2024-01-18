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

$kategori2 = $_REQUEST["kategori2"];

$key2 = $_REQUEST["key2"];
?>
<html>
<head>
<title>DISHUB MADIUN [PAJAK]</title>
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
  <td width="7%" rowspan="3" align="center"><img src="images/home_48.png" width="48" height="48" hspace="15"><br>
  <a href="index.php" class="text_pasar">Home</a></td>
  <td width="83%" align="center">
  	<a href="index.php?do=data.legalitas" class="text_pasar">LEGALITAS</a> 
  	<a href="index.php?do=data.tenaga_penguji" class="text_pasar">TENAGA PENGUJI</a> 
  	<a href="index.php?do=data.alat" class="text_pasar">ALAT UJI PKB</a> <br><br>
	<a href="index.php?do=data.kendaraan_wajib_uji" class="text_pasar">KENDARAAN WAJIB UJI</a> 
	<a href="index.php?do=data.kendaraan_lulus_uji" class="text_pasar">KENDARAAN LULUS UJI</a> 
  	<a href="index.php?do=data.mutasi_masuk" class="text_pasar">MUTASI KENDARAAN</a> 
  	<a href="index.php?do=data.mutasi_keluar" class="text_pasar">NUMPANG UJI KENDARAAN</a> 
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
if ($do=="data.tenaga_penguji")
{ include "tenaga_penguji.inc.php"; }
elseif ($do=="data.legalitas")
{ include "legalitas.inc.php"; }
elseif ($do=="data.alat")
{ include "alat.inc.php"; }
elseif ($do=="data.mutasi_masuk")
{ include "mutasi_masuk.inc.php"; }
elseif ($do=="data.mutasi_keluar")
{ include "mutasi_keluar.inc.php"; }
elseif ($do=="data.usermanager")
{ include "usermanager.inc.php"; }
elseif ($do=="data.kendaraan_lulus_uji")
{ include "kendaraan_lulus_uji.inc.php"; }
elseif ($do=="data.kendaraan_wajib_uji")
{ 
include "kendaraan_wajib_uji.inc.php";
?>
<!--<iframe src="kendaraan_wajib_uji.inc.php" name="frame_menu" align="top" width="100%" height="100%" scrolling="yes" frameborder="0" marginwidth="" marginheight="10"></iframe>-->
<?php
}
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
