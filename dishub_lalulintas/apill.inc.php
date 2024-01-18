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
$cari=$_REQUEST['cari'];
$nama_simpang=$_REQUEST['nama_simpang'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jenis_lampu=$_REQUEST['jenis_lampu'];
$jumlah_warna=$_REQUEST['jumlah_warna'];
$jumlah_dop_neon=$_REQUEST['jumlah_dop_neon'];
$kondisi1=$_REQUEST['kondisi1'];
$tahun_pengadaan=$_REQUEST['tahun_pengadaan'];
$lokasi3=$_REQUEST['lokasi3'];
$patok_pengaman=$_REQUEST['patok_pengaman'];
$jumlah=$_REQUEST['jumlah'];
$kondisi2=$_REQUEST['kondisi2'];
//echo $kategori;
//echo "<br>";
//echo $cari;

if ($act=="del")
{
mysql_query("delete from lal_apill_baru where id='$id'");
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
<table width="1270" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.apill&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Parkir Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
	<td width="544">&nbsp;</td>
	<td width="278">&nbsp;</td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.apill">
	<td>Pencarian :&nbsp;&nbsp; <select name="kategori" class="inputbox" onChange="submit();">
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang</option>
	</select> &nbsp; <input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font></td>
    <td>&nbsp; 	</td>
	<td width="278" align="right"><a href="excel_apill.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.apill&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1270">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Simpang </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Jalan </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Jenis Lampu </td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Jumlah Warna </td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">Jumlah <br>
    Dop / Neon </td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Tahun Pengadaan </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Patok Pengaman</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_apill.php" name="frmadd">
    <td align="center" width="35"><a href="index.php?do=data.apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="25" value="<?php echo $nama_simpang; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="23" value="<?php echo $nama_jalan; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jenis_lampu" class="inputbox">
			<option value="-" selected>------------------</option>
			<option value="1 Warna Kuning" <?php if($jenis_lampu=='1 Warna Kuning') {echo "selected";}?>>1 Warna Kuning</option>
			<option value="1 Warna Merah" <?php if($jenis_lampu=='1 Warna Merah') {echo "selected";}?>>1 Warna Merah</option>
			<option value="2 Warna" <?php if($jenis_lampu=='2 Warna') {echo "selected";}?>>2 Warna</option>
			<option value="3 Warna" <?php if($jenis_lampu=='3 Warna') {echo "selected";}?>>3 Warna</option>
		</select>
	</td>
    <td height="25" align="center">
		<select name="jumlah_warna" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="1" <?php if($jumlah_warna=='1') {echo "selected";}?>>1</option>
			<option value="2" <?php if($jumlah_warna=='2') {echo "selected";}?>>2</option>
			<option value="3" <?php if($jumlah_warna=='3') {echo "selected";}?>>3</option>
		</select>	
	</td>
    <td height="25" align="center"><input type="text" name="jumlah_dop_neon" size="5" maxlength="4" value="<?php echo $jumlah_dop_neon; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="kondisi1" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="Baik" <?php if($kondisi1=='Baik') {echo "selected";}?>>Baik</option>
			<option value="Mati" <?php if($kondisi1=='Mati') {echo "selected";}?>>Mati</option>
		</select>	
	</td>
	<td height="25" align="center"><input name="tahun_pengadaan" type="text" class="inputbox" value="<?php echo $tahun_pengadaan; ?>" size="5" maxlength="4"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="23" value="<?php echo $lokasi; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="patok_pengaman" class="inputbox">
			<option value="-" selected>------------</option>
			<option value="Ada" <?php if($patok_pengaman=='Ada') {echo "selected";}?>>Ada</option>
			<option value="Tidak Ada" <?php if($patok_pengaman=='Tidak Ada') {echo "selected";}?>>Tidak Ada</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="jumlah" size="5" value="<?php echo $jumlah; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kondisi2" size="10" value="<?php echo $kondisi2; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_apill_baru where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_apill.php" name="frmadd">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="25" value="<?php echo $row[nama_simpang]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="23" value="<?php echo $row[nama_jalan]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jenis_lampu" class="inputbox">
			<option value="-" selected>------------------</option>
			<option value="1 Warna Kuning" <?php if($row[jenis_lampu]=='1 Warna Kuning') {echo "selected";}?>>1 Warna Kuning</option>
			<option value="1 Warna Merah" <?php if($row[jenis_lampu]=='1 Warna Merah') {echo "selected";}?>>1 Warna Merah</option>
			<option value="2 Warna" <?php if($row[jenis_lampu]=='2 Warna') {echo "selected";}?>>2 Warna</option>
			<option value="3 Warna" <?php if($row[jenis_lampu]=='3 Warna') {echo "selected";}?>>3 Warna</option>
		</select>
	</td>
    <td height="25" align="center">
		<select name="jumlah_warna" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="1" <?php if($row[jumlah_warna]=='1') {echo "selected";}?>>1</option>
			<option value="2" <?php if($row[jumlah_warna]=='2') {echo "selected";}?>>2</option>
			<option value="3" <?php if($row[jumlah_warna]=='3') {echo "selected";}?>>3</option>
		</select>	
	</td>
    <td height="25" align="center"><input type="text" name="jumlah_dop_neon" size="5" maxlength="4" value="<?php echo $row[jumlah_dop_neon]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="kondisi1" class="inputbox">
			<option value="-" selected>-------</option>
			<option value="Baik" <?php if($row[kondisi1]=='Baik') {echo "selected";}?>>Baik</option>
			<option value="Mati" <?php if($row[kondisi1]=='Mati') {echo "selected";}?>>Mati</option>
		</select>	
	</td>
	<td height="25" align="center"><input name="tahun_pengadaan" type="text" class="inputbox" value="<?php echo $row[tahun_pengadaan]; ?>" size="5" maxlength="4"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="23" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="patok_pengaman" class="inputbox">
			<option value="-" selected>------------</option>
			<option value="Ada" <?php if($row[patok_pengaman]=='Ada') {echo "selected";}?>>Ada</option>
			<option value="Tidak Ada" <?php if($row[patok_pengaman]=='Tidak Ada') {echo "selected";}?>>Tidak Ada</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="jumlah" size="5" value="<?php echo $row[jumlah]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kondisi2" size="10" value="<?php echo $row[kondisi2]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_simpang" and !empty($key))
  {  $strsql="select * from lal_apill_baru where nama_simpang like '%$key%' order by id desc";   }
  else
  {  $strsql="select * from lal_apill_baru order by id desc";   }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70">
	<a href="?do=data.apill&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a>
	</td>
    <td align="center" width="30"><a href="?do=data.apill&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_lampu]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah_warna]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah_dop_neon]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi1]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center"><?php echo $row[patok_pengaman]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi2]; ?></td>
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