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
$tp5_lokasi=$_REQUEST['tp5_lokasi'];
$tp5_pmarka=$_REQUEST['tp5_pmarka'];
$tp5_lmarka=$_REQUEST['tp5_lmarka'];
$tp6_lokasi=$_REQUEST['tp6_lokasi'];
$tp6_pmarka=$_REQUEST['tp6_pmarka'];
$tp6_lmarka=$_REQUEST['tp6_lmarka'];
$tp7_lokasi=$_REQUEST['tp7_lokasi'];
$tp7_pmarka=$_REQUEST['tp7_pmarka'];
$tp7_lmarka=$_REQUEST['tp7_lmarka'];
$tp8_lokasi=$_REQUEST['tp8_lokasi'];
$tp8_pmarka=$_REQUEST['tp8_pmarka'];
$tp8_lmarka=$_REQUEST['tp8_lmarka'];
$tp9_lokasi=$_REQUEST['tp9_lokasi'];
$tp9_pmarka=$_REQUEST['tp9_pmarka'];
$tp9_lmarka=$_REQUEST['tp9_lmarka'];
$tp10_lokasi=$_REQUEST['tp10_lokasi'];
$tp10_pmarka=$_REQUEST['tp10_pmarka'];
$tp10_lmarka=$_REQUEST['tp10_lmarka'];
$marka_p=$_REQUEST['marka_p'];
$marka_i=$_REQUEST['marka_i'];

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
<table width="900" border="0" cellpadding="2" cellspacing="2">
           <?php
  //if ($_SESSION['tipe']=="2")
  //{
  ?>  
  <tr>
    <td width="499"><a href="?act=add&do=data.parkir&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Parkir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  //}
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.parkir">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="th_pengadaan" <?php if ($kategori=="th_pengadaan") echo "selected"; ?>>Tahun Pengadaan</option>
	<option value="kondisi" <?php if ($kategori=="kondisi") echo "selected"; ?>>Kondisi</option>
	<option value="lokasi" <?php if ($kategori=="lokasi") echo "selected"; ?>>Lokasi</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="387" align="right"><a href="excel_parkir.php?do=data.parkir&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.parkir&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="900">
  <tr class="tdtitle_white">
	<td rowspan="2" colspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td rowspan="2" width="250" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Marka Batangan</td>
	<td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Tahun Pengadaan</td>
	<td rowspan="2" width="200" background="images/bgcell.gif" height="25" align="center">Lokasi</td>            
  </tr>
  <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">I (m)</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
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
    <td height="25" align="center"><input type="text" name="nama_jalan" size="33" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan4.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="marka_p" size="5" class="inputbox" value="<?php echo $marka_p; ?>"></td>
    <td height="25" align="center"><input type="text" name="marka_i" size="5" class="inputbox" value="<?php echo $marka_i; ?>"></td>
    <td height="25" align="center">auto</td>
    <td height="25" align="center">
		<select name="kondisi" class="inputbox">
			<option value="Baik" <?php if ($kondisi=="Baik") { echo "selected"; } ?>>Baik</option>
			<option value="Pudar" <?php if ($kondisi=="Pudar") { echo "selected"; } ?>>Pudar</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="th_pengadaan" size="5" value="<?php echo $th_pengadaan; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="35" value="<?php echo $lokasi; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_parkir where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_parkir.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.parkir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="33" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan4.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="marka_p" size="5" value="<?php echo $row[marka_p]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="marka_i" size="5" value="<?php echo $row[marka_i]; ?>" class="inputbox"></td>
    <td height="25" align="center">auto</td>
    <td height="25" align="center">
	<select name="kondisi" class="inputbox">
			<option value="Baik" <?php if ($row[kondisi]=="Baik") { echo "selected"; } ?>>Baik</option>
			<option value="Pudar" <?php if ($$row[kondisi]=="Pudar") { echo "selected"; } ?>>Pudar</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="th_pengadaan" size="5" value="<?php echo $row[th_pengadaan]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="35" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select * from lal_parkir where nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select * from lal_parkir where kondisi like '%$key%' order by id desc"; }
  elseif ($kategori=="th_pengadaan")
  {  $strsql="select * from lal_parkir where th_pengadaan like '%$key%' order by id desc"; }
   elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_parkir where lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_parkir order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.parkir&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.parkir&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_p]; ?></td>
    <td height="25" align="center"><?php echo $row[marka_i]; ?></td>
	<td height="25" align="center"><?php echo  $row[marka_p]+$row[marka_i]  ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[th_pengadaan]; ?></td>
	<td height="25" align="left"><?php echo $row[lokasi]; ?></td>
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