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
	$cari=$_REQUEST['cari'];
	
	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LALU LINTAS</title>
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
<a class="tdtitle_black">Data Perlengkapan Jalan Lain </a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="1130" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" align="center">No.</td>
    <td width="150" height="25" align="center">Nama Jalan</td>
    <td width="150" height="25" align="center">Dari</td>
    <td width="150" height="25" align="center">Ke</td>
    <td width="120" height="25" align="center">Jenis <br>
    Perlengkapan Jalan </td>
    <td width="80" height="25" align="center">Jumlah</td>
    <td width="80" height="25" align="center">Kondisi</td>
    <td width="100" height="25" align="center">Tahun Pengadaan</td>
    <td width="150" height="25" align="center">Lokasi</td>
  </tr>
   <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_perlengkapan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and jenis_perlengkapan like '%$key%' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and jumlah like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and kondisi like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun_pengadaan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and tahun_pengadaan like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[dari]; ?></td>
    <td height="25" align="left"><?php echo $row[ke]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_perlengkapan]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>