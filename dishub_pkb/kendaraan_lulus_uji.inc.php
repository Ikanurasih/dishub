<?php
$id				=$_REQUEST['id'];
$tanggal		=$_REQUEST['tanggal'];
$nama_pemilik	=$_REQUEST['nama_pemilik'];
$alamat_pemilik	=$_REQUEST['alamat_pemilik'];
$no_kendaraan	=$_REQUEST['no_kendaraan'];
$no_uji	=$_REQUEST['no_uji'];
$jenis_kendaraan	=$_REQUEST['jenis_kendaraan'];
$model_kendaraan	=$_REQUEST['model_kendaraan'];
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
$input_jenis_kendaraan=$_REQUEST['input_jenis_kendaraan'];
$input_kategori=$_REQUEST['input_kategori'];

if ($act=="del")
{
mysql_query("delete from pkb_kendaraan_lulus_uji where id='$id'");
}
?>
<html>
<head>
<title>PKB</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>  
function showme(){  
var s = document.frmadd.jenis_kendaraan;  
var h = document.frmadd.input_jenis_kendaraan;  
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
    <td width="59"><div align="left"><img src="images/config.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kendaraan Lulus Uji </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kendaraan Lulus Uji: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_kendaraan_lulus_uji.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.kendaraan_lulus_uji"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form method="post" action="insert_kendaraan_lulus_uji.inc.php" name="frmadd">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Kendaraan Lulus Uji</div></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="141" height="29" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="tanggal" id="tanggal" size="16" value="<?php echo $tanggal; ?>" class="inputbox" readonly="">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />	</td>
  </tr>
  <tr class="tdtitle_black">
      <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama 
        Pemilik</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="nama_pemilik" size="30" value="<?php echo $nama_pemilik; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat Pemilik </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat_pemilik" size="40" value="<?php echo $alamat_pemilik; ?>" class="inputbox"></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="15" value="<?php echo $no_kendaraan; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef">&nbsp; <select name="jenis_kendaraan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Mobil Penumpang" <?php if($jenis_kendaraan=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($jenis_kendaraan=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($jenis_kendaraan=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($jenis_kendaraan=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($jenis_kendaraan=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if($jenis_kendaraan=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type ="text" name="input_jenis_kendaraan" style="  position:relative;visibility:hidden;" value="<?php echo $input_jenis_kendaraan; ?>" class="inputbox">	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model Kendaraan</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="model_kendaraan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Pick Up" <?php if($model_kendaraan=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Besar" <?php if($model_kendaraan=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Sedang" <?php if($model_kendaraan=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Kecil" <?php if($model_kendaraan=="Kereta Gandengan") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Tronton/Tandem" <?php if($model_kendaraan=="Kereta Tempelan") {echo "selected";}?>>Truk Tronton/Tandem</option>
			<option value="Truk Gandengan" <?php if($model_kendaraan=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Bus Besar" <?php if($model_kendaraan=="Bus Besar") {echo "selected";}?>>Bus Besar</option>
			<option value="Bus Sedang" <?php if($model_kendaraan=="Bus Sedang") {echo "selected";}?>>Bus Sedang</option>
			<option value="Bus Kecil" <?php if($model_kendaraan=="Bus Kecil") {echo "selected";}?>>Bus Kecil</option>
			<option value="MPU" <?php if($model_kendaraan=="MPU") {echo "selected";}?>>MPU</option>
			<option value="Truk" <?php if($model_kendaraan=="Truk") {echo "selected";}?>>Truk</option>
			<option value="Tempelan" <?php if($model_kendaraan=="Tempelan") {echo "selected";}?>>Tempelan</option>
		</select>	
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori</td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="kategori" class="inputbox" onChange="showme()">
		<option value="-" selected disabled>Pilih</option>
			<option value="Dump Truk" <?php if($kategori=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($kategori=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($kategori=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($kategori=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if($kategori=="Lainnya") {echo "selected";}?>>Lainnya</option>
	</select>&nbsp;<input type ="text" name="input_kategori" style=" position:relative;visibility:hidden;" value="<?php echo $input_kategori; ?>" class="inputbox">	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="merk" size="15" value="<?php echo $merk; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="type" size="15" value="<?php echo $type; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tahun" size="15" value="<?php echo $tahun; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;CC </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="cc" size="15" value="<?php echo $cc; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bakar </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="bahan_bakar" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($bahan_bakar=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($bahan_bakar=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($bahan_bakar=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if($bahan_bakar=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type ="text" name="input_bahan_bakar" style=" position:relative;visibility:hidden;" value="<?php echo $input_bahan_bakar; ?>" class="inputbox">
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Orang) </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_orang" size="15" value="<?php echo $angkut_orang; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Barang) </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_barang" size="15" value="<?php echo $angkut_barang; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="16" value="<?php echo $masa_berlaku; ?>" class="inputbox">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    
	<select name="status_penggunaan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($status_penggunaan=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($status_penggunaan=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
	</select>&nbsp;
	</td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.kendaraan_lulus_uji"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">      </td>
  </tr>
  </form>
</table>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from pkb_kendaraan_lulus_uji where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form method="post" action="update_kendaraan_lulus_uji.inc.php" name="frmadd">
   <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Kendaraan Lulus Uji</div></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="tanggal" id="tanggal" size="16" value="<?php echo $row[tanggal]; ?>" class="inputbox" readonly="">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik</td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;   <input type="text" name="nama_pemilik" size="30" value="<?php echo $row[nama_pemilik]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat Pemilik </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat_pemilik" size="40" value="<?php echo $row[alamat_pemilik]; ?>" class="inputbox"></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="15" value="<?php echo $row[no_kendaraan]; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox"></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan</td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="jenis_kendaraan" class="inputbox" onChange="showme()">
			<option value="-" selected>Pilih</option>
			<option value="Mobil Penumpang" <?php if($row[jenis_kendaraan]=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($row[jenis_kendaraan]=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($row[jenis_kendaraan]=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($row[jenis_kendaraan]=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($row[jenis_kendaraan]=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if ($row[jenis_kendaraan]<>"Mobil Penumpang" and $row[jenis_kendaraan]<>"Mobil Barang" and $row[jenis_kendaraan]<>"Mobil Bus" and $row[jenis_kendaraan]<>"Kereta Gandengan" and $row[jenis_kendaraan]<>"Kereta Tempelan") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;
		<?php
		if ($row[jenis_kendaraan]<>"Mobil Penumpang" and $row[jenis_kendaraan]<>"Mobil Barang" and $row[jenis_kendaraan]<>"Mobil Bus" and $row[jenis_kendaraan]<>"Kereta Gandengan" and $row[jenis_kendaraan]<>"Kereta Tempelan")
		{
		?>
		<input type ="text" name="input_jenis_kendaraan" value="<?php echo $row[jenis_kendaraan]; ?>" class="inputbox">
		<?php
		}
		?>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model Kendaraan</td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="model_kendaraan" class="inputbox" onChange="showme()">
			<option value="-" selected>Pilih</option>
			<option value="Pick Up" <?php if($row[model_kendaraan]=="Pick Up") {echo "selected";}?>>Pick Up</option>
			<option value="Truk Besar" <?php if($row[model_kendaraan]=="Truk Besar") {echo "selected";}?>>Truk Besar</option>
			<option value="Truk Sedang" <?php if($row[model_kendaraan]=="Truk Sedang") {echo "selected";}?>>Truk Sedang</option>
			<option value="Truk Kecil" <?php if($row[model_kendaraan]=="Kereta Gandengan") {echo "selected";}?>>Truk Kecil</option>
			<option value="Truk Tronton/Tandem" <?php if($row[model_kendaraan]=="Kereta Tempelan") {echo "selected";}?>>Truk Tronton/Tandem</option>
			<option value="Truk Gandengan" <?php if($row[model_kendaraan]=="Truk Gandengan") {echo "selected";}?>>Truk Gandengan</option>
			<option value="Bus Besar" <?php if($row[model_kendaraan]=="Bus Besar") {echo "selected";}?>>Bus Besar</option>
			<option value="Bus Sedang" <?php if($row[model_kendaraan]=="Bus Sedang") {echo "selected";}?>>Bus Sedang</option>
			<option value="Bus Kecil" <?php if($row[model_kendaraan]=="Bus Kecil") {echo "selected";}?>>Bus Kecil</option>
			<option value="MPU" <?php if($row[model_kendaraan]=="MPU") {echo "selected";}?>>MPU</option>
			<option value="Truk" <?php if($row[model_kendaraan]=="Truk") {echo "selected";}?>>Truk</option>
			<option value="Tempelan" <?php if($row[model_kendaraan]=="Tempelan") {echo "selected";}?>>Tempelan</option>
		</select>
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori</td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp; <select name="kategori" class="inputbox" onChange="showme()">
		<option value="-" selected disabled>Pilih</option>
			<option value="Dump Truk" <?php if($row[kategori]=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($row[kategori]=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($row[kategori]=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($row[kategori]=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if ($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and $row[kategori]<>"Bak Tertutup/Box") {echo "selected";}?>>Lainnya</option>
	</select>&nbsp;
	<?php
	if ($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and $row[kategori]<>"Bak Tertutup/Box")
	{
	?>
	<input type ="text" name="input_kategori" value="<?php echo $row[kategori]; ?>" class="inputbox">
	<?php
	}
	?>
	</td>
  </tr>
   <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="merk" size="15" value="<?php echo $row[merk]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="type" size="15" value="<?php echo $row[type]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tahun" size="15" value="<?php echo $row[tahun]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;CC </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="cc" size="15" value="<?php echo $row[cc]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bakar </td>
    <td width="11" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="282" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="bahan_bakar" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Bensin" <?php if($row[bahan_bakar]=="Bensin") {echo "selected";}?>>Bensin</option>
			<option value="Solar" <?php if($row[bahan_bakar]=="Solar") {echo "selected";}?>>Solar</option>
			<option value="BBG" <?php if($row[bahan_bakar]=="BBG") {echo "selected";}?>>BBG</option>
			<option value="Lainnya" <?php if ($row[bahan_bakar]<>"Bensin" and $row[bahan_bakar]<>"Solar" and $row[bahan_bakar]<>"BBG") {echo "selected";}?>>Lainnya</option>
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
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Orang) </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_orang" size="15" value="<?php echo $row[angkut_orang]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Angkut(Barang) </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="angkut_barang" size="15" value="<?php echo $row[angkut_barang]; ?>" class="inputbox"></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<input type="text" name="masa_berlaku" id="masa_berlaku" size="16" value="<?php echo $row[masa_berlaku]; ?>" class="inputbox">
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
  </tr>
  <tr class="tdtitle_black">
    <td width="141" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
    <td width="9" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="284" valign="middle" bgcolor="efefef"> 
&nbsp;    
		<select name="status_penggunaan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($row[status_penggunaan]=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($row[status_penggunaan]=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
		</select>&nbsp;
	</td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.kendaraan_lulus_uji"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
  <?php
  }else{
  ?>
  <table width="1325" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="398"><a href="?act=add&do=data.kendaraan_lulus_uji&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Tenaga Penguji  Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.kendaraan_lulus_uji">
                    <input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
                    <input type="hidden" name="key2" value="<?php echo $key2; ?>" id="key2_sr">
                    <td><select name="kategori" class="inputbox" onChange="submit();" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="nama_pemilik" <?php if ($kategori=="nama_pemilik") echo "selected"; ?>>Nama Pemilik</option>
<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
<option value="no_uji" <?php if ($kategori=="no_uji") echo "selected"; ?>>No. Uji</option>
<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
<option value="model_kendaraan" <?php if ($kategori=="model_kendaraan") echo "selected"; ?>>Model Kendaraan</option>
<option value="kategori" <?php if ($kategori=="kategori") echo "selected"; ?>>Kategori</option>
<option value="merk" <?php if ($kategori=="merk") echo "selected"; ?>>Merk</option>
<option value="type" <?php if ($kategori=="type") echo "selected"; ?>>Type</option>
<option value="tahun" <?php if ($kategori=="tahun") echo "selected"; ?>>Tahun</option>
<option value="bahan_bakar" <?php if ($kategori=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
<option value="masa_berlaku" <?php if ($kategori=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.kendaraan_lulus_uji">
    				<td> 
                    <?php
					if ($kategori=="tanggal_sk" or $kategori=="masa_berlaku")
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
                    <form method="post" action="index.php?do=data.kendaraan_lulus_uji">
                    <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
                    <input type="hidden" name="key" value="<?php echo $key; ?>" id="key_sr">
                    <td><select name="kategori2" class="inputbox" onChange="submit();" id="kategori2">
                    <option value="">-----------------------------</option>
	<option value="nama_pemilik" <?php if ($kategori2=="nama_pemilik") echo "selected"; ?>>Nama Pemilik</option>
<option value="no_kendaraan" <?php if ($kategori2=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
<option value="no_uji" <?php if ($kategori2=="no_uji") echo "selected"; ?>>No. Uji</option>
<option value="jenis_kendaraan" <?php if ($kategori2=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
<option value="model_kendaraan" <?php if ($kategori2=="model_kendaraan") echo "selected"; ?>>Model Kendaraan</option>
<option value="kategori" <?php if ($kategori2=="kategori") echo "selected"; ?>>Kategori</option>
<option value="merk" <?php if ($kategori2=="merk") echo "selected"; ?>>Merk</option>
<option value="type" <?php if ($kategori2=="type") echo "selected"; ?>>Type</option>
<option value="tahun" <?php if ($kategori2=="tahun") echo "selected"; ?>>Tahun</option>
<option value="bahan_bakar" <?php if ($kategori2=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
<option value="masa_berlaku" <?php if ($kategori2=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form name="input_key2" method="post" action="index.php?do=data.kendaraan_lulus_uji">
    				<td> 
                    <?php
					if ($kategori2=="tanggal_sk" or $kategori2=="masa_berlaku")
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
                	<td colspan="5"><input type="button" value=" Cari " class="inputbox" onClick=" document.location.href='index.php?do=data.kendaraan_lulus_uji&kategori='+document.getElementById('kategori').value+'&key='+document.getElementById('key').value+'&kategori2='+document.getElementById('kategori2').value+'&key2='+document.getElementById('key2').value; "></td>
                </tr>
            </table>
        </fieldset>
    </td>
	<td width="8"></td>
	<td width="188" align="right" valign="bottom"><a href="excel_kendaraan_lulus_uji.php?do=data.kendaraan_lulus_uji&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.kendaraan_lulus_uji&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1450">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2"  background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="30" rowspan="2"  background="images/bgcell.gif" height="25" align="center">No.</td>
	<td width="110" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Tanggal</td>
	<td width="100" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Info Jatuh Tempo</td>
	<td width="140" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td>
	<td width="140" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Alamat Pemilik</td>
	<td width="70" rowspan="2" background="images/bgcell.gif" height="25" align="center">No. Kendaraan</td>
	<td width="70" rowspan="2"  background="images/bgcell.gif" height="25" align="center">No. Uji</td>
	<td width="80" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>
	<td width="80" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Model Kendaraan</td>
    <td width="100" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Kategori</td>
    <td width="60" rowspan="2"  background="images/bgcell.gif" height="25" align="center">Merk</td> 
	<td width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">Type</td>                                  
    <td width="30" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tahun</td>   
	<td width="30" rowspan="2" background="images/bgcell.gif" height="25" align="center">CC</td> 
	<td width="30" rowspan="2" background="images/bgcell.gif" height="25" align="center">Bahan Bakar</td> 
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td> 
	<td width="110" rowspan="2" background="images/bgcell.gif" height="25" align="center">Masa Berlaku</td> 
	<td width="80" rowspan="2" background="images/bgcell.gif" height="25" align="center">Status Penggunaan</td>                                 
  </tr>
   <tr class="tdtitle_white">
   	<td width="50" background="images/bgcell.gif" height="25" align="center">Orang</td>                                  
   	<td width="50" background="images/bgcell.gif" height="25" align="center">Barang</td>   
   </tr>
  <?php
  /*if ($kategori=="nama")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where nama_pemilik like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where no_kendaraan like '%$key%' order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where no_uji like '%$key%' order by id desc"; }*/
  
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		 	$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
			  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from pkb_kendaraan_lulus_uji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php 
  if ($row[jatuh_tempo]<=0) 
  { echo "#FF9999"; } 
  else 
  { 
   	 if ($no%2==1) { echo "efefef"; } else { echo "dddddd"; } 
   }; 
  ?>">

    <td align="center" width="50"><a href="?do=data.kendaraan_lulus_uji&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><div align="center"><a href="?do=data.kendaraan_lulus_uji&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></div></td>
    <td height="25" align="center"><?php echo $NO."."; ?></td>
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
	<td height="25" align="center"><?php echo $row[jatuh_tempo]." hari"; ?></td>	
	<td height="25" align="left"><?php echo $row[nama_pemilik]; ?></td>
	<td height="25" align="left"><?php echo $row[alamat_pemilik]; ?></td>
	<td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
	<td height="25" align="center"><?php echo $row[model_kendaraan]; ?></td>
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