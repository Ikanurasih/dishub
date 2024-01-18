<?php
$nama				=$_REQUEST['nama'];
$alamat				=$_REQUEST['alamat'];
$no_kend			=$_REQUEST['no_kend'];
$no_uji				=$_REQUEST['no_uji'];
$merk				=$_REQUEST['merk'];
$jenis_kend			=$_REQUEST['jenis_kend'];
$cc					=$_REQUEST['cc'];
$bahan_bakar		=$_REQUEST['bahan_bakar'];
$tahun				=$_REQUEST['tahun'];
$no_rangka			=$_REQUEST['no_rangka'];
$no_mesin			=$_REQUEST['no_mesin'];
$daya_orang			=$_REQUEST['daya_orang'];
$daya_barang		=$_REQUEST['daya_barang'];
$jenis_angkutan		=$_REQUEST['jenis_angkutan'];
$jenis_trayek		=$_REQUEST['jenis_trayek'];
$jenis_pelayanan	=$_REQUEST['jenis_pelayanan'];
$kode_trayek		=$_REQUEST['kode_trayek'];
$status_trayek		=$_REQUEST['status_trayek'];
$jadwal_perjalanan 	=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$id_pemilik			=$_REQUEST['id_pemilik'];
$id_kendaraan		=$_REQUEST['id_kendaraan'];
$id_trayek			=$_REQUEST['id_trayek'];
$id					=$_REQUEST['id'];
$jml_kebutuhan=$_REQUEST['jml_kebutuhan'];
$jml_realisasi=$_REQUEST['jml_realisasi'];

if ($act=="del")
{
mysql_query("delete from ang_orang where id='$id'");
}
?>

<html>
<head>
<title>Angkutan Orang / Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/alumni.gif" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Kebutuhan Angkutan Orang </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kebutuhan Angkutan Orang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_orang.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.orang"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="670" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.orang"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan Bermotor Umum"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.orang">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis_angkutan" <?php if ($kategori=="jenis_angkutan") echo "selected"; ?>>Jenis Angkutan</option>
	<option value="kode_trayek" <?php if ($kategori=="kode_trayek") echo "selected"; ?>>Kode Trayek</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td align="right"><a href="index.php?do=data.orang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="670">
  <tr class="tdtitle_white">
	<td width="70" colspan="2" rowspan="2" background="images/bgcell.gif">&nbsp;</td>
    <td width="150" rowspan="2" align="center" background="images/bgcell.gif">Jenis Angkutan</td>
    <td width="150" rowspan="2" align="center" background="images/bgcell.gif">Kode Trayek</td>     
    <td height="25" colspan="2" align="center" background="images/bgcell.gif">Jumlah Armada Angkutan<br>
      (Kendaraan)</td>
  </tr>
    <tr class="tdtitle_white">
	<td width="150" background="images/bgcell.gif" height="25" align="center">Kebutuhan</td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Realisasi</td>                                                           
  </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_orang.php">
	<input type="hidden" name="id_trayek" value="<?php echo $id_trayek; ?>">
    <td align="center" width="70"><a href="index.php?do=data.orang"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $jenis_angkutan; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'>	</td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="20" value="<?php echo $kode_trayek; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="jml_kebutuhan" size="15" value="<?php echo $jml_kebutuhan; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jml_realisasi" size="15" value="<?php echo $jml_realisasi; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id and a.id='$id'
  order by a.id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_orang.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_trayek" value="<?php echo $row[id_trayek]; ?>">
    <td align="center" width="70"><a href="index.php?do=data.orang"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $row[jenis_angkutan]; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'>	</td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="20" value="<?php echo $row[kode_trayek]; ?>" class="inputbox" readonly=""></td>
    <td height="25" align="center"><input type="text" name="jml_kebutuhan" size="15" value="<?php echo $row[jml_kebutuhan]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jml_realisasi" size="15" value="<?php echo $row[jml_realisasi]; ?>" class="inputbox"></td>
  </tr>
	</form>
  <?php
    }
	if ($kategori=="jenis_angkutan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id and jenis_angkutan like '%$key%'
  order by a.id desc";
	}
	elseif ($kategori=="kode_trayek")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id and kode_trayek like '%$key%'
  order by a.id desc";
	}
	else
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_orang a, ang_master_trayek b 
  where a.id_trayek=b.id
  order by a.id desc";
  }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.orang&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="35"><a href="?do=data.orang&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="left"><?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_kebutuhan]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_realisasi]; ?></td>
  </tr>  <?php
  }
  ?>
  </table>
<?php
}
?>
</body>
</html>
