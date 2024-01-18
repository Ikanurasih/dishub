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
<title>DISHUB MADIUN [ANGKUTAN]</title>
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
    <a href="index.php?do=data.pemilik" class="text_pasar">MASTER PEMILIK</a> 
  	<a href="index.php?do=data.kendaraan" class="text_pasar">MASTER KENDARAAN</a>
	<a href="index.php?do=data.trayek" class="text_pasar">MASTER TRAYEK</a>
	<a href="index.php?do=data.pengemudi" class="text_pasar">DATA PENGEMUDI</a>
	<!--<a href="index.php?do=data.jenis_kendaraan" class="text_pasar">MASTER JENIS KENDARAAN</a>-->
  	<a href="index.php?do=data.kendaraan_bermotor_umum"  class="text_pasar">KENDARAAN BERMOTOR UMUM</a>
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
<tr>
  <td align="center" height="40">
  <a href="index.php?do=data.tukar_lokasi"  class="text_pasar">TUKAR LOKASI WILAYAH OPERASI</a>  
  <a href="index.php?do=data.peremajaan"  class="text_pasar">PEREMAJAAN ANGKUTAN PENUMPANG UMUM</a> 
  <a href="index.php?do=data.rute"  class="text_pasar">RUTE ANGKUTAN UMUM</a>  
  </td>
  </tr>
 <tr>
  <td height="30" align="center" valign="top">
  <a href="index.php?do=data.pengurangan"  class="text_pasar">PENGURANGAN KENDARAAN / TRAYEK</a>
  <a href="index.php?do=data.penambahan"  class="text_pasar">PENAMBAHAN KENDARAAN / TRAYEK</a> 
  <a href="index.php?do=data.izin_operasi"  class="text_pasar">IZIN OPERASI</a>
  <a href="index.php?do=data.izin_trayek"  class="text_pasar">IZIN TRAYEK</a>
  <a href="index.php?do=data.izin_usaha"  class="text_pasar">IZIN USAHA</a>
  </td>
  </tr>
<tr>
  <td align="center">
  <a href="index.php?do=data.ruas_jalan" class="text_pasar">ANGKUTAN UMUM DI RUAS JALAN</a>
  <a href="index.php?do=data.ojek" class="text_pasar">KENDARAAN TIDAK BERMOTOR, OJEK, BENTOR</a> 
  <a href="index.php?do=data.orang" class="text_pasar">KEBUTUHAN ANGKUTAN ORANG</a>
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
if ($do=="data.ojek")
{ include "ojek.inc.php"; }
elseif ($do=="data.pemilik")
{ include "master_pemilik_perusahaan.inc.php"; }
elseif ($do=="data.kendaraan")
{ include "master_kendaraan.inc.php"; }
elseif ($do=="data.trayek")
{ include "master_trayek.inc.php"; }
elseif ($do=="data.kendaraan_bermotor_umum")
{ include "kendaraan_bermotor_umum.inc.php"; }
elseif ($do=="data.peremajaan")
{ include "peremajaan.inc.php"; }
elseif ($do=="data.pengemudi")
{ include "master_pengemudi.inc.php"; }
elseif ($do=="data.jenis_kendaraan")
{ include "master_jenis_kendaraan.inc.php"; }
elseif ($do=="data.pengurangan")
{ include "pengurangan.inc.php"; }
elseif ($do=="data.penambahan")
{ include "penambahan.inc.php"; }
elseif ($do=="data.ruas_jalan")
{ include "ruas_jalan.inc.php"; }
elseif ($do=="data.orang")
{ include "orang.inc.php"; }
elseif ($do=="data.usermanager")
{ include "usermanager.inc.php"; }
elseif ($do=="data.tukar_lokasi")
{ include "tukar_lokasi.inc.php"; }
elseif ($do=="data.rute")
{ include "rute.inc.php"; }
elseif ($do=="data.izin_operasi")
{ include "izin_operasi.inc.php"; }
elseif ($do=="data.izin_trayek")
{ include "izin_trayek.inc.php"; }
elseif ($do=="data.izin_usaha")
{ include "izin_usaha.inc.php"; }
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
