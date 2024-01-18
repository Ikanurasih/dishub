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
<title>DISHUB MADIUN</title>
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
<a class="tdtitle_black">Data Dispensasi </a><br>
  </center>
<table border="1" cellspacing="0" cellpadding="1" width="1010" align="center">
  <tr class="tdtitle_black">
  <td width="50" height="25" bgcolor="#CCCCCC" align="center">No.</td>
	<td width="150" height="25" align="center" bgcolor="#CCCCCC">Nama</td> 
    <td width="250" height="25" align="center" bgcolor="#CCCCCC">Alamat</td>                    
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">No.<br>
    Kendaraan</td>              
    <td width="100" height="25" align="center" bgcolor="#CCCCCC">Jenis<br>
    Kendaraan</td>              
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">Jenis Izin </td>              
    <td width="100" height="25" align="center" bgcolor="#CCCCCC">Jenis Barang yang<br>
Dibongkar / Dimuat</td>              
    <td width="120" height="25" align="center" bgcolor="#CCCCCC">Masa Berlaku Izin</td>              
    <td width="80" height="25" align="center" bgcolor="#CCCCCC">Tonase</td>              
    </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from bar_bongkar_muat where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from bar_bongkar_muat where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from bar_bongkar_muat where no_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from bar_bongkar_muat where jenis_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_izin")
  {  $strsql="select * from bar_bongkar_muat where jenis_izin like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_bongkar_muat order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_izin]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_barang]; ?></td>
	<td height="25" align="center">
		  <?php
	  if ($row[tgl_mulai]<>'0000-00-00')
	  {
	  ?>
	<?php
	  $temp=explode("-",$row[tgl_mulai]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	  <br>
	  s/d
	  <br>
	  <?php
	  }
	  $temp=explode("-",$row[tgl_izin]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	   </td>
	<td height="25" align="center"><?php echo $row[tonase]; ?></td>
    </tr>
  <?php
  }
  ?>
</table>
</body>
</html>