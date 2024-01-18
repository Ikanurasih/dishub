<?php
include "global/config.php";

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
<title>Laporan Data Halte</title>
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
<a class="tdtitle_black">Data Halte</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1260">
  <tr class="tdtitle_black">
  	<td width="50" bgcolor="#cccccc" height="25" align="center">No.</td>
    <td width="170" bgcolor="#cccccc" height="25" align="center">Nama Jalan</td>
    <td width="150" bgcolor="#cccccc" height="25" align="center">Dari</td>    
    <td width="150" bgcolor="#cccccc" height="25" align="center">Ke</td>       
    <td width="150" bgcolor="#cccccc" height="25" align="center">Nama Halte</td>   
    <td width="200" bgcolor="#cccccc" height="25" align="center">Lokasi</td>           
    <td width="80" bgcolor="#cccccc" height="25" align="center">Identitas Halte</td>       
    <td width="80" bgcolor="#cccccc" height="25" align="center">Rambu Petunjuk</td>       
    <td width="100" bgcolor="#cccccc" height="25" align="center">Papan Informasi Trayek</td>       
    <td width="80" bgcolor="#cccccc" height="25" align="center">Lampu Penerangan</td>       
    <td width="80" bgcolor="#cccccc" height="25" align="center">Tempat Duduk</td>
  </tr>
  <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_halte")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and nama_halte like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td height="25" align="left"><?php echo $row[nama_halte]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center">
	<?php 
		if($row[identitas]=='1') { echo "Ada"; }
		elseif($row[identitas]=='2'){ echo "Tidak Ada"; } 
	?>
	</td>
	<td height="25" align="center">
	<?php 
		if($row[rambu]=='1') { echo "Ada"; }
		elseif($row[rambu]=='2'){ echo "Tidak Ada"; } 
	?>
	</td>
	<td height="25" align="center">
	<?php 
		if($row[papan_info]=='1') { echo "Ada"; }
		elseif($row[papan_info]=='2'){ echo "Tidak Ada"; } 
	?>
	</td>
	<td height="25" align="center">
	<?php 
		if($row[lampu]=='1') { echo "Ada"; }
		elseif($row[lampu]=='2'){ echo "Tidak Ada"; } 
	?>
	</td>
	<td height="25" align="center">
	<?php 
		if($row[tmp_duduk]=='1') { echo "Ada"; }
		elseif($row[tmp_duduk]=='2'){ echo "Tidak Ada"; } 
	?>
	</td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>