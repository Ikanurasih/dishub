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
	
		Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
<style>
.tdtitle_black
{
	font-family:tahoma;
	font-size: 11px;
	color: #000000;
	font-weight: bold;
}
.text
{
	font-family:tahoma;
	font-size: 11px;
	color: #000000;
}
</style></script>
</head>
<body>
<center>
<a class="tdtitle_black">Data Tarif Angkutan AKAP &amp; AKDP di Kota Madiun</a>
</center>
<br>
 <table width="850" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
    <td   width="50" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No.</td> 
	<td   width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenis Angkutan</td> 
	<td   width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenis Kendaraan </td>                                        
    <td   width="180" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jurusan</td>                                        
    <td   width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jarak</td>                                        
    <td height="25"   colspan="2" align="center" bgcolor="#CCCCCC">Tarif Penumpang</td>
	<td height="25"   colspan="2" align="center" bgcolor="#CCCCCC">Tarif Angkutan</td>                                 
   </tr>
   <tr class="tdtitle_black">
   	<td   width="80" height="25" align="center" bgcolor="#CCCCCC">Atas</td> 
	<td   width="80" height="25" align="center" bgcolor="#CCCCCC">Bawah </td>                                        
    <td   width="80" height="25" align="center" bgcolor="#CCCCCC">Atas</td> 
	<td   width="80" height="25" align="center" bgcolor="#CCCCCC">Bawah </td>   
   </tr>
  <?php
  if ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_tarif where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_angkutan")
  {  $strsql="select * from ter_tarif where jenis_angkutan like '%$key%' order by id desc"; }
  elseif ($kategori=="jarak")
  {  $strsql="select * from ter_tarif where jarak like '%$key%' order by id desc"; }
  elseif ($kategori=="jurusan")
  {  $strsql="select * from ter_tarif where jurusan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_tarif order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">  
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[jarak]; ?></td>
    <td height="25" align="right"><?php echo null($row[penumpang_atas]); ?></td>
	<td height="25" align="right"><?php echo null($row[penumpang_bawah]); ?></td>
	<td height="25" align="right"><?php echo null($row[angkutan_atas]); ?></td>
	<td height="25" align="right"><?php echo null($row[angkutan_bawah]); ?></td>
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>