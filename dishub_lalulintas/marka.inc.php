<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$marka_tepi_p=$_REQUEST['marka_tepi_p'];
$marka_tepi_l=$_REQUEST['marka_tepi_l'];
$marka_tepi_kondisi=$_REQUEST['marka_tepi_kondisi'];
$marka_tengah_solid_p=$_REQUEST['marka_tengah_solid_p'];
$marka_tengah_solid_l=$_REQUEST['marka_tengah_solid_l'];
$marka_tengah_solid_kondisi=$_REQUEST['marka_tengah_solid_kondisi'];
$marka_tengah_putus_p=$_REQUEST['marka_tengah_putus_p'];
$marka_tengah_putus_l=$_REQUEST['marka_tengah_putus_l'];
$marka_tengah_putus_kondisi=$_REQUEST['marka_tengah_putus_kondisi'];
$marka_lajur_solid_p=$_REQUEST['marka_lajur_solid_p'];
$marka_lajur_solid_l=$_REQUEST['marka_lajur_solid_l'];
$marka_lajur_solid_kondisi=$_REQUEST['marka_lajur_solid_kondisi'];
$marka_lajur_putus_p=$_REQUEST['marka_lajur_putus_p'];
$marka_lajur_putus_l=$_REQUEST['marka_lajur_putus_l'];
$marka_lajur_putus_kondisi=$_REQUEST['marka_lajur_putus_kondisi'];
$id_jalan=$_REQUEST['id_jalan'];
$id=$_REQUEST['id'];
$cari=$_REQUEST['cari'];

//echo $kategori;
//echo "<br>";
//echo $cari;

if ($act=="del")
{
mysql_query("delete from lal_marka where id='$id'");
}
?>
<html>
<head>
<title>Lalu Lintas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/designfloat_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Marka</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Marka: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_marka.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="cari" value="<?php echo $cari; ?>">
<tr>
<td width="100">Jabatan</td>
<td width="10">:</td>
<td width="200"><input type="text" name="jabatan" class="inputbox2" size="50"></td>
</tr>
<tr>
<td width="100">Nama Pegawai</td>
<td width="10">:</td>
<td width="200"><input type="text" name="nama_pegawai" class="inputbox" size="30"></td>
</tr>
<tr>
<td width="100">NIP</td>
<td width="10">:</td>
<td width="200"><input type="text" name="nip" class="inputbox" size="30"></td>
</tr>
<tr>
<td width="100">Golongan</td>
<td width="10">:</td>
<td width="200"><input type="text" name="golongan" class="inputbox" size="30"></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3"><a href="index.php?do=data.marka"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
elseif ($act=="excel")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Marka ke Microsoft Excel: </legend>
<table class="tdtitle_black">
<tr>
<td class="tdtitle_black" height="50" valign="middle"><?php include "excel_marka.php"; ?></td>
</tr>
</table>
</fieldset>
<?php
}
else
{
?>
<table width="1300" border="0" cellpadding="2" cellspacing="2">
    <?php
 // if ($_SESSION['tipe']=="2")
  //{
  ?>
  <tr>
     <td width="130"><a href="?act=add&do=data.marka&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Parkir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
    <td width="1000"></td>
  <td width="270">&nbsp;</td>
  </tr>
    <?php
  //}
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.marka">
	<input type="hidden" name="cari" value="p">
     <td valign="middle">Kategori</td>
    <td>&nbsp;<select name="kategori" class="inputbox" onChange="submit();">
	<option value="0" <?php if ($kategori=="0") echo "selected"; ?>>--------------------------------------</option>
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="marka_tepi" <?php if ($kategori=="marka_tepi") echo "selected"; ?>>Marka Tepi</option>
	<option value="marka_tengah_solid" <?php if ($kategori=="marka_tengah_solid") echo "selected"; ?>>Marka Tengah Solid/Utuh</option>
	<option value="marka_tengah_putus" <?php if ($kategori=="marka_tengah_putus") echo "selected"; ?>>Marka Tengah Putus</option>
	<option value="marka_pembagi_solid" <?php if ($kategori=="marka_pembagi_solid") echo "selected"; ?>>Marka Pembagi Lajur Solid/Utuh</option>
	<option value="marka_pembagi_putus" <?php if ($kategori=="marka_pembagi_putus") echo "selected"; ?>>Marka Pembagi Lajur Putus</option>
	</select>
	</form>
  	<form method="post" action="index.php?do=data.marka">
   <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
	<?php
	if ($kategori<>"nama_jalan" and !empty($kategori))
	{
	?>
	&nbsp;&nbsp;<input type="radio" value="p" name="cari" checked="checked" onChange="submit();">P (m) 
	&nbsp;&nbsp;<input type="radio" value="l" name="cari" <?php if ($cari=="l") { echo "checked"; } ?> onChange="submit();">L (m)
	&nbsp;&nbsp;<input type="radio" value="kondisi" name="cari" <?php if ($cari=="kondisi") { echo "checked"; } ?> onChange="submit();">Kondisi
	<?php
	}
	?>
	&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	</form>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.marka">
  <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
  <input type="hidden" name="cari" value="<?php echo $cari; ?>">
    <td>Pencarian</td>
    <td>&nbsp;<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font></td>
    <td align="right"><a href="excel_marka.php?do=data.marka&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.marka&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&cari=<?php echo $cari; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></td>
  </tr>
  </form>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1300">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="3" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="3" width="130" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td rowspan="3" width="100" background="images/bgcell.gif" height="25" align="center">Dari</td>
    <td rowspan="3" width="100" background="images/bgcell.gif" height="25" align="center">Ke</td>   
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Marka Tepi</td>   
    <td colspan="6" background="images/bgcell.gif" height="25" align="center">Marka Tengah/Pembagi Arah</td>   
    <td colspan="6" background="images/bgcell.gif" height="25" align="center">Marka Pembagi Lajur</td>   
  </tr>
  <tr class="tdtitle_white">
	<td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">L (m)</td>
	<td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td colspan="3" background="images/bgcell.gif" height="25" align="center">Solid/Utuh</td>
	<td colspan="3" background="images/bgcell.gif" height="25" align="center">Putus</td>
	<td colspan="3" background="images/bgcell.gif" height="25" align="center">Solid/Utuh</td>
	<td colspan="3" background="images/bgcell.gif" height="25" align="center">Putus</td>
  </tr>
  <tr class="tdtitle_white">
	<td width="40" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">L (m)</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">L (m)</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">L (m)</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">L (m)</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_marka.php" name="frmadd">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="40"><a href="index.php?do=data.marka"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="10" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan3.php")'></td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="marka_tepi_p" size="5" value="<?php echo $marka_tepi_p; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tepi_l" size="5" value="<?php echo $marka_tepi_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tepi_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($marka_tepi_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($marka_tepi_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_tengah_solid_p" size="5" value="<?php echo $marka_tengah_solid_p; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tengah_solid_l" size="5" value="<?php echo $marka_tengah_solid_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tengah_solid_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($marka_tengah_solid_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($marka_tengah_solid_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_tengah_putus_p" size="5" value="<?php echo $marka_tengah_putus_p; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tengah_putus_l" size="5" value="<?php echo $marka_tengah_putus_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tengah_putus_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($marka_tengah_putus_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($marka_tengah_putus_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_lajur_solid_p" size="5" value="<?php echo $marka_lajur_solid_p; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_lajur_solid_l" size="5" value="<?php echo $marka_lajur_solid_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_lajur_solid_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($marka_lajur_solid_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($marka_lajur_solid_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_lajur_putus_p" size="5" value="<?php echo $marka_lajur_putus_p; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_lajur_putus_l" size="5" value="<?php echo $marka_lajur_putus_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_lajur_putus_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($marka_lajur_putus_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($marka_lajur_putus_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
  </tr>
  </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_marka.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.marka"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="10" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="marka_tepi_p" size="5" value="<?php echo $row[marka_tepi_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tepi_l" size="5" value="<?php echo $row[marka_tepi_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tepi_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[marka_tepi_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[marka_tepi_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_tengah_solid_p" size="5" value="<?php echo $row[marka_tengah_solid_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tengah_solid_l" size="5" value="<?php echo $row[marka_tengah_solid_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tengah_solid_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[marka_tengah_solid_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[marka_tengah_solid_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_tengah_putus_p" size="5" value="<?php echo $row[marka_tengah_putus_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_tengah_putus_l" size="5" value="<?php echo $row[marka_tengah_putus_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_tengah_putus_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[marka_tengah_putus_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[marka_tengah_putus_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_lajur_solid_p" size="5" value="<?php echo $row[marka_lajur_solid_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_lajur_solid_l" size="5" value="<?php echo $row[marka_lajur_solid_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_lajur_solid_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[marka_lajur_solid_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[marka_lajur_solid_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="marka_lajur_putus_p" size="5" value="<?php echo $row[marka_lajur_putus_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_lajur_putus_l" size="5" value="<?php echo $row[marka_lajur_putus_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="marka_lajur_putus_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[marka_lajur_putus_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[marka_lajur_putus_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	</form>
  </tr>
  <?php
  }
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
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
         <?php
  if ($_SESSION['tipe']=="1")
  {
  ?>
    <td align="center" width="50"><a href="?do=data.marka&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.marka&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <?php
	}
	else
	{
	?>
<td width="50">&nbsp;</td>
<td width="20">&nbsp;</td>
	<?php
	}
	?>     
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
<?php
}
?>
</body>
</html>