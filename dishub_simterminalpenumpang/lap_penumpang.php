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
	
	//echo $key;
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; 
  if ($kategori=="tanggal" and !empty($key))
  {  $strsql="select *,dayname(tanggal) as nama_hari from ter_penumpang where tanggal like '%$key%' order by tanggal desc"; }
   else
  {  $strsql="select *,dayname(tanggal) as nama_hari from ter_penumpang order by tanggal desc"; }
?>
<br>
<center>
<a class="tdtitle_black">Data Penumpang</a>
</center>
<br>
<?php
if ($kategori=="tanggal" and !empty($key))
{
?>
 <table width="1110" border="0" align="center" cellpadding="2" cellspacing="2" class="tdtitle_black">
 <tr>
 <td width="100"> Hari</td>
 <td width="10">:</td>
 <td width="1000">
 <?php
 $hasil2=mysql_query($strsql);
 $row_hari=mysql_fetch_array($hasil2);
 if ($row_hari['nama_hari']=="Monday")
 { echo "Senin"; }
 elseif ($row_hari['nama_hari']=="Tuesday")
 { echo "Selasa"; }
 elseif ($row_hari['nama_hari']=="Wednesday")
 { echo "Rabu"; }
 elseif ($row_hari['nama_hari']=="Thursday")
 { echo "Kamis"; }
 elseif ($row_hari['nama_hari']=="Friday")
 { echo "Jum`at"; }
 elseif ($row_hari['nama_hari']=="Saturday")
 { echo "Sabtu"; }
 elseif ($row_hari['nama_hari']=="Sunday")
 { echo "Minggu"; }
 ?>
 </td>
 </tr>
 <tr>
   <td>Tanggal</td>
   <td>:</td>
   <td><?php
	  $temp=explode("-",$row_hari[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
 </tr>
 </table>
 <?php
 }
 ?>
 <table width="1130" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td 	 width="50" align="center">No.</td>
<?php
if (empty($key))
{
?>
    <td   width="120" height="25" align="center">Tanggal</td> 
<?php
}
?>
	<td   width="100" height="25" align="center">No. Kendaraan </td>                                        
    <td   width="100" height="25" align="center">Jenis Kendaraan </td>                                        
    <td   width="100" height="25" align="center">Jenis Angkutan </td>                                        
    <td   width="100" height="25" align="center">Jenis Pelayanan </td>                                        
    <td   width="220" height="25" align="center">Nama PO</td>                                        
    <td   width="220" height="25" align="center">Jurusan</td>                                        
    <td   width="80" height="25" align="center">Jumlah Penumpang</td>
    <td   width="60" height="25" align="center">Datang</td>
    <td   width="60" height="25" align="center">Berangkat</td>	                                        
   </tr>
   <?php
   $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>
<?php
if (empty($key))
{
?>
	  <td height="25" align="center"><?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
 <?php
 }
 ?>
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" align="center"><?php echo $row[nama_po]; ?></td>
    <td height="25" align="center"><?php echo $row[jurusan]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah_penumpang]; ?></td>
    <td height="25" align="center"><?php echo $row[datang]; ?></td>
    <td height="25" align="center"><?php echo $row[berangkat]; ?></td>	
   </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>