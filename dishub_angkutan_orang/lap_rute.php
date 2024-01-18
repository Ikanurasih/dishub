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
<a class="tdtitle_black">Data Rute Angkutan Umum</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="740" align="center">
  <tr class="tdtitle_black">
	<td width="50" bgcolor="#CCCCCC" align="center">No.</td>
    <td width="170" height="25" align="center" bgcolor="#CCCCCC">Jenis Angkutan</td> 
    <td width="100" height="25" align="center" bgcolor="#CCCCCC">Kode trayek</td>                                         
    <td width="190" height="25" align="center" bgcolor="#CCCCCC">Rute Trayek/Wilayah Operasi</td>              
    <td width="130" height="25" align="center" bgcolor="#CCCCCC">Panjang Trayek(km)</td>              
    <td width="100" height="25" align="center" bgcolor="#CCCCCC">Jumlah Kendaraan</td>                     
 </tr>
 <?php
  if ($kategori=="jenis_angkutan")
  { $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id and jenis_angkutan like '%$key%' order by a.id desc"; }
  elseif ($kategori=="rute_trayek")
  { $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id and rute_trayek like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[rute_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[panjang_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jumlah_kendaraan]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>