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
<title>ANGKUTAN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Kendaraan Tidak Bermotor, Ojek, Bentor di Kota Madiun </a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="950" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
    <td height="25" align="center" width="50" rowspan="2">No.</td>
    <td height="25" colspan="2" align="center">Nama</td>
    <td height="25" colspan="2" align="center">Alamat</td>
    <td width="60" rowspan="2" align="center">Jenis Kendaraan </td>
    <td height="25" colspan="2" align="center">Lokasi Mangkal / Ngetem </td>
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="140" height="25" align="center">Pemilik</td>
    <td width="140" height="25" align="center">Pengemudi</td>
    <td width="170" height="25" align="center">Pemilik</td>
    <td width="170" height="25" align="center">Pengemudi</td>
    <td width="140" height="25" align="center">Jalan </td>
    <td width="140" height="25" align="center">Tempat </td>
  </tr>
    <?php
  if ($kategori=="nama_pemilik")
  {  $strsql="select * from ang_ojek where nama_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_pengemudi")
  {  $strsql="select * from ang_ojek where nama_pengemudi like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pemilik")
  {  $strsql="select * from ang_ojek where alamat_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pengemudi")
  {  $strsql="select * from ang_ojek where alamat_pengemudi like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ang_ojek where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jalan_mangkal")
  {  $strsql="select * from ang_ojek where lokasi_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="tempat_mangkal")
  {  $strsql="select * from ang_ojek where lokasi_tempat like '%$key%' order by id desc"; }
  else {  $strsql="select * from ang_ojek order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_pengemudi]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_pengemudi]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi_tempat]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>