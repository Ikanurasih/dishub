<?php
$nama=$_REQUEST['nama'];
$pangkal=$_REQUEST['pangkal'];
$ujung=$_REQUEST['ujung'];
$status=$_REQUEST['status'];
$kelas=$_REQUEST['kelas'];

$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_pangkal where id='$id'");
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
    <td width="59"><div align="left"><img src="images/checkin.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Pangkal </font></strong></td>
  </tr>
</table>
<table width="821" border="0" cellpadding="2" cellspacing="2">
  <?php
  if ($_SESSION['tipe']=="2")
  {
  ?>
  <tr>
    <td width="430"><a href="?act=add&do=data.master_pangkal&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Peraturan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.master_pangkal">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama Jalan</option>
	<option value="pangkal" <?php if ($kategori=="pangkal") echo "selected"; ?>>Pangkal</option>
	<option value="ujung" <?php if ($kategori=="ujung") echo "selected"; ?>>Ujung</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.peraturan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="770">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Jalan </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Pangkal </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Ujung </td
    ><td width="100" background="images/bgcell.gif" height="25" align="center">Status</td
    ><td width="50" background="images/bgcell.gif" height="25" align="center">Kelas</td
  ></tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_pangkal.php" enctype="multipart/form-data">
    <td align="center" width="35"><a href="index.php?do=data.master_pangkal"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="25" value="<?php echo $nama; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="pangkal" size="25" value="<?php echo $pangkal; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="ujung" size="25" value="<?php echo $ujung; ?>" class="inputbox"></td>
	<td align="center">
	<select name="status" class="inputbox">
		<option value="0" <?php if ($status=="0") echo "selected"; ?>>------------</option>
		<option value="KOTA" <?php if ($status=="KOTA") echo "selected"; ?>>KOTA</option>
		<option value="PROPINSI" <?php if ($status=="PROPINSI") echo "selected"; ?>>PROPINSI</option>
		<option value="NASIONAL" <?php if ($status=="NASIONAL") echo "selected"; ?>>NASIONAL</option>
	</select>
	</td>
    <td height="25" align="center">	<select name="kelas" class="inputbox">
		<option value="0" <?php if ($kelas=="0") echo "selected"; ?>>-------</option>
		<option value="I" <?php if ($kelas=="I") echo "selected"; ?>>I</option>
		<option value="II" <?php if ($kelas=="II") echo "selected"; ?>>II</option>
		<option value="III" <?php if ($kelas=="III") echo "selected"; ?>>III</option>
		<option value="IIIA" <?php if ($kelas=="IIIA") echo "selected"; ?>>IIIA</option>
		<option value="IIIB" <?php if ($kelas=="IIIB") echo "selected"; ?>>IIIB</option>
		<option value="IIIC" <?php if ($kelas=="IIIC") echo "selected"; ?>>IIIC</option>
	</select>
</td>
    </form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from lal_pangkal where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_pangkal.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.master_pangkal"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="25" value="<?php echo $row[nama]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="pangkal" size="25" value="<?php echo $row[pangkal]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="ujung" size="25" value="<?php echo $row[ujung]; ?>" class="inputbox"></td>
	<td align="center">
	<select name="status" class="inputbox">
		<option value="0" <?php if ($row[status]=="0") echo "selected"; ?>>------------</option>
		<option value="KOTA" <?php if ($row[status]=="KOTA") echo "selected"; ?>>KOTA</option>
		<option value="PROPINSI" <?php if ($row[status]=="PROPINSI") echo "selected"; ?>>PROPINSI</option>
		<option value="NASIONAL" <?php if ($row[status]=="NASIONAL") echo "selected"; ?>>NASIONAL</option>
	</select>
	</td>
    <td height="25" align="center">	<select name="kelas" class="inputbox">
		<option value="0" <?php if ($row[kelas]=="0") echo "selected"; ?>>-------</option>
		<option value="I" <?php if ($row[kelas]=="I") echo "selected"; ?>>I</option>
		<option value="II" <?php if ($row[kelas]=="II") echo "selected"; ?>>II</option>
		<option value="III" <?php if ($row[kelas]=="III") echo "selected"; ?>>III</option>
		<option value="IIIA" <?php if ($row[kelas]=="IIIA") echo "selected"; ?>>IIIA</option>
		<option value="IIIB" <?php if ($row[kelas]=="IIIB") echo "selected"; ?>>IIIB</option>
		<option value="IIIC" <?php if ($row[kelas]=="IIIC") echo "selected"; ?>>IIIC</option>
	</select>
</td>
    </form>
  </tr>
  <?php
  }
  if ($kategori=="nama")
  {  $strsql="select * from lal_pangkal where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="pangkal")
  {  $strsql="select * from lal_pangkal where pangkal like '%$key%' order by id desc"; }
  elseif ($kategori=="ujung")
  {  $strsql="select * from lal_pangkal where ujung like '%$key%' order by id desc"; }
  else
  {
  $strsql="select * from lal_pangkal order by id desc";
  } 
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
    <td align="center" width="50"><a href="?do=data.master_pangkal&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.master_pangkal&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
	<td align="left"><?php echo $row[pangkal]; ?></td>
	<td align="left"><?php echo $row[ujung]; ?></td>
	<td align="center"><?php echo $row[status]; ?></td>
	<td align="center"><?php echo $row[kelas]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>