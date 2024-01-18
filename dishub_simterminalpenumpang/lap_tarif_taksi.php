<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$sekarang=date("Y-m-d");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Tarif Angkot Dan Taksi di Kota Madiun</a>
</center>
<br>
 <table width="560" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">No.</td> 	
    <td   width="120" height="25" align="center" bgcolor="#CCCCCC">Jenis Angkutan</td> 
	<td   width="120" height="25" align="center" bgcolor="#CCCCCC">Jenis Kendaraan </td>                                        
    <td   width="150" height="25" align="center" bgcolor="#CCCCCC">Jenis Tarif</td>                                                                             
    <td   width="120" height="25" align="center" bgcolor="#CCCCCC">Tarif</td>
   </tr>
  <?php
  if ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_tarif_taksi where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_angkutan")
  {  $strsql="select * from ter_tarif_taksi where jenis_angkutan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_tarif")
  {  $strsql="select * from ter_tarif_taksi where jenis_tarif like '%$key%' order by id desc"; }
  elseif ($kategori=="tarif")
  {  $strsql="select * from ter_tarif_taksi where tarif like '%$key%' order by id desc"; }
  elseif ($kategori=="dasar_hukum")
  {  $strsql="select * from ter_tarif_taksi where dasar_hukum like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_tarif_taksi order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_tarif]; ?></td>
	<td height="25" align="right"><?php echo  null($row[tarif]); ?></td>
   </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>