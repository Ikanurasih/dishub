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
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Legalitas</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="880">
  <tr class="tdtitle_black">
  	<td width="50" align="center" bgcolor="#CCCCCC">No.</td>
    <td width="200" height="25" align="center" bgcolor="#CCCCCC">Jenis Peraturan</td>
    <td width="400" height="25" align="center" bgcolor="#CCCCCC">Judul Peraturan </td>
    <td width="150" height="25" align="center" bgcolor="#CCCCCC">Nomor</td>
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">Tahun</td>
  </tr>
  <?php
  if ($kategori=="jenis_peraturan")
  {  $strsql="select * from ter_legalitas where jenis_peraturan like '%$key%' order by id desc"; }
  elseif ($kategori=="judul_peraturan")
  {  $strsql="select * from ter_legalitas where judul_peraturan like '%$key%' order by id desc"; }
  elseif ($kategori=="nomor")
  {  $strsql="select * from ter_legalitas where nomor like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun")
  {  $strsql="select * from ter_legalitas where tahun like '%$key%' order by id desc"; } 
  else
  {  $strsql="select * from ter_legalitas order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_peraturan]; ?></td>
    <td height="25" align="left"><?php echo $row[judul_peraturan]; ?></td>
    <td height="25" align="center"><?php echo $row[nomor]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>