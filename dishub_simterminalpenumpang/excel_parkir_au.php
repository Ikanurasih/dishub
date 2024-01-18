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
</style></head>
<body>
<center>
<a class="tdtitle_black">Data Kapasitas Parkir Angkutan Umum di Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="550" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td   width="50" align="center">No.</td>
    <td   width="250" height="25" align="center">Jenis Angkutan Umum </td> 
    <td   width="250" height="25" align="center">Kapasitas Parkir (Kendaraan) </td>     
	<td   width="250" height="25" align="center">Jenis Kendaraan </td>                                        
   </tr>
   <?php
  if ($kategori=="jenis_au")
  {  $strsql="select * from ter_parkir_au where jenis_au like '%$key%' order by id desc"; }
  elseif ($kategori=="kapasitas")
  {  $strsql="select * from ter_parkir_au where kapasitas_parkir like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_parkir_au where jenis_kendaraan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_parkir_au order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
	<td align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_au]; ?></td>
    <td height="25" align="center"><?php echo $row[kapasitas_parkir]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>