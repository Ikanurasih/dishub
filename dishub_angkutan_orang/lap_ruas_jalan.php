<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$sekarang=date("Y-m-d");
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ANGKUTAN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Angkutan Umum di Ruas Jalan Kota Madiun </a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="720" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" align="center">No.</td>
    <td width="300" height="25" align="center">Nama Jalan </td>
    <td width="220" height="25" align="center">Jenis Angkutan </td>
    <td width="150" height="25" align="center">Kode Trayek</td>                                
  </tr>

    <?php
  if ($kategori=="nama_jalan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and nama_jalan like '%$key%'
  order by a.nama_jalan asc";
	}
	elseif ($kategori=="jenis_angkutan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and jenis_angkutan like '%$key%'
  order by a.nama_jalan asc";
	}
	elseif ($kategori=="kode_trayek")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and kode_trayek like '%$key%'
  order by a.nama_jalan asc";
	}
	else
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id
  order by a.nama_jalan asc";
  }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="left"><?php echo $row[kode_trayek]; ?></td>
  </tr>  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>