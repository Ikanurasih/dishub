<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$sekarang=date("Y-m-d");

	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Juru Parkir</title>
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
<a class="tdtitle_black">Data Juru Parkir </a>
</center>
<br>
<table width="920" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
    <td width="40" height="25" align="center">No.</td>
    <td width="150" height="25" align="center">Nama Jukir</td>
    <td width="140" height="25" align="center">Tempat, Tgl. Lahir</td>    
    <td width="200" height="25" align="center">Alamat</td>       
    <td width="60" height="25" align="center">Jenis <br>
    Kelamin</span></td>       
    <td width="160" height="25" align="center">Titik Parkir</td>       
    <td width="160" height="25" align="center">Alamat Lokasi</td>       
  </tr>
  <?php
  if ($kategori=="nama_jukir")
  {  $strsql="select * from lal_jukir where nama_jukir like '%$key%' order by id desc"; }
  elseif ($kategori=="titik_parkir")
  {  $strsql="select * from lal_jukir where titik_parkir like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_jukir where lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_jukir order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jukir]; ?></td>
    <td height="25" align="left"><?php echo $row[tmp_lahir]; ?>, <?php
	  $temp=explode("-",$row[tgl_lahir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[jk]; ?></td>
    <td height="25" align="left"><?php echo $row[titik_parkir]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>