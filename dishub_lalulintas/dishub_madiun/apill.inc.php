<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$warna1_jml=$_REQUEST['warna1_jml'];
$warna1_kondisi=$_REQUEST['warna1_kondisi'];
$warna1_tahun=$_REQUEST['warna1_tahun'];
$warna1_lokasi=$_REQUEST['warna1_lokasi'];
$warna2_jml=$_REQUEST['warna2_jml'];
$warna2_kondisi=$_REQUEST['warna2_kondisi'];
$warna2_tahun=$_REQUEST['warna2_tahun'];
$warna2_lokasi=$_REQUEST['warna2_lokasi'];
$warna3_jml=$_REQUEST['warna3_jml'];
$warna3_kondisi=$_REQUEST['warna3_kondisi'];
$warna3_tahun=$_REQUEST['warna3_tahun'];
$warna3_lokasi=$_REQUEST['warna3_lokasi'];
$id_jalan=$_REQUEST['id_jalan'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_apill where id='$id'");
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
    <td width="59"><div align="left"><img src="images/asterisk.png" width="48" height="46" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Apill</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Apill: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_apill.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.apill"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1320" border="0" cellpadding="2" cellspacing="2">
  <?php
  if ($_SESSION['tipe']=="2")
  {
  ?>
  <tr>
    <td width="458"><a href="?act=add&do=data.apill&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Parkir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.apill">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="dari" <?php if ($kategori=="dari") echo "selected"; ?>>Dari</option>
	<option value="ke" <?php if ($kategori=="ke") echo "selected"; ?>>Ke</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="458" align="right"><a href="index.php?do=data.apill&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1320">
  <tr class="tdtitle_white">
	<td rowspan="2" colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="2" width="180" background="images/bgcell.gif" height="25" align="center">Nama Jalan<br></td>
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Dari</td>    
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Ke</td>       
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">1 Warna</td>      
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">2 Warna</td>      
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">3 Warna</td>      
  </tr>
  <tr class="tdtitle_white">
	<td width="60" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
	<td width="70" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Thn. Pengadaan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
	<td width="70" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Thn. Pengadaan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
	<td width="70" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Thn. Pengadaan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_apill.php" name="frmadd">
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="40"><a href="index.php?do=data.apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="warna1_jml" size="5" value="<?php echo $warna1_jml; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna1_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($warna1_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($warna1_kondisi=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($warna1_kondisi=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna1_tahun" size="5" maxlength="4" value="<?php echo $warna1_tahun; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna1_lokasi" size="10" value="<?php echo $warna1_lokasi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="warna2_jml" size="5" value="<?php echo $warna2_jml; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna2_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($warna2_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($warna2_kondisi=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($warna2_kondisi=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna2_tahun" size="5" maxlength="4" value="<?php echo $warna2_tahun; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna2_lokasi" size="10" value="<?php echo $warna2_lokasi; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna3_jml" size="5" value="<?php echo $warna3_jml; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna3_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($warna3_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($warna3_kondisi=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($warna3_kondisi=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna3_tahun" size="5" maxlength="4" value="<?php echo $warna3_tahun; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna3_lokasi" size="10" value="<?php echo $warna3_lokasi; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_apill.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="warna1_jml" size="5" value="<?php echo $row[warna1_jml]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna1_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[warna1_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[warna1_kondisi]=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($row[warna1_kondisi]=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna1_tahun" size="5" maxlength="4" value="<?php echo $row[warna1_tahun]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna1_lokasi" size="10" value="<?php echo $row[warna1_lokasi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="warna2_jml" size="5" value="<?php echo $row[warna2_jml]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna2_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[warna2_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[warna2_kondisi]=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($row[warna2_kondisi]=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna2_tahun" size="5" maxlength="4" value="<?php echo $row[warna2_tahun]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna2_lokasi" size="10" value="<?php echo $row[warna2_lokasi]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna3_jml" size="5" value="<?php echo $row[warna3_jml]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="warna3_kondisi" class="inputbox">
			<option value="0" selected>-------</option>
			<option value="1" <?php if($row[warna3_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[warna3_kondisi]=='2') {echo "selected";}?>>Mati</option>
			<option value="3" <?php if($row[warna3_kondisi]=='3') {echo "selected";}?>>Rusak</option>
		</select>
	</td>
    <td height="25" align="center"><input type="text" name="warna3_tahun" size="5" maxlength="4" value="<?php echo $row[warna3_tahun]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="warna3_lokasi" size="10" value="<?php echo $row[warna3_lokasi]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_apill a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.apill&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.apill&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="center"><?php echo $row[warna1_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna1_kondisi]=="1") {echo "Baik";}
		if($row[warna1_kondisi]=="2") {echo "Mati";}
		if($row[warna1_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna1_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna1_lokasi]; ?></td>
	<td height="25" align="center"><?php echo $row[warna2_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna2_kondisi]=="1") {echo "Baik";}
		if($row[warna2_kondisi]=="2") {echo "Mati";}
		if($row[warna2_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna2_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna2_lokasi]; ?></td>
	<td height="25" align="center"><?php echo $row[warna3_jml]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[warna3_kondisi]=="1") {echo "Baik";}
		if($row[warna3_kondisi]=="2") {echo "Mati";}
		if($row[warna3_kondisi]=="3") {echo "Rusak";}
	?>
	</td>
    <td height="25" align="center"><?php echo $row[warna3_tahun]; ?></td>
    <td height="25" align="left"><?php echo $row[warna3_lokasi]; ?></td>
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