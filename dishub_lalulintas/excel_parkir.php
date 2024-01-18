<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$sekarang=date("Y-m-d");
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	
	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Data Parkir</title>
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
</style>
</head>
<body>
<center>
<a class="tdtitle_black">Data Parkir</a>
</center>
<br>
<table width="850" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
	<td width="50" rowspan="2" bgcolor="#CCCCCC" align="center">No.</td>
    <td width="250" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama Jalan</td>
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">Marka Batangan</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Kondisi</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Tahun Pengadaan</td>
	<td width="200" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Lokasi</td>            
  </tr>
  <tr class="tdtitle_black">
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">P (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">I (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_parkir where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select * from lal_parkir where nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select * from lal_parkir where kondisi like '%$key%' order by id desc"; }
  elseif ($kategori=="th_pengadaan")
  {  $strsql="select * from lal_parkir where th_pengadaan like '%$key%' order by id desc"; }
   elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_parkir where lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_parkir order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_i]; ?></td>
	<td height="25" align="center"><?php echo  $row[marka_p]+$row[marka_i]  ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[th_pengadaan]; ?></td>
	<td height="25" align="left"><?php echo $row[lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>