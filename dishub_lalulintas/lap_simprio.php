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
<a class="tdtitle_black">Data Simpang Prioritas</a>
</center>
<br>
<?php
if (!empty($key))
{ $strsql_h="select * from lal_jalan where nama_jalan like '%$key%' order by nama_jalan asc"; }
else
{ $strsql_h="select distinct b.id, b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id order by b.nama_jalan"; }
$hasil_h=mysql_query($strsql_h);
//cek jika data tidak ditemukan tampilkan pesan
$cek=mysql_num_rows($hasil_h);
if ($cek==0)
{
?>
<table border="0" align="center" cellpadding="1" cellspacing="1" width="400">
<tr>
<td height="30" class="tdtitle_black" bgcolor="#CCCCCC">&nbsp;&nbsp;:: Informasi ::</td>
</tr>
<tr>
<td height="100" class="tdtitle_black" align="left" bgcolor="#efefef"><img src="images/cancel_48.png" hspace="10" vspace="0" align="left"><br>Data Tidak Ditemukan, <br>Silahkan tentukan Nama Jalan terlebih dahulu.</td>
</tr>
</table>
<?php
}
else
{
while($row_h=mysql_fetch_array($hasil_h))
{
$NO=0;
?>
<table border="0" align="center" cellpadding="0" cellspacing="0" width="1110">
<tr>
<td width="90" height="25" class="tdtitle_black">Nama Jalan</td>
<td width="10" class="tdtitle_black">:</td>
<td width="1200" class="text"><?php echo $row_h[nama_jalan]; ?></td>
</tr>
<tr>
<td width="90" height="25" class="tdtitle_black">Dari</td>
<td width="10" class="tdtitle_black">:</td>
<td width="1200" class="text"><?php echo $row_h[dari]; ?></td>
</tr>
<tr>
<td width="90" height="25" class="tdtitle_black">Ke</td>
<td width="10" class="tdtitle_black">:</td>
<td width="1200" class="text"><?php echo $row_h[ke]; ?></td>
</tr>
</table>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1112">
  <tr class="tdtitle_black">
	<td rowspan="3" bgcolor="#cccccc" width="50" align="center">No.</td>
	<td rowspan="3" width="200" bgcolor="#cccccc" height="25" align="center">Nama Simpang Prioritas</td>
    <td rowspan="2" colspan="3" bgcolor="#cccccc" height="25" align="center">Jalan Mayor</td>   
    <td colspan="5" bgcolor="#cccccc" height="25" align="center">Jalan Minor</td>   
  </tr>
  <tr class="tdtitle_black">
	<td rowspan="2" width="130" bgcolor="#cccccc" height="25" align="center">Ruas Jalan</td>
	<td colspan="2" width="100" bgcolor="#cccccc" height="25" align="center">Marka Prioritas</td>
	<td rowspan="2" width="100" bgcolor="#cccccc" height="25" align="center">Rambu Prioritas</td>
	<td rowspan="2" width="100" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
  </tr>
  <tr class="tdtitle_black">
	<td width="130" bgcolor="#cccccc" height="25" align="center">Ruas Jalan</td>
	<td width="100" bgcolor="#cccccc" height="25" align="center">Status Jalan</td>
	<td width="100" bgcolor="#cccccc" height="25" align="center">Rambu Prioritas</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">L (cm)</td>
  </tr>
   <?php 
  $strsql="select a.* 
  from lal_simpang_prioritas a
  where a.id_jalan='$row_h[id]' order by nama_simpang asc";
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
	<td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[jmayor_ruas]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[jmayor_status]=="1") {echo "Kota";}
		if($row[jmayor_status]=="2") {echo "Propinsi";}
		if($row[jmayor_status]=="3") {echo "Nasional";}
	?>	</td>
	<td height="25" align="center">
	<?php
		if($row[jmayor_rambu]=="1") {echo "Ada";}
		if($row[jmayor_rambu]=="2") {echo "Tidak Ada";}
	?>	</td>
	<td height="25" align="left"><?php echo $row[jminor_ruas]; ?></td>
	<td height="25" align="center"><?php echo $row[jminor_marka_p]; ?></td>
	<td height="25" align="center"><?php echo $row[jminor_marka_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[jminor_rambu]=="1") {echo "Ada";}
		if($row[jminor_rambu]=="2") {echo "Tidak Ada";}
	?>	</td>
	<td height="25" align="center">
	<?php
		if($row[jminor_kondisi]=="1") {echo "Baik";}
		if($row[jminor_kondisi]=="2") {echo "Pudar";}
	?>	</td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php
}
}
?>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>