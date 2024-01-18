<?php
$id	=$_REQUEST['id'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jarak=$_REQUEST['jarak'];
$kode_trayek=$_REQUEST['kode_trayek'];
$jurusan=$_REQUEST['jurusan'];
$penumpang_atas=$_REQUEST['penumpang_atas'];
$penumpang_bawah=$_REQUEST['penumpang_bawah'];
$angkutan_atas=$_REQUEST['angkutan_atas'];
$angkutan_bawah=$_REQUEST['angkutan_bawah'];


if ($act=="del")
{
mysql_query("delete from ter_tarif where id='$id'");
}

if ($act=="del_hukum")
{
mysql_query("delete from ter_dasar_hukum where id='$id'");
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
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Tarif Angkutan AKAP &amp; AKDP </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Tarif Angkutan AKAP &amp; AKADP: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_tarif.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.tarif"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="950" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.tarif"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.tarif">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="jenis_angkutan" <?php if ($kategori=="jenis_angkutan") echo "selected"; ?>>Jenis Angkutan</option>
	<option value="jarak" <?php if ($kategori=="jarak") echo "selected"; ?>>Jarak</option>
	<option value="jurusan" <?php if ($kategori=="jurusan") echo "selected"; ?>>Jurusan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="158"><div align="right"><a href="excel_tarif.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.tarif&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="950">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2"  background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">No.</td> 
	<td   width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan</td> 
	<td   width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan </td>                                        
    <td   width="180" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jurusan</td>                                        
    <td   width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jarak</td>                                        
    <td   colspan="2" background="images/bgcell.gif" height="25" align="center">Tarif Penumpang</td>
	<td   colspan="2" background="images/bgcell.gif" height="25" align="center">Tarif Angkutan</td>                                 
   </tr>
   <tr class="tdtitle_white">
   	<td   width="80" height="25" background="images/bgcell.gif" align="center">Atas</td> 
	<td   width="80" height="25" background="images/bgcell.gif" align="center">Bawah </td>                                        
    <td   width="80" height="25" background="images/bgcell.gif" align="center">Atas</td> 
	<td   width="80" height="25" background="images/bgcell.gif" align="center">Bawah </td>   
   </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_tarif.php">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.tarif"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
	<td height="25" align="center">auto</td>
    <td height="25" align="center">
	<select name="jenis_angkutan" class="inputbox">
		<option value="AKAP" <?php if ($jenis_angkutan=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="AKDP" <?php if ($jenis_angkutan=="AKDP") { echo "selected"; } ?>>AKDP</option>
		<option value="ANGKOT" <?php if ($jenis_angkutan=="ANGKOT") { echo "selected"; } ?>>ANGKOT</option>
		<option value="TAKSI" <?php if ($jenis_angkutan=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="MPU" <?php if ($jenis_kendaraan=="MPU") { echo "selected"; } ?>>MPU</option>
		<option value="BUS KECIL" <?php if ($jenis_kendaraan=="BUS KECIL") { echo "selected"; } ?>>BUS KECIL</option>
		<option value="BUS BESAR" <?php if ($jenis_kendaraan=="BUS BESAR") { echo "selected"; } ?>>BUS BESAR</option>
		<option value="TAKSI" <?php if ($jenis_kendaraan=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
	</td>
	<td><input type="text" name="jurusan" size="20" value="<?php echo $jurusan; ?>" class="inputbox"   /></td>
	<td height="25" align="center"><input type="text" name="jarak" size="20" value="<?php echo $jarak; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="penumpang_atas" size="10" value="<?php echo $penumpang_atas; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="penumpang_bawah" size="10" value="<?php echo $penumpang_bawah; ?>" class="inputbox"   /></td>
	<td align="center">Otomatis</td>
	<td align="center">Otomatis</td>
	
    </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_tarif where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_tarif.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.tarif"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
		<td height="25" align="center">auto</td>
     <td height="25" align="center">
	<select name="jenis_angkutan" class="inputbox">
		<option value="AKAP" <?php if ($row[jenis_angkutan]=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="AKDP" <?php if ($row[jenis_angkutan]=="AKDP") { echo "selected"; } ?>>AKDP</option>
		<option value="ANGKOT" <?php if ($row[jenis_angkutan]=="ANGKOT") { echo "selected"; } ?>>ANGKOT</option>
		<option value="TAKSI" <?php if ($row[jenis_angkutan]=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="MPU" <?php if ($row[jenis_kendaraan]=="MPU") { echo "selected"; } ?>>MPU</option>
		<option value="BUS KECIL" <?php if ($row[jenis_kendaraan]=="BUS KECIL") { echo "selected"; } ?>>BUS KECIL</option>
		<option value="BUS BESAR" <?php if ($row[jenis_kendaraan]=="BUS BESAR") { echo "selected"; } ?>>BUS BESAR</option>
		<option value="TAKSI" <?php if ($row[jenis_kendaraan]=="TAKSI") { echo "selected"; } ?>>TAKSI</option>
	</select>
	</td>
	<td><input type="text" name="jurusan" size="20" value="<?php echo $row[jurusan]; ?>" class="inputbox"   /></td>
	<td><input type="text" name="jarak" size="20" value="<?php echo $row[jarak]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="penumpang_atas" size="10" value="<?php echo $row[penumpang_atas]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="penumpang_bawah" size="10" value="<?php echo $row[penumpang_bawah]; ?>" class="inputbox"   /></td>
	<td align="center">Otomatis</td>
	<td align="center">Otomatis</td>
	
    </tr>
   </form>
  <?php
    }
  if ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_tarif where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_angkutan")
  {  $strsql="select * from ter_tarif where jenis_angkutan like '%$key%' order by id desc"; }
  elseif ($kategori=="jarak")
  {  $strsql="select * from ter_tarif where jarak like '%$key%' order by id desc"; }
  elseif ($kategori=="jurusan")
  {  $strsql="select * from ter_tarif where jurusan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_tarif order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="70"><a href="?do=data.tarif&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.tarif&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[jarak]; ?></td>
    <td height="25" align="right"><?php echo null($row[penumpang_atas]); ?></td>
	<td height="25" align="right"><?php echo null($row[penumpang_bawah]); ?></td>
	<td height="25" align="right"><?php echo null($row[angkutan_atas]); ?></td>
	<td height="25" align="right"><?php echo null($row[angkutan_bawah]); ?></td>
	
   </tr>
  <?php
  }
  ?>
</table>
<?php
}
?>
<table border="0" cellpadding="1" cellspacing="1" width="400">
<tr class="tdtitle_black">
<td>DASAR HUKUM &nbsp;&nbsp;&nbsp; <a href="?do=data.tarif&act=tambah_hukum">Tambah</a></td>
</tr>
<?php
if ($act=="tambah_hukum")
{
?>
<tr>
<form method="post" action="insert_hukum.php">
  <td><textarea cols="70" rows="5" name="dasar_hukum" class="inputbox"></textarea><br><input type="image" src="images/simpan.gif">&nbsp;&nbsp;<a href="?do=data.tarif"><img src="images/batal.gif" border="0"></a></td>
</form>
</tr>
<?php
}
elseif ($act=="edit_hukum")
{
$strsql_hukum="select * from ter_dasar_hukum where id='$id'";
$hasil_hukum=mysql_query($strsql_hukum);
$row_hukum=mysql_fetch_array($hasil_hukum);
?>
<tr>
<form method="post" action="update_hukum.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <td><textarea cols="70" rows="5" name="dasar_hukum" class="inputbox"><?php echo $row_hukum[dasar_hukum]; ?></textarea><br><input type="image" src="images/simpan.gif">&nbsp;&nbsp;<a href="?do=data.tarif"><img src="images/batal.gif" border="0"></a></td>
</form>
</tr>
<?php
}
$strsql_hukum="select * from ter_dasar_hukum where tipe='1' order by id desc";
$hasil_hukum=mysql_query($strsql_hukum);
while($row_hukum=mysql_fetch_array($hasil_hukum))
{
?>
<tr>
  <td  width="340" class="text" style="border-bottom:1px solid #CCCCCC;"><?php echo $row_hukum[dasar_hukum]; ?></td>
  <td width="30"><a href="?do=data.tarif&act=edit_hukum&id=<?php echo $row_hukum[id]; ?>"><img src="images/edit_2.gif" border="0"></a></td>
  <td width="30"><a href="?do=data.tarif&act=del_hukum&id=<?php echo $row_hukum[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/delete.gif" border="0"></a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
