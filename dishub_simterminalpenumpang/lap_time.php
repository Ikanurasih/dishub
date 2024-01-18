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
<title>SIM TERMINAL PENUMPANG</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Time Table Bus di Kota Madiun</a>
</center>
<br>
 <table width="1210" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
	<td   width="50" bgcolor="#CCCCCC" align="center">No.</td>
    <td   width="150" height="25" align="center" bgcolor="#CCCCCC">Nama PO</td>                                            
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">No. Kendaraan</td> 
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Jenis Kendaraan</td>                                        
    <td   width="100" height="25" align="center" bgcolor="#CCCCCC">Jenis Angkutan</td>                                        
    <td   width="120" height="25" align="center" bgcolor="#CCCCCC">Jenis Pelayanan</td>
	<td   width="120" height="25" align="center" bgcolor="#CCCCCC">Arah</td>
    <td   width="150" height="25" align="center" bgcolor="#CCCCCC">Jurusan</td>
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Kode Trayek</td>                                        
    <td   width="110" height="25" align="center" bgcolor="#CCCCCC">Waktu Kedatangan</td>                                        
    <td   width="110" height="25" align="center" bgcolor="#CCCCCC">Waktu Keberangkatan</td>                                        
   </tr>
  <?php
  if ($kategori=="nama_po")
  {  $strsql="select * from ter_time where nama_po like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from ter_time where no_kendaraan like '%$key%' order by id desc"; }
   elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_time where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_angkutan")
  {  $strsql="select * from ter_time where jenis_angkutan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_pelayanan")
  {  $strsql="select * from ter_time where jenis_pelayanan like '%$key%' order by id desc"; }
  elseif ($kategori=="arah")
  {  $strsql="select * from ter_time where arah like '%$key%' order by id desc"; }
   elseif ($kategori=="jurusan")
  {  $strsql="select * from ter_time where jurusan like '%$key%' order by id desc"; }
   elseif ($kategori=="kode_trayek")
  {  $strsql="select * from ter_time where kode_trayek like '%$key%' order by id desc"; }
  elseif ($kategori=="waktu_kedatangan")
  {  $strsql="select * from ter_time where waktu_kedatangan like '%$key%' order by id desc"; }
  elseif ($kategori=="waktu_keberangkatan")
  {  $strsql="select * from ter_time where waktu_keberangkatan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_time order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[nama_po]; ?></td>
	<td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
	<td height="25" align="center"><?php echo $row[arah]; ?></td>
    <td height="25" align="center"><?php echo $row[jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center"><?php echo $row[waktu_kedatangan]; ?></td>
    <td height="25" align="center"><?php echo $row[waktu_keberangkatan]; ?></td>
   </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>