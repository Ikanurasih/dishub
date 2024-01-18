<?php
$nama_alat		=$_REQUEST['nama_alat'];
$jenis_alat		=$_REQUEST['jenis_alat'];
$merk		=$_REQUEST['merk'];
$jumlah			=$_REQUEST['jumlah'];
$kondisi		=$_REQUEST['kondisi'];
$th_pengadaan	=$_REQUEST['th_pengadaan'];
$th_kalibrasi		=$_REQUEST['th_kalibrasi'];
$id				=$_REQUEST['id'];


if ($act=="del")
{
mysql_query("delete from pkb_peralatan_uji where id='$id'");
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
    <td width="59"><div align="left"><img src="images/cpanel.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Alat Uji PKB </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Peralatan Uji PKB: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_alat.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.alat"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table width="950" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="487"><a href="?act=add&do=data.alat"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Peralatan Uji Kendaraan Bermotor Mekanis"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
    <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
                  <form method="post" action="index.php?do=data.alat">
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <td><select name="kategori" class="inputbox" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="nama_alat" <?php if ($kategori=="nama_alat") echo "selected"; ?>>Nama Alat</option>
	<option value="jenis_alat" <?php if ($kategori=="jenis_alat") echo "selected"; ?>>Jenis Alat Uji</option>
	<option value="merk" <?php if ($kategori=="merk") echo "selected"; ?>>Merk</option>
	<option value="jumlah" <?php if ($kategori=="jumlah") echo "selected"; ?>>Jumlah</option>
	<option value="kondisi" <?php if ($kategori=="kondisi") echo "selected"; ?>>Kondisi</option>
	<option value="th_pengadaan" <?php if ($kategori=="th_pengadaan") echo "selected"; ?>>Tahun Pengadaan</option>
	<option value="th_kalibrasi" <?php if ($kategori=="th_kalibrasi") echo "selected"; ?>>Tahun Kalibrasi</option>
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
	<option value="nama_alat" <?php if ($kategori2=="nama_alat") echo "selected"; ?>>Nama Alat</option>
	<option value="jenis_alat" <?php if ($kategori2=="jenis_alat") echo "selected"; ?>>Jenis Alat Uji</option>
	<option value="merk" <?php if ($kategori2=="merk") echo "selected"; ?>>Merk</option>
	<option value="jumlah" <?php if ($kategori2=="jumlah") echo "selected"; ?>>Jumlah</option>
	<option value="kondisi" <?php if ($kategori2=="kondisi") echo "selected"; ?>>Kondisi</option>
	<option value="th_pengadaan" <?php if ($kategori2=="th_pengadaan") echo "selected"; ?>>Tahun Pengadaan</option>
	<option value="th_kalibrasi" <?php if ($kategori2=="th_kalibrasi") echo "selected"; ?>>Tahun Kalibrasi</option>
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
	<td width="189"><div align="right"><a href="excel_alat.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.alat&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="950">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Nama Alat</td> 
	<td   width="150" background="images/bgcell.gif" height="25" align="center">Jenis Alat Uji</td> 
	<td   width="150" background="images/bgcell.gif" height="25" align="center">Merk</td> 
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Jumlah</td>                                        
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Kondisi</td>              
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Thn. Pengadaan</td>   
	<td   width="100" background="images/bgcell.gif" height="25" align="center">Thn. Kalibrasi</td>                                  
  </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_alat.php" >
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.alat"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_alat" size="28" value="<?php echo $nama_alat; ?>" class="inputbox"   /></td>
	<td height="25" align="center">
		<select name="jenis_alat" class="inputbox">
			<option value="-" <?php if($jenis_alat=="-") {echo "selected";}?>>---Pilih---</option>
			<option value="Mekanis" <?php if($jenis_alat=="Mekanis") {echo "selected";}?>>Mekanis</option>
			<option value="Non - Mekanis" <?php if($jenis_alat=="Non - Mekanis") {echo "selected";}?>>Non - Mekanis</option>
		</select></td>
	<td height="25" align="center"><input type="text" name="merk" size="25" value="<?php echo $merk; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jumlah" size="5" value="<?php echo $jumlah; ?>" class="inputbox"   /></td>
    <td height="25" align="center">
	<select name="kondisi" class="inputbox">
		<option value="-" <?php if($kondisi=="-") {echo "selected";}?>>---Pilih---</option>
		<option value="Baik" <?php if($kondisi=="Baik") {echo "selected";}?>>Baik</option>
		<option value="Sedang" <?php if($kondisi=="Sedang") {echo "selected";}?>>Sedang</option>
		<option value="Buruk" <?php if($kondisi=="Buruk") {echo "selected";}?>>Buruk</option>
		<option value="Rusak" <?php if($kondisi=="Rusak") {echo "selected";}?>>Rusak</option>
	</select></td>
    <td height="25" align="center"><input type="text" name="th_pengadaan" size="5"  maxlength="4" value="<?php echo $th_pengadaan; ?>" class="inputbox"   /></td>
	<td height="25" align="center"><input type="text" name="th_kalibrasi" size="5"  maxlength="4" value="<?php echo $th_kalibrasi; ?>" class="inputbox"   /></td>
  </tr>
   </form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from pkb_peralatan_uji order by id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_alat.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.alat"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_alat" size="28" value="<?php echo $row[nama_alat]; ?>" class="inputbox"   /></td>
	<td height="25" align="center">
		<select name="jenis_alat" class="inputbox">
			<option value="-" <?php if($row[jenis_alat]=="-") {echo "selected";}?>>---Pilih---</option>
			<option value="Mekanis" <?php if($row[jenis_alat]=="Mekanis") {echo "selected";}?>>Mekanis</option>
			<option value="Non - Mekanis" <?php if($row[jenis_alat]=="Non - Mekanis") {echo "selected";}?>>Non - Mekanis</option>
		</select>
	</td>
	<td height="25" align="center"><input type="text" name="merk" size="25" value="<?php echo $row[merk]; ?>" class="inputbox"   /></td>
    <td height="25" align="center"><input type="text" name="jumlah" size="5" value="<?php echo $row[jumlah]; ?>" class="inputbox"   /></td>
    <td height="25" align="center">
		<select name="kondisi" class="inputbox">
		<option value="-" <?php if($row[kondisi]=="-") {echo "selected";}?>>---Pilih---</option>
		<option value="Baik" <?php if($row[kondisi]=="Baik") {echo "selected";}?>>Baik</option>
		<option value="Sedang" <?php if($row[kondisi]=="Sedang") {echo "selected";}?>>Sedang</option>
		<option value="Buruk" <?php if($row[kondisi]=="Buruk") {echo "selected";}?>>Buruk</option>
		<option value="Rusak" <?php if($row[kondisi]=="Rusak") {echo "selected";}?>>Rusak</option>
	</select></td>
    <td height="25" align="center"><input type="text" name="th_pengadaan" size="5" value="<?php echo $row[th_pengadaan]; ?>" class="inputbox"   /></td>
	<td height="25" align="center"><input type="text" name="th_kalibrasi" size="5" value="<?php echo $row[th_kalibrasi]; ?>" class="inputbox"   /></td>
  </tr>
   </form>
  <?php
    }
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_peralatan_uji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		  $strsql="select * from pkb_peralatan_uji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
		  $strsql="select * from pkb_peralatan_uji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select * from pkb_peralatan_uji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.alat&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.alat&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left">&nbsp;<?php echo $row[nama_alat]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[jenis_alat]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[merk]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jumlah]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[kondisi]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[th_pengadaan]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[th_kalibrasi]; ?></td>
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
