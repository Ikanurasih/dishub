<?php
$nama_jalan						=$_REQUEST['nama_jalan'];
$segmen_dari						=$_REQUEST['segmen_dari'];
$segmen_ke					=$_REQUEST['segmen_ke'];
$sistem						=$_REQUEST['sistem'];
$jenis_larangan						=$_REQUEST['jenis_larangan'];
$pemberlakuan_dari					=$_REQUEST['pemberlakuan_dari'];
$pemberlakuan_ke					=$_REQUEST['pemberlakuan_ke'];
$id					=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from bar_larangan where id='$id'");
}
?>

<html>
<head>
<title>Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/asterisk.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Larangan Angkutan Barang </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Larangan Angkutan Barang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_larangan.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.larangan"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
elseif ($act=='add')
{
?>
  <table width="600" border="1" cellpadding="1" cellspacing="0">
  <form method="post" action="insert_larangan.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Larangan Angkutan Barang</td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Nama jalan</td>
      <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td width="381" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama_jalan" size="40" value="<?php echo $nama_jalan; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Segmen Jalan Dari </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="segmen_dari" size="40" value="<?php echo $segmen_dari; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Segmen Jalan Ke </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="segmen_ke" size="40" value="<?php echo $segmen_ke; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Sistem Arus </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
     <td valign="middle" bgcolor="efefef">&nbsp;<select name="sistem" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="1 arah" <?php if($sistem=="1 arah") {echo "selected";}?>>1 arah</option>
			<option value="2 arah" <?php if($sistem=="2 arah") {echo "selected";}?>>2 arah</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Jenis Larangan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_larangan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Total" <?php if($jenis_larangan=="total") {echo "selected";}?>>Total</option>
			<option value="Izin Dishubkominfo" <?php if($jenis_larangan=="Izin Dishubkominfo") {echo "selected";}?>>Izin Dishubkominfo</option>
		</select></div></td> 
  </tr> 
 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Pemberlakuan Larangan Dari </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="pemberlakuan_dari" size="40" value="<?php echo $pemberlakuan_dari; ?>" class="inputbox"  /></td>
  </tr>	
  <tr class="tdtitle_black"> 
       <td height="30" valign="middle" bgcolor="#dddddd" width="196">&nbsp;Pemberlakuan Larangan Ke </td>
       <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="pemberlakuan_ke" size="40" value="<?php echo $pemberlakuan_ke; ?>" class="inputbox"  /></td>
  </tr>
  <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.larangan"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>

   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from bar_larangan order by id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_larangan.php">
    
	 <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table width="600" border="1" cellpadding="1" cellspacing="0">
 <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
        Data Larangan Angkutan Barang  </td>
  </tr>
         <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Nama jalan</td>
      <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td width="382" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama_jalan" size="40" value="<?php echo $row[nama_jalan]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Segmen Jalan Dari </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="segmen_dari" size="40" value="<?php echo $row[segmen_dari]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Segmen Jalan Ke </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="segmen_ke" size="40" value="<?php echo $row[segmen_ke]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Sistem Arus </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
     <td valign="middle" bgcolor="efefef">&nbsp;<select name="sistem" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="1 arah" <?php if($row[sistem]=="1 arah") {echo "selected";}?>>1 arah</option>
			<option value="2 arah" <?php if($row[sistem]=="2 arah") {echo "selected";}?>>2 arah</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Jenis Larangan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_larangan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Total" <?php if($row[jenis_larangan]=="Total") {echo "selected";}?>>Total</option>
			<option value="Izin Dishubkominfo" <?php if($row[jenis_larangan]=="Izin Dishubkominfo") {echo "selected";}?>>Izin Dishubkominfo</option>
		</select></div></td> 
  </tr> 
 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Pemberlakuan Larangan Dari </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="pemberlakuan_dari" size="40" value="<?php echo $row[pemberlakuan_dari]; ?>" class="inputbox"  /></td>
  </tr>	
  <tr class="tdtitle_black"> 
       <td height="30" valign="middle" bgcolor="#dddddd" width="194">&nbsp;Pemberlakuan Larangan Ke </td>
       <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="pemberlakuan_ke" size="40" value="<?php echo $row[pemberlakuan_ke]; ?>" class="inputbox"  /></td>
  </tr>
	  <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.larangan"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
  </table>
</form>
	<?php
	}
else
{
?>
<table width="1070" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.larangan"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Larangan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.larangan">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_jalan" <?php if ($kategori=="nama_jalan") echo "selected"; ?>>Nama Jalan</option>
	
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_larangan_angkutan_barang.php?do=data.barang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/excel.jpg" title="Klik disini untuk Cetak Laporan dalam Bentuk Excel" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="index.php?do=data.larangan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1070">
  <tr class="tdtitle_white">
  <td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
	<td rowspan="2" width="150" background="images/bgcell.gif" height="25" align="center">Nama jalan</td> 
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Segmen Jalan</td>                    
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Sistem Arus</td>              
    <td rowspan="2" width="120" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan <br> Larangan Barang</td>              
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Pembelakuan Larangan</td>              
  </tr>
   <tr class="tdtitle_white">
	<td width="150" background="images/bgcell.gif" height="25" align="center">Dari</td>              
    <td width="150" background="images/bgcell.gif" height="25" align="center">Ke</td>
	<td width="150" background="images/bgcell.gif" height="25" align="center">Dari</td>              
    <td width="150" background="images/bgcell.gif" height="25" align="center">Ke</td>
  </tr>
  <?php
  if ($kategori=="nama_jalan")
  {  $strsql="select * from bar_larangan where nama_jalan like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_larangan order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.larangan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.larangan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_jalan]; ?></td>
    <td height="25" align="left"><?php echo $row[segmen_dari]; ?></td>
    <td height="25" align="left"><?php echo $row[segmen_ke]; ?></td>
	<td height="25" align="center"><?php echo $row[sistem]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_larangan]; ?></td>
	<td height="25" align="left"><?php echo $row[pemberlakuan_dari]; ?></td>
	<td height="25" align="left"><?php echo $row[pemberlakuan_ke]; ?></td>
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
