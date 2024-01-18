<?php
$nama_pemilik=$_REQUEST['nama_pemilik'];
$nama_pengemudi=$_REQUEST['nama_pengemudi'];
$alamat_pemilik=$_REQUEST['alamat_pemilik'];
$alamat_pengemudi=$_REQUEST['alamat_pengemudi'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$lokasi_jalan=$_REQUEST['lokasi_jalan'];
$lokasi_tempat=$_REQUEST['lokasi_tempat'];

$id=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from ang_ojek where id='$id'");
}
?>
<html>
<head>
<title>Lalu Lintas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css"></head>
<body>
<table width="850" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/query.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Kendaraan Tidak Bermotor, Ojek, Bentor </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kendaraan Tidak Bermotor, Ojek, Bentor: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_ojek.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.ojek"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="970" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="506"><a href="?act=add&do=data.ojek"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Peraturan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.ojek">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_pemilik" <?php if ($kategori=="nama_pemilik") echo "selected"; ?>>Nama Pemilik</option>
	<option value="nama_pengemudi" <?php if ($kategori=="nama_pengemudi") echo "selected"; ?>>Nama Pengemudi</option>
	<option value="alamat_pemilik" <?php if ($kategori=="alamat_pemilik") echo "selected"; ?>>Alamat Pemilik</option>
	<option value="alamat_pengemudi" <?php if ($kategori=="alamat_pengemudi") echo "selected"; ?>>Alamat Pengemudi</option>
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="jalan_mangkal" <?php if ($kategori=="jalan_mangkal") echo "selected"; ?>>Lokasi Jalan Mangkal/Ngetem</option>
	<option value="tempat_mangkal" <?php if ($kategori=="tempat_mangkal") echo "selected"; ?>>Lokasi Tempat Mangkal/Ngetem</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="330" align="right"><a href="index.php?do=data.ojek&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="970">
  <tr class="tdtitle_white">
	<td width="70" colspan="2" rowspan="2" background="images/bgcell.gif">&nbsp;</td>
    <td height="25" colspan="2" align="center" background="images/bgcell.gif">Nama</td>
    <td height="25" colspan="2" align="center" background="images/bgcell.gif">Alamat</td>
    <td width="60" rowspan="2" align="center" background="images/bgcell.gif">Jenis Kendaraan </td>
    <td height="25" colspan="2" align="center" background="images/bgcell.gif">Lokasi Mangkal / Ngetem </td>
  </tr>
  <tr class="tdtitle_white">
	<td width="140" background="images/bgcell.gif" height="25" align="center">Pemilik</td>
    <td width="140" background="images/bgcell.gif" height="25" align="center">Pengemudi</td>
    <td width="170" background="images/bgcell.gif" height="25" align="center">Pemilik</td>
    <td width="170" background="images/bgcell.gif" height="25" align="center">Pengemudi</td>
    <td width="140" background="images/bgcell.gif" height="25" align="center">Jalan </td>
    <td width="140" background="images/bgcell.gif" height="25" align="center">Tempat </td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_ojek.php" enctype="multipart/form-data">
  <input type="hidden" name="id_pemilik" value="">
    <td align="center" width="70"><a href="index.php?do=data.ojek"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_pemilik" size="15" value="<?php echo $nama_pemilik; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_pengemudi" size="15" value="<?php echo $nama_pengemudi; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="alamat_pemilik" size="15" value="<?php echo $alamat_pemilik; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="alamat_pengemudi" size="15" value="<?php echo $alamat_pengemudi; ?>" class="inputbox"></td>
    <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BECAK" <?php if ($jenis_kendaraan=="BECAK") { echo "selected"; } ?>>BECAK</option>
		<option value="OJEK" <?php if ($jenis_kendaraan=="OJEK") { echo "selected"; } ?>>OJEK</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="lokasi_jalan" size="15" value="<?php echo $lokasi_jalan; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lokasi_tempat" size="15" value="<?php echo $lokasi_tempat; ?>" class="inputbox"></td>
    </form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from ang_ojek where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_ojek.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="70"><a href="index.php?do=data.ojek"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_pemilik" size="15" value="<?php echo $row[nama_pemilik]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_pengemudi" size="15" value="<?php echo $row[nama_pengemudi]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="alamat_pemilik" size="15" value="<?php echo $row[alamat_pemilik]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="alamat_pengemudi" size="15" value="<?php echo $row[alamat_pengemudi]; ?>" class="inputbox"></td>
    <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="BECAK" <?php if ($row[jenis_kendaraan]=="BECAK") { echo "selected"; } ?>>BECAK</option>
		<option value="OJEK" <?php if ($row[jenis_kendaraan]=="OJEK") { echo "selected"; } ?>>OJEK</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="lokasi_jalan" size="15" value="<?php echo $row[lokasi_jalan]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="lokasi_tempat" size="15" value="<?php echo $row[lokasi_tempat]; ?>" class="inputbox"></td>
    </form>
  </tr>
  <?php
  }
  if ($kategori=="nama_pemilik")
  {  $strsql="select * from ang_ojek where nama_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_pengemudi")
  {  $strsql="select * from ang_ojek where nama_pengemudi like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pemilik")
  {  $strsql="select * from ang_ojek where alamat_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat_pengemudi")
  {  $strsql="select * from ang_ojek where alamat_pengemudi like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from ang_ojek where jenis_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="jalan_mangkal")
  {  $strsql="select * from ang_ojek where lokasi_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="tempat_mangkal")
  {  $strsql="select * from ang_ojek where lokasi_tempat like '%$key%' order by id desc"; }
  else {  $strsql="select * from ang_ojek order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.ojek&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.ojek&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_pengemudi]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_pemilik]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat_pengemudi]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi_tempat]; ?></td>
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