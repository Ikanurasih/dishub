<?php
$no_kios=$_REQUEST['no_kios'];
$nama_penyewa=$_REQUEST['nama_penyewa'];
$alamat=$_REQUEST['alamat'];
$luas=$_REQUEST['luas'];
$usaha=$_REQUEST['usaha'];
$no_izin=$_REQUEST['no_izin'];
$tgl_izin=$_REQUEST['tgl_izin'];
$masa_awal=$_REQUEST['masa_awal'];
$masa_akhir=$_REQUEST['masa_akhir'];
$biaya=$_REQUEST['biaya'];
$id=$_REQUEST['id'];

//echo $key;
if ($act=="del")
{
mysql_query("delete from lal_kios where id='$id'");
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
    <td width="59"><div align="left"><img src="images/frontpage.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kios Shelter </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kios Shelter: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_kios.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.kios_shelter"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
elseif ($act=="excel")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kios Shelter ke Microsoft Excel: </legend>
<table class="tdtitle_black">
<tr>
<td class="tdtitle_black" height="50" valign="middle"><?php include "excel_kios.php"; ?></td>
</tr>
</table>
</fieldset>
<?php
}
else
{
?>
<table width="990" border="0" cellpadding="2" cellspacing="2">
    <?php
  //if ($_SESSION['tipe']=="2")
  //{
  ?>
  <tr>
    <td width="120"><a href="?act=add&do=data.kios_shelter"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kios Shelter Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  <td width="250">&nbsp;</td>
  <td width="620">&nbsp;</td>
  </tr>
    <?php
  //}
  ?>
  <form method="post" action="index.php?do=data.kios_shelter">
  <tr class="tdtitle_black">
	<!--<input type="hidden" name="key" value="<?php echo $key; ?>">-->
    <td>Kategori : &nbsp;</td>
	<td><select name="kategori" class="inputbox" onChange="submit();">
	<option value="0" <?php if ($kategori=="0") { echo "selected"; } ?> >-----------------</option>
	<option value="no_kios" <?php if ($kategori=="no_kios") echo "selected"; ?>>No. Kios</option>
	<option value="nama_penyewa" <?php if ($kategori=="nama_penyewa") echo "selected"; ?>>Nama Penyewa</option>
	<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
	<option value="usaha" <?php if ($kategori=="usaha") echo "selected"; ?>>Jenis Usaha</option>
	<option value="no_izin" <?php if ($kategori=="no_izin") echo "selected"; ?>>No. Izin</option>
	<option value="tgl_izin" <?php if ($kategori=="tgl_izin") echo "selected"; ?>>Tgl. Izin</option>
	</select></td>
	<td>&nbsp;</td>
  </tr>
	</form>
  <form method="post" action="index.php?do=data.kios_shelter">
  <tr class="tdtitle_black">
  	<td>Pencarian :</td>
	<td>
	<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
	<?php
	if ($kategori=="tgl_izin")
	{
	?>
<input type="text" name="key" id="key" size="15" value="<?php echo $key; ?>" class="inputbox" readonly /><img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('key'),'yyyy-mm-dd',this)" style="cursor:pointer" /> <input type="submit" value=" Cari " class="inputbox">
	<?php
	}
	else
	{
	?>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox">
	 &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;
	<?php
	}
	?>
  </td>
	<td align="right"><a href="excel_kios.php?do=data.kios_shelter&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.kios_shelter&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
  </tr>
  	</form>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="990">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">No Kios</td>
    <td width="100" background="images/bgcell.gif" height="25" align="center">Nama Penyewa</td>
    <td width="140" background="images/bgcell.gif" height="25" align="center">Alamat</td>    
    <td width="70" background="images/bgcell.gif" height="25" align="center">Luas Kios (m2)</td>             
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jenis Usaha</td>             
    <td width="120" background="images/bgcell.gif" height="25" align="center">No. Izin</td>            
    <td width="100" background="images/bgcell.gif" height="25" align="center">Tgl. Izin</td>	
    <td width="180" background="images/bgcell.gif" height="25" align="center">Masa Berlaku</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Biaya</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_kios.php">
    <td align="center" width="35"><a href="index.php?do=data.kios_shelter"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="no_kios" size="8" value="<?php echo $no_kios; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_penyewa" size="20" value="<?php echo $nama_penyewa; ?>" class="inputbox"></td>
    <td height="25" align="center"><textarea name="alamat" class="inputbox" cols="20" rows="5"><?php echo $alamat;?></textarea></td>
    <td height="25" align="center"><input type="text" name="luas" size="8" value="<?php echo $luas; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="usaha" size="15" value="<?php echo $usaha; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="no_izin" size="15" value="<?php echo $no_izin; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tgl_izin" id="tgl_izin" size="15" value="<?php echo $tgl_izin; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
    <td height="25" align="center"><input type="text" name="masa_awal" id="masa_awal" size="15" value="<?php echo $masa_awal; ?>" class="inputbox" readonly /><img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /><br>s/d<br>
    <input type="text" name="masa_akhir" id="masa_akhir" size="15" value="<?php echo $masa_akhir; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	<td height="25" align="center"><input type="text" name="biaya" size="10" value="<?php echo $biaya; ?>" class="inputbox"></td>
 	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from lal_kios where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <tr class="text" bgcolor="efefef">
  <form method="post" action="update_kios.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.kios_shelter"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="no_kios" size="8" value="<?php echo $row[no_kios]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama_penyewa" size="20" value="<?php echo $row[nama_penyewa]; ?>" class="inputbox"></td>
    <td height="25" align="center"><textarea name="alamat" class="inputbox" cols="20" rows="5"><?php echo $row[alamat];?></textarea></td>
    <td height="25" align="center"><input type="text" name="luas" size="10" value="<?php echo $row[luas]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="usaha" size="15" value="<?php echo $row[usaha]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="no_izin" size="15" value="<?php echo $row[no_izin]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tgl_izin" id="tgl_izin" size="15" value="<?php if ($row[tgl_izin]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_izin];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
    <td height="25" align="center"><input type="text" name="masa_awal" id="masa_awal" size="15" value="<?php if ($row[masa_awal]=="0000-00-00") {	echo ""; }else{ echo $row[masa_awal];} ?>" class="inputbox" readonly /><img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /><br>s/d<br>
    <input type="text" name="masa_akhir" id="masa_akhir" size="15" value="<?php if ($row[masa_akhir]=="0000-00-00") {	echo ""; }else{ echo $row[masa_akhir];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	<td height="25" align="center"><input type="text" name="biaya" size="10" value="<?php echo $row[biaya]; ?>" class="inputbox"></td>
 	</form>
	
  </tr> 
  <?php
  }
  if ($kategori=="no_kios")
  {  $strsql="select * from lal_kios where no_kios like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_penyewa")
  {  $strsql="select * from lal_kios where nama_penyewa like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from lal_kios where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="usaha")
  {  $strsql="select * from lal_kios where usaha like '%$key%' order by id desc"; }
  elseif ($kategori=="no_izin")
  {  $strsql="select * from lal_kios where no_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="tgl_izin")
  {  $strsql="select * from lal_kios where tgl_izin like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_kios order by id desc"; }
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
    <td align="center" width="50"><a href="?do=data.kios_shelter&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.kios_shelter&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
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
	<td height="25" align="left"><?php echo $row[no_kios]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_penyewa]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
    <td height="25" align="left"><?php echo $row[usaha]; ?></td>
    <td height="25" align="left"><?php echo $row[no_izin]; ?></td>
    <td height="25" align="left">
	<?php
	  $temp=explode("-",$row[tgl_izin]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	</td>
	<td height="25" align="left">
	<?php
	  $temp=explode("-",$row[masa_awal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>&nbsp; s/d&nbsp;
	  <?php
	  $temp=explode("-",$row[masa_akhir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	</td>
	<td height="25" align="right"><?php null($row[biaya]); ?></td>
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