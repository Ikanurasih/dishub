<?php

$pemilik_lama	=$_REQUEST['pemilik_lama'];
$pemilik_baru	=$_REQUEST['pemilik_baru'];
$alamat_pemilik	=$_REQUEST['alamat_pemilik'];
$no_kendaraan	=$_REQUEST['no_kendaraan'];
$no_uji	=$_REQUEST['no_uji'];
$jenis	=$_REQUEST['jenis'];
$model	=$_REQUEST['model'];
$kategori	=$_REQUEST['kategori'];
$merk	=$_REQUEST['merk'];
$type	=$_REQUEST['type'];
$tahun	=$_REQUEST['tahun'];
$cc	=$_REQUEST['cc'];
$bahan_bakar	=$_REQUEST['bahan_bakar'];
$angkut_orang	=$_REQUEST['angkut_orang'];
$angkut_barang	=$_REQUEST['angkut_barang'];
$masa_berlaku	=$_REQUEST['masa_berlaku'];
$status_penggunaan	=$_REQUEST['status_penggunaan'];
$input_jenis=$_REQUEST['input_jenis'];
$input_kategori=$_REQUEST['input_kategori'];
$id_pemilik			=$_REQUEST['id_pemilik'];
$id_kendaraan		=$_REQUEST['id_kendaraan'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$id					=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from pkb_mutasi where id='$id'");
}
?>
<html>
<head>
<title>Pajak</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>  
function showme(){  
var s = document.frmadd.jenis;  
var h = document.frmadd.input_jenis;  
var s2 = document.frmadd.kategori;  
var h2 = document.frmadd.input_kategori;  
var s_bahan_bakar = document.frmadd.bahan_bakar;  
var h_bahan_bakar = document.frmadd.input_bahan_bakar;  


if( s.selectedIndex == 6 ) {  
h.style.visibility="visible";  
}else{  
h.style.visibility="hidden";  
}  
if( s2.selectedIndex == 5 ) {  
h2.style.visibility="visible";  
}else{  
h2.style.visibility="hidden";  
}  
if( s_bahan_bakar.selectedIndex == 4 ) {  
h_bahan_bakar.style.visibility="visible";  
}else{  
h_bahan_bakar.style.visibility="hidden";  
}  
}  
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/grafik.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Numpang Uji Kendaraan </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Mutasi Keluar: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_mutasi_keluar.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.mutasi_keluar"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form method="post" action="insert_mutasi_keluar.php" name="frmadd">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Mutasi Keluar</div></td>
  </tr>
  <tr class="tdtitle_black">
      <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik (Lama)        </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="pemilik_lama" size="25" value="<?php echo $pemilik_lama; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
      <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik(Baru)        </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="pemilik_baru" size="25" value="<?php echo $pemilik_baru; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat Pemilik </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat" size="40" value="<?php echo $alamat; ?>" class="inputbox"></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="15" value="<?php echo $no_kendaraan; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="jenis" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Mobil Penumpang" <?php if($jenis=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($jenis=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($jenis=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($jenis=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($jenis=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if($jenis=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type ="text" name="input_jenis" style="  position:relative;visibility:hidden;" value="<?php echo $input_jenis; ?>" class="inputbox">
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model Kendaraan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="model" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Pick Up" <?php if($model=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Besar" <?php if($model=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Sedang" <?php if($model=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Kecil" <?php if($model=="Kereta Gandengan") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Tronton/Tandem" <?php if($model=="Kereta Tempelan") {echo "selected";}?>>Truk Tronton/Tandem</option>
			<option value="Truk Gandengan" <?php if($model=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Bus Besar" <?php if($model=="Bus Besar") {echo "selected";}?>>Bus Besar</option>
			<option value="Bus Sedang" <?php if($model=="Bus Sedang") {echo "selected";}?>>Bus Sedang</option>
			<option value="Bus Kecil" <?php if($model=="Bus Kecil") {echo "selected";}?>>Bus Kecil</option>
			<option value="MPU" <?php if($model=="MPU") {echo "selected";}?>>MPU</option>
			<option value="Truk" <?php if($model=="Truk") {echo "selected";}?>>Truk</option>
			<option value="Tempelan" <?php if($model=="Tempelan") {echo "selected";}?>>Tempelan</option>
		</select>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="kategori" class="inputbox" onChange="showme()">
		<option value="-" selected disabled>Pilih</option>
			<option value="Dump Truk" <?php if($kategori=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($kategori=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($kategori=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($kategori=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if($kategori=="Lainnya") {echo "selected";}?>>Lainnya</option>
	</select>&nbsp;<input type ="text" name="input_kategori" style=" position:relative;visibility:hidden;" value="<?php echo $input_kategori; ?>" class="inputbox">
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="merk" size="15" value="<?php echo $merk; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="type" size="15" value="<?php echo $type; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tahun" size="15" value="<?php echo $tahun; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;CC </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="cc" size="15" value="<?php echo $cc; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bakar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;
	  	<select name="bahan_bakar" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($bahan_bakar=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($bahan_bakar=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($bahan_bakar=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if($bahan_bakar=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type="text" name="input_bahan_bakar" style="position:relative;visibility:hidden;" size="15" value="<?php echo $input_bahan_bakar; ?>" class="inputbox"  />
	</td>
  </tr> 
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Orang) </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_orang" size="15" value="<?php echo $angkut_orang; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Barang) </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_barang" size="15" value="<?php echo $angkut_barang; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="16" value="<?php echo $masa_berlaku; ?>" class="inputbox" readonly>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="status_penggunaan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($status_penggunaan=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($status_penggunaan=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
		</select>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal Mutasi </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tgl_mutasi" id="tgl_mutasi" size="15" value="<?php echo $tgl_mutasi; ?>" class="inputbox" readonly>
		  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_mutasi'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Mutasi </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="jenis_mutasi" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Masuk" <?php if($jenis_mutasi=="Masuk") {echo "selected";}?>>Masuk</option>
			<option value="Keluar" <?php if($jenis_mutasi=="Keluar") {echo "selected";}?>>Keluar</option>
		</select>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lokasi Mutasi </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="lokasi_mutasi" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Dari" <?php if($lokasi_mutasu=="Dari") {echo "selected";}?>>Dari</option>
			<option value="Ke" <?php if($lokasi_mutasu=="Ke") {echo "selected";}?>>Ke</option>
		</select>
	</td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.mutasi_keluar"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from pkb_mutasi where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form method="post" action="update_mutasi_keluar.php" name="frmadd">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Mutasi Keluar </div></td>
  </tr>
  <tr class="tdtitle_black">
      <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik(Lama)        </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="pemilik_lama" size="25" value="<?php echo $row[pemilik_lama]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
      <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik(Baru)        </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="pemilik_baru" size="25" value="<?php echo $row[pemilik_baru]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat Pemilik </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat" size="40" value="<?php echo $row[alamat]; ?>" class="inputbox"></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="15" value="<?php echo $row[no_kendaraan]; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="jenis" class="inputbox" onChange="showme()">
			<option value="-" selected >Pilih</option>
			<option value="Mobil Penumpang" <?php if($row[jenis]=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($row[jenis]=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($row[jenis]=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($row[jenis]=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($row[jenis]=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if($row[jenis]<>"Mobil Penumpang" and $row[jenis]<>"Mobil Barang" and $row[jenis]<>"Mobil Bus" and $row[jenis]<>"Kereta Gandengan" and $row[jenis]<>"Kereta Tempelan") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;
		<?php
		if($row[jenis]<>"Mobil Penumpang" and $row[jenis]<>"Mobil Barang" and $row[jenis]<>"Mobil Bus" and $row[jenis]<>"Kereta Gandengan" and $row[jenis]<>"Kereta Tempelan")
		{
		?>
		<input type ="text" name="input_jenis"  value="" class="inputbox">
		<?php
		}elseif($row[jenis]=="Mobil Penumpang" and $row[jenis]=="Mobil Barang" and $row[jenis]=="Mobil Bus" and $row[jenis]=="Kereta Gandengan" and $row[jenis]=="Kereta Tempelan")
		{
		?>
		<input type ="text" name="input_jenis" style=" position:relative;visibility:hidden;" value="" class="inputbox">
		<?php
		}else{
		?>
		<input type ="text" name="input_jenis" style=" position:relative;visibility:hidden;" value="" class="inputbox">
		<?php
		}
		?>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model Kendaraan</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="model" class="inputbox" onChange="showme()">
			<option value="-" selected >Pilih</option>
			<option value="Pick Up" <?php if($row[model]=="Pick Up") {echo "selected";}?>>Pick Up</option>

			<option value="Truk Besar" <?php if($row[model]=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Sedang" <?php if($row[model]=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Kecil" <?php if($row[model]=="Kereta Gandengan") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Tronton/Tandem" <?php if($row[model]=="Kereta Tempelan") {echo "selected";}?>>Truk Tronton/Tandem</option>
			<option value="Truk Gandengan" <?php if($row[model]=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Bus Besar" <?php if($row[model]=="Bus Besar") {echo "selected";}?>>Bus Besar</option>
			<option value="Bus Sedang" <?php if($row[model]=="Bus Sedang") {echo "selected";}?>>Bus Sedang</option>
			<option value="Bus Kecil" <?php if($row[model]=="Bus Kecil") {echo "selected";}?>>Bus Kecil</option>
			<option value="MPU" <?php if($row[model]=="MPU") {echo "selected";}?>>MPU</option>
			<option value="Truk" <?php if($row[model]=="Truk") {echo "selected";}?>>Truk</option>
			<option value="Tempelan" <?php if($row[model]=="Tempelan") {echo "selected";}?>>Tempelan</option>
		</select>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="kategori" class="inputbox" onChange="showme()">
		<option value="-" selected >Pilih</option>
			<option value="Dump Truk" <?php if($row[kategori]=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($row[kategori]=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($row[kategori]=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($row[kategori]=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and $row[kategori]<>"Bak Tertutup/Box") {echo "selected";}?>>Lainnya</option>
	</select>&nbsp;
	<?php
	if($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and $row[kategori]<>"Bak Tertutup/Box")
	{
	?>
	<input type ="text" name="input_kategori"  value="" class="inputbox">
	<?php
	}elseif($row[kategori]=="Dump Truk" and $row[kategori]=="Tanky" and $row[kategori]=="Bak Terbuka" and $row[kategori]=="Bak Tertutup/Box")
	{
	?>
	<input type ="text" name="input_kategori" style=" position:relative;visibility:hidden;" value="" class="inputbox">
	<?php
	}else{
	?>
	<input type ="text" name="input_jenis" style=" position:relative;visibility:hidden;" value="" class="inputbox">
	<?php
	}
	?>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="merk" size="15" value="<?php echo $row[merk]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="type" size="15" value="<?php echo $row[type]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tahun" size="15" value="<?php echo $row[tahun]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;CC </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="cc" size="15" value="<?php echo $row[cc]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bakar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;
	  	<select name="bahan_bakar" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($row[bahan_bakar]=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($row[bahan_bakar]=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($row[bahan_bakar]=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if($row[bahan_bakar]=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;
		<?php
			if ($row[bahan_bakar]<>"Bensin" and $row[bahan_bakar]<>"Solar" and $row[bahan_bakar]<>"BBG")
			{
			?>
			<input type ="text" name="input_bahan_bakar" value="<?php echo $row[bahan_bakar]; ?>" class="inputbox">
			<?php
			}
		?>
	</td>
  </tr>  
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Orang) </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_orang" size="15" value="<?php echo $row[angkut_orang]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Barang) </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_barang" size="15" value="<?php echo $row[angkut_barang]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="16" value="<?php if ($row[masa_berlaku]=="0000-00-00") {	echo ""; }else{ echo $row[masa_berlaku];} ?>" class="inputbox" readonly>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="status_penggunaan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($row[status_penggunaan]=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($row[status_penggunaan]=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
		</select>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="159" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal Mutasi </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="264" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tgl_mutasi" id="tgl_mutasi" size="15" value="<?php if ($row[tgl_mutasi]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_mutasi];} ?>" class="inputbox" readonly>
  		  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_mutasi'),'yyyy-mm-dd',this)" style="cursor:pointer" />
  	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Mutasi </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="jenis_mutasi" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Masuk" <?php if($row[jenis_mutasi]=="Masuk") {echo "selected";}?>>Masuk</option>
			<option value="Keluar" <?php if($row[jenis_mutasi]=="Keluar") {echo "selected";}?>>Keluar</option>
		</select>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="163" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lokasi Mutasi </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="261" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="lokasi_mutasi" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Dari" <?php if($row[lokasi_mutasi]=="Dari") {echo "selected";}?>>Dari</option>
			<option value="Ke" <?php if($row[lokasi_mutasi]=="Ke") {echo "selected";}?>>Ke</option>
		</select>
	</td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.mutasi_keluar"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
  <?php
  }else{
  ?>
  <table width="1340" border="0" cellpadding="2" cellspacing="2">  
  <tr>
    <td width="187"><a href="?act=add&do=data.mutasi_keluar&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Mutasi Keluar Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
   <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.mutasi_keluar">
                    <input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
                    <input type="hidden" name="key2" value="<?php echo $key2; ?>" id="key2_sr">
                    <td><select name="kategori" class="inputbox" onChange="submit();" id="kategori">
                    <option value="">-----------------------------</option>
<option value="pemilik_lama" <?php if ($kategori=="pemilik_lama") echo "selected"; ?>>Nama Pemilik Lama</option>
<option value="pemilik_baru" <?php if ($kategori=="pemilik_baru") echo "selected"; ?>>Nama Pemilik Baru</option>
<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No Kendaraan</option>
<option value="no_uji" <?php if ($kategori=="no_uji") echo "selected"; ?>>No Uji</option>
<option value="tgl_mutasi" <?php if ($kategori=="tgl_mutasi") echo "selected"; ?>>Tgl. Mutasi Keluar</option>
<option value="jenis" <?php if ($kategori=="jenis") echo "selected"; ?>>Jenis Kendaraan</option>
<option value="model" <?php if ($kategori=="model") echo "selected"; ?>>Model Kendaraan</option>
<option value="kategori" <?php if ($kategori=="kategori") echo "selected"; ?>>Kategori</option>
<option value="merk" <?php if ($kategori=="merk") echo "selected"; ?>>Merk</option>
<option value="type" <?php if ($kategori=="type") echo "selected"; ?>>Type</option>
<option value="tahun" <?php if ($kategori=="tahun") echo "selected"; ?>>Tahun</option>
<option value="bahan_bakar" <?php if ($kategori=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
<option value="masa_berlaku" <?php if ($kategori=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.mutasi_keluar">
    				<td> 
                    <?php
					if ($kategori=="tgl_mutasi" or $kategori=="masa_berlaku")
					{
					?>
					<input type="text" name="key" id="key" size="10" value="<?php echo $key; ?>" class="inputbox" readonly=""> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('key'),'yyyy-mm-dd',this)" style="cursor:pointer" />&nbsp;
					<?php
					}
					else
					{
					?>
					<input type="text" name="key" id="key" value="<?php echo $key; ?>" class="inputbox" onKeyUp=" document.getElementById('key_sr').value=this.value; "> 
					<?php
					}
					?>
                    </td>
                    </form>
                </tr>
                <tr class="text">
                	<td>Pencarian 2</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.mutasi_keluar">
                    <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
                    <input type="hidden" name="key" value="<?php echo $key; ?>" id="key_sr">
                    <td><select name="kategori2" class="inputbox" onChange="submit();" id="kategori2">
                    <option value="">-----------------------------</option>
<option value="pemilik_lama" <?php if ($kategori2=="pemilik_lama") echo "selected"; ?>>Nama Pemilik Lama</option>
<option value="pemilik_baru" <?php if ($kategori2=="pemilik_baru") echo "selected"; ?>>Nama Pemilik Baru</option>
<option value="alamat" <?php if ($kategori2=="alamat") echo "selected"; ?>>Alamat</option>
<option value="no_kendaraan" <?php if ($kategori2=="no_kendaraan") echo "selected"; ?>>No Kendaraan</option>
<option value="no_uji" <?php if ($kategori2=="no_uji") echo "selected"; ?>>No Uji</option>
<option value="tgl_mutasi" <?php if ($kategori2=="tgl_mutasi") echo "selected"; ?>>Tgl. Mutasi Keluar</option>
<option value="jenis" <?php if ($kategori2=="jenis") echo "selected"; ?>>Jenis Kendaraan</option>
<option value="model" <?php if ($kategori2=="model") echo "selected"; ?>>Model Kendaraan</option>
<option value="kategori" <?php if ($kategori2=="kategori") echo "selected"; ?>>Kategori</option>
<option value="merk" <?php if ($kategori2=="merk") echo "selected"; ?>>Merk</option>
<option value="type" <?php if ($kategori2=="type") echo "selected"; ?>>Type</option>
<option value="tahun" <?php if ($kategori2=="tahun") echo "selected"; ?>>Tahun</option>
<option value="bahan_bakar" <?php if ($kategori2=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
<option value="masa_berlaku" <?php if ($kategori2=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form name="input_key2" method="post" action="index.php?do=data.mutasi_keluar">
    				<td> 
                    <?php
					if ($kategori2=="tgl_mutasi" or $kategori2=="masa_berlaku")
					{
					?>
					<input type="text" name="key2" id="key2" size="10" value="<?php echo $key2; ?>" class="inputbox" readonly=""> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('key2'),'yyyy-mm-dd',this)" style="cursor:pointer" />&nbsp;
					<?php
					}
					else
					{
					?>
					<input type="text" name="key2" id="key2" value="<?php echo $key2; ?>" class="inputbox" onKeyUp=" 
                     document.getElementById('key2_sr').value=this.value; 
                    "> 
					<?php
					}
					?>
                    </td>
                  </form>
                </tr>
                <tr>
                	<td colspan="5"><input type="button" value=" Cari " class="inputbox" onClick=" document.location.href='index.php?do=data.mutasi_keluar&kategori='+document.getElementById('kategori').value+'&key='+document.getElementById('key').value+'&kategori2='+document.getElementById('kategori2').value+'&key2='+document.getElementById('key2').value; "></td>
                </tr>
            </table>
        </fieldset>
    </td>
	<td width="8"></td>
	<td width="359" align="right" valign="bottom"><a href="excel_mutasi_keluar.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.mutasi_keluar&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
	
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1360">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td colspan="2"  background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td>
	<td width="170" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Alamat Pemilik</td>
	<td width="60" rowspan="2" background="images/bgcell.gif" height="25" align="center">No. Kendaraan</td>
	<td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">No. Uji</td>
	<td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>
	<td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Model Kendaraan</td>
    <td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Kategori</td>
    <td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Merk</td> 
	<td width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">Type</td>                                  
    <td   width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tahun</td>   
	<td   width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">CC</td> 
	<td   width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">Bahan Bakar</td> 
	<td   colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td> 
	<td   width="110" rowspan="2" background="images/bgcell.gif" height="25" align="center">Masa Berlaku</td> 
	<td   width="60" rowspan="2" background="images/bgcell.gif" height="25" align="center">Status Penggunaan</td>  
    <td width="110" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tgl. Mutasi Keluar </td>
	<td width="110" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jenis Mutasi </td>
	<td width="110" rowspan="2" background="images/bgcell.gif" height="25" align="center">Lokasi Mutasi </td>
  </tr>
   <tr class="tdtitle_white">
   		<td   width="100" background="images/bgcell.gif" height="25" align="center">Lama</td>                                  
   		<td   width="100" background="images/bgcell.gif" height="25" align="center">Baru</td>   		
   		<td   width="50" background="images/bgcell.gif" height="25" align="center">Orang</td>                                  
   		<td   width="50" background="images/bgcell.gif" height="25" align="center">Barang</td>   
   </tr>
  <?php
  /*if ($kategori=="nama_baru")
  {  $strsql="select * from pkb_mutasi where status='0' and pemilik_baru like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_lama")
  {  $strsql="select * from pkb_mutasi where status='0' and pemilik_lama like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from pkb_mutasi where status='0' and alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kend")
  {  $strsql="select * from pkb_mutasi where status='0' and no_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select * from pkb_mutasi where status='0' and no_uji like '%$key%' order by id desc"; }
  elseif ($kategori=="tanggal")
  {  $strsql="select * from pkb_mutasi where status='0' and tgl_mutasi like '%$key%' order by id desc"; }*/
  
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_mutasi where status='0' and $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		  $strsql="select * from pkb_mutasi where status='0' and $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
		  $strsql="select * from pkb_mutasi where status='0' and $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
  else
  {  $strsql="select * from pkb_mutasi where status='0' order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.mutasi_keluar&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.mutasi_keluar&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[pemilik_lama]; ?></td>
	<td height="25" align="left"><?php echo $row[pemilik_baru]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[model]; ?></td>
    <td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[type]; ?></td>
	<td height="25" align="center"><?php echo $row[tahun]; ?></td>
	<td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
	<td height="25" align="center"><?php echo $row[angkut_orang]; ?></td>
	<td height="25" align="center"><?php echo $row[angkut_barang]; ?></td>
	<td height="25" align="center">
		<?php
	  $temp=explode("-",$row[masa_berlaku]); 
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
	<td height="25" align="center"><?php echo $row[status_penggunaan]; ?></td>
    <td height="25" align="center">
	<?php
	  $temp=explode("-",$row[tgl_mutasi]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25" align="center"><?php echo $row[jenis_mutasi]; ?></td>
	<td height="25" align="center"><?php echo $row[lokasi_mutasi]; ?></td>
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