<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$nama_simpang=$_REQUEST['nama_simpang'];
$jmayor_ruas=$_REQUEST['jmayor_ruas'];
$jmayor_status=$_REQUEST['jmayor_status'];
$jmayor_rambu=$_REQUEST['jmayor_rambu'];
$jminor_ruas=$_REQUEST['jminor_ruas'];
$jminor_marka_p=$_REQUEST['jminor_marka_p'];
$jminor_marka_l=$_REQUEST['jminor_marka_l'];
$jminor_rambu=$_REQUEST['jminor_rambu'];
$jminor_kondisi=$_REQUEST['jminor_kondisi'];
$id_jalan=$_REQUEST['id_jalan'];
$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from lal_simpang_prioritas where id='$id'");
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
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Simpang Prioritas</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Simpang Prioritas: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_simprio.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.simpang_prioritas"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1300" border="0" cellpadding="2" cellspacing="2">
<?php
//if ($_SESSION['tipe']=="2")
//{
?>
  <tr>
    <td width="458"><a href="?act=add&do=data.simpang_prioritas&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Simpang Prioritas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
 <?php
 //}
 ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.simpang_prioritas">
    <td>Pencarian & Cetak: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang Prioritas</option>
	<!--<option value="ke" <?php if ($kategori=="ke") echo "selected"; ?>>Ke</option>
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang</option>-->
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="458" align="right"><a href="excel_simpang_prioritas.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.simpang_prioritas&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1300">
  <tr class="tdtitle_white">
	<td rowspan="3" colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
	<td rowspan="3" width="130" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td rowspan="3" width="120" background="images/bgcell.gif" height="25" align="center">Dari</td>
    <td rowspan="3" width="120" background="images/bgcell.gif" height="25" align="center">Ke</td>
    <td rowspan="3" width="150" background="images/bgcell.gif" height="25" align="center">Nama Simpang Prioritas</td>
    <td rowspan="2" colspan="3" background="images/bgcell.gif" height="25" align="center">Jalan Mayor</td>   
    <td colspan="5" background="images/bgcell.gif" height="25" align="center">Jalan Minor</td>   
  </tr>
  <tr class="tdtitle_white">
	<td rowspan="2" width="120" background="images/bgcell.gif" height="25" align="center">Ruas Jalan</td>
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">Marka Prioritas</td>
	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Rambu <br>Prioritas</td>
	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
  </tr>
  <tr class="tdtitle_white">
	<td width="100" background="images/bgcell.gif" height="25" align="center">Ruas Jalan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Status Jalan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Rambu Prioritas</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">P (m)</td>
	<td width="60" background="images/bgcell.gif" height="25" align="center">L (cm)</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_simprio.php" name="frmadd">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="40"><a href="index.php?do=data.simpang_prioritas"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="40"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="20" value="<?php echo $nama_simpang; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jmayor_ruas" size="15" value="<?php echo $jmayor_ruas; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jmayor_status" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($jmayor_status=='1') {echo "selected";}?>>Kota</option>
			<option value="2" <?php if($jmayor_status=='2') {echo "selected";}?>>Propinsi</option>
			<option value="3" <?php if($jmayor_status=='3') {echo "selected";}?>>Nasional</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="jmayor_rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($jmayor_rambu=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($jmayor_rambu=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="jminor_ruas" size="15" value="<?php echo $jminor_ruas; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jminor_marka_p" size="5" value="<?php echo $jminor_marka_p; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jminor_marka_l" size="5" value="<?php echo $jminor_marka_l; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jminor_rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($jminor_rambu=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($jminor_rambu=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="jminor_kondisi" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($jminor_kondisi=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($jminor_kondisi=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
  </tr>
  </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_simprio.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.simpang_prioritas"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="12" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="dari" size="15" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="15" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="20" value="<?php echo $row[nama_simpang]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jmayor_ruas" size="15" value="<?php echo $row[jmayor_ruas]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jmayor_status" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[jmayor_status]=='1') {echo "selected";}?>>Kota</option>
			<option value="2" <?php if($row[jmayor_status]=='2') {echo "selected";}?>>Propinsi</option>
			<option value="3" <?php if($row[jmayor_status]=='3') {echo "selected";}?>>Nasional</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="jmayor_rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[jmayor_rambu]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[jmayor_rambu]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="jminor_ruas" size="15" value="<?php echo $row[jminor_ruas]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jminor_marka_p" size="5" value="<?php echo $row[jminor_marka_p]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="jminor_marka_l" size="5" value="<?php echo $row[jminor_marka_l]; ?>" class="inputbox"></td>
    <td height="25" align="center">
		<select name="jminor_rambu" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[jminor_rambu]=='1') {echo "selected";}?>>Ada</option>
			<option value="2" <?php if($row[jminor_rambu]=='2') {echo "selected";}?>>Tidak Ada</option>
		</select>
	</td>
	<td height="25" align="center">
		<select name="jminor_kondisi" class="inputbox">
			<option value="0" selected>----------</option>
			<option value="1" <?php if($row[jminor_kondisi]=='1') {echo "selected";}?>>Baik</option>
			<option value="2" <?php if($row[jminor_kondisi]=='2') {echo "selected";}?>>Pudar</option>
		</select>
	</td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_simpang")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id and a.nama_simpang like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_simpang_prioritas a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.simpang_prioritas&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.simpang_prioritas&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[jmayor_ruas]; ?></td>
    <td height="25" align="center">
	<?php
		if($row[jmayor_status]=="1") {echo "Kota";}
		if($row[jmayor_status]=="2") {echo "Propinsi";}
		if($row[jmayor_status]=="3") {echo "Nasional";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[jmayor_rambu]=="1") {echo "Ada";}
		if($row[jmayor_rambu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="left"><?php echo $row[jminor_ruas]; ?></td>
	<td height="25" align="center"><?php echo $row[jminor_marka_p]; ?></td>
	<td height="25" align="center"><?php echo $row[jminor_marka_l]; ?></td>
	<td height="25" align="center">
	<?php
		if($row[jminor_rambu]=="1") {echo "Ada";}
		if($row[jminor_rambu]=="2") {echo "Tidak Ada";}
	?>
	</td>
	<td height="25" align="center">
	<?php
		if($row[jminor_kondisi]=="1") {echo "Baik";}
		if($row[jminor_kondisi]=="2") {echo "Pudar";}
	?>
	</td>
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