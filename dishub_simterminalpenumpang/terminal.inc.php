<?php
$id	=$_REQUEST['id'];
$jenis=$_REQUEST['jenis'];
$jumlah=$_REQUEST['jumlah'];

if ($act=="del")
{
mysql_query("delete from ter_fasilitas where id='$id'");
}
?>

<html>
<head>
<title>PAJAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/grafik.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Fasilitas Terminal </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Fasilitas Terminal: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_terminal.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.terminal"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
 <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frm_add_user" method="post" action="insert_terminal.php" enctype="multipart/form-data">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Fasilitas Terminal </div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="status" size="20" value="<?php echo $status; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="jenis" size="40" value="<?php echo $jenis; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Uraian/Keperuntukan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="uraian" size="45" value="<?php echo $uraian; ?>" class="inputbox"   /></td>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kondisi</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; 
	  <select name="kondisi" class="inputbox">
			<option value="Baik" <?php if ($kondisi=="Baik") { echo "selected"; } ?>>Baik</option>
			<option value="Sedang" <?php if ($kondisi=="Sedang") { echo "selected"; } ?>>Sedang</option>
			<option value="Rusak" <?php if ($kondisi=="Rusak") { echo "selected"; } ?>>Rusak</option>
	  </select>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="jumlah" size="10" value="<?php echo $jumlah; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Gambar/Foto</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="file" name="upload_file" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.terminal"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_fasilitas where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frm_add_user" method="post" action="update_terminal.php" enctype="multipart/form-data">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Fasilitas Terminal </div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="status" size="20" value="<?php echo $row[status]; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="jenis" size="40" value="<?php echo $row[jenis]; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Uraian/Keperuntukan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="uraian" size="45" value="<?php echo $row[uraian]; ?>" class="inputbox"   /></td>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kondisi</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; 
	  <select name="kondisi" class="inputbox">
			<option value="Baik" <?php if ($row[kondisi]=="Baik") { echo "selected"; } ?>>Baik</option>
			<option value="Sedang" <?php if ($row[kondisi]=="Sedang") { echo "selected"; } ?>>Sedang</option>
			<option value="Rusak" <?php if ($row[kondisi]=="Rusak") { echo "selected"; } ?>>Rusak</option>
	  </select>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="jumlah" size="10" value="<?php echo $row[jumlah]; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Gambar/Foto</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; 	<?php
	  if ($row[gambar]<>'')
	  {
		echo "<a href='files/$row[gambar]' target='_blank' class=link><img src='files/$row[gambar]' width='80' height='80'/></a><br><br>";
	  }
	  ?>
	  &nbsp; <a href="#" onClick='upload("view_upload.php?id=<?php echo $row[id]; ?>&cek=2")'>Upload</a> | <a href="javascript:document.location.reload();">Reload</a> 
	  <?php if ($row[gambar]<>'') { ?>| <a href="hapus_file.php?id=<?php echo $row[id]; ?>&gambar=<?php echo $row[gambar]; ?>&cek=2" onClick="return confirmdelete('File ini');">Hapus File</a><?php } ?>
	</td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.terminal"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
  <?php
  }else{
  ?>
  <table width="1050" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.terminal"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.terminal">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis" <?php if ($kategori=="jenis") echo "selected"; ?>>Jenis</option>
	<option value="uraian" <?php if ($kategori=="uraian") echo "selected"; ?>>Uraian / Keperuntukan</option>
	<option value="jumlah" <?php if ($kategori=="jumlah") echo "selected"; ?>>Jumlah</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="158"><div align="right"><a href="excel_fasilitas_terminal.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.terminal&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1050">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="50" background="images/bgcell.gif" height="25" align="center">No</td>
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Status</td> 
    <td   width="200" background="images/bgcell.gif" height="25" align="center">Jenis</td> 
	<td   width="200" background="images/bgcell.gif" height="25" align="center">Uraian / Keperuntukan</td> 
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Jumlah</td>  
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Gambar / Foto</td>                                        
   </tr>
  <?php
  if ($kategori=="jenis")
  {  $strsql="select * from ter_fasilitas where jenis like '%$key%' order by id desc"; }
  elseif ($kategori=="uraian")
  {  $strsql="select * from ter_fasilitas where uraian like '%$key%' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select * from ter_fasilitas where jumlah like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_fasilitas order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="70"><a href="?do=data.terminal&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.terminal&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
   	<td align="center"><?php echo $NO."."; ?></td>
	<td height="25" align="left"><?php echo $row[status]; ?></td>
	<td height="25" align="left"><?php echo $row[jenis]; ?></td>
	<td height="25" align="left"><?php echo $row[uraian]; ?></td>
	<td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
	<td height="25" align="center"><a href='<?php echo "files/".$row[gambar];?>' target='_blank'><img src="<?php echo "files/". $row[gambar]; ?>"  width='100' height='100'/></a></td>
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
