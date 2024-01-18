<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$panjang=$_REQUEST['panjang'];
$lebar=$_REQUEST['lebar'];
$trotoar=$_REQUEST['trotoar'];
$drainase=$_REQUEST['drainase'];
$bahu=$_REQUEST['bahu'];
$tipe2=$_REQUEST['tipe2'];
$status=$_REQUEST['status'];
$kelas=$_REQUEST['kelas'];
$motor=$_REQUEST['motor'];
$mobil=$_REQUEST['mobil'];
$mpu=$_REQUEST['mpu'];
$bus_truk=$_REQUEST['bus_truk'];
$unmotor=$_REQUEST['unmotor'];
$kapasitas=$_REQUEST['kapasitas'];
$vc_ratio=$_REQUEST['vc_ratio'];
$jpo=$_REQUEST['jpo'];
$pelican=$_REQUEST['pelican'];
$zebra=$_REQUEST['zebra'];
$iya_tidak=$_REQUEST['iya_tidak'];
$arah=$_REQUEST['arah'];
$id_jalan=$_REQUEST['id_jalan'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_ruas_jalan where id='$id'");
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
    <td width="59"><div align="left"><img src="images/systeminfo.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Ruas Jalan</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Cermin Tikungan: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_cermin.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.cermin_tikungan"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1350" border="0" cellpadding="2" cellspacing="2">
         <?php
  //if ($_SESSION['tipe']=="2")
  //{
  ?>
  <tr>
    <td width="130"><a href="?act=add&do=data.ruas_jalan&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Ruas Jalan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
	<td width="1000">&nbsp;</td>
	<td width="220">&nbsp;</td>
  </tr>
  <?php
  //}
  ?>
  <tr>
  <td colspan="3">
  	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.ruas_jalan">
    <td width="7%">Kategori</td>
	<td width="83%">
	<select name="kategori" class="inputbox" onChange="submit();">
	<option value="0" <?php if ($kategori=="0") echo "selected"; ?>>-----------------------------------</option>
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="dari" <?php if ($kategori=="dari") echo "selected"; ?>>Dari</option>
	<option value="ke" <?php if ($kategori=="ke") echo "selected"; ?>>Ke</option>
	<option value="trotoar" <?php if ($kategori=="trotoar") echo "selected"; ?>>Trotoar</option>
	<option value="drainase" <?php if ($kategori=="drainase") echo "selected"; ?>>Drainase</option>
	<option value="bahu" <?php if ($kategori=="bahu") echo "selected"; ?>>Bahu</option>
	<option value="tipe" <?php if ($kategori=="tipe") echo "selected"; ?>>Tipe</option>
	<option value="status" <?php if ($kategori=="status") echo "selected"; ?>>Status</option>
	<option value="kelas" <?php if ($kategori=="kelas") echo "selected"; ?>>Kelas</option>
	<option value="larangan" <?php if ($kategori=="larangan") echo "selected"; ?>>Arah Larangan Angkutan Jalan</option>
	</select>	
	</td>
	<td align="right" width="10%">&nbsp;</td>
	</form>
  </tr>
    <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.ruas_jalan">
  <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
    <td>Pencarian</td>
	<td>
	<?php
	if ($kategori=="trotoar" or $kategori=="drainase" or $kategori=="bahu")
	{
	?>
	<select name="key" class="inputbox" onChange="submit();">
		<option value="0">------------</option>
		<option value="1" <?php if ($key=="1") echo "selected"; ?>>Ada</option>
		<option value="2" <?php if ($key=="2") echo "selected"; ?>>Tidak Ada</option>
	</select>
	<?php
	}
	elseif ($kategori=="status")
	{
	?>
	<select name="key" class="inputbox" onChange="submit();">
			<option value="0" selected>---------</option>
			<option value="1" <?php if($key=='1') {echo "selected";}?>>Kota</option>
			<option value="2" <?php if($key=='2') {echo "selected";}?>>Propinsi</option>
			<option value="3" <?php if($key=='3') {echo "selected";}?>>Negara</option>
	</select>
	<?php
	}
	elseif ($kategori=="kelas")
	{
	?>
	<select name="key" class="inputbox" onChange="submit();">
			<option value="0" selected>-----</option>
			<option value="1" <?php if($key=='1') {echo "selected";}?>>I</option>
			<option value="2" <?php if($key=='2') {echo "selected";}?>>II</option>
			<option value="3" <?php if($key=='3') {echo "selected";}?>>IIIA</option>
			<option value="4" <?php if($key=='4') {echo "selected";}?>>IIIB</option>
			<option value="5" <?php if($key=='5') {echo "selected";}?>>IIIC</option>
	</select>
	<?php
	}
	else
	{
	?>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;
	<?php
	}
	?>
	</td>
	<td align="right"><a href="excel_ruas_jalan.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.ruas_jalan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
	</table>
  </td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1350">
  <tr class="tdtitle_white">
	<td rowspan="2" colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Dari</td>    
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Ke</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">P <br>(km)</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">L <br>(m)</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Trotoar</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Drainase</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Bahu</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Tipe</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Status</td>       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Kelas</td>       
    <td colspan="5" background="images/bgcell.gif" height="25" align="center">Volume (kend/jam)</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">Kap. </td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">V/C Ratio</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">JPO</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">Pelican <br>Cross</td>       
    <td rowspan="2" width="40" background="images/bgcell.gif" height="25" align="center">Zebra <br>Cross</td>       
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Larangan Angkutan Barang</td>       
  </tr>
  <tr class="tdtitle_white">
	<td width="40" background="images/bgcell.gif" height="25" align="center">Motor</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">Mobil</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">MPU</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">Bus/Truk</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">Unmotor</td>
	<td width="40" background="images/bgcell.gif" height="25" align="center">Y/ T </td>
	<td width="100" background="images/bgcell.gif" height="25" align="center">Arah</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_rujal.php" name="frmaddruasjalan">  
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="40"><a href="index.php?do=data.ruas_jalan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="8" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan2.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="8" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="8" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="panjang" size="2" value="<?php echo $panjang; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lebar" size="2" value="<?php echo $lebar; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="trotoar" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($trotoar=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($trotoar=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="drainase" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($drainase=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($drainase=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="bahu" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($bahu=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($bahu=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="tipe2" size="3" value="<?php echo $tipe2; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="status" class="inputbox">
			<option value="0" selected>---------</option>
			<option value="1" <?php if($status=='1') {echo "selected";}?>>Kota</option>
			<option value="2" <?php if($status=='2') {echo "selected";}?>>Propinsi</option>
			<option value="3" <?php if($status=='3') {echo "selected";}?>>Negara</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="kelas" class="inputbox">
			<option value="0" selected>-----</option>
			<option value="1" <?php if($kelas=='1') {echo "selected";}?>>I</option>
			<option value="2" <?php if($kelas=='2') {echo "selected";}?>>II</option>
			<option value="3" <?php if($kelas=='3') {echo "selected";}?>>IIIA</option>
			<option value="4" <?php if($kelas=='4') {echo "selected";}?>>IIIB</option>
			<option value="5" <?php if($kelas=='5') {echo "selected";}?>>IIIC</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="motor" size="2" value="<?php echo $motor; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mobil" size="2" value="<?php echo $mobil; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mpu" size="2" value="<?php echo $mpu; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="bus_truk" size="5" value="<?php echo $bus_truk; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="unmotor" size="5" value="<?php echo $unmotor; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kapasitas" size="2" value="<?php echo $kapasitas; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="vc_ratio" size="2" value="<?php echo $vc_ratio; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jpo" size="2" value="<?php echo $jpo; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="pelican" size="2" value="<?php echo $pelican; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="zebra" size="2" value="<?php echo $zebra; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="iya_tidak" class="inputbox">
			<option value="0" selected>-----</option>
			<option value="1" <?php if($iya_tidak=='1') {echo "selected";}?>>Iya</option>
			<option value="2" <?php if($iya_tidak=='2') {echo "selected";}?>>Tidak</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="arah" size="7" value="<?php echo $arah; ?>" class="inputbox"></td>
  </form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_rujal.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.ruas_jalan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="8" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="8" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="8" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="panjang" size="2" value="<?php echo $row[panjang]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lebar" size="2" value="<?php echo $row[lebar]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="trotoar" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($row[trotoar]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[trotoar]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="drainase" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($row[drainase]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[drainase]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="bahu" class="inputbox">
			<option value="0" selected>------------</option>
			<option value="1" <?php if($row[bahu]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[bahu]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="tipe2" size="3" value="<?php echo $row[tipe]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="status" class="inputbox">
			<option value="0" selected>---------</option>
			<option value="1" <?php if($row[status]=='1') {echo "selected";}?>>Kota</option>
			<option value="2" <?php if($row[status]=='2') {echo "selected";}?>>Propinsi</option>
			<option value="3" <?php if($row[status]=='3') {echo "selected";}?>>Negara</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="kelas" class="inputbox">
			<option value="0" selected>-----</option>
			<option value="1" <?php if($row[kelas]=='1') {echo "selected";}?>>I</option>
			<option value="2" <?php if($row[kelas]=='2') {echo "selected";}?>>II</option>
			<option value="3" <?php if($row[kelas]=='3') {echo "selected";}?>>IIIA</option>
			<option value="4" <?php if($row[kelas]=='4') {echo "selected";}?>>IIIB</option>
			<option value="5" <?php if($row[kelas]=='5') {echo "selected";}?>>IIIC</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="motor" size="2" value="<?php echo $row[motor]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mobil" size="2" value="<?php echo $row[mobil]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="mpu" size="2" value="<?php echo $row[mpu]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="bus_truk" size="5" value="<?php echo $row[bus_truk]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="unmotor" size="5" value="<?php echo $row[unmotor]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kapasitas" size="2" value="<?php echo $row[kapasitas]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="vc_ratio" size="2" value="<?php echo $row[vc_ratio]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jpo" size="2" value="<?php echo $row[jpo]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="pelican" size="2" value="<?php echo $row[pelican]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="zebra" size="2" value="<?php echo $row[zebra]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<select name="iya_tidak" class="inputbox">
			<option value="0" selected>-----</option>
			<option value="1" <?php if($row[iya_tidak]=='1') {echo "selected";}?>>Iya</option>
			<option value="2" <?php if($row[iya_tidak]=='2') {echo "selected";}?>>Tidak</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="arah" size="7" value="<?php echo $row[arah]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="trotoar")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and trotoar like '%$key%' order by id desc"; }
  elseif ($kategori=="drainase")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and drainase like '%$key%' order by id desc"; }
  elseif ($kategori=="bahu")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and bahu like '%$key%' order by id desc"; }
  elseif ($kategori=="tipe")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and tipe like '%$key%' order by id desc"; }
  elseif ($kategori=="status")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and status like '%$key%' order by id desc"; }
  elseif ($kategori=="kelas")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and kelas like '%$key%' order by id desc"; }
  elseif ($kategori=="larangan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id and arah like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_ruas_jalan a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.ruas_jalan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.ruas_jalan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="center"><?php echo $row[panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[trotoar]=="1") {echo "Ada";}
		if($row[trotoar]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[drainase]=="1") {echo "Ada";}
		if($row[drainase]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[bahu]=="1") {echo "Ada";}
		if($row[bahu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[tipe]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[status]=="1") {echo "Kota";}
		if($row[status]=="2") {echo "Propinsi";}
		if($row[status]=="3") {echo "Negara";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[kelas]=="1") {echo "I";}
		if($row[kelas]=="2") {echo "II";}
		if($row[kelas]=="3") {echo "IIIA";}
		if($row[kelas]=="4") {echo "IIIB";}
		if($row[kelas]=="5") {echo "IIIC";}
	?>
	</td>
	<td height="25" align="center"><?php echo $row[motor]; ?></td>
	<td height="25" align="center"><?php echo $row[mobil]; ?></td>
	<td height="25" align="center"><?php echo $row[mpu]; ?></td>
	<td height="25" align="center"><?php echo $row[bus_truk]; ?></td>
	<td height="25" align="center"><?php echo $row[unmotor]; ?></td>
	<td height="25" align="center"><?php echo $row[kapasitas]; ?></td>
	<td height="25" align="center"><?php echo $row[vc_ratio]; ?></td>
	<td height="25" align="center"><?php echo $row[jpo]; ?></td>
	<td height="25" align="center"><?php echo $row[pelican]; ?></td>
	<td height="25" align="center"><?php echo $row[zebra]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[iya_tidak]=="1") {echo "Iya";}
		if($row[iya_tidak]=="2") {echo "Tidak";}
	?>
	</td>
	<td height="25" align="left"><?php echo $row[arah]; ?></td>
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