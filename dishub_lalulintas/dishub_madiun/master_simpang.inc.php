<?php
$nama_simpang=$_REQUEST['nama_simpang'];
$jumlah_fase=$_REQUEST['jumlah_fase'];
$ke=$_REQUEST['ke'];

$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_simpang where id='$id'");
}
?>
<html>
<head>
<title>Lalu Lintas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css"></head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/searchtext.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Simpang </font></strong></td>
  </tr>
</table>
<table width="821" border="0" cellpadding="2" cellspacing="2">
      <?php
  if ($_SESSION['tipe']=="2")
  {
  ?>
  <tr>
    <td width="430"><a href="?act=add&do=data.simpang&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Peraturan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.simpang">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.peraturan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="400">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="250" background="images/bgcell.gif" height="25" align="center">Nama Simpang </td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jumlah Fase</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_simpang.php" enctype="multipart/form-data">
    <td align="center" width="35"><a href="index.php?do=data.simpang"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="38" value="<?php echo $nama_simpang; ?>" class="inputbox"></td>
	<td align="center">
	<select name="jumlah_fase" class="inputbox">
		<option value="0" <?php if ($jumlah_fase=="0") echo "selected"; ?>>--------</option>
		<option value="1" <?php if ($jumlah_fase=="1") echo "selected"; ?>>1</option>
		<option value="2" <?php if ($jumlah_fase=="2") echo "selected"; ?>>2</option>
		<option value="3" <?php if ($jumlah_fase=="3") echo "selected"; ?>>3</option>
		<option value="4" <?php if ($jumlah_fase=="4") echo "selected"; ?>>4</option>
		<option value="5" <?php if ($jumlah_fase=="5") echo "selected"; ?>>5</option>
		<option value="6" <?php if ($jumlah_fase=="6") echo "selected"; ?>>6</option>
	</select>
	</td>
    </form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from lal_simpang where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_simpang.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.simpang"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="38" value="<?php echo $row[nama_simpang]; ?>" class="inputbox"></td>
	<td align="center">
	<select name="jumlah_fase" class="inputbox">
		<option value="0" <?php if ($row[jumlah_fase]=="0") echo "selected"; ?>>--------</option>
		<option value="1" <?php if ($row[jumlah_fase]=="1") echo "selected"; ?>>1</option>
		<option value="2" <?php if ($row[jumlah_fase]=="2") echo "selected"; ?>>2</option>
		<option value="3" <?php if ($row[jumlah_fase]=="3") echo "selected"; ?>>3</option>
		<option value="4" <?php if ($row[jumlah_fase]=="4") echo "selected"; ?>>4</option>
		<option value="5" <?php if ($row[jumlah_fase]=="5") echo "selected"; ?>>5</option>
		<option value="6" <?php if ($row[jumlah_fase]=="6") echo "selected"; ?>>6</option>
	</select>
	</td>
    </form>
  </tr>
  <?php
  }
  if ($kategori=="nama_simpang")
  {  $strsql="select * from lal_simpang where nama_simpang like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_simpang order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.simpang&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.simpang&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
	<td align="center"><?php echo $row[jumlah_fase]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>