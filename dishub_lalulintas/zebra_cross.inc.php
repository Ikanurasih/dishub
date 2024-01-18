<?php
$id=$_REQUEST['id'];
$nama_simpang=$_REQUEST['nama_simpang'];
$nama_jalan=$_REQUEST['nama_jalan'];
$jumlah_batangan=$_REQUEST['jumlah_batangan'];
$panjang_batangan=$_REQUEST['panjang_batangan'];
$lebar_batangan=$_REQUEST['lebar_batangan'];
$total_batangan=$_REQUEST['total_batangan'];
$panjang_tegak=$_REQUEST['panjang_tegak'];
$lebar_tegak=$_REQUEST['lebar_tegak'];
$total_tegak=$_REQUEST['total_tegak'];
$panjang_mendatar=$_REQUEST['panjang_mendatar'];
$lebar_mendatar=$_REQUEST['lebar_mendatar'];
$total_mendatar=$_REQUEST['total_mendatar'];
$tahun_pengadaan=$_REQUEST['tahun_pengadaan'];
$lokasi=$_REQUEST['lokasi'];
$kondisi=$_REQUEST['kondisi'];

if ($act=="del")
{
mysql_query("delete from lal_zebra_cross where id='$id'");
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
    <td width="59"><div align="left"><img src="images/tabs_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Zebra Cross </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Zebra Cross: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_zebra_cross.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.zebra"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
    <td><a href="?act=add&do=data.zebra&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Cermin Tikungan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.zebra">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang</option>
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="lokasi" <?php if ($kategori=="lokasi") echo "selected"; ?>>Lokasi</option>
    <option value="tahun_pengadaan" <?php if ($kategori=="tahun_pengadaan") echo "selected"; ?>>Tahun Pengadaan</option>
    <option value="kondisi" <?php if ($kategori=="kondisi") echo "selected"; ?>>Kondisi</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_zebra_cross.php?do=data.zebra&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.zebra&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1270">
  <tr class="tdtitle_white">
	<td width="100" colspan="2" rowspan="3" background="images/bgcell.gif">&nbsp;</td>
    <td width="170" rowspan="3" align="center" background="images/bgcell.gif">Nama Simpang </td>
    <td width="170" rowspan="3" align="center" background="images/bgcell.gif">Nama Jalan </td>
    <td height="25" colspan="4" align="center" background="images/bgcell.gif">Batangan</td>
    <td height="25" colspan="6" align="center" background="images/bgcell.gif">Stop Line</td>
    <td width="80" rowspan="3" align="center" background="images/bgcell.gif">Tahun Pengadaan</td>
    <td width="80" rowspan="3" align="center" background="images/bgcell.gif">Kondisi</td>
    <td width="170" rowspan="3" align="center" background="images/bgcell.gif">Lokasi</td>
  </tr>
  <tr class="tdtitle_white">
	<td width="50" rowspan="2" align="center" background="images/bgcell.gif">Jumlah</td>
    <td width="50" rowspan="2" align="center" background="images/bgcell.gif">Panjang (m)  </td>
    <td width="50" rowspan="2" align="center" background="images/bgcell.gif">Lebar (m) </td>
    <td width="50" rowspan="2" align="center" background="images/bgcell.gif">Total</td>
    <td height="25" colspan="3" align="center" background="images/bgcell.gif">Tegak</td>
    <td height="25" colspan="3" align="center" background="images/bgcell.gif">Mendatar</td>
  </tr>
  <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">Panjang (m) </td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Lebar (m) </td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Total</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Panjang (m) </td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Lebar (m) </td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Total</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_zebra.php" name="frmadd">
    <td align="center" width="100"><a href="index.php?do=data.zebra"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="25" value="<?php echo $nama_simpang; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="25" value="<?php echo $nama_jalan; ?>" class="inputbox"></td>
    <td height="25" align="center"><input name="jumlah_batangan" type="text" class="inputbox" id="jumlah_batangan" value="<?php echo $jumlah_batangan; ?>" size="5"></td>
    <td height="25" align="center"><input name="panjang_batangan" type="text" class="inputbox" id="panjang_batangan" value="<?php echo $panjang_batangan; ?>" size="5"></td>
    <td height="25" align="center"><input name="lebar_batangan" type="text" class="inputbox" id="lebar_batangan" value="<?php echo $lebar_batangan; ?>" size="5">	</td>
	<td height="25" align="center"><input type="text" name="total_batangan" size="5" value="<?php echo $total_batangan; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_tegak" size="5" value="<?php echo $panjang_tegak; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lebar_tegak" size="5" value="<?php echo $lebar_tegak; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="total_tegak" size="5" value="<?php echo $total_tegak; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_mendatar" size="5" value="<?php echo $panjang_mendatar; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lebar_mendatar" size="5" value="<?php echo $lebar_mendatar; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="total_mendatar" size="5" value="<?php echo $total_mendatar; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tahun_pengadaan" size="5" maxlength="4" value="<?php echo $tahun_pengadaan; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kondisi" size="10" value="<?php echo $kondisi; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="25" value="<?php echo $lokasi; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
	$strsql="select * from lal_zebra_cross where id='$id'";  
	$hasil=mysql_query($strsql);
  	$row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_zebra.php" name="frmadd">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="100"><a href="index.php?do=data.zebra"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_simpang" size="25" value="<?php echo $row[nama_simpang]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="25" value="<?php echo $row[nama_jalan]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input name="jumlah_batangan" type="text" class="inputbox" id="jumlah_batangan" value="<?php echo $row[jumlah_batangan]; ?>" size="5"></td>
    <td height="25" align="center"><input name="panjang_batangan" type="text" class="inputbox" id="panjang_batangan" value="<?php echo $row[panjang_batangan]; ?>" size="5"></td>
    <td height="25" align="center"><input name="lebar_batangan" type="text" class="inputbox" id="lebar_batangan" value="<?php echo $row[lebar_batangan]; ?>" size="5">	</td>
	<td height="25" align="center"><input type="text" name="total_batangan" size="5" value="<?php echo $row[total_batangan]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_tegak" size="5" value="<?php echo $row[panjang_tegak]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lebar_tegak" size="5" value="<?php echo $row[lebar_tegak]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="total_tegak" size="5" value="<?php echo $row[total_tegak]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="panjang_mendatar" size="5" value="<?php echo $row[panjang_mendatar]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lebar_mendatar" size="5" value="<?php echo $row[lebar_mendatar]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="total_mendatar" size="5" value="<?php echo $row[total_mendatar]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tahun_pengadaan" size="5" maxlength="4" value="<?php echo $row[tahun_pengadaan]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="kondisi" size="10" value="<?php echo $row[kondisi]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="lokasi" size="25" value="<?php echo $row[lokasi]; ?>" class="inputbox"></td>
	</form>
  </tr>
  <?php
  }
  if ($kategori=="nama_simpang")
  {  $strsql="select * from lal_zebra_cross where nama_simpang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_jalan")
  {  $strsql="select * from lal_zebra_cross where nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_zebra_cross where lokasi like '%$key%' order by id desc"; }
  elseif ($kategori=="tahun_pengadaan")
  {  $strsql="select * from lal_zebra_cross where tahun_pengadaan like '%$key%' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  $strsql="select * from lal_zebra_cross where kondisi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_zebra_cross order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70">
	<a href="?do=data.zebra&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a>	</td>
    <td align="center" width="30"><a href="?do=data.zebra&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[jumlah_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[total_batangan]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[total_tegak]; ?></td>
    <td height="25" align="center"><?php echo $row[panjang_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[lebar_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[total_mendatar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pengadaan]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
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