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
<title>DISHUB MADIUN MODUL ANGKUTAN BARANG</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Lokasi Gudang di Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1000" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="50" align="center">No.</td>
    <td colspan="2" height="25" align="center">Nama</td> 
    <td colspan="2" height="25" align="center">Alamat</td>                                        
    <td colspan="2" height="25" align="center" rowspan="2" width="150">Luas Gudang</td>                                        
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="180" height="25" align="center">Gudang</td>              
    <td width="180" height="25" align="center">Pemilik</td>
    <td width="220" height="25" align="center">Gudang</td>
    <td width="220" height="25" align="center">Pemilik</td>
  </tr>
  <?php
  if ($kategori=="nama_gudang")
  {  $strsql="select * from bar_lok_gudang where nama_gudang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_pemilik")
  {  $strsql="select * from bar_lok_gudang where nama_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pemilik")
  {  $strsql="select * from bar_lok_gudang where alamat_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_gudang")
  {  $strsql="select * from bar_lok_gudang where alamat_gudang like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_lok_gudang order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>	
    <td height="25" align="left"><?php echo $row[nama_gudang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_gudang]; ?></td>
	<td height="25" align="left"><?php echo $row[alamat_pemilik]; ?></td>
	<td height="25" align="center"><?php echo $row[luas_gudang]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>