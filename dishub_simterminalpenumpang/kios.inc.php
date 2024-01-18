<?php
$id	=$_REQUEST['id'];
$nama_penyewa=$_REQUEST['nama_penyewa'];
$alamat=$_REQUEST['alamat'];
$luas=$_REQUEST['luas'];
$no_kios=$_REQUEST['no_kios'];
$jenis_usaha=$_REQUEST['jenis_usaha'];
$no_izin=$_REQUEST['no_izin'];
$tanggal=$_REQUEST['tanggal'];
$biaya=$_REQUEST['biaya'];
$masa_berlaku_awal=$_REQUEST['masa_berlaku_awal'];
$masa_berlaku_akhir=$_REQUEST['masa_berlaku_akhir'];
$kategori=$_REQUEST['kategori'];

if ($act=="del")
{
mysql_query("delete from ter_kios where id='$id'");
}
?>

<html>
<head>
<title>PAJAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/frontpage.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kios, Kamar Mandi, WC </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kios, Kamar Mandi, WC: </legend>
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
  <td colspan="3"><a href="index.php?do=data.kios"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
    <td width="218"><a href="?act=add&do=data.kios"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="218">
	  <form method="post" action="index.php?do=data.kios">
	Pencarian: &nbsp;
      <select name="kategori" class="inputbox" onChange="submit();">
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama Penyewa</option>
	<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
	<option value="kategori" <?php if ($kategori=="kategori") echo "selected"; ?>>Kategori</option>
	<option value="luas" <?php if ($kategori=="luas") echo "selected"; ?>>Luas Kios, KM / WC (m2)</option>
	<option value="no_kios" <?php if ($kategori=="no_kios") echo "selected"; ?>>No. Kios</option>
	<option value="jenis_usaha" <?php if ($kategori=="jenis_usaha") echo "selected"; ?>>Jenis Usaha</option>
	<option value="no_izin" <?php if ($kategori=="no_izin") echo "selected"; ?>>No. Izin</option>
	<option value="tanggal" <?php if ($kategori=="tanggal") echo "selected"; ?>>Tanggal Izin</option>
	<option value="masa_berlaku" <?php if ($kategori=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	<option value="biaya" <?php if ($kategori=="biaya") echo "selected"; ?>>Biaya</option>
	</select>
	</form>
	</td>
	<td width="800">
	<form method="post" action="index.php?do=data.kios">
	<input type="hidden" name="kategori" value="<?php if (empty($kategori)) { echo "nama"; } else { echo $kategori; } ?>">
	<?php
	if ($kategori=="tanggal" or $kategori=="masa_berlaku")
	{
	?>
	<input type="text" name="key" id="key" size="10" value="<?php echo $key; ?>" class="inputbox" readonly=""> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('key'),'yyyy-mm-dd',this)" style="cursor:pointer" />&nbsp;<input type="submit" value=" Cari " class="inputbox">
	<?php
	}
	else
	{
	?>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</form>
	<?php
	}
	?>
	<td width="282"><div align="right"><a href="excel_kios.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.kios&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1320">
  <tr class="tdtitle_white">
	<td width="100" colspan="2" rowspan="2"   background="images/bgcell.gif">&nbsp;</td>
    <td   width="150" rowspan="2" align="center" background="images/bgcell.gif">Nama Penyewa </td> 
    <td   width="180" rowspan="2" align="center" background="images/bgcell.gif">Alamat</td> 
    <td   width="100" rowspan="2" align="center" background="images/bgcell.gif">Kategori Usaha</td> 
    <td   width="100" rowspan="2" align="center" background="images/bgcell.gif">Ukuran Kios, KM/WC (m2)</td> 
	<td   width="100" rowspan="2" align="center" background="images/bgcell.gif">No. Kios, KM/WC </td>                                        
    <td   width="100" rowspan="2" align="center" background="images/bgcell.gif">Jenis Usaha</td>                                        
    <td   width="130" rowspan="2" align="center" background="images/bgcell.gif">No. Izin</td>                                        
    <td   width="130" rowspan="2" align="center" background="images/bgcell.gif">Tanggal Izin</td>                                        
    <td height="25" colspan="3" align="center" background="images/bgcell.gif">Masa Berlaku Izin </td>                                        
    <td   width="80" rowspan="2" align="center" background="images/bgcell.gif">Biaya</td>   
	<td   width="80" rowspan="2" align="center" background="images/bgcell.gif">Info Jatuh Tempo</td>                                        
   </tr>
   <tr class="tdtitle_white">
	<td   width="130" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>                                        
	<td   width="30" background="images/bgcell.gif" height="25" align="center">s/d</td>                                        
    <td   width="130" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>                                        
   </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_kios.php" enctype="multipart/form-data">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="100"><a href="index.php?do=data.kios"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_penyewa" size="20" value="<?php echo $nama_penyewa; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="alamat" size="22" value="<?php echo $alamat; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><select name="kategori" class="inputbox">
	<option value="-" <?php if ($kategori=="-") echo "selected"; ?> >---Pilih---</option>
	<option value="Kios" <?php if ($kategori=="Kios") echo "selected"; ?>>Kios</option>
	<option value="KM / WC" <?php if ($kategori=="KM / WC") echo "selected"; ?>>KM / WC</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="luas" size="10" value="<?php echo $luas; ?>" class="inputbox"   /></td>
	<td height="25" align="center"><input type="text" name="no_kios" size="10" value="<?php echo $no_kios; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jenis_usaha" size="15" value="<?php echo $jenis_usaha; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="no_izin" size="15" value="<?php echo $no_izin; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input name="tanggal" type="text" id="tanggal" class="inputbox" value="<?php echo $tanggal; ?>" size="10" readonly="">
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	  <td><input name="masa_berlaku_awal" type="text" id="masa_berlaku_awal" class="inputbox" value="<?php echo $masa_berlaku_awal; ?>" size="10" readonly="">
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	  <td>&nbsp;</td>
	<td><input name="masa_berlaku_akhir" type="text" id="masa_berlaku_akhir" class="inputbox" value="<?php echo $masa_berlaku_akhir; ?>" size="10" readonly="">
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
    <td height="25" align="center"><input type="text" name="biaya" size="10" value="<?php echo $biaya; ?>" class="inputbox"   /></td>
	<td align="center">auto</td>
    </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_kios where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_kios.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="100"><a href="index.php?do=data.kios"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_penyewa" size="20" value="<?php echo $row[nama_penyewa]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="alamat" size="22" value="<?php echo $row[alamat]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><select name="kategori" class="inputbox">
	<option value="-" <?php if ($row[kategori]=="-") echo "selected"; ?> >---Pilih---</option>
	<option value="Kios" <?php if ($row[kategori]=="Kios") echo "selected"; ?>>Kios</option>
	<option value="KM / WC" <?php if ($row[kategori]=="KM / WC") echo "selected"; ?>>KM / WC</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="luas" size="10" value="<?php echo $row[luas]; ?>" class="inputbox"   /></td>
	<td height="25" align="center"><input type="text" name="no_kios" size="10" value="<?php echo $row[no_kios]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jenis_usaha" size="15" value="<?php echo $row[jenis_usaha]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="no_izin" size="15" value="<?php echo $row[no_izin]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="tanggal" id="tanggal" size="10" value="<?php if ($row[tgl_izin]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_izin];} ?>" class="inputbox" readonly /> 
    <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	  <td><input type="text" name="masa_berlaku_awal" id="masa_berlaku_awal" size="10" value="<?php if ($row[masa_berlaku_awal]=="0000-00-00") {	echo ""; }else{ echo $row[masa_berlaku_awal];} ?>" class="inputbox" readonly /> 
      <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	  <td>&nbsp;</td>
	<td><input type="text" name="masa_berlaku_akhir" id="masa_berlaku_akhir" size="10" value="<?php if ($row[masa_berlaku_akhir]=="0000-00-00") {	echo ""; }else{ echo $row[masa_berlaku_akhir];} ?>" class="inputbox" readonly /> 
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
    <td height="25" align="center"><input type="text" name="biaya" size="10" value="<?php echo $row[biaya]; ?>" class="inputbox"   /></td>
	<td align="center">auto</td>
    </tr>
   </form>
  <?php
    }
  if ($kategori=="nama" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where nama_penyewa like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="kategori" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where kategori like '%$key%' order by id desc"; }
  elseif ($kategori=="luas" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where luas like '%$key%' order by id desc"; }
   elseif ($kategori=="no_kios" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where no_kios like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_usaha" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where jenis_usaha like '%$key%' order by id desc"; }
  elseif ($kategori=="no_izin" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where no_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="tanggal" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where tgl_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="biaya" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where biaya like '%$key%' order by id desc"; }
  elseif ($kategori=="masa_berlaku" and !empty($key))
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios where masa_berlaku_akhir like '%$key%' order by id desc"; }
   else
  {  $strsql="select *, to_days(masa_berlaku_akhir)-to_days(curdate()) as jatuh_tempo from ter_kios order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil)or die(mysql_error()))
  {
  $NO++;
  ?>
 <tr class="text" bgcolor="<?php 
  if ($row[jatuh_tempo]<=30) 
  { echo "#FF9999"; } 
  else 
  { 
   	 if ($no%2==1) { echo "efefef"; } else { echo "dddddd"; } 
   }; 
  ?>">
    <td align="center" width="70"><a href="?do=data.kios&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.kios&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="left"><?php echo $row[nama_penyewa]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
	<td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
	<td height="25" align="center"><?php echo $row[no_kios]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_usaha]; ?></td>
    <td height="25" align="center"><?php echo $row[no_izin]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tgl_izin]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_awal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	  <td>&nbsp;</td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_akhir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="right"><?php null($row[biaya]); ?></td>
	<td height="25" align="center"><?php echo $row[jatuh_tempo]." hari"; ?></td>
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
