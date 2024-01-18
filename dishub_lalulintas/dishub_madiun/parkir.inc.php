<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$tp1_lokasi=$_REQUEST['tp1_lokasi'];
$tp1_pmarka=$_REQUEST['tp1_pmarka'];
$tp1_lmarka=$_REQUEST['tp1_lmarka'];
$tp2_lokasi=$_REQUEST['tp2_lokasi'];
$tp2_pmarka=$_REQUEST['tp2_pmarka'];
$tp2_lmarka=$_REQUEST['tp2_lmarka'];
$tp3_lokasi=$_REQUEST['tp3_lokasi'];
$tp3_pmarka=$_REQUEST['tp3_pmarka'];
$tp3_lmarka=$_REQUEST['tp3_lmarka'];
$tp4_lokasi=$_REQUEST['tp4_lokasi'];
$tp4_pmarka=$_REQUEST['tp4_pmarka'];
$tp4_lmarka=$_REQUEST['tp4_lmarka'];
$id_jalan=$_REQUEST['id_jalan'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_parkir where id='$id'");
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
    <td width="59"><div align="left"><img src="images/sumbleupon_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Parkir</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Parkir: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_parkir.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="<?php echo $key; ?>">
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
  <td colspan="3"><a href="index.php?do=data.parkir"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
else
{
?>
<table width="1330" border="0" cellpadding="2" cellspacing="2">
           <?php
  if ($_SESSION['tipe']=="2")
  {
  ?>  
  <tr>
    <td width="458"><a href="?act=add&do=data.parkir&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Parkir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.parkir">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="dari" <?php if ($kategori=="dari") echo "selected"; ?>>Dari</option>
	<option value="ke" <?php if ($kategori=="ke") echo "selected"; ?>>Ke</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="458" align="right"><a href="index.php?do=data.parkir&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1330">
  <tr class="tdtitle_white">
	<td rowspan="2" colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="2" width="170" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td rowspan="2" width="110" background="images/bgcell.gif" height="25" align="center">Dari</td>    
    <td rowspan="2" width="110" background="images/bgcell.gif" height="25" align="center">Ke</td>             
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Titik Parkir 1</td>             
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Titik Parkir 2</td>             
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Titik Parkir 3</td>             
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Titik Parkir 4</td>             
  </tr>
  <tr class="tdtitle_white">
	<td width="110" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">P Marka (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">L Marka (m)</td>
	<td width="120" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">P Marka (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">L Marka (m)</td>
	<td width="120" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">P Marka (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">L Marka (m)</td>
	<td width="120" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">P Marka (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">L Marka (m)</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_parkir.php" name="frmadd">
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="40"><a href="index.php?do=data.parkir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="tp1_lokasi" size="15" value="<?php echo $tp1_lokasi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp1_pmarka" size="5" value="<?php echo $tp1_pmarka; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp1_lmarka" size="5" value="<?php echo $tp1_lmarka; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp2_lokasi" size="15" value="<?php echo $tp2_lokasi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp2_pmarka" size="5" value="<?php echo $tp2_pmarka; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp2_lmarka" size="5" value="<?php echo $tp2_lmarka; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp3_lokasi" size="15" value="<?php echo $tp3_lokasi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp3_pmarka" size="5" value="<?php echo $tp3_pmarka; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp3_lmarka" size="5" value="<?php echo $tp3_lmarka; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp4_lokasi" size="15" value="<?php echo $tp4_lokasi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp4_pmarka" size="5" value="<?php echo $tp4_pmarka; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp4_lmarka" size="5" value="<?php echo $tp4_lmarka; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_parkir.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.parkir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="tp1_lokasi" size="15" value="<?php echo $row[tp1_lokasi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp1_pmarka" size="5" value="<?php echo $row[tp1_pmarka]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp1_lmarka" size="5" value="<?php echo $row[tp1_lmarka]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp2_lokasi" size="15" value="<?php echo $row[tp2_lokasi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp2_pmarka" size="5" value="<?php echo $row[tp2_pmarka]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp2_lmarka" size="5" value="<?php echo $row[tp2_lmarka]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp3_lokasi" size="15" value="<?php echo $row[tp3_lokasi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp3_pmarka" size="5" value="<?php echo $row[tp3_pmarka]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp3_lmarka" size="5" value="<?php echo $row[tp3_lmarka]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tp4_lokasi" size="15" value="<?php echo $row[tp4_lokasi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp4_pmarka" size="5" value="<?php echo $row[tp4_pmarka]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tp4_lmarka" size="5" value="<?php echo $row[tp4_lmarka]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.ke like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.parkir&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.parkir&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[tp1_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp1_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp1_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp2_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp2_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp2_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp3_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp3_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp3_lmarka]; ?></td>
	<td height="25" align="left"><?php echo $row[tp4_lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[tp4_pmarka]; ?></td>
    <td height="25" align="center"><?php echo $row[tp4_lmarka]; ?></td>
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