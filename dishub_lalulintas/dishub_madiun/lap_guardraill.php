<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$sekarang=date("Y-m-d");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LAPORAN GUARDRAILL</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Guardraill</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="900">
  <tr class="tdtitle_black">
  	<td width="50" align="center" bgcolor="#CCCCCC">No.</td>
    <td width="200" height="25" align="center" bgcolor="#CCCCCC">Nama Jalan</td>
    <td width="200" height="25" align="center" bgcolor="#CCCCCC">Dari</td>
    <td width="200" height="25" align="center" bgcolor="#CCCCCC">Ke</td>
    <td width="100" height="25" align="center" bgcolor="#CCCCCC">Panjang Guardraill (m)</td>
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">Thn. Pengadaan</td>
    <td width="200" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
  </tr>
  <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and jumlah like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  
	  if ($key=="baik" or $key=="Baik")
	  { $key="1"; }
	  elseif ($key=="Rusak" or $key=="rusak") 
	  { $key="2";}
	  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and kondisi like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="tahun")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and thn_pengadaan like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and lokasi like '%$key%' && tipe='2' order by id desc"; }  
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and tipe='2' order by id desc"; }
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
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
    <td height="25" align="center">
	<?php 
		if($row[kondisi]=='1') { echo "Baik"; }
		elseif($row[kondisi]=='2'){ echo "Rusak"; } 
	?>
	</td>
    <td height="25" align="center"><?php echo $row[thn_pengadaan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>