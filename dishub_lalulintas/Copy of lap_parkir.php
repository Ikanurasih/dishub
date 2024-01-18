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
<a class="tdtitle_black">Data Parkir</a>
</center>
<br>
<table border="1" cellspacing="0" cellpadding="1" width="1310">
  <tr class="tdtitle_black">
	<td width="50" rowspan="2" bgcolor="#CCCCCC" align="center">No.</td>
    <td width="170" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama Jalan</td>
    <td width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Dari</td>    
    <td width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Ke</td>             
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">Titik Parkir 1</td>             
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">Titik Parkir 2</td>             
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">Titik Parkir 3</td>             
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">Titik Parkir 4</td>             
  </tr>
  <tr class="tdtitle_black">
	<td width="110" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">P Marka (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">L Marka (m)</td>
	<td width="120" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">P Marka (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">L Marka (m)</td>
	<td width="120" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">P Marka (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">L Marka (m)</td>
	<td width="120" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">P Marka (m)</td>
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">L Marka (m)</td>
  </tr>
   <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.ke like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td height="25" align="left"><?php echo $row[tp1_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp1_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp1_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp2_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp2_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp2_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp3_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp3_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp3_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp4_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp4_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp4_lmarka]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>