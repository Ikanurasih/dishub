<?php
include "global/config.php";
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	
	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Simpang Apill</title>
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
<a class="tdtitle_black">Data Simpang Apill</a>
</center>
<br>
<?php
if (!empty($key))
{ $strsql_h="select a.*,b.nama_simpang, b.jumlah_fase from lal_simpang_apill a, lal_simpang b where a.id_simpang=b.id and $kategori like '%$key%' order by id desc"; }
else
{ $strsql_h="select distinct b.id, b.nama_simpang, b.jumlah_fase from lal_simpang_apill a, lal_simpang b where a.id_simpang=b.id order by b.nama_simpang"; }
$hasil_h=mysql_query($strsql_h);
while($row_h=mysql_fetch_array($hasil_h))
{
$NO=0;
?>
<table border="0" align="center" cellpadding="0" cellspacing="0" width="1090">
<tr>
<td width="150" height="25" class="tdtitle_black">Nama Simpang</td>
<td width="10" class="tdtitle_black">:</td>
<td width="1200" class="text"><?php echo $row_h[nama_simpang]; ?></td>
</tr>
<tr>
<td width="150" height="25" class="tdtitle_black">Jumlah Fase</td>
<td width="10" class="tdtitle_black">:</td>
<td width="1200" class="text"><?php echo $row_h[jumlah_fase]; ?></td>
</tr>
<tr>
  <td height="25" class="tdtitle_black">Jumlah Kaki </td>
  <td class="tdtitle_black">:</td>
  <?php
  $strsql="select a.* 
  from lal_simpang_apill a
  where a.id_simpang='$row_h[id]' order by nama_kaki asc";
  $hasil_cek_count=mysql_query($strsql);
  $cek_count=mysql_num_rows($hasil_cek_count);
  ?>
  <td class="text"><?php echo $cek_count; ?></td>
</tr>
</table>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1090">
  <tr class="tdtitle_black">
	<td rowspan="2" bgcolor="#cccccc" width="50" align="center">No.</td>
    <td rowspan="2" width="150" bgcolor="#cccccc" height="25" align="center">Nama Kaki</td>
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Lebar Pendekat (m)</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Rambu APILL</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Marka Stopline</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">LTOR/Belok Kiri Langsung</td>    
    <td colspan="3" bgcolor="#cccccc" height="25" align="center">Waktu Siklus (detik)</td>    
    <td colspan="5" bgcolor="#cccccc" height="25" align="center">Volume (kend/jam)</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Jarak Parkir ke Simpang (m)</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Kapasitas (smp/jam)</td>    
    <td rowspan="2" width="70" bgcolor="#cccccc" height="25" align="center">Panjang Antrian (m)</td>    
  </tr>
  <tr class="tdtitle_black">
	<td width="50" bgcolor="#cccccc" height="25" align="center">Merah</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Kuning</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Hijau</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Motor</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Mobil</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">MPU</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Bus/Truk</td>
	<td width="50" bgcolor="#cccccc" height="25" align="center">Unmotor</td>
  </tr>
   <?php 
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
	<td height="25" align="left"><?php echo $row[nama_kaki]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[rambu]=="1") {echo "Ada";}
		if($row[rambu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[stopline]=="1") {echo "Ada";}
		if($row[stopline]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[ltor]=="1") {echo "Iya";}
		if($row[ltor]=="2") {echo "Tidak";}
	?>
	</td>
	<td height="25" align="right"><?php echo $row[merah]; ?></td>
	<td height="25" align="right"><?php echo $row[kuning]; ?></td>
	<td height="25" align="right"><?php echo $row[hijau]; ?></td>
	<td height="25" align="right"><?php echo $row[motor]; ?></td>
	<td height="25" align="right"><?php echo $row[mobil]; ?></td>
	<td height="25" align="right"><?php echo $row[mpu]; ?></td>
	<td height="25" align="right"><?php echo $row[bus_truk]; ?></td>
	<td height="25" align="right"><?php echo $row[unmotor]; ?></td>
	<td height="25" align="right"><?php echo $row[jarak]; ?></td>
	<td height="25" align="right"><?php echo $row[kapasitas]; ?></td>
	<td height="25" align="right"><?php echo $row[panjang_antri]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<?php
}
?>
</body>
</html>