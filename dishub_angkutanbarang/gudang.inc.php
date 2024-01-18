<?php
$nama_gudang			=$_REQUEST['nama_gudang'];
$alamat_gudang			=$_REQUEST['alamat_gudang'];
$nama_pemilik			=$_REQUEST['nama_pemilik'];
$alamat_pemilik			=$_REQUEST['alamat_pemilik'];
$id					=$_REQUEST['id'];
$luas_gudang=$_REQUEST['luas_gudang'];

if ($act=="del")
{
mysql_query("delete from bar_lok_gudang where id='$id'");
}
?>

<html>
<head>
<title>Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/searchtext.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Lokasi Gudang </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Lokasi Gudang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_lokasi_gudang.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.gudang"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
elseif ($act=='add')
{
?>
  <table width="500" border="1" cellpadding="1" cellspacing="0">
  <form method="post" action="insert_gudang.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Gudang Baru </td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Nama Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="nama_gudang" size="40" value="<?php echo $nama_gudang; ?>" class="inputbox"  />       </td>
  </tr>
        <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Alamat Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat_gudang" size="50" value="<?php echo $alamat_gudang; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Nama Pemilik </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="nama_pemilik" size="40" value="<?php echo $nama_pemilik; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Alamat Pemilik </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat_pemilik" size="50" value="<?php echo $alamat_pemilik; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Luas Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="luas_gudang" size="15" value="<?php echo $luas_gudang; ?>" class="inputbox"  />       </td>
  </tr>
    <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.gudang"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>

   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from bar_lok_gudang where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_gudang.php">
	 <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table width="500" border="1" cellpadding="1" cellspacing="0">
 <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
        Data Gudang Baru </td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Nama Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td  valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="nama_gudang" size="40" value="<?php echo $row[nama_gudang]; ?>" class="inputbox"  />       </td>
  </tr>
       <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Alamat Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat_gudang" size="50" value="<?php echo $row[alamat_gudang]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Nama Pemilik </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="nama_pemilik" size="40" value="<?php echo $row[nama_pemilik]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Alamat Pemilik </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat_pemilik" size="50" value="<?php echo $row[alamat_pemilik]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Luas Gudang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="luas_gudang" size="15" value="<?php echo $row[luas_gudang]; ?>" class="inputbox"  />       </td>
  </tr>
    <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.gudang"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
  </table>
</form>
	<?php
	}
else
{
?>
<table width="1050" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.gudang"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Gudang"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.gudang">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_gudang" <?php if ($kategori=="nama_gudang") echo "selected"; ?>>Nama Gudang</option>
	<option value="nama_pemilik" <?php if ($kategori=="nama_pemilik") echo "selected"; ?>>Nama Pemilik</option>
	<option value="alamat_gudang" <?php if ($kategori=="alamat_gudang") echo "selected"; ?>>Alamat Gudang</option>
	<option value="alamat_pemilik" <?php if ($kategori=="alamat_pemilik") echo "selected"; ?>>Alamat Pemilik</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_lokasi_gudang.php?do=data.gudang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/excel.jpg" title="Klik disini untuk Cetak Laporan" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="index.php?do=data.gudang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1050">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td colspan="2"  background="images/bgcell.gif" height="25" align="center">Nama</td> 
    <td colspan="2"  background="images/bgcell.gif" height="25" align="center">Alamat</td>                                        
    <td colspan="2"  background="images/bgcell.gif" height="25" align="center" rowspan="2" width="150">Luas Gudang</td>                                        
  </tr>
  <tr class="tdtitle_white">
	<td width="180" background="images/bgcell.gif" height="25" align="center">Gudang</td>              
    <td width="180" background="images/bgcell.gif" height="25" align="center">Pemilik</td>
    <td width="220" background="images/bgcell.gif" height="25" align="center">Gudang</td>
    <td width="220" background="images/bgcell.gif" height="25" align="center">Pemilik</td>
  </tr>
  <?php
  if ($kategori=="nama_gudang")
  {  $strsql="select * from bar_lok_gudang where nama_gudang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_pemilik")
  {  $strsql="select * from bar_lok_gudang where nama_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pemilik")
  {  $strsql="select * from bar_lok_gudang where alamat_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_gudang")
  {  $strsql="select * from bar_lok_gudang where alamat_gudang like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_lok_gudang order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.gudang&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.gudang&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_gudang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_gudang]; ?></td>
	<td height="25" align="left"><?php echo $row[alamat_pemilik]; ?></td>
	<td height="25" align="center"><?php echo $row[luas_gudang]; ?></td>
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
