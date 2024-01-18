<?php
$bulan=$_REQUEST['bulan'];
$tahun=$_REQUEST['tahun'];
$no_kend=$_REQUEST['no_kend'];
$no_uji=$_REQUEST['no_uji'];
$jenis_kend=$_REQUEST['jenis_kend'];
$nama_pmilik=$_REQUEST['nama_pmilik'];
$alamat_pmilik=$_REQUEST['alamat_pmilik'];
$nama_driver=$_REQUEST['nama_driver'];
$alamat_driver=$_REQUEST['alamat_driver'];
$pasal_pelanggaran=$_REQUEST['pasal_pelanggaran'];
$jaminan=$_REQUEST['jaminan'];
$keterangan=$_REQUEST['keterangan'];
$id=$_REQUEST['id'];

//echo $kategori;
//echo $key;

if ($act=="del")
{
mysql_query("delete from lal_pelanggaran where id='$id'");
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
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Pelanggaran Lalu Lintas </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Pelanggaran: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_pelanggaran.php" target="_blank">
<input type="hidden" name="bulan" value="<?php echo $bulan; ?>">
<input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
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
  <td colspan="3"><a href="index.php?do=data.pelanggaran"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table border="0" cellpadding="2" cellspacing="2" width="1300">
             <?php
  //if ($_SESSION['tipe']=="2")
  //{
  ?>  
  <tr>
    <td width="110"><a href="?act=add&do=data.pelanggaran"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Pelanggaran Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
	<td width="300">&nbsp;</td>
	<td width="890">&nbsp;</td>
  </tr>
  <?php
  //}
  ?>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.pelanggaran">
    <td>Kategori :</td>
    <td><select name="kategori" class="inputbox" onChange="submit();">
	<option value="0" <?php if ($kategori=="0") { echo "selected"; } ?> >-----------------</option>
	<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") { echo "selected"; } ?> >No. Kendaraan</option>
	<option value="no_uji" <?php if ($kategori=="no_uji") { echo "selected"; } ?>>No. Uji</option>
	<option value="bulan" <?php if ($kategori=="bulan") { echo "selected"; } ?>>Bulan</option>
	</select>
	</td>
    <td>&nbsp;</td>
   </form>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.pelanggaran">
  <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
    <td width="110">Pencarian : &nbsp;</td>
	<td width="300">
	<?php
	if ($kategori=="bulan")
	{
	?>
	<select name="bulan" class="inputbox">
	<option value="00" selected>---Pilih Bulan---</option>
	<option value="01" <?php if ($bulan=="01") echo "selected"; ?>>Januari</option>
	<option value="02" <?php if ($bulan=="02") echo "selected"; ?>>Februari</option>
	<option value="03" <?php if ($bulan=="03") echo "selected"; ?>>Maret</option>
	<option value="04" <?php if ($bulan=="04") echo "selected"; ?>>April</option>
	<option value="05" <?php if ($bulan=="05") echo "selected"; ?>>Mei</option>
	<option value="06" <?php if ($bulan=="06") echo "selected"; ?>>Juni</option>
	<option value="07" <?php if ($bulan=="07") echo "selected"; ?>>Juli</option>
	<option value="08" <?php if ($bulan=="08") echo "selected"; ?>>Agustus</option>
	<option value="09" <?php if ($bulan=="09") echo "selected"; ?>>September</option>
	<option value="10" <?php if ($bulan=="10") echo "selected"; ?>>Oktober</option>
	<option value="11" <?php if ($bulan=="11") echo "selected"; ?>>November</option>
	<option value="12" <?php if ($bulan=="12") echo "selected"; ?>>Desember</option>
	</select>
	<input type="text" size="5" maxlength="4" name="tahun" value="<?php echo $tahun; ?>" class="inputbox">
	&nbsp;&nbsp;	
	<?php
	}
	else
	{
	?>
	<input type="text" value="<?php echo $key; ?>" name="key" class="inputbox">
	<?php
	}
	?> &raquo; <font size="1.5">Enter</font>
	</td>
	<td align="right" width="890"><a href="excel_pelanggaran.php?do=data.kios_shelter&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.pelanggaran&act=cetak&bulan=<?php echo $bulan; ?>&tahun=<?php echo $tahun; ?>&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1300">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Bulan</td> 
    <td width="80" background="images/bgcell.gif" height="25" align="center">No. Kendaraan</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Nomor Uji</td>              
    <td width="140" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>              
    <td width="120" background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td>              
    <td width="140" background="images/bgcell.gif" height="25" align="center">Alamat Pemilik</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Nama Pengemudi</td>              
    <td width="150" background="images/bgcell.gif" height="25" align="center">Alamat Pengemudi</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Pasal Pelanggaran</td>              
    <td width="120" background="images/bgcell.gif" height="25" align="center">Bukti Jaminan</td>              
    <td width="120" background="images/bgcell.gif" height="25" align="center">Keterangan</td>              
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_pelanggaran.php">
    <td align="center" width="35"><a href="index.php?do=data.pelanggaran"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center">
	<select name="bulan" class="inputbox2">
		<option value="00" selected>------------</option>
		<option value="01" <?php if($bulan=='01') {echo "selected";}?>>Januari</option>
		<option value="02" <?php if($bulan=='02') {echo "selected";}?>>Februari</option>
		<option value="03" <?php if($bulan=='03') {echo "selected";}?>>Maret</option>
		<option value="04" <?php if($bulan=='04') {echo "selected";}?>>April</option>
		<option value="05" <?php if($bulan=='05') {echo "selected";}?>>Mei</option>
		<option value="06" <?php if($bulan=='06') {echo "selected";}?> >Juni</option>
		<option value="07" <?php if($bulan=='07') {echo "selected";}?>>Juli</option>
		<option value="08" <?php if($bulan=='08') {echo "selected";}?>>Agustus</option>
		<option value="09" <?php if($bulan=='09') {echo "selected";}?>>September</option>
		<option value="10" <?php if($bulan=='10') {echo "selected";}?>>Oktober</option>
		<option value="11" <?php if($bulan=='11') {echo "selected";}?>>November</option>
		<option value="12" <?php if($bulan=='12') {echo "selected";}?>>Desember</option>
	</select><br><input type="text" name="tahun" class="inputbox2" size="5" maxlength="4" value="<?php echo $tahun; ?>">
	</td>
    <td height="25" align="center"><input type="text" name="no_kend" size="10" value="<?php echo $no_kend; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="jenis_kend" size="20" value="<?php echo $jenis_kend; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="nama_pmilik" size="15" value="<?php echo $nama_pmilik; ?>" class="inputbox2"></td>
    <td height="25" align="center"><textarea name="alamat_pmilik" class="inputbox2" cols="20" rows="5"><?php echo $alamat_pmilik; ?></textarea></td>
	<td height="25" align="center"><input type="text" name="nama_driver" size="15" value="<?php echo $nama_driver; ?>" class="inputbox2"></td>
	<td height="25" align="center"><textarea name="alamat_driver" class="inputbox2" cols="20" rows="5"><?php echo $alamat_driver; ?></textarea></td>
	<td height="25" align="center"><input type="text" name="pasal_pelanggaran" size="20" value="<?php echo $pasal_pelanggaran; ?>" class="inputbox2"></td>
	<td height="25" align="center"><input type="text" name="jaminan" size="15" value="<?php echo $jaminan; ?>" class="inputbox2"></td>
	<td height="25" align="center"><input type="text" name="keterangan" size="15" value="<?php echo $keterangan; ?>" class="inputbox2"></td>
 	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_pelanggaran where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <tr class="text" bgcolor="efefef">
  <form method="post" action="update_pelanggaran.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.pelanggaran"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center">
	<select name="bulan" class="inputbox2">
			<option value="00" <?php if ($bulan=="00") { echo "selected"; } ?>>------------</option>
			<option value="01" <?php if ($bulan=="01") { echo "selected"; } ?>>Januari</option>
			<option value="02" <?php if ($bulan=="02") { echo "selected"; } ?>>Februari</option>
			<option value="03" <?php if ($bulan=="03") { echo "selected"; } ?>>Maret</option>
			<option value="04" <?php if ($bulan=="04") { echo "selected"; } ?>>April</option>
			<option value="05" <?php if ($bulan=="05") { echo "selected"; } ?>>Mei</option>
			<option value="06" <?php if ($bulan=="06") { echo "selected"; } ?>>Juni</option>
			<option value="07" <?php if ($bulan=="07") { echo "selected"; } ?>>Juli</option>
			<option value="08" <?php if ($bulan=="08") { echo "selected"; } ?>>Agustus</option>
			<option value="09" <?php if ($bulan=="09") { echo "selected"; } ?>>September</option>
			<option value="10" <?php if ($bulan=="10") { echo "selected"; } ?>>Oktober</option>
			<option value="11" <?php if ($bulan=="11") { echo "selected"; } ?>>November</option>
			<option value="12" <?php if ($bulan=="12") { echo "selected"; } ?>>Desember</option>
		</select><br><input type="text" name="tahun" class="inputbox2" maxlength="4" size="4" value="<?php echo $tahun; ?>"/>
	</td>
    <td height="25" align="center"><input type="text" name="no_kend" size="10" value="<?php echo $row[no_kend]; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="jenis_kend" size="20" value="<?php echo $row[jenis_kend]; ?>" class="inputbox2"></td>
    <td height="25" align="center"><input type="text" name="nama_pmilik" size="15" value="<?php echo $row[nama_pmilik]; ?>" class="inputbox2"></td>
    <td height="25" align="center"><textarea name="alamat_pmilik" class="inputbox2" cols="20" rows="5"><?php echo $row[alamat_pmilik]; ?></textarea></td>
	<td height="25" align="center"><input type="text" name="nama_driver" size="15" value="<?php echo $row[nama_driver]; ?>" class="inputbox2"></td>
	<td height="25" align="center"><textarea name="alamat_driver" class="inputbox2" cols="20" rows="5"><?php echo $row[alamat_driver]; ?></textarea></td>
	<td height="25" align="center"><input type="text" name="pasal_pelanggaran" size="20" value="<?php echo $row[pasal_pelanggaran]; ?>" class="inputbox2"></td>
	<td height="25" align="center"><input type="text" name="jaminan" size="15" value="<?php echo $row[jaminan]; ?>" class="inputbox2"></td>
	<td height="25" align="center"><input type="text" name="keterangan" size="15" value="<?php echo $row[keterangan]; ?>" class="inputbox2"></td>
 	</form>
	
  </tr> 
  <?php
  }
  if ($kategori=="no_kendaraan")
  { $strsql="select * from lal_pelanggaran where no_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="no_uji")
  { $strsql="select * from lal_pelanggaran where no_uji like '%$key%' order by id desc"; }
  elseif ($tahun)
  { $strsql="select * from lal_pelanggaran where month(bulan)='$bulan' and year(bulan)='$tahun' order by id desc"; }  
  else
  {  $strsql="select * from lal_pelanggaran order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.pelanggaran&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.pelanggaran&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
    <td height="25" align="left"><?php
	  $temp=explode("-",$row[bulan]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  bulan2($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[no_kend]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[no_uji]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[jenis_kend]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[nama_pmilik]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[alamat_pmilik]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[nama_driver]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[alamat_driver]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[pasal_pelanggaran]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[jaminan]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[keterangan]); ?></td>
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