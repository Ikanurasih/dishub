<?php
$id	=$_REQUEST['id'];
$kapasitas=$_REQUEST['kapasitas'];
$jenis_au=$_REQUEST['jenis_au'];

if ($act=="del")
{
mysql_query("delete from ter_parkir_au where id='$id'");
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
    <td width="59"><div align="left"><img src="images/module.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kapasitas Parkir Angkutan Umum </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kapasitas Parkir Angkutan Umum: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_parkir_au.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.parkir_au"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="600" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.parkir_au"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.parkir_au">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis_au" <?php if ($kategori=="jenis_au") echo "selected"; ?>>Jenis Angkutan Umum</option>
	<option value="kapasitas" <?php if ($kategori=="kapasitas") echo "selected"; ?>>Kapasitas Parkir (Kendaraan)</option>
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="158"><div align="right"><a href="excel_parkir_au.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.parkir_au&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="600">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="250" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan Umum </td> 
    <td   width="250" background="images/bgcell.gif" height="25" align="center">Kapasitas Parkir (Kendaraan) </td>    
	<td   width="250" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan </td>                                        
   </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_parkir_au.php" enctype="multipart/form-data">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.parkir_au"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center">
	<select name="jenis_au" class="inputbox">
		<option value="ANGKOT" <?php if ($jenis_au=="ANGKOT") { echo "selected"; } ?>>ANGKOT</option>
		<option value="BUMEL" <?php if ($jenis_au=="BUMEL") { echo "selected"; } ?>>BUMEL</option>
		<option value="AKDP" <?php if ($jenis_au=="AKDP") { echo "selected"; } ?>>AKDP</option>
		<option value="AKAP" <?php if ($jenis_au=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="TAKSI" <?php if ($jenis_au=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="kapasitas" size="10" value="<?php echo $kapasitas; ?>" class="inputbox"   /></td>
    <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BB" <?php if ($jenis_kendaraan=="BB") { echo "selected"; } ?>>BB</option>
		<option value="BS" <?php if ($jenis_kendaraan=="BS") { echo "selected"; } ?>>BS</option>
		<option value="BK" <?php if ($jenis_kendaraan=="BK") { echo "selected"; } ?>>BK</option>
		<option value="MPU" <?php if ($jenis_kendaraan=="MPU") { echo "selected"; } ?>>MPU</option>
	</select>
	</td>
    </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_parkir_au where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_parkir_au.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.parkir_au"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center">	<select name="jenis_au" class="inputbox">
		<option value="ANGKOT" <?php if ($row[jenis_au]=="ANGKOT") { echo "selected"; } ?>>ANGKOT</option>
		<option value="BUMEL" <?php if ($row[jenis_au]=="BUMEL") { echo "selected"; } ?>>BUMEL</option>
		<option value="AKDP" <?php if ($row[jenis_au]=="AKDP") { echo "selected"; } ?>>AKDP</option>
		<option value="AKAP" <?php if ($row[jenis_au]=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="TAKSI" <?php if ($row[jenis_au]=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
</td>
    <td height="25" align="center"><input type="text" name="kapasitas" size="10" value="<?php echo $row[kapasitas_parkir]; ?>" class="inputbox"   /></td>
     <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BB" <?php if ($row[jenis_kendaraan]=="BB") { echo "selected"; } ?>>BB</option>
		<option value="BS" <?php if ($row[jenis_kendaraan]=="BS") { echo "selected"; } ?>>BS</option>
		<option value="BK" <?php if ($row[jenis_kendaraan]=="BK") { echo "selected"; } ?>>BK</option>
		<option value="MPU" <?php if ($row[jenis_kendaraan]=="MPU") { echo "selected"; } ?>>MPU</option>
	</select>
	</td>
	</tr>
   </form>
  <?php
    }
  if ($kategori=="jenis_au")
  {  $strsql="select * from ter_parkir_au where jenis_au like '%$key%' order by id desc"; }
  elseif ($kategori=="kapasitas")
  {  $strsql="select * from ter_parkir_au where kapasitas_parkir like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_parkir_au where jenis_kendaraan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_parkir_au order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="50"><a href="?do=data.parkir_au&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.parkir_au&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center"><?php echo $row[jenis_au]; ?></td>
    <td height="25" align="center"><?php echo $row[kapasitas_parkir]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
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
