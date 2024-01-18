<?php
$id							=$_REQUEST['id'];
$jenis_angkutan				=$_REQUEST['jenis_angkutan'];
$kode_trayek				=$_REQUEST['kode_trayek'];
$rute_trayek				=$_REQUEST['rute_trayek'];
$panjang_kendaraan			=$_REQUEST['panjang_kendaraan'];
$jumlah_kendaraan			=$_REQUEST['jumlah_kendaraan'];
$jenis_trayek				=$_REQUEST['jenis_trayek'];
$jenis_pelayanan			=$_REQUEST['jenis_pelayanan'];
$status_trayek				=$_REQUEST['status_trayek'];
$jadwal_perjalanan			=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr				=$_REQUEST['wilayah_opr'];
$id_trayek					=$_REQUEST['id_trayek'];


if ($act=="del")
{
mysql_query("delete from ang_rute where id='$id'");
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
    <td width="59"><div align="left"><img src="images/asterisk.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Rute Angkutan Umum </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Rute Angkutan Umum: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_rute.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.rute"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="730" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.rute"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tukar Lokasi Wilayah Operasi"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.rute">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="jenis_angkutan" <?php if ($kategori=="jenis_angkutan") echo "selected"; ?>>Jenis Angkutan</option>
	<option value="rute_trayek" <?php if ($kategori=="rute_trayek") echo "selected"; ?>>Rute trayek</option>

	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.rute&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
 </table>
 <table border="1" cellspacing="0" cellpadding="1" width="730">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="170" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan</td> 
    <td width="100" background="images/bgcell.gif" height="25" align="center">Kode trayek</td>                                         
    <td width="190" background="images/bgcell.gif" height="25" align="center">Rute Trayek/Wilayah Operasi</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Panjang Trayek(km)</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Jumlah Kendaraan</td>                     
 </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_rute.php" >
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_trayek" value="<?php echo $id_trayek; ?>">
  <input type="hidden" name="jenis_trayek" value="<?php echo $jenis_trayek; ?>">
  <input type="hidden" name="jenis_pelayanan" value="<?php echo $jenis_pelayanan; ?>">
  <input type="hidden" name="status_trayek" value="<?php echo $status_trayek; ?>">
  <input type="hidden" name="jadwal_perjalanan" value="<?php echo $jadwal_perjalanan; ?>">
  <input type="hidden" name="wilayah_opr" value="<?php echo $wilayah_opr; ?>">

    <td align="center" width="35"><a href="index.php?do=data.rute"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="10" value="<?php echo $jenis_angkutan; ?>" class="inputbox" readonly />
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'></td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="10" value="<?php echo $kode_trayek; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="rute_trayek" size="25" value="<?php echo $rute_trayek; ?>" class="inputbox" /></td>
    <td height="25" align="center"><input type="text" name="panjang_trayek" size="5" value="<?php echo $panjang_trayek; ?>" class="inputbox"  /></td>
    <td height="25" align="center"><input type="text" name="jumlah_kendaraan" size="5" value="<?php echo $jumlah_kendaraan; ?>" class="inputbox"  /></td>
  </tr>
	</form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id order by a.id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_rute.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_trayek" value="<?php echo $row[id_trayek]; ?>">
  <input type="hidden" name="jenis_trayek" value="<?php echo $jenis_trayek; ?>">
  <input type="hidden" name="jenis_pelayanan" value="<?php echo $jenis_pelayanan; ?>">
  <input type="hidden" name="status_trayek" value="<?php echo $status_trayek; ?>">
  <input type="hidden" name="jadwal_perjalanan" value="<?php echo $jadwal_perjalanan; ?>">
  <input type="hidden" name="wilayah_opr" value="<?php echo $wilayah_opr; ?>">
  
    <td align="center" width="35"><a href="index.php?do=data.rute"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
     <td height="25" align="center"><input type="text" name="jenis_angkutan" size="10" value="<?php echo $row[jenis_angkutan]; ?>" class="inputbox" readonly />
     <input type="button" value="..." class="inputbox" onClick='Popreport_look_mhs("view_trayek2.php")'></td>
    <td height="25" align="center"><input type="text" name="kode_trayek" size="10" value="<?php echo $row[kode_trayek]; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="rute_trayek" size="25" value="<?php echo $row[rute_trayek]; ?>" class="inputbox"  /></td>
    <td height="25" align="center"><input type="text" name="panjang_trayek" size="5" value="<?php echo $row[panjang_trayek]; ?>" class="inputbox"  /></td>
    <td height="25" align="center"><input type="text" name="jumlah_kendaraan" size="5" value="<?php echo $row[jumlah_kendaraan]; ?>" class="inputbox"  /></td>
	
  </tr>
	</form>
  <?php
    }
  if ($kategori=="jenis_angkutan")
  { $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id and jenis_angkutan like '%$key%' order by a.id desc"; }
  elseif ($kategori=="rute_trayek")
  { $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id and rute_trayek like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_rute, a.id_trayek, a.rute_trayek, a.panjang_trayek, a.jumlah_kendaraan, b.* from ang_rute a, ang_master_trayek b where a.id_trayek=b.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.rute&act=edit&id=<?php echo $row[id_rute]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.rute&act=del&id=<?php echo $row[id_rute]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[rute_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[panjang_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jumlah_kendaraan]; ?></td>

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
