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
<a class="tdtitle_black">Data Agen Bus di Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1020" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td   width="50" align="center">No.</td>
    <td   width="80" height="25" align="center">No. Agen </td> 
	<td   width="150" height="25" align="center">Nama PO </td> 
    <td   width="150" height="25" align="center">Perwakilan Agen/PO </td>  
	<td   width="100" height="25" align="center">Ukuran Kios </td>  
	<td   width="110" height="25" align="center">Masa Berlaku </td>  
	<td   width="110" height="25" align="center">No. SK/Izin </td>  
	<td   width="110" height="25" align="center">Tgl. Izin </td>  
	<td   width="110" height="25" align="center">Biaya </td>  	                                                                            
   </tr>
  <?php
  if ($kategori=="no_agen")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where no_agen like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_po")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where nama_po like '%$key%' order by id desc"; }
  elseif ($kategori=="perwakilan_agen")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where perwakilan_agen like '%$key%' order by id desc"; }
   else
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
 <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[no_agen]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_po]; ?></td>
	<td height="25" align="left"><?php echo $row[perwakilan_agen]; ?></td>
	<td height="25" align="center"><?php echo $row[ukuran_kios]; ?></td>
	<td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25" align="center"><?php echo $row[no_sk]; ?></td>
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
	<td height="25" align="right"><?php null($row[biaya]); ?></td>	
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>