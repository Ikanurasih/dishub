<?php
$jenis_peraturan=$_REQUEST['jenis_peraturan'];
$judul_peraturan=$_REQUEST['judul_peraturan'];
$nomor=$_REQUEST['nomor'];
$tahun=$_REQUEST['tahun'];
$id=$_REQUEST['id'];
if ($act=="del")
{
mysql_query("delete from lal_pp where id='$id'");
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
    <td width="59"><div align="left"><img src="images/grafik.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Peraturan </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Peraturan: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_peraturan.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.peraturan"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="821" border="0" cellpadding="2" cellspacing="2">
             <?php
  //if ($_SESSION['tipe']=="2")
  //{
  ?>  
  <tr>
    <td width="430"><a href="?act=add_peraturan&do=data.peraturan&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Peraturan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  //}
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.peraturan">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis_peraturan" <?php if ($kategori=="jenis_peraturan") echo "selected"; ?>>Jenis Peraturan</option>
	<option value="judul_peraturan" <?php if ($kategori=="judul_peraturan") echo "selected"; ?>>Judul Peraturan</option>
	<option value="nomor" <?php if ($kategori=="nomor") echo "selected"; ?>>Nomor</option>
	<option value="tahun" <?php if ($kategori=="tahun") echo "selected"; ?>>Tahun</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_peraturan.php?do=data.kios_shelter&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.peraturan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="820">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="200" background="images/bgcell.gif" height="25" align="center">Jenis Peraturan</td>
    <td width="300" background="images/bgcell.gif" height="25" align="center">Judul Peraturan </td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">Nomor</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Tahun</td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">File</td>
  </tr>
  <?php
  if ($act=='add_peraturan')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_peraturan.php" enctype="multipart/form-data">
    <td align="center" width="35"><a href="index.php?do=data.peraturan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="jenis_peraturan" size="20" value="<?php echo $jenis_peraturan; ?>" class="inputbox"></td>
    <td height="25" align="center"><textarea name="judul_peraturan" class="inputbox" cols="30" rows="5"><?php echo $judul_peraturan; ?></textarea></td>
    <td height="25" align="center"><input type="text" name="nomor" size="15" value="<?php echo $nomor; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="file" name="upload_file"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from lal_pp where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_peraturan.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.peraturan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="jenis_peraturan" size="20" value="<?php echo $row[jenis_peraturan]; ?>" class="inputbox"></td>
    <td height="25" align="center"><textarea name="judul_peraturan" class="inputbox" cols="30" rows="5"><?php echo $row[judul_peraturan]; ?></textarea></td>
    <td height="25" align="center"><input type="text" name="nomor" size="15" value="<?php echo $row[nomor]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $row[tahun]; ?>" class="inputbox"></td>
    <td height="25" align="center" width="300">	<?php
	  if ($row[upload_file]<>'')
	  {
		echo "<a href='files/$row[upload_file]' target='_blank' class=link>$row[upload_file]</a><br><br>";
	  }
	  ?>
	  &nbsp; <a href="#" onClick='upload("view_upload.php?id=<?php echo $row[id]; ?>&cek=1")'>Upload</a> | <a href="javascript:document.location.reload();">Reload</a> 
	  <?php if ($row[upload_file]<>'') { ?>| <a href="hapus_file.php?id=<?php echo $row[id]; ?>&upload_file=<?php echo $row[upload_file]; ?>&cek=1" onClick="return confirmdelete('File ini');">Hapus File</a><?php } ?></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="jenis_peraturan")
  {  $strsql="select * from lal_pp where jenis_peraturan like '%$key%' order by id desc"; }
  elseif ($kategori=="judul_peraturan")
  {  $strsql="select * from lal_pp where judul_peraturan like '%$key%' order by id desc"; }
  elseif ($kategori=="nomor")
  {  $strsql="select * from lal_pp where nomor like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun")
  {  $strsql="select * from lal_pp where tahun like '%$key%' order by id desc"; } 
  else
  {  $strsql="select * from lal_pp order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.peraturan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.peraturan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[jenis_peraturan]; ?></td>
    <td height="25" align="left"><?php echo $row[judul_peraturan]; ?></td>
    <td height="25" align="center"><?php echo $row[nomor]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun]; ?></td>
    <td height="25" align="center">
	<?php
	if ($row[upload_file]<>'')
	{
	?>
	<a href="files/<?php echo $row[upload_file]; ?>" target="_blank">[Lihat]</a>
	<?php
	}
	else
	{ echo "&nbsp;"; }
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