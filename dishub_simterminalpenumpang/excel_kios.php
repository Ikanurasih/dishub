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

		Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
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
</style></head>
<body>
<center>
<a class="tdtitle_black">Data Kios, Kamar Mandi, WC di Terminal Penumpang Kota Madiun</a>
</center>
<br>
 <table width="1290" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50"  rowspan="2" align="center">No.</td>
    <td   width="150" rowspan="2" align="center">Nama Penyewa </td> 
    <td   width="180" rowspan="2" align="center">Alamat</td> 
    <td   width="100" rowspan="2" align="center">Kategori Usaha </td>  	                                                                             
    <td   width="100" rowspan="2" align="center">Ukuran Kios, <br>
KM / WC(m2)</td>  
	<td   width="100" rowspan="2" align="center">No. Kios, <br>
KM / WC </td>                                        
    <td   width="100" rowspan="2" align="center">Jenis Usaha</td>                                        
    <td   width="130" rowspan="2" align="center">No. Izin</td>                                        
    <td   width="130" rowspan="2" align="center">Tanggal Izin</td>                                        
    <td height="25" colspan="3" align="center">Masa Berlaku Izin </td>                                        
    <td   width="80" rowspan="2" align="center">Biaya</td>                                        
   </tr>
   <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td   width="130" height="25" align="center">&nbsp;</td>                                        
	<td   width="30" height="25" align="center">s/d</td>                                        
    <td   width="130" height="25" align="center">&nbsp;</td>                                        
   </tr>
  <?php
  if ($kategori=="nama" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where nama_penyewa like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="kategori" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where kategori like '%$key%' order by id desc"; }
  elseif ($kategori=="luas" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where luas like '%$key%' order by id desc"; }
   elseif ($kategori=="no_kios" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where no_kios like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_usaha" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where jenis_usaha like '%$key%' order by id desc"; }
  elseif ($kategori=="no_izin" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where no_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="tanggal" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where tgl_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="biaya" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where biaya like '%$key%' order by id desc"; }
  elseif ($kategori=="masa_berlaku" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where masa_berlaku_akhir like '%$key%' order by id desc"; }
   else
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>	
    <td height="25" align="left"><?php echo $row[nama_penyewa]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
	<td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
	<td height="25" align="center"><?php echo $row[no_kios]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_usaha]; ?></td>
    <td height="25" align="center"><?php echo $row[no_izin]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tgl_izin]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_awal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	  <td>&nbsp;</td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_akhir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="right"><?php null($row[biaya]); ?></td>
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>