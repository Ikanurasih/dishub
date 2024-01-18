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
<title>DISHUB MADIUN [LALU LINTAS]</title>
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
  	<a href="index.php?do=data.apill" class="text_pasar">APILL</a> 
  	<a href="index.php?do=data.cermin_tikungan" class="text_pasar">CERMIN TIKUNGAN</a>
	<a href="index.php?do=data.guardraill" class="text_pasar">GUARDRAILL</a> 
	<a href="index.php?do=data.halte" class="text_pasar">HALTE</a>
  	<a href="index.php?do=data.jukir" class="text_pasar">JURU PARKIR</a>
 	<a href="index.php?do=data.kios_shelter" class="text_pasar">KIOS SHELTER</a>
	<a href="index.php?do=data.marka" class="text_pasar">MARKA</a>
  	<a href="index.php?do=jalan" class="text_pasar">MASTER JALAN</a>
  	<a href="index.php?do=data.simpang" class="text_pasar">MASTER SIMPANG</a>
  	<a href="index.php?do=data.master_pangkal" class="text_pasar">MASTER PANGKAL</a>
  	<a href="index.php?do=data.parkir" class="text_pasar">PARKIR</a>  </td>
  <td width="10%" rowspan="3" align="center"><img src="images/user_manager.png" width="48" height="48"><br> 
  <a href="global/logout.php" class="text_pasar">LogOut</a></td>
</tr>
<tr>
  <td height="15"></td>
  </tr>
<tr>
  <td align="center">
   	<a href="index.php?do=data.paku_jalan"  class="text_pasar">PAKU JALAN</a>
  	<a href="index.php?do=data.patok_pengaman" class="text_pasar">PATOK PENGAMAN</a>
  	<a href="index.php?do=data.pelanggaran" class="text_pasar">PELANGGARAN LALIN</a>
	<a href="index.php?do=data.peraturan" class="text_pasar">PERATURAN</a> 
	<a href="index.php?do=data.rambu" class="text_pasar">RAMBU</a> 
	<a href="index.php?do=data.ruas_jalan" class="text_pasar">RUAS JALAN</a> 
	<a href="index.php?do=data.simpang_apill" class="text_pasar">SIMPANG APILL</a>
	<a href="index.php?do=data.simpang_prioritas" class="text_pasar">SIMPANG PRIORITAS</a>  
	<?php
	if ($_SESSION['tipe']=="1")
	{
	?>
	<a href="index.php?do=data.usermanager" class="text_pasar">USER MANAGER</a>  
	<?php
	}
	?>
	</td>
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
if ($do=="data.peraturan")
{ include "peraturan.inc.php"; }
elseif ($do=="data.parkir")
{ include "parkir.inc.php"; }
elseif ($do=="data.jukir")
{ include "jukir.inc.php"; }
elseif ($do=="jalan")
{ include "jalan.inc.php"; }
elseif ($do=="data.paku_jalan")
{ include "paku_jalan.inc.php"; }
elseif ($do=="data.patok_pengaman")
{ include "patok_pengaman.inc.php"; }
elseif ($do=="data.kios_shelter")
{ include "kios_shelter.inc.php"; }
elseif ($do=="data.cermin_tikungan")
{ include "cermin_tikungan.inc.php"; }
elseif ($do=="data.guardraill")
{ include "guardraill.inc.php"; }
elseif ($do=="data.halte")
{ include "halte.inc.php"; }
elseif ($do=="data.pelanggaran")
{ include "pelanggaran.inc.php"; }
elseif ($do=="data.pakir")
{ include "parkir.inc.php"; }
elseif ($do=="data.apill")
{ include "apill.inc.php"; }
elseif ($do=="data.marka")
{ include "marka.inc.php"; }
elseif ($do=="data.simpang_prioritas")
{ include "simpang_prioritas.inc.php"; }
elseif ($do=="data.simpang")
{ include "master_simpang.inc.php"; }
elseif ($do=="data.ruas_jalan")
{ include "ruas_jalan.inc.php"; }
elseif ($do=="data.master_pangkal")
{ include "master_pangkal.inc.php"; }
elseif ($do=="data.simpang_apill")
{ include "simpang_apill.inc.php"; }
elseif ($do=="data.rambu")
{ include "rambu.inc.php"; }
elseif ($do=="data.usermanager")
{ include "usermanager.inc.php"; }
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
