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
<a class="tdtitle_black">Data Apill</a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="1300" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="50" align="center">No.</td>
    <td rowspan="2" width="180" height="25" align="center">Nama Jalan<br></td>
    <td rowspan="2" width="100" height="25" align="center">Dari</td>    
    <td rowspan="2" width="100" height="25" align="center">Ke</td>       
    <td colspan="4" height="25" align="center">1 Warna</td>      
    <td colspan="4" height="25" align="center">2 Warna</td>      
    <td colspan="4" height="25" align="center">3 Warna</td>      
  </tr>
  <tr class="tdtitle_black">
	<td width="60" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>
	<td width="70" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Thn. Pengadaan</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="60" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>
	<td width="70" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Thn. Pengadaan</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
	<td width="60" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>
	<td width="70" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Thn. Pengadaan</td>
	<td width="80" height="25" align="center" bgcolor="#CCCCCC">Lokasi</td>
  </tr>
   <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td height="25" align="center"><?php echo $row[warna1_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna1_kondisi]=="1") {echo "Baik";}
		if($row[warna1_kondisi]=="2") {echo "Mati";}
		if($row[warna1_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna1_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna1_lokasi]; ?></td>
	<td height="25" align="center"><?php echo $row[warna2_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna2_kondisi]=="1") {echo "Baik";}
		if($row[warna2_kondisi]=="2") {echo "Mati";}
		if($row[warna2_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna2_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna2_lokasi]; ?></td>
	<td height="25" align="center"><?php echo $row[warna3_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna3_kondisi]=="1") {echo "Baik";}
		if($row[warna3_kondisi]=="2") {echo "Mati";}
		if($row[warna3_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna3_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna3_lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>