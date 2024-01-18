<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$kategori2=$_REQUEST['kategori2'];
	$key2=$_REQUEST['key2'];
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
<a class="tdtitle_black">Data Peralatan Uji PKB </a>
</center>
<br>
 <table width="900" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
	<td width="50" bgcolor="#CCCCCC" align="center">No.</td>
    <td   width="150" height="25" align="center" bgcolor="#CCCCCC">Nama Alat</td> 
	<td   width="150" height="25" align="center" bgcolor="#CCCCCC">Jenis Alat Uji</td> 
	<td   width="150" height="25" align="center" bgcolor="#CCCCCC">Merk</td> 
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Jumlah</td>                                        
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Kondisi</td>              
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Thn. Pengadaan</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Thn. Kalibrasi</td>                                  
  </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_alat.php" >
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from pkb_peralatan_uji order by id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_alat.php">
   </form>
  <?php
    }
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_peralatan_uji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		  $strsql="select * from pkb_peralatan_uji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
		  $strsql="select * from pkb_peralatan_uji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select * from pkb_peralatan_uji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center">&nbsp;<?php echo $NO."."; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[nama_alat]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[jenis_alat]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[merk]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jumlah]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[kondisi]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[th_pengadaan]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[th_kalibrasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>

</body>
</html>