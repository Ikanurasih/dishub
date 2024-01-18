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
<a class="tdtitle_black">Data Kendaraan Pribadi Parkir di Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="550" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" rowspan="2" align="center">No.</td>
    <td   width="150" rowspan="2" align="center">Tanggal</td> 
    <td height="25" colspan="3" align="center">Jumlah</td>                                        
   </tr>
   <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td   width="120" height="25" align="center">Sepeda</td>                                        
    <td   width="120" height="25" align="center">Sepeda Motor</td>                                        
    <td   width="110" height="25" align="center">Mobil</td>                                        
   </tr>
  <?php
  if ($kategori=="jml_sepeda")
  {  $strsql="select * from ter_parkir where jml_sepeda like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="jml_sepeda_motor")
  {  $strsql="select * from ter_parkir where jml_sepeda_motor like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="jml_mobil")
  {  $strsql="select * from ter_parkir where jml_mobil like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="tanggal")
  {  $strsql="select * from ter_parkir where tanggal like '%$key%' order by tanggal desc"; }
   else
  {  $strsql="select * from ter_parkir order by tanggal desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
	<td align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center">
	<?php
	  $temp=explode("-",$row[tanggal]); 
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
    <td height="25" align="center"><?php echo $row[jml_sepeda]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_sepeda_motor]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_mobil]; ?></td>
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>