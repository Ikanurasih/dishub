<?php
$nama_jukir=$_REQUEST['nama_jukir'];
$tmp_lahir=$_REQUEST['tmp_lahir'];
$tgl_lahir=$_REQUEST['tgl_lahir'];
$alamat=$_REQUEST['alamat'];
$lokasi=$_REQUEST['lokasi'];
$titik_parkir=$_REQUEST['titik_parkir'];
$jk=$_REQUEST['jk'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_jukir where id='$id'");
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
    <td width="59"><div align="left"><img src="images/support.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Juru Parkir </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Juru Parkir: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_jukir.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.jukir"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="860" border="0" cellpadding="2" cellspacing="2">
    <?php
  if ($_SESSION['tipe']=="2")
  {
  ?>
  <tr>
    <td><a href="?act=add_jukir&do=data.jukir"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data jukir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.jukir">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jukir" <?php if ($kategori=="nama_jukir") echo "selected"; ?>>Nama Jukir</option>
	<option value="titik_parkir" <?php if ($kategori=="titik_parkir") echo "selected"; ?>>Titik Parkir</option>
	<option value="lokasi" <?php if ($kategori=="lokasi") echo "selected"; ?>>Alamat Lokasi</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.jukir&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="860">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="120" background="images/bgcell.gif" height="25" align="center">Nama Jukir</td>
    <td width="130" background="images/bgcell.gif" height="25" align="center">Tempat, Tgl. Lahir </td>    
    <td width="240" background="images/bgcell.gif" height="25" align="center">Alamat</td>       
    <td width="60" background="images/bgcell.gif" height="25" align="center">Jenis <br>Kelamin</td>       
    <td width="120" background="images/bgcell.gif" height="25" align="center">Titik Parkir</td>       
    <td width="120" background="images/bgcell.gif" height="25" align="center">Alamat Lokasi</td>       
  </tr>
  <?php
  if ($act=='add_jukir')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_jukir.php">
    <td align="center" width="35"><a href="index.php?do=data.jukir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jukir" size="20" value="<?php echo $nama_jukir; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tmp_lahir" size="15" value="<?php echo $tmp_lahir; ?>" class="inputbox">Tgl. Lahir,<br> 
	<input type="text" name="tgl_lahir" size="10" id="tgl_lahir" class="inputbox" value="<?php echo $tgl_lahir; ?>" readonly />
    <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer">
	</td>
    <td height="25" align="center"><textarea name="alamat" class="inputbox" cols="30" rows="5"><?php echo $alamat; ?></textarea></td>
    <td height="25" align="center">
	<select name="jk" class="inputbox2">
	<option value="L" <?php  if ($jk=="L") { echo "selected"; } ?>>L</option>
	<option value="P" <?php  if ($jk=="P") { echo "selected"; } ?>>P</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="titik_parkir" size="20" value="<?php echo $titik_parkir; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lokasi" size="20" value="<?php echo $lokasi; ?>" class="inputbox"></td>
 	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_jukir where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <tr class="text" bgcolor="efefef">
  <form method="post" action="update_jukir.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.jukir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jukir" size="20" value="<?php echo $row[nama_jukir]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tmp_lahir" size="15" value="<?php echo $row[tmp_lahir]; ?>" class="inputbox">Tgl. Lahir,<br> 
	<input type="text" name="tgl_lahir" size="10" id="tgl_lahir" class="inputbox" value="<?php if ($row[tgl_lahir]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_lahir];} ?>" readonly />
    <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer">
	</td>
    <td height="25" align="center"><textarea name="alamat" class="inputbox" cols="30" rows="5"><?php echo $row[alamat]; ?></textarea></td>
    <td height="25" align="center">
	<select name="jk" class="inputbox2">
	<option value="L" <?php  if ($row[jk]=="L") { echo "selected"; } ?>>L</option>
	<option value="P" <?php  if ($row[jk]=="P") { echo "selected"; } ?>>P</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="titik_parkir" size="20" value="<?php echo $row[titik_parkir]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lokasi" size="20" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
 	</form>
  </tr> 
  <?php
  }
  if ($kategori=="nama_jukir")
  {  $strsql="select * from lal_jukir where nama_jukir like '%$key%' order by id desc"; }
  elseif ($kategori=="titik_parkir")
  {  $strsql="select * from lal_jukir where titik_parkir like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_jukir where lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_jukir order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.jukir&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.jukir&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
	<td height="25" align="left"><?php echo $row[nama_jukir]; ?></td>
    <td height="25" align="left"><?php echo $row[tmp_lahir]; ?>, <?php
	  $temp=explode("-",$row[tgl_lahir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[jk]; ?></td>
    <td height="25" align="left"><?php echo $row[titik_parkir]; ?></td>
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