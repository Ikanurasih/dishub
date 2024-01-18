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
<a class="tdtitle_black">Data Fasilitas Terminal di Kota Madiun</a>
</center>
<br>
 <table width="950" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">No</td>
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Status</td> 
    <td   width="200" height="25" align="center" bgcolor="#CCCCCC">Jenis</td> 
	<td   width="200" height="25" align="center" bgcolor="#CCCCCC">Uraian / Keperuntukan</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>  
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Gambar / Foto</td>                                        
   </tr>
  <?php
  if ($kategori=="jenis")
  {  $strsql="select * from ter_fasilitas where jenis like '%$key%' order by id desc"; }
  elseif ($kategori=="uraian")
  {  $strsql="select * from ter_fasilitas where uraian like '%$key%' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select * from ter_fasilitas where jumlah like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_fasilitas order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
   	<td align="center"><?php echo $NO."."; ?></td>
	<td height="25" align="left"><?php echo $row[status]; ?></td>
	<td height="25" align="left"><?php echo $row[jenis]; ?></td>
	<td height="25" align="left"><?php echo $row[uraian]; ?></td>
	<td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
	<td height="25" align="center"><a href='<?php echo "files/".$row[gambar];?>' target='_blank'><img src="<?php echo "files/". $row[gambar]; ?>"  width='100' height='100'/></a></td>
   </tr>
  <?php
  }
  ?>
</table>
</body>
</html>