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
<title>Laporan Data Simpang Prioritas</title>
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
<a class="tdtitle_black">Data Simpang Prioritas</a>
</center>
<br>
<table border="1" cellspacing="0" cellpadding="1" width="1270" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" rowspan="3"><div align="center">No.</div></td>
    <td width="100" rowspan="3" align="center">Nama Simpang Prioritas</td>
    <td width="100" rowspan="3" align="center">Nama Ruas Jalan </td>
    <td colspan="5" align="center">Jalan Mayor </td>
    <td colspan="9" align="center">Jalan Minor </td>
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="100" rowspan="2" align="center">Ruas Jalan </td>
    <td colspan="4" align="center">Rambu Prioritas </td>
    <td width="100" rowspan="2" align="center">Ruas Jalan </td>
    <td colspan="4" align="center">Marka Prioritas </td>
    <td colspan="4" align="center">Rambu Prioritas </td>
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="80" align="center">No. Tabel</td>
    <td width="80" align="center">No. Rambu</td>
    <td width="80" align="center">Tahun Pengadaan</td>
    <td width="80" align="center">Kondisi</td>
    <td width="50" align="center">P (m)</td>
    <td width="50" align="center">L (m)</td>
    <td width="80" align="center">Tahun Pengadaan</td>
    <td width="80" align="center">Kondisi</td>
    <td width="50" align="center">No. Tabel</td>
    <td width="50" align="center">No. Rambu</td>
    <td width="80" align="center">Tahun Pengadaan</td>
    <td width="80" align="center">Kondisi</td>
  </tr>
    <?php
  if ($kategori=="nama_simpang" and !empty($key))
  { $strsql="select * from lal_simprio where nama_simpang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_jalan" and !empty($key))
  { $strsql="select * from lal_simprio where nama_ruas_jalan like '%$key%' order by id desc"; }
  else
  { $strsql="select * from lal_simprio order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
     <td align="center"><?php echo $NO."."; ?></td>
     <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
     <td align="left"><?php echo $row[nama_ruas_jalan]; ?></td>
     <td align="left"><?php echo $row[ruas_jalan_mayor]; ?></td>
     <td align="center"><?php echo $row[no_tabel_mayor]; ?></td>
     <td align="center"><?php echo $row[no_rambu_mayor]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_mayor]; ?></td>
     <td align="center"><?php echo $row[kondisi_mayor]; ?></td>
     <td align="left"><?php echo $row[ruas_jalan_minor]; ?></td>
     <td align="center"><?php echo $row[p_minor]; ?></td>
     <td align="center"><?php echo $row[l_minor]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_minor]; ?></td>
     <td align="center"><?php echo $row[kondisi_marka]; ?></td>
     <td align="center"><?php echo $row[no_tabel_rambu]; ?></td>
     <td align="center"><?php echo $row[no_rambu]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_rambu]; ?></td>
     <td align="center"><?php echo $row[kondisi_rambu]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>