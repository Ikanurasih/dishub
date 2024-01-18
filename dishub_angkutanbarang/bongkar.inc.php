<?php
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$jenis_izin					=$_REQUEST['jenis_izin'];
$jenis_barang		=$_REQUEST['jenis_barang'];
$masa_berlaku		=$_REQUEST['masa_berlaku'];
$tonase				=$_REQUEST['tonase'];
$id					=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from bar_bongkar_muat where id='$id'");
}
?>

<html>
<head>
<title>Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>
function showme(){
var s = document.frmadd.jenis_izin;
var h = document.frmadd.tgl_mulai;
var h2 = document.frmadd.tgl_izin;

if(s.selectedIndex == 1 )
{
h.style.visibility="visible";
h2.style.visibility="visible";
}
else
{
h.style.visibility="hidden";
h2.style.visibility="visible";
}


}
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/query.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Dispensasi </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Dispensasi: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_bongkar.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.bongkar"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <table width="442" border="1" cellpadding="1" cellspacing="0">
  <form name="frmadd" method="post" action="insert_bongkar.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Dispensasi </td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Nama</td>
      <td width="7" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td width="292" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama" size="40" value="<?php echo $nama; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Alamat </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="alamat" size="40" value="<?php echo $alamat; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;No Kendaraan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $no_kend; ?>" class="inputbox"  />       </td>
  </tr>
     
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Jenis Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_kend" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Pick Up" <?php if($jenis_kend=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Kecil" <?php if($jenis_kend=="Truk Kecil") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Sedang" <?php if($jenis_kend=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Besar" <?php if($jenis_kend=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Tronton" <?php if($jenis_kend=="Truk Tronton") {echo "selected";}?>>Truk Tronton</option>
			<option value="Truk tandum" <?php if($jenis_kend=="Truk tandum") {echo "selected";}?>>Truk tandum</option>
			<option value="Truk Gandengan" <?php if($jenis_kend=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Truk tempelan" <?php if($jenis_kend=="Truk tempelan") {echo "selected";}?>>Truk tempelan</option>
			<option value="Lainnya" <?php if($jenis_kend=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Jenis izin</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_izin" class="inputbox" onChange="showme()">
			<option value="-" selected>Pilih</option>
			<option value="Bulanan" <?php if($jenis_izin=="Bulanan") {echo "selected";}?>>Bulanan</option>
			<option value="Harian" <?php if($jenis_izin=="Harian") {echo "selected";}?>>Harian</option>
		</select></div></td> 
  </tr>
    <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Jenis barang</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_barang" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="BBM" <?php if($jenis_barang=="BBM") {echo "selected";}?>>BBM</option>
			<option value="BBG" <?php if($jenis_barang=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Sembako" <?php if($jenis_barang=="Sembako") {echo "selected";}?>>Sembako</option>
			<option value="Kelontong" <?php if($jenis_barang=="Kelontong") {echo "selected";}?>>Kelontong</option>
			<option value="Bahan Bangunan" <?php if($jenis_barang=="Bahan Bangunan") {echo "selected";}?>>Bahan Bangunan</option>
			<option value="Hewan" <?php if($jenis_barang=="Hewan") {echo "selected";}?>>Hewan</option>
			<option value="Paket" <?php if($jenis_barang=="Paket") {echo "selected";}?>>Paket</option>
			<option value="Lainnya" <?php if($jenis_barang=="Lainnya") {echo "selected";}?>>Lainnya</option>
			
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp; Masa Berlaku </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">
	 	 Mulai :	 <input type="text" name="tgl_mulai" id="tgl_mulai" style="position:relative;visibility:hidden;" value="<?php echo $mulai; ?>" class="inputbox"/>
		<img name="" src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_mulai'),'yyyy-mm-dd',this)" style="cursor:pointer" /><br>

		Berakhir : <input type="text" name="tgl_izin" id="tgl_izin" style="position:relative;visibility:hidden;" value="<?php echo $berakhir; ?>" class="inputbox"/>
	<img name="" src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="129">&nbsp;Tonase </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase" size="15" value="<?php echo $tonase; ?>" class="inputbox" /></td>
  </tr>
  <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.bongkar"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>

   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from bar_bongkar_muat where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form name="frmadd" method="post" action="update_bongkar.php">
    
	 <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table width="441" border="1" cellpadding="1" cellspacing="0">
 <!--DWLayoutTable-->
<!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
        Data Dispensasi </td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Nama</td>
      <td width="6" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td width="294" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama" size="40" value="<?php echo $row[nama]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Alamat </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="alamat" size="40" value="<?php echo $row[alamat]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;No Kendaraan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $row[no_kend]; ?>" class="inputbox"  />       </td>
  </tr>
     
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Jenis Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_kend" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Pick Up" <?php if($row[jenis_kend]=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Kecil" <?php if($row[jenis_kend]=="Truk Kecil") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Sedang" <?php if($row[jenis_kend]=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Besar" <?php if($row[jenis_kend]=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Tronton" <?php if($row[jenis_kend]=="Truk Tronton") {echo "selected";}?>>Truk Tronton</option>
			<option value="Truk tandum" <?php if($row[jenis_kend]=="Truk tandum") {echo "selected";}?>>Truk tandum</option>
			<option value="Truk Gandengan" <?php if($row[jenis_kend]=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Truk tempelan" <?php if($row[jenis_kend]=="Truk tempelan") {echo "selected";}?>>Truk tempelan</option>
			<option value="Lainnya" <?php if($row[jenis_kend]=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Jenis izin</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_izin" class="inputbox" onChange="showme()">
			<option value="-" selected>Pilih</option>
			<option value="Bulanan" <?php if($row[jenis_izin]=="Bulanan") {echo "selected";}?>>Bulanan</option>
			<option value="Harian" <?php if($row[jenis_izin]=="Harian") {echo "selected";}?>>Harian</option>
		</select></div></td> 
  </tr>
    <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Jenis barang</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_barang" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="BBM" <?php if($row[jenis_barang]=="BBM") {echo "selected";}?>>BBM</option>
			<option value="BBG" <?php if($row[jenis_barang]=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Sembako" <?php if($row[jenis_barang]=="Sembako") {echo "selected";}?>>Sembako</option>
			<option value="Kelontong" <?php if($row[jenis_barang]=="Kelontong") {echo "selected";}?>>Kelontong</option>
			<option value="Bahan Bangunan" <?php if($row[jenis_barang]=="Bahan Bangunan") {echo "selected";}?>>Bahan Bangunan</option>
			<option value="Hewan" <?php if($row[jenis_barang]=="Hewan") {echo "selected";}?>>Hewan</option>
			<option value="Paket" <?php if($row[jenis_barang]=="Paket") {echo "selected";}?>>Paket</option>
			<option value="Lainnya" <?php if($row[jenis_barang]=="Lainnya") {echo "selected";}?>>Lainnya</option>
			
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp; Masa Berlaku </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">
	  Mulai : 
	  <?php
	  if ($row[tgl_mulai]<>"0000-00-00")
	  {
	  ?>
	  <input type="text" id="tgl_mulai" name="tgl_mulai" size="15" value="<?php if ($row[tgl_mulai]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_mulai];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_mulai'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	<?php
	}
	?><br>
	Berakhir : 
	  <?php
	  if ($row[tgl_izin]<>"0000-00-00")
	  {
	  ?>
	<input type="text" id="tgl_izin" name="tgl_izin" size="15" value="<?php if ($row[tgl_izin]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_izin];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	<?php
	}
	?>
	</td>
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="127">&nbsp;Tonase </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase" size="15" value="<?php echo $row[tonase]; ?>" class="inputbox" /></td>
  </tr>
  <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.bongkar"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
  	</table>

</form>
	<?php
	}
else
{
?>
<table width="1060" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.bongkar"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Barang"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.bongkar">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama</option>
	<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
	<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="jenis_izin" <?php if ($kategori=="jenis_izin") echo "selected"; ?>>Jenis Izin</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_bongkar_muat.php?do=data.barang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/excel.jpg" title="Klik disini untuk Cetak Laporan dalam Bentuk Excel" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="index.php?do=data.bongkar&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
  <table border="1" cellspacing="0" cellpadding="1" width="1060">
  <tr class="tdtitle_white">
  <td width="100" height="25" colspan="2" background="images/bgcell.gif">&nbsp;</td>
	<td width="150" background="images/bgcell.gif" height="25" align="center">Nama</td> 
    <td width="250" background="images/bgcell.gif" height="25" align="center">Alamat</td>                    
    <td width="80" background="images/bgcell.gif" height="25" align="center">No.<br>Kendaraan</td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Jenis<br>Kendaraan</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Jenis Izin </td>              
    <td width="100" background="images/bgcell.gif" height="25" align="center">Jenis Barang yang<br>
Dibongkar / Dimuat</td>              
    <td width="120" background="images/bgcell.gif" height="25" align="center">Masa Berlaku Izin</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Tonase</td>              
    </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from bar_bongkar_muat where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from bar_bongkar_muat where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from bar_bongkar_muat where no_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_kendaraan")
  {  $strsql="select * from bar_bongkar_muat where jenis_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="jenis_izin")
  {  $strsql="select * from bar_bongkar_muat where jenis_izin like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_bongkar_muat order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.bongkar&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.bongkar&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_izin]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_barang]; ?></td>
	<td height="25" align="center">
		  <?php
	  if ($row[tgl_mulai]<>'0000-00-00')
	  {
	  ?>
	<?php
	  $temp=explode("-",$row[tgl_mulai]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	  <br>
	  s/d
	  <br>
	  <?php
	  }
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
	<td height="25" align="center"><?php echo $row[tonase]; ?></td>
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
