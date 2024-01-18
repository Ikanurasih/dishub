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
<a class="tdtitle_black">Data Apill</a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="1220" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" align="center">No.</td>
    <td width="150" height="25" align="center">Nama Simpang </td>
    <td width="150" height="25" align="center">Nama Jalan </td>
    <td width="150" height="25" align="center">Jenis Lampu </td>
    <td width="50" height="25" align="center">Jumlah Warna </td>
    <td width="100" height="25" align="center">Jumlah <br>
    Dop / Neon </td>
    <td width="100" height="25" align="center">Kondisi</td>
    <td width="80" height="25" align="center">Tahun Pengadaan </td>
    <td width="150" height="25" align="center">Lokasi</td>
    <td width="80" height="25" align="center">Patok Pengaman</td>
    <td width="80" height="25" align="center">Jumlah</td>
    <td width="80" height="25" align="center">Kondisi</td>
  </tr>
  <?php
  if ($kategori=="nama_simpang" and !empty($key))
  {  $strsql="select * from lal_apill_baru where nama_simpang like '%$key%' order by id desc";   }
  else
  {  $strsql="select * from lal_apill_baru order by id desc";   }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_lampu]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah_warna]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah_dop_neon]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi1]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[patok_pengaman]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi2]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<?php include "footer.inc.php"; ?>
</body>
</html>