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

if ($act=="del")
{
mysql_query("delete from ang_ruas_jalan where id='$id'");
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
    <td width="59"><div align="left"><img src="images/templatemanager.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Angkutan Umum di Ruas Jalan </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Angkutan Umum di Ruas Jalan: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_ruas_jalan.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.ruas_jalan"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="570" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.ruas_jalan"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan Bermotor Umum"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.ruas_jalan">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	<option value="jenis_angkutan" <?php if ($kategori=="jenis_angkutan") echo "selected"; ?>>Jenis Angkutan</option>
	<option value="kode_trayek" <?php if ($kategori=="kode_trayek") echo "selected"; ?>>Kode Trayek</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td align="right"><a href="index.php?do=data.ruas_jalan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="570">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="200" background="images/bgcell.gif" height="25" align="center">Nama Jalan </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan </td>
    <td width="150" background="images/bgcell.gif" height="25" align="center">Kode Trayek</td>                                
  </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_ruas_jalan.php">
	<input type="hidden" name="id_trayek" value="<?php echo $id_trayek; ?>">
    <td align="center" width="50"><a href="index.php?do=data.ruas_jalan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="20"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="25" value="<?php echo $nama_jalan; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $jenis_angkutan; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="25" value="<?php echo $kode_trayek; ?>" class="inputbox" readonly=""></td>
    </form>
  </tr>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and a.id='$id'
  order by a.nama_jalan asc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_ruas_jalan.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_trayek" value="<?php echo $row[id_trayek]; ?>">
    <td align="center" width="35"><a href="index.php?do=data.ruas_jalan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_jalan" size="25" value="<?php echo $row[nama_jalan]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $row[jenis_angkutan]; ?>" class="inputbox" readonly=""> 
	<input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'>
	</td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="20" value="<?php echo $row[kode_trayek]; ?>" class="inputbox" readonly=""></td>
  </tr>
	</form>
  <?php
    }
	if ($kategori=="nama_jalan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and nama_jalan like '%$key%'
  order by a.nama_jalan asc";
	}
	elseif ($kategori=="jenis_angkutan")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and jenis_angkutan like '%$key%'
  order by a.nama_jalan asc";
	}
	elseif ($kategori=="kode_trayek")
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id and kode_trayek like '%$key%'
  order by a.nama_jalan asc";
	}
	else
	{
  $strsql="select a.*, b.jenis_angkutan, b.kode_trayek 
  from ang_ruas_jalan a, ang_master_trayek b 
  where a.id_trayek=b.id
  order by a.nama_jalan asc";
  }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.ruas_jalan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.ruas_jalan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="left"><?php echo $row[kode_trayek]; ?></td>
  </tr>  <?php
  }
  ?>
  </table>
<?php
}
?>
</body>
</html>
