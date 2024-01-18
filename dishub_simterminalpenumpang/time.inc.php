<?php
$id	=$_REQUEST['id'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_pelayanan=$_REQUEST['jenis_pelayanan'];
$jurusan=$_REQUEST['jurusan'];
$tarif=$_REQUEST['tarif'];

if ($act=="del")
{
mysql_query("delete from ter_time where id='$id'");
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
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Time Table Bus </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Time Table Bus: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_time.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.time"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1260" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.time"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.time">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_po" <?php if ($kategori=="nama_po") echo "selected"; ?>>Nama PO</option>
	<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="jenis_angkutan" <?php if ($kategori=="jenis_angkutan") echo "selected"; ?>>Jenis Angkutan</option>
	<option value="jenis_pelayanan" <?php if ($kategori=="jenis_pelayanan") echo "selected"; ?>>Jenis Pelayanan</option>
	<option value="arah" <?php if ($kategori=="arah") echo "selected"; ?>>Arah</option>
	<option value="jurusan" <?php if ($kategori=="jurusan") echo "selected"; ?>>Jurusan</option>
	<option value="kode_trayek" <?php if ($kategori=="kode_trayek") echo "selected"; ?>>Kode Trayek</option>
	<option value="waktu_kedatangan" <?php if ($kategori=="waktu_kedatangan") echo "selected"; ?>>Waktu Kedatangan</option>
	<option value="waktu_keberangkatan" <?php if ($kategori=="waktu_keberangkatan") echo "selected"; ?>>Waktu Keberangkatan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="158"><div align="right"><a href="excel_time_table_bus.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.time&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1260">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Nama PO</td>                                            
    <td   width="100" background="images/bgcell.gif" height="25" align="center">No. Kendaraan</td> 
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>                                        
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan</td>                                        
    <td   width="120" background="images/bgcell.gif" height="25" align="center">Jenis Pelayanan</td>
	<td   width="120" background="images/bgcell.gif" height="25" align="center">Arah</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Jurusan</td>
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Kode Trayek</td>                                        
    <td   width="110" background="images/bgcell.gif" height="25" align="center">Waktu Kedatangan</td>                                        
    <td   width="110" background="images/bgcell.gif" height="25" align="center">Waktu Keberangkatan</td>                                        
   </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_time.php">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.time"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
	<td><input type="text" name="nama_po" size="20" value="<?php echo $nama_po; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="no_kendaraan" size="15" value="<?php echo $no_kendaraan; ?>" class="inputbox"   /></td>
    <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BB" <?php if ($jenis_kendaraan=="BB") { echo "selected"; } ?>>BB</option>
		<option value="BS" <?php if ($jenis_kendaraan=="BS") { echo "selected"; } ?>>BS</option>
		<option value="BK" <?php if ($jenis_kendaraan=="BK") { echo "selected"; } ?>>BK</option>
		<option value="MPU" <?php if ($jenis_kendaraan=="MPU") { echo "selected"; } ?>>MPU</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_angkutan" class="inputbox">
		<option value="AKAP" <?php if ($jenis_angkutan=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="AKDP" <?php if ($jenis_angkutan=="AKDP") { echo "selected"; } ?>>AKDP</option>
	</select>
	</td>
    <td height="25" align="center">
	<select name="jenis_pelayanan" class="inputbox">
		<option value="EKONOMI" <?php if ($jenis_pelayanan=="EKONOMI") { echo "selected"; } ?>>EKONOMI</option>
		<option value="NON EKONOMI" <?php if ($jenis_pelayanan=="NON EKONOMI") { echo "selected"; } ?>>NON EKONOMI</option>
		<option value="PATAS" <?php if ($jenis_pelayanan=="PATAS") { echo "selected"; } ?>>PATAS</option>
	</select>
	</td>
	<td align="center"><input type="text" name="arah" size="25" value="<?php echo $arah; ?>" class="inputbox"   /></td
	><td align="center"><input type="text" name="jurusan" size="25" value="<?php echo $jurusan; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="kode_trayek" size="10" value="<?php echo $kode_trayek; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="waktu_kedatangan" size="10" value="<?php echo $waktu_kedatangan; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="waktu_keberangkatan" size="10" value="<?php echo $waktu_keberangkatan; ?>" class="inputbox"   /></td>
    </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_time where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_time.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.time"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
	<td><input type="text" name="nama_po" size="20" value="<?php echo $row[nama_po]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="no_kendaraan" size="15" value="<?php echo $row[no_kendaraan]; ?>" class="inputbox"   /></td>
     <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BB" <?php if ($row[jenis_kendaraan]=="BB") { echo "selected"; } ?>>BB</option>
		<option value="BS" <?php if ($row[jenis_kendaraan]=="BS") { echo "selected"; } ?>>BS</option>
		<option value="BK" <?php if ($row[jenis_kendaraan]=="BK") { echo "selected"; } ?>>BK</option>
		<option value="MPU" <?php if ($row[jenis_kendaraan]=="MPU") { echo "selected"; } ?>>MPU</option>
	</select>
	</td>
	<td height="25" align="center">
	<select name="jenis_angkutan" class="inputbox">
		<option value="AKAP" <?php if ($row[jenis_angkutan]=="AKAP") { echo "selected"; } ?>>AKAP</option>
		<option value="AKDP" <?php if ($row[jenis_angkutan]=="AKDP") { echo "selected"; } ?>>AKDP</option>
	</select>
	</td>
    <td height="25" align="center">
	<select name="jenis_pelayanan" class="inputbox">
		<option value="EKONOMI" <?php if ($row[jenis_pelayanan]=="EKONOMI") { echo "selected"; } ?>>EKONOMI</option>
		<option value="NON EKONOMI" <?php if ($row[jenis_pelayanan]=="NON EKONOMI") { echo "selected"; } ?>>NON EKONOMI</option>
		<option value="PATAS" <?php if ($row[jenis_pelayanan]=="PATAS") { echo "selected"; } ?>>PATAS</option>
	</select>
	</td>
	<td align="center"><input type="text" name="arah" size="25" value="<?php echo $row[arah]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="jurusan" size="25" value="<?php echo $row[jurusan]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="kode_trayek" size="10" value="<?php echo $row[kode_trayek]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="waktu_kedatangan" size="10" value="<?php echo $row[waktu_kedatangan]; ?>" class="inputbox"   /></td>
	<td align="center"><input type="text" name="waktu_keberangkatan" size="10" value="<?php echo $row[waktu_keberangkatan]; ?>" class="inputbox"   /></td>
    </tr>
   </form>
  <?php
    }
  if ($kategori=="nama_po")
  {  $strsql="select * from ter_time where nama_po like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from ter_time where no_kendaraan like '%$key%' order by id desc"; }
   elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ter_time where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_angkutan")
  {  $strsql="select * from ter_time where jenis_angkutan like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_pelayanan")
  {  $strsql="select * from ter_time where jenis_pelayanan like '%$key%' order by id desc"; }
  elseif ($kategori=="arah")
  {  $strsql="select * from ter_time where arah like '%$key%' order by id desc"; }
   elseif ($kategori=="jurusan")
  {  $strsql="select * from ter_time where jurusan like '%$key%' order by id desc"; }
   elseif ($kategori=="kode_trayek")
  {  $strsql="select * from ter_time where kode_trayek like '%$key%' order by id desc"; }
  elseif ($kategori=="waktu_kedatangan")
  {  $strsql="select * from ter_time where waktu_kedatangan like '%$key%' order by id desc"; }
  elseif ($kategori=="waktu_keberangkatan")
  {  $strsql="select * from ter_time where waktu_keberangkatan like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from ter_time order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="70"><a href="?do=data.time&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.time&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center"><?php echo $row[nama_po]; ?></td>
	<td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
	<td height="25" align="center"><?php echo $row[arah]; ?></td>
    <td height="25" align="center"><?php echo $row[jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center"><?php echo $row[waktu_kedatangan]; ?></td>
    <td height="25" align="center"><?php echo $row[waktu_keberangkatan]; ?></td>
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
