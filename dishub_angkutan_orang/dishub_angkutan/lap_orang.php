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
<a class="tdtitle_black">Data Kebutuhan Angkutan Orang di Kota Madiun </a>
</center>
<br>  

<table border="1" cellspacing="0" cellpadding="1" width="730" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" rowspan="2" align="center">No.</td>
    <td width="230" rowspan="2" align="center">Jenis Angkutan</td>
    <td width="150" rowspan="2" align="center">Kode Trayek</td>     
    <td height="25" colspan="2" align="center">Jumlah Armada Angkutan<br>
    (Kendaraan)</td>
  </tr>
    <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="150" height="25" align="center">Kebutuhan</td>
    <td width="150" height="25" align="center">Realisasi</td>                                                           
  </tr>
  <?php
	if ($kategori=="jenis_angkutan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id and jenis_angkutan like '%$key%'
  order by a.id desc";
	}
	elseif ($kategori=="kode_trayek")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id and kode_trayek like '%$key%'
  order by a.id desc";
	}
	else
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id
  order by a.id desc";
  }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="left"><?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_kebutuhan]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_realisasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>