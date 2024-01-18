<?php
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$model_kend					=$_REQUEST['model_kend'];
$status						=$_REQUEST['status'];
$cc							=$_REQUEST['cc'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun						=$_REQUEST['tahun'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jbb						=$_REQUEST['jbb'];
$jbi						=$_REQUEST['jbi'];
$mst						=$_REQUEST['mst'];
$kelas_jalan				=$_REQUEST['kelas_jalan'];
$id					=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from bar_barang where id='$id'");
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
    <td width="59"><div align="left"><img src="images/inbox.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kendaraan Angkutan Barang </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kendaraan Angkutan Barang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_barang.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.barang"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form method="post" action="insert_barang.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Kendaraan Angkutan Barang</td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Nama Pemilik </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="nama" size="40" value="<?php echo $nama; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Alamat </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat" size="40" value="<?php echo $alamat; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;No Kendaraan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $no_kend; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;No Uji </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox"  />       </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Merk </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="merk" size="15" value="<?php echo $merk; ?>" class="inputbox"  /></td>
  </tr> 
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jenis Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_kend" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Pick Up" <?php if($jenis_kend=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Kecil" <?php if($jenis_kend=="Truk Kecil") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Sedang" <?php if($jenis_kend=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Besar" <?php if($jenis_kend=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Tronton" <?php if($jenis_kend=="Truk Tronton") {echo "selected";}?>>Truk Tronton</option>
			<option value="Truk Tandum" <?php if($jenis_kend=="Truk Tandum") {echo "selected";}?>>Truk Tandum</option>
			<option value="Truk Gandengan" <?php if($jenis_kend=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Truk Tempelan" <?php if($jenis_kend=="Truk Tempelan") {echo "selected";}?>>Truk Tempelan</option>
			<option value="Lainnya" <?php if($jenis_kend=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Model Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="model_kend" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bak Terbuka" <?php if($model_kend=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup" <?php if($model_kend=="Bak Tertutup") {echo "selected";}?>>Bak Tertutup</option>
			<option value="Dump Truk" <?php if($model_kend=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tangki" <?php if($model_kend=="Tangki") {echo "selected";}?>>Tangki</option>
			<option value="Molen" <?php if($model_kend=="Molen") {echo "selected";}?>>Molen</option>
			<option value="Lainnya" <?php if($model_kend=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Status</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="status" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($status=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Perorangan" <?php if($status=="Perorangan") {echo "selected";}?>>Perorangan</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;CC </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="cc" size="7" maxlength="5" value="<?php echo $cc; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Bahan Bakar </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
       <td valign="middle" bgcolor="efefef">&nbsp;<select name="bahan_bakar" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($bahan_bakar=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($bahan_bakar=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($bahan_bakar=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if($bahan_bakar=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
	
  <tr class="tdtitle_black"> 
       <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Tahun </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tahun" size="7" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;No Mesin </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_mesin" size="20" value="<?php echo $no_mesin; ?>" class="inputbox" /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;No Rangka </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_rangka" size="20" value="<?php echo $no_rangka; ?>" class="inputbox" /></td>
  </tr> 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Daya Orang </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="daya_orang" size="10" value="<?php echo $daya_orang; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Daya Barang </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="daya_barang" size="10" value="<?php echo $daya_barang; ?>" class="inputbox" /></td>
  </tr> 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jumlah Berat Yang diperbolehkan (JBB) </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jbb" size="10" value="<?php echo $jbb; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jumlah Berat Yang diizinkan (JBI) </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jbi" size="10" value="<?php echo $jbi; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Muatan Sumbu Terberat</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="mst" size="10" value="<?php echo $mst; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Kelas Jalan</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
        <td valign="middle" bgcolor="efefef">&nbsp;<select name="kelas_jalan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="I" <?php if($kelas_jalan=="I") {echo "selected";}?>>I</option>
			<option value="II" <?php if($kelas_jalan=="II") {echo "selected";}?>>II</option>
			<option value="III" <?php if($kelas_jalan=="III") {echo "selected";}?>>III</option>
		</select></div></td> 
  </tr>  <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.barang"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>

   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from bar_barang where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_barang.php">
	 <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table width="601" border="1" cellpadding="1" cellspacing="0">
 <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
        Data Kendaraan Angkutan Barang</td>
  </tr>
        <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Nama Pemilik </td>
      <td width="5" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td width="332" valign="middle" bgcolor="efefef"> &nbsp;
        <input type="text" name="nama" size="40" value="<?php echo $row[nama]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Alamat </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="alamat" size="40" value="<?php echo $row[alamat]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;No Kendaraan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $row[no_kend]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;No Uji </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox"  />       </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Merk </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="merk" size="15" value="<?php echo $row[merk]; ?>" class="inputbox"  /></td>
  </tr> 
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Jenis Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="jenis_kend" class="inputbox">
			<option value="pilih" selected disabled>Pilih</option>
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
     <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Model Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="model_kend" class="inputbox">
			<option value="pilih" selected disabled>Pilih</option>
			<option value="Bak Terbuka" <?php if($row[model_kend]=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup" <?php if($row[model_kend]=="Bak Tertutup") {echo "selected";}?>>Bak Tertutup</option>
			<option value="Dump Truk" <?php if($row[model_kend]=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tangki" <?php if($row[model_kend]=="Tangki") {echo "selected";}?>>Tangki</option>
			<option value="Molen" <?php if($row[model_kend]=="Molen") {echo "selected";}?>>Molen</option>
			<option value="Lainnya" <?php if($row[model_kend]=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Status</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef">&nbsp;<select name="status" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($row[status]=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Perorangan" <?php if($row[status]=="Perorangan") {echo "selected";}?>>Perorangan</option>
		</select></div></td> 
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;CC </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="cc" size="7" maxlength="5" value="<?php echo $row[cc]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Bahan Bakar </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
       <td valign="middle" bgcolor="efefef">&nbsp;<select name="bahan_bakar" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($row[bahan_bakar]=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($row[bahan_bakar]=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($row[bahan_bakar]=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if($row[bahan_bakar]=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select></div></td> 
	
  <tr class="tdtitle_black"> 
       <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Tahun </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tahun" size="7" value="<?php echo $row[tahun]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
     <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;No Mesin </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_mesin" size="20" value="<?php echo $row[no_mesin]; ?>" class="inputbox" /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;No Rangka </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="no_rangka" size="20" value="<?php echo $row[no_rangka]; ?>" class="inputbox" /></td>
  </tr> 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Daya Orang </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="daya_orang" size="10" value="<?php echo $row[daya_orang]; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Daya Barang </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="daya_barang" size="10" value="<?php echo $row[daya_barang]; ?>" class="inputbox" /></td>
  </tr> 
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Jumlah Berat Yg diperbolehkan (JBB) </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jbb" size="10" value="<?php echo $row[jbb]; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Jumlah Berat Yg diizinkan (JBI) </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jbi" size="10" value="<?php echo $row[jbi]; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Muatan Sumbu Terberat</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="mst" size="10" value="<?php echo $row[mst]; ?>" class="inputbox" /></td>
  </tr> 
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Kelas Jalan</td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
        <td valign="middle" bgcolor="efefef">&nbsp;<select name="kelas_jalan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="I" <?php if($row[kelas_jalan]=="I") {echo "selected";}?>>I</option>
			<option value="II" <?php if($row[kelas_jalan]=="II") {echo "selected";}?>>II</option>
			<option value="III" <?php if($row[kelas_jalan]=="III") {echo "selected";}?>>III</option>
		</select></div></td> 
  </tr>   <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.barang"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
  </table>
</form>
	<?php
	}
else
{
?>
<table width="1350" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.barang"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Barang"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.barang">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama Pemilik</option>
	<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
	<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
	<option value="no_uji" <?php if ($kategori=="no_uji") echo "selected"; ?>>No. Uji</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="excel_angkutan_barang.php?do=data.barang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/excel.jpg" title="Klik disini untuk Cetak Laporan dalam Bentuk Excel" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="index.php?do=data.barang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1350">
  <tr class="tdtitle_white">
  <td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
	<td rowspan="2" width="150" background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td> 
    <td rowspan="2" width="150" background="images/bgcell.gif" height="25" align="center">Alamat</td>                    
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">No.<br>Kendaraan</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Merk/Type</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Jenis<br>Kendaraan</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Model<br>Kendaraan</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Status</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">CC</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Bahan<br>Bakar</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No. Rangka</td> 
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No. Mesin</td>             
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td>       
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">JBB</td>  
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">JBI</td>  
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">MST</td>  
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Kelas Jalan</td>  	
  </tr>
   <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">Orang<br>(0rg)</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Barang<br>(Kg)</td>
  </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from bar_barang where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from bar_barang where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from bar_barang where no_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select * from bar_barang where no_uji like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_barang order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.barang&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.barang&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[model_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[status]; ?></td>
	<td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rangka]; ?></td>
    <td height="25" align="center"><?php echo $row[no_mesin]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jbb]; ?></td>
    <td height="25" align="center"><?php echo $row[jbi]; ?></td>
    <td height="25" align="center"><?php echo $row[mst]; ?></td>
    <td height="25" align="center"><?php echo $row[kelas_jalan]; ?></td>
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
