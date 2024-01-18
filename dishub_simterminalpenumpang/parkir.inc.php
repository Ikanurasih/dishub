<?php
$id	=$_REQUEST['id'];
$tanggal=$_REQUEST['tanggal'];
$jenis_au=$_REQUEST['jenis_au'];
$jml_sepeda=$_REQUEST['jml_sepeda'];
$jml_sepeda_motor=$_REQUEST['jml_sepeda_motor'];
$jml_mobil=$_REQUEST['jml_mobil'];

if ($act=="del")
{
mysql_query("delete from ter_parkir where id='$id'");
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
    <td width="59"><div align="left"><img src="images/templatemanager.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kendaraan Pribadi Parkir </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kendaraan Pribadi Parkir: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_parkir.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.parkir"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="600" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="204"><a href="?act=add&do=data.parkir"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.parkir">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox" onChange="submit();">
	<option value="jml_sepeda" <?php if ($kategori=="jml_sepeda") echo "selected"; ?>>Jumlah Sepeda</option>
	<option value="jml_sepeda_motor" <?php if ($kategori=="jml_sepeda_motor") echo "selected"; ?>>Jumlah Sepeda Motor</option>
	<option value="jml_mobil" <?php if ($kategori=="jml_mobil") echo "selected"; ?>>Jumlah Mobil</option>
	<option value="tanggal" <?php if ($kategori=="tanggal") echo "selected"; ?>>Tanggal</option>
	</select>
	</td>
	</form>
	<form method="post" action="index.php?do=data.parkir">
	<input type="hidden" name="kategori" value="<?php if (empty($kategori)) { echo "jml_sepeda"; } else { echo $kategori; } ?>">
	<td width="212">
	<?php
	if ($kategori=="tanggal")
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
	<td width="152"><div align="right"><a href="excel_parkir.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.parkir&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	<td width="6"></form>  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="600">
  <tr class="tdtitle_white">
	<td width="100" colspan="2" rowspan="2"   background="images/bgcell.gif">&nbsp;</td>
    <td   width="150" rowspan="2" align="center" background="images/bgcell.gif">Tanggal</td> 
    <td height="25" colspan="3" align="center" background="images/bgcell.gif">Jumlah</td>                                        
   </tr>
   <tr class="tdtitle_white">
	<td   width="120" background="images/bgcell.gif" height="25" align="center">Sepeda</td>                                        
    <td   width="120" background="images/bgcell.gif" height="25" align="center">Sepeda Motor</td>                                        
    <td   width="110" background="images/bgcell.gif" height="25" align="center">Mobil</td>                                        
   </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_parkir.php" enctype="multipart/form-data">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="100"><a href="index.php?do=data.parkir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input name="tanggal" type="text" id="tanggal" class="inputbox" value="<?php echo $tanggal; ?>" size="15" readonly="">
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
    <td height="25" align="center"><input type="text" name="jml_sepeda" size="5" value="<?php echo $jml_sepeda; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jml_sepeda_motor" size="5" value="<?php echo $jml_sepeda_motor; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jml_mobil" size="5" value="<?php echo $jml_mobil; ?>" class="inputbox"   /></td>
    </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_parkir where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_parkir.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="100"><a href="index.php?do=data.parkir"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td valign="middle" bgcolor="efefef" align="center"><input type="text" name="tanggal" id="tanggal" size="15" value="<?php if ($row[tanggal]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal];} ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
    </td>
    <td height="25" align="center"><input type="text" name="jml_sepeda" size="5" value="<?php echo $row[jml_sepeda]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jml_sepeda_motor" size="5" value="<?php echo $row[jml_sepeda_motor]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jml_mobil" size="5" value="<?php echo $row[jml_mobil]; ?>" class="inputbox"   /></td>
    </tr>
   </form>
  <?php
    }
  if ($kategori=="jml_sepeda")
  {  $strsql="select * from ter_parkir where jml_sepeda like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="jml_sepeda_motor")
  {  $strsql="select * from ter_parkir where jml_sepeda_motor like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="jml_mobil")
  {  $strsql="select * from ter_parkir where jml_mobil like '%$key%' order by tanggal desc"; }
  elseif ($kategori=="tanggal")
  {  $strsql="select * from ter_parkir where tanggal like '%$key%' order by tanggal desc"; }
   else
  {  $strsql="select * from ter_parkir order by tanggal desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="70"><a href="?do=data.parkir&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.parkir&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center">
	<?php
	  $temp=explode("-",$row[tanggal]); 
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
    <td height="25" align="center"><?php echo $row[jml_sepeda]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_sepeda_motor]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_mobil]; ?></td>
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
