<?php
$id=$_REQUEST['id'];
$nama_simpang=$_REQUEST['nama_simpang'];
$nama_ruas_jalan=$_REQUEST['nama_ruas_jalan'];
$ruas_jalan_mayor=$_REQUEST['ruas_jalan_mayor'];
$no_tabel_mayor=$_REQUEST['no_tabel_mayor'];
$no_rambu_mayor=$_REQUEST['no_rambu_mayor'];
$tahun_pengadaan_mayor=$_REQUEST['tahun_pengadaan_mayor'];
$kondisi_mayor=$_REQUEST['kondisi_mayor'];
$ruas_jalan_minor=$_REQUEST['ruas_jalan_minor'];
$p_minor=$_REQUEST['p_minor'];
$l_minor=$_REQUEST['l_minor'];
$tahun_pengadaan_minor=$_REQUEST['tahun_pengadaan_minor'];
$kondisi_marka=$_REQUEST['kondisi_marka'];
$no_tabel_rambu=$_REQUEST['no_tabel_rambu'];
$no_rambu=$_REQUEST['no_rambu'];
$tahun_pengadaan_rambu=$_REQUEST['tahun_pengadaan_rambu'];
$kondisi_rambu=$_REQUEST['kondisi_rambu'];

if ($act=="del")
{
mysql_query("delete from lal_simprio where id='$id'");
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
<form method="post" action="lap_simpang_prioritas.php" target="_blank">
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
<table width="1320" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.simpang_prioritas&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Cermin Tikungan Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.simpang_prioritas">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_simpang" <?php if ($kategori=="nama_simpang") echo "selected"; ?>>Nama Simpang Prioritas</option>
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Ruas Jalan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_simpang_prioritas.php?do=data.zebra&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.simpang_prioritas&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1320">
  <tr class="tdtitle_white">
	<td width="100" rowspan="3" background="images/bgcell.gif" colspan="2">&nbsp;</td>
    <td width="100" rowspan="3" align="center" background="images/bgcell.gif">Nama Simpang Prioritas</td>
    <td width="100" rowspan="3" align="center" background="images/bgcell.gif">Nama Ruas Jalan </td>
    <td colspan="5" align="center" background="images/bgcell.gif">Jalan Mayor </td>
    <td colspan="9" align="center" background="images/bgcell.gif">Jalan Minor </td>
  </tr>
   <tr class="tdtitle_white">
	<td width="100" rowspan="2" align="center" background="images/bgcell.gif">Ruas Jalan </td>
    <td colspan="4" align="center" background="images/bgcell.gif">Rambu Prioritas </td>
    <td width="100" rowspan="2" align="center" background="images/bgcell.gif">Ruas Jalan </td>
    <td colspan="4" align="center" background="images/bgcell.gif">Marka Prioritas </td>
    <td colspan="4" align="center" background="images/bgcell.gif">Rambu Prioritas </td>
  </tr>
   <tr class="tdtitle_white">
	<td width="80" align="center" background="images/bgcell.gif">No. Tabel</td>
    <td width="80" align="center" background="images/bgcell.gif">No. Rambu</td>
    <td width="80" align="center" background="images/bgcell.gif">Tahun Pengadaan</td>
    <td width="80" align="center" background="images/bgcell.gif">Kondisi</td>
    <td width="50" align="center" background="images/bgcell.gif">P (m)</td>
    <td width="50" align="center" background="images/bgcell.gif">L (m)</td>
    <td width="80" align="center" background="images/bgcell.gif">Tahun Pengadaan</td>
    <td width="80" align="center" background="images/bgcell.gif">Kondisi</td>
    <td width="50" align="center" background="images/bgcell.gif">No. Tabel</td>
    <td width="50" align="center" background="images/bgcell.gif">No. Rambu</td>
    <td width="80" align="center" background="images/bgcell.gif">Tahun Pengadaan</td>
    <td width="80" align="center" background="images/bgcell.gif">Kondisi</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>  
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_simprio.php" name="frmadd">
    <td align="center" width="50"><a href="index.php?do=data.simpang_prioritas"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="50"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td align="left"><input type="text" name="nama_simpang" size="15" value="<?php echo $nama_simpang; ?>" class="inputbox"></td>
    <td align="left"><input type="text" name="nama_ruas_jalan" size="15" value="<?php echo $nama_ruas_jalan; ?>" class="inputbox"></td>
    <td align="left"><input type="text" name="ruas_jalan_mayor" size="15" value="<?php echo $ruas_jalan_mayor; ?>" class="inputbox"></td>
    <td align="center">
	<select name="no_tabel_mayor" class="inputbox">
		<option value="I" <?php if ($no_tabel_mayor=="I") { echo "selected"; } ?>>I</option>
		<option value="II A" <?php if ($no_tabel_mayor=="II A") { echo "selected"; } ?>>II A</option>
		<option value="II B" <?php if ($no_tabel_mayor=="II B") { echo "selected"; } ?>>II B</option>
		<option value="III" <?php if ($no_tabel_mayor=="III") { echo "selected"; } ?>>III</option>
	</select>
	</td>
    <td align="center"><input type="text" name="no_rambu_mayor" size="5" value="<?php echo $no_rambu_mayor; ?>" class="inputbox"></td>
    <td align="center"><input type="text" name="tahun_pengadaan_mayor" size="5" value="<?php echo $tahun_pengadaan_mayor; ?>" class="inputbox"></td>
    <td align="center">
	<select name="kondisi_mayor" class="inputbox">
		<option value="Baik" <?php if ($kondisi_mayor=="Baik") { echo "selected"; } ?>>Baik</option>
		<option value="Sedang" <?php if ($kondisi_mayor=="Sedang") { echo "selected"; } ?>>Sedang</option>
		<option value="Rusak" <?php if ($kondisi_mayor=="Rusak") { echo "selected"; } ?>>Rusak</option>
	</select>
	</td>
    <td align="center"><input name="ruas_jalan_minor" type="text" class="inputbox" id="ruas_jalan_minor" value="<?php echo $ruas_jalan_minor; ?>" size="15"></td>
    <td align="center"><input name="p_minor" type="text" class="inputbox" id="p_minor" value="<?php echo $p_minor; ?>" size="5"></td>
    <td align="center"><input name="l_minor" type="text" class="inputbox" id="l_minor" value="<?php echo $l_minor; ?>" size="5"></td>
    <td align="center"><input name="tahun_pengadaan_minor" type="text" class="inputbox" id="tahun_pengadaan_minor" value="<?php echo $tahun_pengadaan_minor; ?>" size="5"></td>
    <td align="center"><select name="kondisi_marka" class="inputbox">
      <option value="Baik" <?php if ($kondisi_marka=="Baik") { echo "selected"; } ?>>Baik</option>
      <option value="Pudar" <?php if ($kondisi_marka=="Pudar") { echo "selected"; } ?>>Pudar</option>
    </select></td>
    <td align="center"><input name="no_tabel_rambu" type="text" class="inputbox" id="no_tabel_rambu" value="<?php echo $no_tabel_rambu; ?>" size="5"></td>
    <td align="center"><input name="no_rambu" type="text" class="inputbox" id="no_rambu" value="<?php echo $no_rambu; ?>" size="5"></td>
    <td align="center"><input name="tahun_pengadaan_rambu" type="text" class="inputbox" id="tahun_pengadaan_rambu" value="<?php echo $tahun_pengadaan_rambu; ?>" size="5"></td>
    <td align="center">
	<select name="kondisi_rambu" class="inputbox">
		<option value="Baik" <?php if ($kondisi_rambu=="Baik") { echo "selected"; } ?>>Baik</option>
		<option value="Sedang" <?php if ($kondisi_rambu=="Sedang") { echo "selected"; } ?>>Sedang</option>
		<option value="Rusak" <?php if ($kondisi_rambu=="Rusak") { echo "selected"; } ?>>Rusak</option>
	</select>	
	</td>
	</form>
  </tr>
   <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_simprio where id='$id'"; 
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_simprio.php" name="frmadd">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="50"><a href="index.php?do=data.simpang_prioritas"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="50"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td align="left"><input type="text" name="nama_simpang" size="15" value="<?php echo $row[nama_simpang]; ?>" class="inputbox"></td>
    <td align="left"><input type="text" name="nama_ruas_jalan" size="15" value="<?php echo $row[nama_ruas_jalan]; ?>" class="inputbox"></td>
    <td align="left"><input type="text" name="ruas_jalan_mayor" size="15" value="<?php echo $row[ruas_jalan_mayor]; ?>" class="inputbox"></td>
    <td align="center">
	<select name="no_tabel_mayor" class="inputbox">
		<option value="I" <?php if ($row[no_tabel_mayor]=="I") { echo "selected"; } ?>>I</option>
		<option value="II A" <?php if ($row[no_tabel_mayor]=="II A") { echo "selected"; } ?>>II A</option>
		<option value="II B" <?php if ($row[no_tabel_mayor]=="II B") { echo "selected"; } ?>>II B</option>
		<option value="III" <?php if ($row[no_tabel_mayor]=="III") { echo "selected"; } ?>>III</option>
	</select>
	</td>
    <td align="center"><input type="text" name="no_rambu_mayor" size="5" value="<?php echo $row[no_rambu_mayor]; ?>" class="inputbox"></td>
    <td align="center"><input type="text" name="tahun_pengadaan_mayor" size="5" value="<?php echo $row[tahun_pengadaan_mayor]; ?>" class="inputbox"></td>
    <td align="center">
	<select name="kondisi_mayor" class="inputbox">
		<option value="Baik" <?php if ($row[kondisi_mayor]=="Baik") { echo "selected"; } ?>>Baik</option>
		<option value="Sedang" <?php if ($row[kondisi_mayor]=="Sedang") { echo "selected"; } ?>>Sedang</option>
		<option value="Rusak" <?php if ($row[kondisi_mayor]=="Rusak") { echo "selected"; } ?>>Rusak</option>
	</select>
	</td>
    <td align="center"><input name="ruas_jalan_minor" type="text" class="inputbox" id="ruas_jalan_minor" value="<?php echo $row[ruas_jalan_minor]; ?>" size="15"></td>
    <td align="center"><input name="p_minor" type="text" class="inputbox" id="p_minor" value="<?php echo $row[p_minor]; ?>" size="5"></td>
    <td align="center"><input name="l_minor" type="text" class="inputbox" id="l_minor" value="<?php echo $row[l_minor]; ?>" size="5"></td>
    <td align="center"><input name="tahun_pengadaan_minor" type="text" class="inputbox" id="tahun_pengadaan_minor" value="<?php echo $row[tahun_pengadaan_minor]; ?>" size="5"></td>
    <td align="center"><select name="kondisi_marka" class="inputbox">
      <option value="Baik" <?php if ($row[kondisi_marka]=="Baik") { echo "selected"; } ?>>Baik</option>
      <option value="Pudar" <?php if ($row[kondisi_marka]=="Pudar") { echo "selected"; } ?>>Pudar</option>
    </select></td>
    <td align="center"><input name="no_tabel_rambu" type="text" class="inputbox" id="no_tabel_rambu" value="<?php echo $row[no_tabel_rambu]; ?>" size="5"></td>
    <td align="center"><input name="no_rambu" type="text" class="inputbox" id="no_rambu" value="<?php echo $row[no_rambu]; ?>" size="5"></td>
    <td align="center"><input name="tahun_pengadaan_rambu" type="text" class="inputbox" id="tahun_pengadaan_rambu" value="<?php echo $row[tahun_pengadaan_rambu]; ?>" size="5"></td>
    <td align="center">
	<select name="kondisi_rambu" class="inputbox">
		<option value="Baik" <?php if ($row[kondisi_rambu]=="Baik") { echo "selected"; } ?>>Baik</option>
		<option value="Sedang" <?php if ($row[kondisi_rambu]=="Sedang") { echo "selected"; } ?>>Sedang</option>
		<option value="Rusak" <?php if ($row[kondisi_rambu]=="Rusak") { echo "selected"; } ?>>Rusak</option>
	</select>	
	</td>
	</form>
  </tr>
    <?php
  }
  if ($kategori=="nama_simpang" and !empty($key))
  { $strsql="select * from lal_simprio where nama_simpang like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_jalan" and !empty($key))
  { $strsql="select * from lal_simprio where nama_ruas_jalan like '%$key%' order by id desc"; }
  else
  { $strsql="select * from lal_simprio order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.simpang_prioritas&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.simpang_prioritas&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
     <td height="25" align="left"><?php echo $row[nama_simpang]; ?></td>
     <td align="left"><?php echo $row[nama_ruas_jalan]; ?></td>
     <td align="left"><?php echo $row[ruas_jalan_mayor]; ?></td>
     <td align="center"><?php echo $row[no_tabel_mayor]; ?></td>
     <td align="center"><?php echo $row[no_rambu_mayor]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_mayor]; ?></td>
     <td align="center"><?php echo $row[kondisi_mayor]; ?></td>
     <td align="left"><?php echo $row[ruas_jalan_minor]; ?></td>
     <td align="center"><?php echo $row[p_minor]; ?></td>
     <td align="center"><?php echo $row[l_minor]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_minor]; ?></td>
     <td align="center"><?php echo $row[kondisi_marka]; ?></td>
     <td align="center"><?php echo $row[no_tabel_rambu]; ?></td>
     <td align="center"><?php echo $row[no_rambu]; ?></td>
     <td align="center"><?php echo $row[tahun_pengadaan_rambu]; ?></td>
     <td align="center"><?php echo $row[kondisi_rambu]; ?></td>
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