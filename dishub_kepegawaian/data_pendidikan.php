<?php
	$id_pegawai= $_REQUEST['id'];
	$id_pendidikan=$_REQUEST['id_pendidikan'];
	$act=$_REQUEST['act'];
	
if ($act=="del")
{
mysql_query("delete from peg_pendidikan where id_pendidikan='$id_pendidikan'");
}
?>

<html>
<head>
<title>Anak</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Riwayat Pendidikan </font></strong></td>
  </tr>
</table>
<table width="1020" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.pendidikan&id=<?php echo $id_pegawai; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
</table>
<?php
   $strsql="select * from peg_pegawai where id='$id_pegawai'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table border="0" cellpadding="2" cellspacing="2">
  <tr class="tdtitle_black">
  <td width="150" height="25" bgcolor="efefef">&nbsp;Nama Pegawai </td>
  <td width="10">:</td>
  <td width="200"><?php echo $row[nama]; ?></td>
  </tr>
  </table>
<table border="1" cellspacing="0" cellpadding="1" width="880">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="200" rowspan="2" background="images/bgcell.gif" height="25" align="center">Nama Sekolah </td>   
	<td width="200" rowspan="2" background="images/bgcell.gif" height="25" align="center">Nama Jurusan / Diklat / Kursus </td>   
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Status Sekolah </td>  
	<td width="80" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tahun Kelulusan</td> 
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">Ijazah</td> 	 
  </tr>
  <tr class="tdtitle_white">
  	<td width="80" background="images/bgcell.gif" height="25" align="center">Nomor </td>  
	<td width="160" background="images/bgcell.gif" height="25" align="center">Tanggal</td>   		
  </tr>
  <?php 
 if($act=="add"){
 ?>
 <form name="frmadd" method="post" action="insert_data_pendidikan.php">
 <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
 <tr>
    <td align="center" width="35"><a href="index.php?do=data.pendidikan&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
 	<td height="25" align="center"><input name="riwayat_sekolah" type="text" class="inputbox" value="<?php echo $riwayat_sekolah; ?>" size="30"/></td>
	<td height="25" align="center"><input name="riwayat_jurusan" type="text" class="inputbox" value="<?php echo $riwayat_jurusan; ?>" size="30"/></td>
	<td height="25" align="center">
		<select name="riwayat_status" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Negeri" <?php if ($riwayat_status=="Negeri") { echo "selected"; } ?>>Negeri</option>
			<option value="Swasta" <?php if ($riwayat_status=="Swasta") { echo "selected"; } ?>>Swasta</option>		
  		</select>
	</td>	
	<td height="25" align="center"><input name="riwayat_th_lulus" type="text" class="inputbox" value="<?php echo $riwayat_th_lulus; ?>" size="5"/></td>
	<td height="25" align="center"><input name="riwayat_no_ijazah" type="text" class="inputbox" value="<?php echo $riwayat_no_ijazah; ?>"/></td>
	<td height="25" align="center">
		<input type="text" name="riwayat_tgl_ijazah" size="10" id="riwayat_tgl_ijazah" value="<?php echo $riwayat_tgl_ijazah; ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
 </tr>
 </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from peg_pendidikan where id_pendidikan='$id_pendidikan'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form name="frmadd" method="post" action="update_data_pendidikan.php">
  <input type="hidden" name="id_pendidikan" value="<?php echo $id_pendidikan; ?>">
  <input type="hidden" name="id_pegawai" value="<?php echo $row[id_pegawai]; ?>">
  <tr>
    <td align="center" width="35"><a href="index.php?do=data.pendidikan&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
 	<td height="25" align="center"><input name="riwayat_sekolah" type="text" class="inputbox" value="<?php echo $row[riwayat_sekolah]; ?>" size="30"/></td>
	<td height="25" align="center"><input name="riwayat_jurusan" type="text" class="inputbox" value="<?php echo $row[riwayat_jurusan]; ?>" size="30"/></td>
	<td height="25" align="center">
		<select name="riwayat_status" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Negeri" <?php if ($row[riwayat_status]=="Negeri") { echo "selected"; } ?>>Negeri</option>
			<option value="Swasta" <?php if ($row[riwayat_status]=="Swasta") { echo "selected"; } ?>>Swasta</option>		
  		</select>
	</td>	
	<td height="25" align="center"><input name="riwayat_th_lulus" type="text" class="inputbox" value="<?php echo $row[riwayat_th_lulus]; ?>" size="5"/></td>
	<td height="25" align="center"><input name="riwayat_no_ijazah" type="text" class="inputbox" value="<?php echo $row[riwayat_no_ijazah]; ?>"/></td>
	<td height="25" align="center">
		<input type="text" name="riwayat_tgl_ijazah" size="10" id="riwayat_tgl_ijazah" value="<?php if ($row[riwayat_tgl_ijazah]=="0000-00-00") {	echo ""; }else{ echo $row[riwayat_tgl_ijazah];} ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
 </tr>
  </form>
   <?php
  }
  $strsql="select * from peg_pendidikan where id_pegawai='$id_pegawai' order by id_pendidikan asc"; 
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.pendidikan&act=edit&id=<?php echo $row[id_pegawai]; ?>&id_pendidikan=<?php echo $row[id_pendidikan]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.pendidikan&act=del&id=<?php echo $row[id_pegawai]; ?>&id_pendidikan=<?php echo $row[id_pendidikan]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
	<td height="25" align="left"><?php echo $row[riwayat_sekolah]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_status]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_th_lulus]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_no_ijazah]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[riwayat_tgl_ijazah]); 
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
  </tr>
<?php
}
?>
</table>
<table>
<tr><td height="5"></td></tr>
</table>
<a href="index.php?do=data.pegawai"><img src="images/kembali2.gif" border="0"></a>
</body>
</html>