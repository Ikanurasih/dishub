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
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LALU LINTAS</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Rambu </a>
</center>
<br>
<?php
if (!empty($key))
{ $strsql_h="select * from lal_pangkal where nama like '%$key%' order by nama asc"; }
else
{ $strsql_h="select distinct b.id, b.nama, b.pangkal, b.ujung, b.status, b.kelas from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id order by b.nama"; }
$hasil_h=mysql_query($strsql_h);
while($row_h=mysql_fetch_array($hasil_h))
{
$NO=0;

  if ($kategori=="nama_jalan")
  {  $strsql="select a.*, b.nama, b.pangkal, b.ujung from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and a.id_pangkal='$row_h[id]' and b.nama like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*, b.nama, b.pangkal, b.ujung from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and a.id_pangkal='$row_h[id]' order by id desc"; }
?>
<table border="0" align="center" cellpadding="0" cellspacing="0" width="780">
<tr>
	<td width="150" height="25" class="tdtitle_black">Nama Jalan </td>
	<td width="10" class="tdtitle_black">:</td>
	<td class="text" width="260"><?php echo $row_h[nama]; ?></td>
	<td width="310">&nbsp;</td>
	<td class="tdtitle_black" width="150">Rambu Petunjuk </td>
	<td class="tdtitle_black" width="10">:</td>
	<td width="100" class="text">
	<?php
	$strsql_rambu1="select count(id) as total from lal_rambu where jenis_rambu='PETUNJUK' and id_pangkal='$row_h[id]'";
	$hasil_rambu1=mysql_query($strsql_rambu1);
	$row1=mysql_fetch_array($hasil_rambu1);
	echo $row1[total];
	?>
	</td>
</tr>
<tr>
<td height="25" class="tdtitle_black">Pangkal</td>
<td class="tdtitle_black">:</td>
<td class="text"><?php echo $row_h[pangkal]; ?></td>
<td>&nbsp;</td>
<td class="tdtitle_black">Rambu Larangan </td>
<td class="tdtitle_black">:</td>
	<td width="100" class="text">
	<?php
	$strsql_rambu2="select count(id) as total from lal_rambu where jenis_rambu='LARANGAN' and id_pangkal='$row_h[id]'";
	$hasil_rambu2=mysql_query($strsql_rambu2);
	$row2=mysql_fetch_array($hasil_rambu2);
	echo $row2[total];
	?>
	</td>
</tr>
<tr>
  <td height="25" class="tdtitle_black">Ujung</td>
  <td class="tdtitle_black">:</td>
  <td class="text"><?php echo $row_h[ujung]; ?></td>
<td>&nbsp;</td>
<td class="tdtitle_black">Rambu Perintah </td>
<td class="tdtitle_black">:</td>
	<td width="100" class="text">
	<?php
	$strsql_rambu3="select count(id) as total from lal_rambu where jenis_rambu='PERINTAH' and id_pangkal='$row_h[id]'";
	$hasil_rambu3=mysql_query($strsql_rambu3);
	$row3=mysql_fetch_array($hasil_rambu3);
	echo $row3[total];
	?>
	</td>
</tr>
<tr>
  <td height="25" class="tdtitle_black">Status</td>
  <td class="tdtitle_black">:</td>
  <td class="text"><?php echo $row_h[status]; ?></td>
<td>&nbsp;</td>
<td class="tdtitle_black">Rambu Peringatan </td>
<td class="tdtitle_black">:</td>
	<td width="100" class="text">
	<?php
	$strsql_rambu4="select count(id) as total from lal_rambu where jenis_rambu='PERINGATAN' and id_pangkal='$row_h[id]'";
	$hasil_rambu4=mysql_query($strsql_rambu4);
	$row4=mysql_fetch_array($hasil_rambu4);
	echo $row4[total];
	?>
	</td></tr>
<tr>
  <td height="25" class="tdtitle_black">Kelas</td>
  <td class="tdtitle_black">:</td>
  <td class="text"><?php echo $row_h[kelas]; ?></td>
 <td>&nbsp;</td>
<td class="tdtitle_black">Total</td>
<td class="tdtitle_black">:</td>
<td class="text"><?php echo $row1[total]+$row2[total]+$row3[total]+$row4[total]; ?></td>
</tr>
</table>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="780">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
    <td width="50" height="25" align="center">No.</td>
    <td width="90" height="25" align="center">Jenis Rambu</td>
    <td width="50" height="25" align="center">No. Rambu</td>
    <td width="50" height="25" align="center">No. Tabel</td>
    <td width="60" height="25" align="center">Posisi</td>    
    <td width="100" height="25" align="center">Spesifikasi</td>     
    <td width="50" height="25" align="center">Kondisi</td>     
    <td width="130" height="25" align="center">Lokasi</td>     
    <td width="200" height="25" align="center">Gambar</td>     
  </tr>
   <?php 
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td align="center" width="50"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_tabel]; ?></td>
    <td height="25" align="center"><?php echo $row[posisi]; ?></td>
    <td height="25" align="center"><?php echo $row[spesifikasi]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center">	<?php
	if ($row[gambar]<>'')
	{
	echo "<img src='files/$row[gambar]' height='48'>"; 
	}
	else
	{ 
	echo "&nbsp;"; 
	}
	?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php
}
?>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>