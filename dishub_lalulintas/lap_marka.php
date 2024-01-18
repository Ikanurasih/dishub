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
	$cari=$_REQUEST['cari'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LALU LINTAS</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Marka</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1140">
  <tr class="tdtitle_black">
	<td rowspan="3" bgcolor="#cccccc" width="50" height="25" align="center">No.</td>
    <td rowspan="3" width="130" bgcolor="#cccccc" height="25" align="center">Nama Jalan</td>
    <td rowspan="3" width="130" bgcolor="#cccccc" height="25" align="center">Dari</td>
    <td rowspan="3" width="130" bgcolor="#cccccc" height="25" align="center">Ke</td>   
    <td colspan="3" bgcolor="#cccccc" height="25" align="center">Marka Tepi</td>   
    <td colspan="6" bgcolor="#cccccc" height="25" align="center">Marka Tengah/Pembagi Arah</td>   
    <td colspan="6" bgcolor="#cccccc" height="25" align="center">Marka Pembagi Lajur</td>   
  </tr>
  <tr class="tdtitle_black">
	<td rowspan="2" width="40" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td rowspan="2" width="40" bgcolor="#cccccc" height="25" align="center">L (m)</td>
	<td rowspan="2" width="60" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
	<td colspan="3" bgcolor="#cccccc" height="25" align="center">Solid/Utuh</td>
	<td colspan="3" bgcolor="#cccccc" height="25" align="center">Putus</td>
	<td colspan="3" bgcolor="#cccccc" height="25" align="center">Solid/Utuh</td>
	<td colspan="3" bgcolor="#cccccc" height="25" align="center">Putus</td>
  </tr>
  <tr class="tdtitle_black">
	<td width="40" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">L (m)</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">L (m)</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">L (m)</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">P (m)</td>
	<td width="40" bgcolor="#cccccc" height="25" align="center">L (m)</td>
	<td width="60" bgcolor="#cccccc" height="25" align="center">Kondisi</td>
  </tr>
   <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  //marka tepi
  elseif ($kategori=="marka_tepi" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tepi" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tepi" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_kondisi like '%$key%' order by id desc";  
  }
  //marka tengah solid
  elseif ($kategori=="marka_tengah_solid" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_solid" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_solid" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_kondisi like '%$key%' order by id desc";  
  }  
  //marka tengah putus
  elseif ($kategori=="marka_tengah_putus" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_putus" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_putus" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_kondisi like '%$key%' order by id desc";  
  } 
  //marka pembagi solid
  elseif ($kategori=="marka_pembagi_solid" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_solid" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_solid" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_kondisi like '%$key%' order by id desc";  
  }  
  //marka pembagi solid
  elseif ($kategori=="marka_pembagi_putus" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_putus" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_putus" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_kondisi like '%$key%' order by id desc";  
  }  
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td height="25" align="center"><?php echo $row[marka_tepi_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_tepi_l]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[marka_tepi_kondisi]=="1") {echo "Baik";}
		if($row[marka_tepi_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[marka_tengah_solid_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_tengah_solid_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[marka_tengah_solid_kondisi]=="1") {echo "Baik";}
		if($row[marka_tengah_solid_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[marka_tengah_putus_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_tengah_putus_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[marka_tengah_putus_kondisi]=="1") {echo "Baik";}
		if($row[marka_tengah_putus_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[marka_lajur_solid_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_lajur_solid_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[marka_lajur_solid_kondisi]=="1") {echo "Baik";}
		if($row[marka_lajur_solid_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[marka_lajur_putus_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_lajur_putus_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[marka_lajur_putus_kondisi]=="1") {echo "Baik";}
		if($row[marka_lajur_putus_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>