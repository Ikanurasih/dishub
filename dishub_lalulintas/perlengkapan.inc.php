<?php
$nama_jalan=$_REQUEST['nama_jalan'];
$dari=$_REQUEST['dari'];
$ke=$_REQUEST['ke'];
$id=$_REQUEST['id'];
$id_jalan=$_REQUEST['id_jalan'];
$jenis_perlengkapan=$_REQUEST['jenis_perlengkapan'];
$jumlah=$_REQUEST['jumlah'];
$kondisi=$_REQUEST['kondisi'];
$tahun=$_REQUEST['tahun'];
$lokasi=$_REQUEST['lokasi'];
$input1=$_REQUEST['input1'];

if ($act=="del")
{
mysql_query("delete from lal_perlengkapan where id='$id'");
}
?>
<html>
<head>
<title>Lalu Lintas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">

<script>  
function showme(){  
var s = document.frmadd.jenis_perlengkapan;  
var h = document.frmadd.input1;  
if( s.selectedIndex == 3 ) {  
h.style.visibility="visible";  
}else{  
h.style.visibility="hidden";  
}  
}  
</script>


</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/module.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Perlengkapan Jalan Lain </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Perlengkapan Jalan Lain: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_perlengkapan.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.perlengkapan"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1180" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.perlengkapan&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Cermin Tikungan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.perlengkapan">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="dari" <?php if ($kategori=="dari") echo "selected"; ?>>Dari</option>
	<option value="ke" <?php if ($kategori=="ke") echo "selected"; ?>>Ke</option>
	<option value="jenis_perlengkapan" <?php if ($kategori=="jenis_perlengkapan") echo "selected"; ?>>Jenis Perlengkapan Jalan</option>
	<option value="jumlah" <?php if ($kategori=="jumlah") echo "selected"; ?>>Jumlah</option>
	<option value="kondisi" <?php if ($kategori=="kondisi") echo "selected"; ?>>Kondisi</option>
	<option value="tahun_pengadaan" <?php if ($kategori=="tahun_pengadaan") echo "selected"; ?>>Tahun Pengadaan</option>
	<option value="lokasi" <?php if ($kategori=="lokasi") echo "selected"; ?>>Lokasi</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_perlengkapan_jalan.php?do=data.perlengkapan&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.perlengkapan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1180">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Nama Jalan</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Dari</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Ke</td>
    <td width="120" background="images/bgcell.gif" height="25" align="center">Jenis <br>Perlengkapan Jalan </td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jumlah</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Kondisi</td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">Tahun Pengadaan</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Lokasi</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_perlengkapan.php" name="frmadd">
  <input type="hidden" name="id_jalan" value="<?php echo $id_jalan; ?>">
    <td align="center" width="35"><a href="index.php?do=data.perlengkapan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="20" value="<?php echo $nama_jalan; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")' ></td>
    <td height="25" align="center"><input type="text" name="dari" size="25" value="<?php echo $dari; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="25" value="<?php echo $ke; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center" valign="middle">
		<select name="jenis_perlengkapan" class="inputbox" onchange="showme()">
			<option value="-" selected>-----------------</option>
			<option value="Pita Pengadu" <?php if($jenis_perlengkapan=='Pita Pengadu') {echo "selected";}?>>Pita Pengadu</option>
			<option value="Delinator" <?php if($jenis_perlengkapan=='Delinator') {echo "selected";}?>>Delinator</option>
			<option value="Lainnya" <?php if($jenis_perlengkapan=='Lainnya') {echo "selected";}?>>Lainnya</option>
		</select><br>
		<input type ="text" name="input1" style=" position:relative;visibility:hidden;" value="<?php echo $input1; ?>" class="inputbox"> 	
	</td>
    <td height="25" align="center">
		<input type="text" name="jumlah" size="5" maxlength="4" value="<?php echo $jumlah; ?>" class="inputbox">
	</td>
	<td height="25" align="center">
		<select name="kondisi" class="inputbox">
			<option value="-" selected>-----------------</option>
			<option value="Baik" <?php if($kondisi=='Baik') {echo "selected";}?>>Baik</option>
			<option value="Sedang" <?php if($kondisi=='Sedang') {echo "selected";}?>>Sedang</option>
			<option value="Rusak" <?php if($kondisi=='Rusak') {echo "selected";}?>>Rusak</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="30" value="<?php echo $lokasi; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and a.id='$id'";  
	$hasil=mysql_query($strsql);
  	$row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_perlengkapan.php" name="frmadd">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_jalan" value="<?php echo $row[id_jalan]; ?>">
    <td align="center" width="35"><a href="index.php?do=data.perlengkapan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="20" value="<?php echo $row[nama_jalan]; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_jalan.php")' ></td>
    <td height="25" align="center"><input type="text" name="dari" size="25" value="<?php echo $row[dari]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="ke" size="25" value="<?php echo $row[ke]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center" valign="middle">
		<select name="jenis_perlengkapan" class="inputbox" onchange="showme()">
			<option value="-" selected>-----------------</option>
			<option value="Pita Pengadu" <?php if ($row[jenis_perlengkapan]=='Pita Pengadu') {echo "selected";}?>>Pita Pengadu</option>
			<option value="Delinator" <?php if ($row[jenis_perlengkapan]=='Delinator') {echo "selected";}?>>Delinator</option>
			<option value="Lainnya" <?php if ($row[jenis_perlengkapan]<>'Pita Pengadu' and $row[jenis_perlengkapan]<>'Delinator') {echo "selected";}?>>Lainnya</option>
		</select>
		<?php
		if ($row[jenis_perlengkapan]<>'Pita Pengadu' and $row[jenis_perlengkapan]<>'Delinator')
		{
		?><br>
		<input type ="text" name="input1" value="<?php echo $row[jenis_perlengkapan]; ?>" class="inputbox"> 	
		<?php
		}
		?>
	</td>
    <td height="25" align="center">
		<input type="text" name="jumlah" size="5" maxlength="4" value="<?php echo $row[jumlah]; ?>" class="inputbox">
	</td>
	<td height="25" align="center">
		<select name="kondisi" class="inputbox">
			<option value="-" selected>-----------------</option>
			<option value="Baik" <?php if($row[kondisi]=='Baik') {echo "selected";}?>>Baik</option>
			<option value="Sedang" <?php if($row[kondisi]=='Sedang') {echo "selected";}?>>Sedang</option>
			<option value="Rusak" <?php if($row[kondisi]=='Rusak') {echo "selected";}?>>Rusak</option>
		</select>	
	</td>
	<td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $row[tahun_pengadaan]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="30" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_perlengkapan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and jenis_perlengkapan like '%$key%' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and jumlah like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and kondisi like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun_pengadaan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and tahun_pengadaan like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id and lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_perlengkapan a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50">
	<a href="?do=data.perlengkapan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a>
	</td>
    <td align="center" width="20"><a href="?do=data.perlengkapan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[dari]; ?></td>
    <td height="25" align="left"><?php echo $row[ke]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_perlengkapan]; ?></td>
    <td height="25" align="center"><?php echo $row[jumlah]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
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