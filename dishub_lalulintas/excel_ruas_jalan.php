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
<title>Laporan Data Ruas Jalan</title>
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
<a class="tdtitle_black">Data Ruas Jalan</a>
</center>
<br>
<table border="1" cellspacing="0" cellpadding="1" width="1320" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="50" align="center">No.</td>
    <td rowspan="2" width="100" height="25" align="center">Nama Jalan</td>
    <td rowspan="2" width="100" height="25" align="center">Dari</td>    
    <td rowspan="2" width="100" height="25" align="center">Ke</td>       
    <td rowspan="2" width="40" height="25" align="center">P <br>
    (km)</td>       
    <td rowspan="2" width="40" height="25" align="center">L <br>
    (m)</td>       
    <td rowspan="2" width="60" height="25" align="center">Trotoar</td>       
    <td rowspan="2" width="60" height="25" align="center">Drainase</td>       
    <td rowspan="2" width="60" height="25" align="center">Bahu</td>       
    <td rowspan="2" width="60" height="25" align="center">Tipe</td>       
    <td rowspan="2" width="60" height="25" align="center">Status</td>       
    <td rowspan="2" width="60" height="25" align="center">Kelas</td>       
    <td colspan="5" height="25" align="center">Volume (kend/jam)</td>       
    <td rowspan="2" width="40" height="25" align="center">Kap. </td>       
    <td rowspan="2" width="40" height="25" align="center">V/C Ratio</td>       
    <td rowspan="2" width="40" height="25" align="center">JPO</td>       
    <td rowspan="2" width="40" height="25" align="center">Pelican <br>
    Cross</td>       
    <td rowspan="2" width="40" height="25" align="center">Zebra <br>
    Cross</td>       
    <td colspan="2" height="25" align="center">Larangan Angkutan Barang</td>       
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="40" height="25" align="center">Motor</td>
	<td width="40" height="25" align="center">Mobil</td>
	<td width="40" height="25" align="center">MPU</td>
	<td width="40" height="25" align="center">Bus/Truk</td>
	<td width="40" height="25" align="center">Unmotor</td>
	<td width="40" height="25" align="center">Y/ T </td>
	<td width="100" height="25" align="center">Arah</td>
  </tr>
  <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="trotoar")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and trotoar like '%$key%' order by id desc"; }
  elseif ($kategori=="drainase")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and drainase like '%$key%' order by id desc"; }
  elseif ($kategori=="bahu")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and bahu like '%$key%' order by id desc"; }
  elseif ($kategori=="tipe")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and tipe like '%$key%' order by id desc"; }
  elseif ($kategori=="status")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and status like '%$key%' order by id desc"; }
  elseif ($kategori=="kelas")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and kelas like '%$key%' order by id desc"; }
  elseif ($kategori=="larangan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and arah like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td height="25" align="center"><?php echo $row[panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[trotoar]=="1") {echo "Ada";}
		if($row[trotoar]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[drainase]=="1") {echo "Ada";}
		if($row[drainase]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[bahu]=="1") {echo "Ada";}
		if($row[bahu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[tipe]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[status]=="1") {echo "Kota";}
		if($row[status]=="2") {echo "Propinsi";}
		if($row[status]=="3") {echo "Negara";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[kelas]=="1") {echo "I";}
		if($row[kelas]=="2") {echo "II";}
		if($row[kelas]=="3") {echo "IIIA";}
		if($row[kelas]=="4") {echo "IIIB";}
		if($row[kelas]=="5") {echo "IIIC";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[motor]; ?></td>
	<td height="25" align="center"><?php echo $row[mobil]; ?></td>
	<td height="25" align="center"><?php echo $row[mpu]; ?></td>
	<td height="25" align="center"><?php echo $row[bus_truk]; ?></td>
	<td height="25" align="center"><?php echo $row[unmotor]; ?></td>
	<td height="25" align="center"><?php echo $row[kapasitas]; ?></td>
	<td height="25" align="center"><?php echo $row[vc_ratio]; ?></td>
	<td height="25" align="center"><?php echo $row[jpo]; ?></td>
	<td height="25" align="center"><?php echo $row[pelican]; ?></td>
	<td height="25" align="center"><?php echo $row[zebra]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[iya_tidak]=="1") {echo "Iya";}
		if($row[iya_tidak]=="2") {echo "Tidak";}
	?>
	</td>
	<td height="25" align="left"><?php echo $row[arah]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>