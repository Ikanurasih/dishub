<?php
$id	=$_REQUEST['id'];
$no_agen=$_REQUEST['no_agen'];
$nama_po=$_REQUEST['nama_po'];
$perwakilan_agen=$_REQUEST['perwakilan_agen'];
$ukuran_kios=$_REQUEST['ukuran_kios'];
$masa_berlaku=$_REQUEST['masa_berlaku'];
$no_sk=$_REQUEST['no_sk'];
$tgl_izin=$_REQUEST['tgl_izin'];
$biaya=$_REQUEST['biaya'];

if ($act=="del")
{
mysql_query("delete from ter_bus where id='$id'");
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
    <td width="59"><div align="left"><img src="images/alumni.gif" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Agen Bus </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Agen Bus: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_bus.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.bus"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frm_add_user" method="post" action="insert_bus.php">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Agen Bus </div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Agen</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_agen" size="20" value="<?php echo $no_agen; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama PO</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nama_po" size="40" value="<?php echo $nama_po; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Perwakilan Agen/PO </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="perwakilan_agen" size="40" value="<?php echo $perwakilan_agen; ?>" class="inputbox" ></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Ukuran Kios </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="ukuran_kios" size="20" value="<?php echo $ukuran_kios; ?>" class="inputbox"   /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="15" value="<?php echo $masa_berlaku; ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />
 	</td>
 </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. SK/Izin</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="no_sk" size="20" value="<?php echo $no_sk; ?>" class="inputbox"   /></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tgl. Izin</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="tgl_izin" id="tgl_izin" size="15" value="<?php echo $tgl_izin; ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" />
 	</td>
 </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Biaya</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="biaya" size="20" value="<?php echo $biaya; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.bus"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_bus where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frm_add_user" method="post" action="update_bus.php">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Agen Bus </div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Agen</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_agen" size="20" value="<?php echo $row[no_agen]; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama PO</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nama_po" size="40" value="<?php echo $row[nama_po]; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Perwakilan Agen/PO </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="perwakilan_agen" size="40" value="<?php echo $row[perwakilan_agen]; ?>" class="inputbox" ></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Ukuran Kios </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="ukuran_kios" size="20" value="<?php echo $row[ukuran_kios]; ?>" class="inputbox"   /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="15" value="<?php if ($row[masa_berlakul]=="0000-00-00") {	echo ""; }else{ echo $row[masa_berlaku];} ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />
 	</td>
 </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. SK/Izin</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="no_sk" size="20" value="<?php echo $row[no_sk]; ?>" class="inputbox"   /></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tgl. Izin</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="tgl_izin" id="tgl_izin" size="15" value="<?php if ($row[tgl_izin]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_izin];} ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" />
 	</td>
 </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Biaya</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="biaya" size="20" value="<?php echo $row[biaya]; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.bus"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
  <?php
  }else{ 
  ?>
  <table width="1100" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="428"><a href="?act=add&do=data.bus"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.bus">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="no_agen" <?php if ($kategori=="no_agen") echo "selected"; ?>>No Agen</option>
	<option value="nama_po" <?php if ($kategori=="nama_po") echo "selected"; ?>>Nama PO</option>
	<option value="perwakilan_agen" <?php if ($kategori=="perwakilan_agen") echo "selected"; ?>>Perwakilan Agen / PO</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="158"><div align="right"><a href="excel_agen_bus.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.bus&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1100">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="80" background="images/bgcell.gif" height="25" align="center">No. Agen </td> 
	<td   width="150" background="images/bgcell.gif" height="25" align="center">Nama PO </td> 
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Perwakilan Agen/PO </td>  
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Ukuran Kios </td>  
	<td   width="110" background="images/bgcell.gif" height="25" align="center">Masa Berlaku </td>  
	<td   width="110" background="images/bgcell.gif" height="25" align="center">No. SK/Izin </td>  
	<td   width="110" background="images/bgcell.gif" height="25" align="center">Tgl. Izin </td>  
	<td   width="110" background="images/bgcell.gif" height="25" align="center">Biaya </td>  	                                      
	<td   width="80" background="images/bgcell.gif" height="25" align="center">Info Jatuh Tempo </td>  	                                      
   </tr>
  <?php
  if ($kategori=="no_agen")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where no_agen like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_po")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where nama_po like '%$key%' order by id desc"; }
  elseif ($kategori=="perwakilan_agen")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus where perwakilan_agen like '%$key%' order by id desc"; }
   else
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from ter_bus order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
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
    <td align="center" width="50"><a href="?do=data.bus&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.bus&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center"><?php echo $row[no_agen]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_po]; ?></td>
	<td height="25" align="left"><?php echo $row[perwakilan_agen]; ?></td>
	<td height="25" align="center"><?php echo $row[ukuran_kios]; ?></td>
	<td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25" align="center"><?php echo $row[no_sk]; ?></td>
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
