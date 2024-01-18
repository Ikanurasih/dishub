<?php
$nama			=$_REQUEST['nama'];
$nim		=$_REQUEST['nim'];
$tempat_lahir	=$_REQUEST['tempat_lahir'];
$tanggal_lahir	=$_REQUEST['tanggal_lahir'];
$pangkat	=$_REQUEST['pangkat'];
$golongan	=$_REQUEST['golongan'];
$usia	=$_REQUEST['usia'];
$pendidikan	=$_REQUEST['pendidikan'];
$tingkatan	=$_REQUEST['tingkatan'];
$no_sk	=$_REQUEST['no_sk'];
$tanggal	=$_REQUEST['tanggal'];
$pejabat	=$_REQUEST['pejabat'];
$id				=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from pkb_tenaga_penguji where id='$id'");
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
    <td width="59"><div align="left"><img src="images/config.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Tenaga Penguji </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Tenaga Penguji: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_tenaga_penguji.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
<input type="hidden" name="key2" value="<?php echo $key2; ?>">
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
  <td colspan="3"><a href="index.php?do=data.tenaga_penguji"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="1210" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="398"><a href="?act=add&do=data.tenaga_penguji&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Tenaga Penguji  Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
   <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
                  <form method="post" action="index.php?do=data.tenaga_penguji">
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <td><select name="kategori" class="inputbox" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama</option>
	<option value="nim" <?php if ($kategori=="nim") echo "selected"; ?>>NIP</option>
	<option value="pangkat" <?php if ($kategori=="pangkat") echo "selected"; ?>>Pangkat</option>
	<option value="golongan" <?php if ($kategori=="golongan") echo "selected"; ?>>Golongan</option>
	<option value="tingkatan" <?php if ($kategori=="tingkatan") echo "selected"; ?>>Jenjang Penguji</option>
	<option value="no_sk" <?php if ($kategori=="no_sk") echo "selected"; ?>>No. SK</option>
	<option value="pejabat" <?php if ($kategori=="pejabat") echo "selected"; ?>>Pejabat</option>
	</select></td>
    				<td> 
                    
					<input type="text" name="key" id="key" value="<?php echo $key; ?>" class="inputbox" onKeyUp=" document.getElementById('key_sr').value=this.value; "> 
					
                    </td>
                </tr>
                <tr class="text">
                	<td>Pencarian 2</td>
                    <td>:</td>
                    <td><select name="kategori2" class="inputbox" id="kategori2">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori2=="nama") echo "selected"; ?>>Nama</option>
	<option value="nim" <?php if ($kategori2=="nim") echo "selected"; ?>>NIP</option>
	<option value="pangkat" <?php if ($kategori2=="pangkat") echo "selected"; ?>>Pangkat</option>
	<option value="golongan" <?php if ($kategori2=="golongan") echo "selected"; ?>>Golongan</option>
	<option value="tingkatan" <?php if ($kategori2=="tingkatan") echo "selected"; ?>>Jenjang Penguji</option>
	<option value="no_sk" <?php if ($kategori2=="no_sk") echo "selected"; ?>>No. SK</option>
	<option value="pejabat" <?php if ($kategori2=="pejabat") echo "selected"; ?>>Pejabat</option>
	</select></td>
    				<td> 
                    
					<input type="text" name="key2" id="key2" value="<?php echo $key2; ?>" class="inputbox" onKeyUp=" document.getElementById('key2_sr').value=this.value;"> 
					
                    </td>
                 
                </tr>
                
                <tr>
                	<td colspan="5"><input type="submit" value=" Cari " class="inputbox" ></td>
                </tr>
                 </form>
            </table>
        </fieldset>
    </td>
	<td width="188" align="right"><a href="excel_tenaga_penguji.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.tenaga_penguji&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1210">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="150" rowspan="2" background="images/bgcell.gif" height="25" align="center">Nama Lengkap </td>
	<td width="150" rowspan="2" background="images/bgcell.gif" height="25" align="center">NIP</td>
	<td width="170" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tempat, Tgl. Lahir</td>
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Pangkat</td>
	<td width="80" rowspan="2" background="images/bgcell.gif" height="25" align="center">Golongan</td>
	<td width="70" rowspan="2" background="images/bgcell.gif" height="25" align="center">Usia</td>
	<td width="80" rowspan="2" background="images/bgcell.gif" height="25" align="center">Pendidikan</td>
    <td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jenjang Penguji</td>
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">SK</td>
  </tr>
   <tr class="tdtitle_white">
	<td   width="100" background="images/bgcell.gif" height="25" align="center">NO.SK</td>                                  
    <td   width="110" background="images/bgcell.gif" height="25" align="center">Tanggal</td>   
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Pejabat</td>                                  
   </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_tenaga_penguji.php" name="frmadd">
    <td align="center" width="35"><a href="index.php?do=data.tenaga_penguji"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="23" value="<?php echo $nama; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="nim" size="23" value="<?php echo $nim; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<input type="text" name="tempat_lahir" size="20" value="<?php echo $tempat_lahir; ?>" class="inputbox">&nbsp;
		<input type="text" name="tanggal_lahir" id="tanggal_lahir" size="10" value="<?php echo $tanggal_lahir; ?>" class="inputbox" readonly="">
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />	</td>
	<td height="25" align="center"><input type="text" name="pangkat" size="15" value="<?php echo $pangkat; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="golongan" size="10" value="<?php echo $golongan; ?>" class="inputbox"></td>
	<td height="25" align="center">auto</td>
	<td height="25" align="center"><input type="text" name="pendidikan" size="10" value="<?php echo $pendidikan; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="tingkatan" class="inputbox">
		<option value="-" selected disabled>---Pilih---</option>
		<option value="Pemula" <?php if($tingkatan=="Pemula") {echo "selected";}?>>Pemula</option>
		<option value="Pelaksana" <?php if($tingkatan=="pelaksana") {echo "selected";}?>>Pelaksana</option>
		<option value="Pelaksana Lanjut" <?php if($tingkatan=="Pelaksana Lanjut") {echo "selected";}?>>Pelaksana Lanjut</option>
		<option value="Pengelia" <?php if($tingkatan=="Pengelia") {echo "selected";}?>>Pengelia</option>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="no_sk" size="15" value="<?php echo $no_sk ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tanggal" id="tanggal" size="10" value="<?php echo $tanggal; ?>" class="inputbox" readonly="">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center"><input type="text" name="pejabat" size="15" value="<?php echo $pejabat; ?>" class="inputbox"></td> 
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from pkb_tenaga_penguji where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_tenaga_penguji.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <td align="center" width="35"><a href="index.php?do=data.tenaga_penguji"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="23" value="<?php echo $row[nama]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="nim" size="23" value="<?php echo $row[nim]; ?>" class="inputbox"></td>
	<td height="25" align="center">
		<input type="text" name="tempat_lahir" size="20" value="<?php echo $row[tempat_lahir]; ?>" class="inputbox">&nbsp;
		<input type="text" name="tanggal_lahir" id="tanggal_lahir" size="16" value="<?php echo $row[tanggal_lahir]; ?>" class="inputbox"><img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center"><input type="text" name="pangkat" size="15" value="<?php echo $row[pangkat]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="golongan" size="10" value="<?php echo $row[golongan]; ?>" class="inputbox"></td>
	<td height="25" align="center">auto</td>
	<td height="25" align="center"><input type="text" name="pendidikan" size="10" value="<?php echo $row[pendidikan]; ?>" class="inputbox"></td>
   	<td height="25" align="center">
		<select name="tingkatan" class='inputbox'>
			<option value='-' selected disabled><b>--Pilih--</b></option>
			<option value='Pemula' <?php if($row[tingkatan]=="Pemula") {echo "selected";}?>>Pemula</option>
			<option value='Pelaksana' <?php if($row[tingkatan]=="Pelaksana") {echo "selected";}?>>Pelaksana</option>
			<option value='Pelaksana Lanjut' <?php if($row[tingkatan]=="Pelaksana Lanjut") {echo "selected";}?>>Pelaksana Lanjut</option>
			<option value='Pengelia' <?php if($row[tingkatan]=="Pengelia") {echo "selected";}?>>Pengelia</option>
		</select>
	</td>-->
    <td height="25" align="center"><input type="text" name="no_sk" size="15" value="<?php echo $row[no_sk] ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="tanggal" id="tanggal" size="10" value="<?php echo $row[tanggal]; ?>" class="inputbox">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center"><input type="text" name="pejabat" size="15" value="<?php echo $row[pejabat]; ?>" class="inputbox"></td> 
	</form>
  </tr>
  <?php
  }
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
		  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.tenaga_penguji&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.tenaga_penguji&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
	<td height="25" align="center"><?php echo $row[nim]; ?></td>
	<td height="25" align="left">
		<?php echo $row[tempat_lahir]; ?>, 
		<?php
	  $temp=explode("-",$row[tanggal_lahir]); 
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
	<td height="25" align="center"><?php echo $row[pangkat]; ?></td>
	<td height="25" align="center"><?php echo $row[golongan]; ?></td>
	<td height="25" align="center"><?php echo $row[usia_skr]; ?></td>
	<td height="25" align="center"><?php echo $row[pendidikan]; ?></td>
    <td height="25" align="center"><?php echo $row[tingkatan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_sk]; ?></td>
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
	<td height="25" align="center"><?php echo $row[pejabat]; ?></td>
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