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
<title>DISHUB MADIUN [SIM TERMINAL PENUMPANG]</title>
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
  	<a href="index.php?do=data.parkir_au" class="text_pasar">KAPASITAS PARKIR ANGKUTAN UMUM</a> 
  	<a href="index.php?do=data.parkir" class="text_pasar">KENDARAAN PRIBADI PARKIR</a> 
  	<a href="index.php?do=data.kios" class="text_pasar">KIOS, KAMAR MANDI, WC</a> 
  	<a href="index.php?do=data.bus" class="text_pasar">AGEN BUS</a> <br><br>
  	<a href="index.php?do=data.terminal" class="text_pasar">FASILITAS TERMINAL</a> 
  	<a href="index.php?do=data.time" class="text_pasar">TIME TABLE BUS</a> 
  	<a href="index.php?do=data.penumpang" class="text_pasar">DATA PENUMPANG</a> 
  	<a href="index.php?do=data.tarif" class="text_pasar">TARIF ANGKUTAN AKAP &amp; AKDP </a> 
	<a href="index.php?do=data.tarif_taksi" class="text_pasar">TARIF ANGKOT DAN TAKSI</a> 
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
if ($do=="data.usermanager")
{ include "usermanager.inc.php"; }
elseif ($do=="data.legalitas")
{ include "legalitas.inc.php"; }
elseif ($do=="data.parkir_au")
{ include "parkir_au.inc.php"; }
elseif ($do=="data.parkir")
{ include "parkir.inc.php"; }
elseif ($do=="data.bus")
{ include "bus.inc.php"; }
elseif ($do=="data.terminal")
{ include "terminal.inc.php"; }
elseif ($do=="data.tarif")
{ include "tarif.inc.php"; }
elseif ($do=="data.tarif_taksi")
{ include "tarif_taksi.inc.php"; }
elseif ($do=="data.time")
{ include "time.inc.php"; }
elseif ($do=="data.kios")
{ include "kios.inc.php"; }
elseif ($do=="data.penumpang")
{ include "penumpang.inc.php"; }
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
