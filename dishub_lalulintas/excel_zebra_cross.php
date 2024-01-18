<?php
include "global/config.php";

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
<title>Laporan Data Apill</title>
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
<a class="tdtitle_black">Data Zebra Cross </a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="1220" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" rowspan="3" align="center">No.</td>
    <td width="170" rowspan="3" align="center">Nama Simpang </td>
    <td width="170" rowspan="3" align="center">Nama Jalan </td>
    <td height="25" colspan="4" align="center">Batangan</td>
    <td height="25" colspan="6" align="center">Stop Line</td>
    <td width="80" rowspan="3" align="center">Tahun Pengadaan</td>
    <td width="80" rowspan="3" align="center">Kondisi</td>
    <td width="170" rowspan="3" align="center">Lokasi</td>
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" rowspan="2" align="center">Jumlah</td>
    <td width="50" rowspan="2" align="center">Panjang (m)  </td>
    <td width="50" rowspan="2" align="center">Lebar (m) </td>
    <td width="50" rowspan="2" align="center">Total</td>
    <td height="25" colspan="3" align="center">Tegak</td>
    <td height="25" colspan="3" align="center">Mendatar</td>
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" height="25" align="center">Panjang (m) </td>
    <td width="50" height="25" align="center">Lebar (m) </td>
    <td width="50" height="25" align="center">Total</td>
    <td width="50" height="25" align="center">Panjang (m) </td>
    <td width="50" height="25" align="center">Lebar (m) </td>
    <td width="50" height="25" align="center">Total</td>
  </tr>
  <?php
  if ($kategori=="nama_simpang")
  {  $strsql="select * from lal_zebra_cross where nama_simpang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_jalan")
  {  $strsql="select * from lal_zebra_cross where nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_zebra_cross where lokasi like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun_pengadaan")
  {  $strsql="select * from lal_zebra_cross where tahun_pengadaan like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select * from lal_zebra_cross where kondisi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_zebra_cross order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[jumlah_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[total_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[total_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[total_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>