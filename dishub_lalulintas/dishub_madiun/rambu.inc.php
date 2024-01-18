<?php
$nama=$_REQUEST['nama'];
$ujung=$_REQUEST['ujung'];
$pangkal=$_REQUEST['pangkal'];
$jenis_rambu=$_REQUEST['jenis_rambu'];
$no_rambu=$_REQUEST['no_rambu'];
$no_tabel=$_REQUEST['no_tabel'];
$posisi=$_REQUEST['posisi'];
$spesifikasi=$_REQUEST['spesifikasi'];
$kondisi=$_REQUEST['kondisi'];
$lokasi=$_REQUEST['lokasi'];
$gambar=$_REQUEST['gambar'];
$id_pangkal=$_REQUEST['id_pangkal'];

$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_rambu where id='$id'");
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
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Rambu </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Rambu: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_rambu.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.rambu"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1190" border="0" cellpadding="2" cellspacing="2">
<?php
if ($_SESSION['tipe']=="2")
{
?>
  <tr>
    <td width="458"><a href="?act=add&do=data.rambu&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Simpang Apill Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
<?php
}
?> 
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.rambu">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="458" align="right"><a href="index.php?do=data.rambu&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1190">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="130" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td width="130" background="images/bgcell.gif" height="25" align="center">Pangkal</td>
    <td width="130" background="images/bgcell.gif" height="25" align="center">Ujung</td>
    <td width="90" background="images/bgcell.gif" height="25" align="center">Jenis Rambu</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">No. Rambu</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">No. Tabel</td>
    <td width="60" background="images/bgcell.gif" height="25" align="center">Posisi</td>    
    <td width="100" background="images/bgcell.gif" height="25" align="center">Spesifikasi</td>     
    <td width="50" background="images/bgcell.gif" height="25" align="center">Kondisi</td>     
    <td width="100" background="images/bgcell.gif" height="25" align="center">Lokasi</td>     
    <td width="230" background="images/bgcell.gif" height="25" align="center">Gambar</td>     
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_rambu.php" name="frmadd" enctype="multipart/form-data">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_pangkal" value="<?php echo $id_pangkal; ?>">
    <td align="center" width="40"><a href="index.php?do=data.rambu"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="15" value="<?php echo $nama; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_pangkal.php")'>	</td>
    <td height="25" align="center"><input type="text" name="pangkal" size="15" value="<?php echo $pangkal; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ujung" size="15" value="<?php echo $ujung; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center">
		<select name="jenis_rambu" class="inputbox">
			<option value="-" selected>---------------</option>
			<option value="PERINTAH" <?php if($jenis_rambu=='PERINTAH') {echo "selected";}?>>PERINTAH</option>
			<option value="LARANGAN" <?php if($jenis_rambu=='LARANGAN') {echo "selected";}?>>LARANGAN</option>
			<option value="PETUNJUK" <?php if($jenis_rambu=='PETUNJUK') {echo "selected";}?>>PETUNJUK</option>
			<option value="PERINGATAN" <?php if($jenis_rambu=='PERINGATAN') {echo "selected";}?>>PERINGATAN</option>
		</select>	</td>
	<td height="25" align="center"><input type="text" name="no_rambu" size="5" value="<?php echo $no_rambu; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="no_tabel" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="I" <?php if($no_tabel=='I') {echo "selected";}?>>I</option>
			<option value="IIA" <?php if($no_tabel=='IIA') {echo "selected";}?>>IIA</option>
			<option value="IIB" <?php if($no_tabel=='IIB') {echo "selected";}?>>IIB</option>
			<option value="III" <?php if($no_tabel=='III') {echo "selected";}?>>III</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="posisi" class="inputbox">
			<option value="-" selected>----------</option>
			<option value="KANAN" <?php if($posisi=='KANAN') {echo "selected";}?>>KANAN</option>
			<option value="TENGAH" <?php if($posisi=='TENGAH') {echo "selected";}?>>TENGAH</option>
			<option value="KIRI" <?php if($posisi=='KIRI') {echo "selected";}?>>KIRI</option>
		</select>	
	</td>
	<td height="25" align="center">
		<select name="spesifikasi" class="inputbox">
			<option value="-" selected>--------------------</option>
			<option value="STANDART" <?php if($spesifikasi=='STANDART') {echo "selected";}?>>STANDART</option>
			<option value="TIDAK STANDART" <?php if($spesifikasi=='TIDAK STANDART') {echo "selected";}?>>TIDAK STANDART</option>
		</select>	
	</td>
	<td height="25" align="center">
		<select name="kondisi" class="inputbox">
			<option value="-" selected>----------</option>
			<option value="BAIK" <?php if($kondisi=='BAIK') {echo "selected";}?>>BAIK</option>
			<option value="RUSAK" <?php if($kondisi=='RUSAK') {echo "selected";}?>>RUSAK</option>
			<option value="PUDAR" <?php if($kondisi=='PUDAR') {echo "selected";}?>>PUDAR</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="lokasi" size="15" value="<?php echo $lokasi; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="file" name="gambar" size="15" class="inputbox"></td>
  </tr>
  </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.nama, b.pangkal, b.ujung from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_rambu.php" name="frmadd" enctype="multipart/form-data">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_pangkal" value="<?php echo $row[id_pangkal]; ?>">
    <td align="center" width="40"><a href="index.php?do=data.rambu"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="15" value="<?php echo $row[nama]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_pangkal.php")'>	</td>
    <td height="25" align="center"><input type="text" name="pangkal" size="15" value="<?php echo $row[pangkal]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ujung" size="15" value="<?php echo $row[ujung]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center">
		<select name="jenis_rambu" class="inputbox">
			<option value="-" selected>---------------</option>
			<option value="PERINTAH" <?php if($row[jenis_rambu]=='PERINTAH') {echo "selected";}?>>PERINTAH</option>
			<option value="LARANGAN" <?php if($row[jenis_rambu]=='LARANGAN') {echo "selected";}?>>LARANGAN</option>
			<option value="PETUNJUK" <?php if($row[jenis_rambu]=='PETUNJUK') {echo "selected";}?>>PETUNJUK</option>
			<option value="PERINGATAN" <?php if($row[jenis_rambu]=='PERINGATAN') {echo "selected";}?>>PERINGATAN</option>
		</select>	</td>
	<td height="25" align="center"><input type="text" name="no_rambu" size="5" value="<?php echo $row[no_rambu]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="no_tabel" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="I" <?php if($row[no_tabel]=='I') {echo "selected";}?>>I</option>
			<option value="IIA" <?php if($row[no_tabel]=='IIA') {echo "selected";}?>>IIA</option>
			<option value="IIB" <?php if($row[no_tabel]=='IIB') {echo "selected";}?>>IIB</option>
			<option value="III" <?php if($row[no_tabel]=='III') {echo "selected";}?>>III</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="posisi" class="inputbox">
			<option value="-" selected>----------</option>
			<option value="KANAN" <?php if($row[posisi]=='KANAN') {echo "selected";}?>>KANAN</option>
			<option value="TENGAH" <?php if($row[posisi]=='TENGAH') {echo "selected";}?>>TENGAH</option>
			<option value="KIRI" <?php if($row[posisi]=='KIRI') {echo "selected";}?>>KIRI</option>
		</select>	
	</td>
	<td height="25" align="center">
		<select name="spesifikasi" class="inputbox">
			<option value="-" selected>--------------------</option>
			<option value="STANDART" <?php if($row[spesifikasi]=='STANDART') {echo "selected";}?>>STANDART</option>
			<option value="TIDAK STANDART" <?php if($row[spesifikasi]=='TIDAK STANDART') {echo "selected";}?>>TIDAK STANDART</option>
		</select>	
	</td>
	<td height="25" align="center">
		<select name="kondisi" class="inputbox">
			<option value="-" selected>----------</option>
			<option value="BAIK" <?php if($row[kondisi]=='BAIK') {echo "selected";}?>>BAIK</option>
			<option value="RUSAK" <?php if($row[kondisi]=='RUSAK') {echo "selected";}?>>RUSAK</option>
			<option value="PUDAR" <?php if($row[kondisi]=='PUDAR') {echo "selected";}?>>PUDAR</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="lokasi" size="15" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
	<td height="25" align="center"><?php
	  if ($row[gambar]<>'')
	  {
		echo "<a href='files/$row[gambar]' target='_blank' class=link>$row[gambar]</a><br><br>";
	  }
	  ?>
	  &nbsp; <a href="#" onClick='upload("view_upload.php?id=<?php echo $row[id]; ?>&cek=2")'>Upload</a> | <a href="javascript:document.location.reload();">Reload</a> 
	  <?php if ($row[gambar]<>'') { ?>| <a href="hapus_file.php?id=<?php echo $row[id]; ?>&upload_file=<?php echo $row[gambar]; ?>&cek=2" onClick="return confirmdelete('File ini');">Hapus File</a><?php } ?>
	</td>
  </tr>
  </form>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*, b.nama, b.pangkal, b.ujung from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.nama like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*, b.nama, b.pangkal, b.ujung from lal_rambu a, lal_pangkal b where a.id_pangkal=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.rambu&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.rambu&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
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
    <td height="25" align="left"><?php echo $row[pangkal]; ?></td>
    <td height="25" align="left"><?php echo $row[ujung]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_tabel]; ?></td>
    <td height="25" align="center"><?php echo $row[posisi]; ?></td>
    <td height="25" align="center"><?php echo $row[spesifikasi]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center">	<?php
	if ($row[gambar]<>'')
	{
	?>
	<a href="files/<?php echo $row[gambar]; ?>" target="_blank">[Lihat]</a>
	<?php
	}
	else
	{ echo "&nbsp;"; }
	?></td>
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