<?php 
$jenis_angkutan		=$_REQUEST['jenis_angkutan'];
$jenis_trayek		=$_REQUEST['jenis_trayek'];
$jenis_pelayanan	=$_REQUEST['jenis_pelayanan'];
$kode_trayek		=$_REQUEST['kode_trayek'];
$status_trayek		=$_REQUEST['status_trayek'];
$jadwal_perjalanan	=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$id					=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from ang_master_trayek where id='$id'");
}
?>
<html>
<head>
<title>Trayek</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/tabs_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Trayek </font></strong></td>
  </tr>
</table>
<table width="821" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.trayek&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.trayek">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="wilayah_opr" <?php if ($kategori=="wilayah_opr") echo "selected"; ?>>Wilayah Operasi</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.trayek&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="850">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="50">&nbsp;</td>
	<td width="100" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jenis Trayek</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jenis<br>Pelayanan</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Kode Trayek</td>              
    <td width="70" background="images/bgcell.gif" height="25" align="center">Status Trayek</td>              
    <td width="70" background="images/bgcell.gif" height="25" align="center">Jadwal<br>Perjalanan</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Trayek / <br>Wilayah Operasi</td>    
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_master_trayek.php">
    <td align="center" width="35"><a href="index.php?do=data.trayek"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
	<td height="25" align="center">
	<select name="jenis_angkutan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Lintas Batas Negara' <?php if($jenis_angkutan=="Lintas Batas Negara") {echo "selected";}?>>Lintas Batas Negara</option>
		<option value='Lintas Batas Luar Negara' <?php if($jenis_angkutan=="Lintas Batas Luar Negara") {echo "selected";}?>>Lintas Batas Luar Negara</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_trayek" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Dalam Trayek' <?php if($jenis_trayek=="Dalam Trayek") {echo "selected";}?>>Dalam Trayek</option>
		<option value='Tdk Dalam Trayek' <?php if($jenis_trayek=="Tdk Dalam Trayek") {echo "selected";}?>>Tdk Dalam Trayek</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_pelayanan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Ekonomi' <?php if($jenis_pelayanan=="Ekonomi") {echo "selected";}?>>Ekonomi</option>
		<option value='Non Ekonomi' <?php if($jenis_pelayanan=="Non Ekonomi") {echo "selected";}?>>Non Ekonomi</option>
		<option value='Patas' <?php if($jenis_pelayanan=="Patas") {echo "selected";}?>>Patas</option>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="kode_trayek" size="13" value="<?php echo $kode_trayek; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="status_trayek" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Reguler' <?php if($status_trayek=="Reguler") {echo "selected";}?>>Reguler</option>
		<option value='Cadangan' <?php if($status_trayek=="Cadangan") {echo "selected";}?>>Cadangan</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jadwal_perjalanan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Berjadwal' <?php if($jadwal_perjalanan=="Berjadwal") {echo "selected";}?>>Berjadwal</option>
		<option value='Tdk Berjadwal' <?php if($jadwal_perjalanan=="Tdk Berjadwal") {echo "selected";}?>>Tdk Berjadwal</option>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="wilayah_opr" size="15" value="<?php echo $wilayah_opr; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from ang_master_trayek where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_master_trayek.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.trayek"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center">
	<select name="jenis_angkutan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Lintas Batas Negara' <?php if($row[jenis_angkutan]=="Lintas Batas Negara") {echo "selected";}?>>Lintas Batas Negara</option>
		<option value='Lintas Batas Luar Negara' <?php if($row[jenis_angkutan]=="Lintas Batas Luar Negara") {echo "selected";}?>>Lintas Batas Luar Negara</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_trayek" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Dalam Trayek' <?php if($row[jenis_trayek]=="Dalam Trayek") {echo "selected";}?>>Dalam Trayek</option>
		<option value='Tdk Dalam Trayek' <?php if($row[jenis_trayek]=="Tdk Dalam Trayek") {echo "selected";}?>>Tdk Dalam Trayek</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_pelayanan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Ekonomi' <?php if($row[jenis_pelayanan]=="Ekonomi") {echo "selected";}?>>Ekonomi</option>
		<option value='Non Ekonomi' <?php if($row[jenis_pelayanan]=="Non Ekonomi") {echo "selected";}?>>Non Ekonomi</option>
		<option value='Patas' <?php if($row[jenis_pelayanan]=="Patas") {echo "selected";}?>>Patas</option>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="kode_trayek" size="13" value="<?php echo $row[kode_trayek]; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="status_trayek" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Reguler' <?php if($row[status_trayek]=="Reguler") {echo "selected";}?>>Reguler</option>
		<option value='Cadangan' <?php if($row[status_trayek]=="Cadangan") {echo "selected";}?>>Cadangan</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jadwal_perjalanan" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<option value='Berjadwal' <?php if($row[jadwal_perjalanan]=="Berjadwal") {echo "selected";}?>>Berjadwal</option>
		<option value='Tdk Berjadwal' <?php if($row[jadwal_perjalanan]=="Tdk Berjadwal") {echo "selected";}?>>Tdk Berjadwal</option>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="wilayah_opr" size="15" value="<?php echo $row[wilayah_opr]; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  if ($kategori=="wilayah_opr")
  {  $strsql="select * from ang_master_trayek where wilayah_opr like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from ang_master_trayek order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.trayek&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.trayek&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
	<td height="25" align="left"><?php echo $row[jenis_trayek]; ?></td>
	<td height="25" align="left"><?php echo $row[jenis_pelayanan]; ?></td>
	<td height="25" align="left"><?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center"><?php echo $row[status_trayek]; ?></td>
	<td height="25" align="center"><?php echo $row[jadwal_perjalanan]; ?></td>
    <td height="25" align="left"><?php echo $row[wilayah_opr]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>