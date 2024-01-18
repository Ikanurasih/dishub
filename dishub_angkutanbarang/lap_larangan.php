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
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DISHUB MADIUN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Larangan Angkutan Barang di Kota Madiun </a>
</center>
<br>
 <table width="1020" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
  <td rowspan="2" width="50" align="center">No.</td>
	<td rowspan="2" width="150" height="25" align="center">Nama jalan</td> 
    <td colspan="2" height="25" align="center">Segmen Jalan</td>                    
    <td rowspan="2" width="100" height="25" align="center">Sistem Arus</td>              
    <td rowspan="2" width="120" height="25" align="center">Jenis Angkutan <br> 
    Larangan Barang</td>              
    <td colspan="2" height="25" align="center">Pembelakuan Larangan</td>              
  </tr>
   <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="150" height="25" align="center">Dari</td>              
    <td width="150" height="25" align="center">Ke</td>
	<td width="150" height="25" align="center">Dari</td>              
    <td width="150" height="25" align="center">Ke</td>
  </tr>
  <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select * from bar_larangan where nama_jalan like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_larangan order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[segmen_dari]; ?></td>
    <td height="25" align="left"><?php echo $row[segmen_ke]; ?></td>
	<td height="25" align="center"><?php echo $row[sistem]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_larangan]; ?></td>
	<td height="25" align="left"><?php echo $row[pemberlakuan_dari]; ?></td>
	<td height="25" align="left"><?php echo $row[pemberlakuan_ke]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>