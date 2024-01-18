<?php
$nama_simpang=$_REQUEST['nama_simpang'];
$jumlah_fase=$_REQUEST['jumlah_fase'];
$nama_kaki=$_REQUEST['nama_kaki'];
$lebar=$_REQUEST['lebar'];
$rambu=$_REQUEST['rambu'];
$stopline=$_REQUEST['stopline'];
$ltor=$_REQUEST['ltor'];
$merah=$_REQUEST['merah'];
$kuning=$_REQUEST['kuning'];
$hijau=$_REQUEST['hijau'];
$motor=$_REQUEST['motor'];
$mobil=$_REQUEST['mobil'];
$mpu=$_REQUEST['mpu'];
$bus_truk=$_REQUEST['bus_truk'];
$unmotor=$_REQUEST['unmotor'];
$jarak=$_REQUEST['jarak'];
$kapasitas=$_REQUEST['kapasitas'];
$panjang_antri=$_REQUEST['panjang_antri'];
$id_simpang=$_REQUEST['id_simpang'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_simpang_apill where id='$id'");
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
    <td width="59"><div align="left"><img src="images/searchtext.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Simpang Apill</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Simpang Apill: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_simapil.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.simpang_apill"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1290" border="0" cellpadding="2" cellspacing="2">
	<?php
	if ($_SESSION['tipe']=="2")
	{
	?>
  <tr>
    <td width="458"><a href="?act=add&do=data.simpang_apill&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Simpang Apill Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <?php
  }
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.simpang_apill">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="458" align="right"><a href="index.php?do=data.simpang_apill&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1290">
  <tr class="tdtitle_white">
	<td rowspan="2" colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="2" width="180" background="images/bgcell.gif" height="25" align="center">Nama Simpang</td>
    <td rowspan="2" width="150" background="images/bgcell.gif" height="25" align="center">Nama Kaki</td>
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Lebar Pendekat (m)</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Rambu APILL</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Marka Stopline</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">LTOR/Belok Kiri Langsung</td>    
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Waktu Siklus (detik)</td>    
    <td colspan="5" background="images/bgcell.gif" height="25" align="center">Volume (kend/jam)</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Jarak Parkir ke Simpang (m)</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Kapasitas (smp/jam)</td>    
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Panjang Antrian (m)</td>    
  </tr>
  <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">Merah</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Kuning</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Hijau</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Motor</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Mobil</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">MPU</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Bus/Truk</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Unmotor</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_simapil.php" name="frmadd">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_simpang" value="<?php echo $id_simpang; ?>">
    <td align="center" width="40"><a href="index.php?do=data.simpang_apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="10" value="<?php echo $nama_simpang; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_simpang.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="nama_kaki" size="15" value="<?php echo $nama_kaki; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lebar" size="7" value="<?php echo $lebar; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($rambu=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($rambu=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="stopline" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($stopline=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($stopline=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="ltor" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($ltor=='1') {echo "selected";}?>>Iya</option>
			<option value="2" <?php if($ltor=='2') {echo "selected";}?>>Tidak</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="merah" size="5" value="<?php echo $merah; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kuning" size="5" value="<?php echo $kuning; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="hijau" size="5" value="<?php echo $hijau; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="motor" size="5" value="<?php echo $motor; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mobil" size="5" value="<?php echo $mobil; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mpu" size="5" value="<?php echo $mpu; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="bus_truk" size="5" value="<?php echo $bus_truk; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="unmotor" size="5" value="<?php echo $unmotor; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jarak" size="5" value="<?php echo $jarak; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kapasitas" size="5" value="<?php echo $kapasitas; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_antri" size="5" value="<?php echo $panjang_antri; ?>" class="inputbox"></td>
  </tr>
  </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.nama_simpang, b.jumlah_fase from lal_simpang_apill a, lal_simpang b where a.id_simpang=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_simapil.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_simpang" value="<?php echo $row[id_simpang]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.simpang_apill"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="10" value="<?php echo $row[nama_simpang]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_simpang.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="nama_kaki" size="15" value="<?php echo $row[nama_kaki]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lebar" size="7" value="<?php echo $row[lebar]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[rambu]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[rambu]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="stopline" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[stopline]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[stopline]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="ltor" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[ltor]=='1') {echo "selected";}?>>Iya</option>
			<option value="2" <?php if($row[ltor]=='2') {echo "selected";}?>>Tidak</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="merah" size="5" value="<?php echo $row[merah]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kuning" size="5" value="<?php echo $row[kuning]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="hijau" size="5" value="<?php echo $row[hijau]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="motor" size="5" value="<?php echo $row[motor]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mobil" size="5" value="<?php echo $row[mobil]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mpu" size="5" value="<?php echo $row[mpu]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="bus_truk" size="5" value="<?php echo $row[bus_truk]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="unmotor" size="5" value="<?php echo $row[unmotor]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jarak" size="5" value="<?php echo $row[jarak]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kapasitas" size="5" value="<?php echo $row[kapasitas]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_antri" size="5" value="<?php echo $row[panjang_antri]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_simpang")
  {  $strsql="select a.*,b.nama_simpang, b.jumlah_fase from lal_simpang_apill a, lal_simpang b where a.id_simpang=b.id and b.nama_simpang like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.nama_simpang, b.jumlah_fase from lal_simpang_apill a, lal_simpang b where a.id_simpang=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.simpang_apill&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.simpang_apill&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[nama_kaki]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[rambu]=="1") {echo "Ada";}
		if($row[rambu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[stopline]=="1") {echo "Ada";}
		if($row[stopline]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[ltor]=="1") {echo "Iya";}
		if($row[ltor]=="2") {echo "Tidak";}
	?>
	</td>
	<td height="25" align="right"><?php echo $row[merah]; ?></td>
	<td height="25" align="right"><?php echo $row[kuning]; ?></td>
	<td height="25" align="right"><?php echo $row[hijau]; ?></td>
	<td height="25" align="right"><?php echo $row[motor]; ?></td>
	<td height="25" align="right"><?php echo $row[mobil]; ?></td>
	<td height="25" align="right"><?php echo $row[mpu]; ?></td>
	<td height="25" align="right"><?php echo $row[bus_truk]; ?></td>
	<td height="25" align="right"><?php echo $row[unmotor]; ?></td>
	<td height="25" align="right"><?php echo $row[jarak]; ?></td>
	<td height="25" align="right"><?php echo $row[kapasitas]; ?></td>
	<td height="25" align="right"><?php echo $row[panjang_antri]; ?></td>
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