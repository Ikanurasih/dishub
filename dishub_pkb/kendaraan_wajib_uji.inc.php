<?php
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$type						=$_REQUEST['type'];
$jenis						=$_REQUEST['jenis'];
$model						=$_REQUEST['model'];
$cc							=$_REQUEST['cc'];
$daya_motor					=$_REQUEST['daya_motor'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun_pembuatan			=$_REQUEST['tahun_pembuatan'];
$status_penggunaan			=$_REQUEST['status_penggunaan'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$no_tgl_sertifik			=$_REQUEST['no_tgl_sertifik'];
$uk_kend_panjang			=$_REQUEST['uk_kend_panjang'];
$uk_kend_lebar				=$_REQUEST['uk_kend_lebar'];
$uk_kend_tinggi				=$_REQUEST['uk_kend_tinggi'];
$uk_kend_jalur_belakang		=$_REQUEST['uk_kend_jalur_belakang'];
$uk_kend_jalur_depan		=$_REQUEST['uk_kend_jalur_depan'];
$jarak_sumbu_1_2			=$_REQUEST['jarak_sumbu_1_2'];
$jarak_sumbu_2_3			=$_REQUEST['jarak_sumbu_2_3'];
$jarak_sumbu_3_4			=$_REQUEST['jarak_sumbu_3_4'];
$jarak_titik_berat			=$_REQUEST['jarak_titik_berat'];
$dim_bak_panjang			=$_REQUEST['dim_bak_panjang'];
$dim_bak_lebar				=$_REQUEST['dim_bak_lebar'];
$dim_bak_tinggi				=$_REQUEST['dim_bak_tinggi'];
$dim_bak_bahan_bak			=$_REQUEST['dim_bak_bahan_bak'];
$dim_tangki_panjang			=$_REQUEST['dim_tangki_panjang'];
$dim_tangki_lebar			=$_REQUEST['dim_tangki_lebar'];
$dim_tangki_tinggi			=$_REQUEST['dim_tangki_tinggi'];
$dim_tangki_volume			=$_REQUEST['dim_tangki_volume'];
$dim_tangki_jenis			=$_REQUEST['dim_tangki_jenis'];
$dim_tangki_berat_jenis_muatan	=$_REQUEST['dim_tangki_berat_jenis_muatan'];
$dim_tangki_bahan_tangki		=$_REQUEST['dim_tangki_bahan_tangki'];
$ban_sumbu_1				=$_REQUEST['ban_sumbu_1'];
$ban_sumbu_2				=$_REQUEST['ban_sumbu_2'];
$ban_sumbu_3				=$_REQUEST['ban_sumbu_3'];
$ban_sumbu_4				=$_REQUEST['ban_sumbu_4'];
$konfig_sumbu 					=$_REQUEST['konfig_sumbu'];
$jml_berat_diperbolehkan	=$_REQUEST['jml_berat_diperbolehkan'];
$jml_berat_kombinasi_diperbolehkan		=$_REQUEST['jml_berat_kombinasi_diperbolehkan'];
$berat_kosong_sumbu_1		=$_REQUEST['berat_kosong_sumbu_1'];
$berat_kosong_sumbu_2		=$_REQUEST['berat_kosong_sumbu_2'];
$berat_kosong_sumbu_3		=$_REQUEST['berat_kosong_sumbu_3'];
$berat_kosong_sumbu_4		=$_REQUEST['berat_kosong_sumbu_4'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jml_berat_diizinkan		=$_REQUEST['jml_berat_diizinkan'];
$jml_berat_kombinasi_diizinkan		=$_REQUEST['jml_berat_kombinasi_diizinkan'];
$muatan_sumbu_terberat		=$_REQUEST['muatan_sumbu_terberat'];
$kelas_jalan				=$_REQUEST['kelas_jalan'];
$masa_berlaku_uji			=$_REQUEST['masa_berlaku_uji'];
$id							=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from pkb_kendaraan_wajib_uji where id='$id'");
}
?>

<html>
<head>
<title>PAJAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
<script language="javascript" src="global/jscript.js" type="text/javascript"></script>
<!-- popup calendar -->
		<link rel="stylesheet" href="popupcal/dhtmlgoodies_calendar.css" media="screen"></link>
		<script type="text/javascript" src="popupcal/dhtmlgoodies_calendar.js"></script>
		<!-- end popup calendar -->
<script>
function showme(){
var s_jenis = document.frmadd.jenis;
var h_jenis = document.frmadd.input_jenis;
var s_bahan = document.frmadd.bahan_bakar;
var h_bahan = document.frmadd.input_bahan;
var s_kategori = document.frmadd.kategori;
var h_kategori = document.frmadd.input_kategori;	

if(s_jenis.selectedIndex == 6 ){
h_jenis.style.visibility="visible";
}else{
h_jenis.style.visibility="hidden";
}

if(s_bahan.selectedIndex == 4 ){
h_bahan.style.visibility="visible";
}else{
h_bahan.style.visibility="hidden";
}

if(s_kategori.selectedIndex == 5 ){
h_kategori.style.visibility="visible";
}else{
h_kategori.style.visibility="hidden";
}
}
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/checkin.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Kendaraan Wajib Uji </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Kendaraan Wajib Uji: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_kendaraan_wajib_uji.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.kendaraan_wajib_uji"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <table width="520" border="1" cellpadding="1" cellspacing="0">
  <form name="frmadd" method="post" action="insert_kendaraan_wajib_uji.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Kendaraan Wajib Uji Baru </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" width='180' valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik </td>
	  <td width="15" valign="middle" bgcolor="efefef"><div align="center" style='margin:5px;'>:</div></td>
	  <td width="311" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama" size="25" value="<?php echo $nama; ?>" class="inputbox"  /></td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="alamat" size="40" value="<?php echo $alamat; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $no_kend; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="merk" size="15" value="<?php echo $merk; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="type" size="15" value="<?php echo $type; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td height="25" bgcolor="efefef">&nbsp;<select name="jenis" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Mobil Penumpang" <?php if($jenis=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($jenis=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($jenis=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($jenis=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($jenis=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if($jenis=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type="text" name="input_jenis" style="position:relative;visibility:hidden;" size="15" value="<?php echo $input_jenis; ?>" class="inputbox"  /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef">&nbsp;<select name="model" class="inputbox" onChange="showme()">
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
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td height="25" bgcolor="efefef">&nbsp;<select name="kategori" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Dump Truk" <?php if($kategori=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($kategori=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($kategori=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($kategori=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if($jenis=="Lainnya") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;<input type="text" name="input_kategori" style="position:relative;visibility:hidden;" size="15" value="<?php echo $input_kategori; ?>" class="inputbox"  /></td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Isi Silinder </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="cc" maxlength="6"  size="10" value="<?php echo $cc; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Motor </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input name="daya_motor" type="text" class="inputbox" value="<?php echo $daya_motor; ?>"  size="10" maxlength="6"  /></td>
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
		</select>&nbsp;<input type="text" name="input_bahan" style="position:relative;visibility:hidden;" size="15" value="<?php echo $input_bahan; ?>" class="inputbox"  />
	</td>
  </tr>  
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun Pembuatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="tahun_pembuatan"  maxlength="4"size="5" value="<?php echo $tahun_pembuatan; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;
	  	<select name="status_penggunaan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($status_penggunaan=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($status_penggunaan=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
		</select>
	</td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Rangka </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_rangka"  maxlength="20"  size="20" value="<?php echo $no_rangka; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Mesin </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_mesin"   maxlength="20" size="20" value="<?php echo $no_mesin; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Tanggal Sertifikat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_tgl_sertifik" size="20" value="<?php echo $no_tgl_sertifik; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Ukuran Kendaraan (mm) </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input name="uk_kend_panjang" type="text" class="inputbox" value="<?php echo $uk_kend_panjang; ?>" size="10" maxlength="6"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input name="uk_kend_lebar" type="text" class="inputbox" value="<?php echo $uk_kend_lebar; ?>" size="10" maxlength="6"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_tinggi" size="10" value="<?php echo $uk_kend_tinggi; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jalur Belakang (ROH) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_jalur_belakang" size="10" value="<?php echo $uk_kend_jalur_belakang; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jalur Depan (FOH) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_jalur_depan" size="10" value="<?php echo $uk_kend_jalur_depan; ?>" class="inputbox"  /></td>
  </tr>
 <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jarak Sumbu (mm) </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu I-II </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_1_2" size="10" value="<?php echo $jarak_sumbu_1_2; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu II-III </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_2_3" size="10" value="<?php echo $jarak_sumbu_2_3; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu III-IV </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_3_4" size="10" value="<?php echo $jarak_sumbu_3_4; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Q (jarak titik berat) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_titik_berat" size="10" value="<?php echo $jarak_titik_berat; ?>" class="inputbox"  /></td>
  </tr> 
 <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Dimensi Bak Muatan (mm) </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_panjang" size="10" value="<?php echo $dim_bak_panjang; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_lebar" size="10" value="<?php echo $dim_bak_lebar; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_tinggi" size="10" value="<?php echo $dim_bak_tinggi; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bak	 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_bahan_bak" size="10" value="<?php echo $dim_bak_bahan_bak; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Dimensi Tangki </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_panjang" size="10" value="<?php echo $dim_tangki_panjang; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_lebar" size="10" value="<?php echo $dim_tangki_lebar; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_tinggi" size="10" value="<?php echo $dim_tangki_tinggi; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Volume </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_volume" size="10" value="<?php echo $dim_tangki_volume; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Muatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_jenis" size="10" value="<?php echo $dim_tangki_jenis; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Berat Jenis Muatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_berat_jenis_muatan" size="10" value="<?php echo $dim_tangki_berat_jenis_muatan; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Tangki </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_bahan_tangki" size="10" value="<?php echo $dim_tangki_bahan_tangki; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Pemakaian ban yg Diizinkan </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-1 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_1" size="10" value="<?php echo $ban_sumbu_1; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-2 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_2" size="10" value="<?php echo $ban_sumbu_2; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-3 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_3" size="10" value="<?php echo $ban_sumbu_3; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-4 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_4" size="10" value="<?php echo $ban_sumbu_4; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp; </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Konfiguasi Sumbu </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="konfig_sumbu" size="10" value="<?php echo $konfig_sumbu; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah Berat yang<br>&nbsp;di Perbolehkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_diperbolehkan" size="10" value="<?php echo $jml_berat_diperbolehkan; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah Berat koombinasi yang <br>
      &nbsp;di Perbolehkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_kombinasi_diperbolehkan" size="10" value="<?php echo $jml_berat_kombinasi_diperbolehkan; ?>" class="inputbox"  /></td>
  </tr> 
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Berat Kosong </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu I </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_1" size="10" value="<?php echo $berat_kosong_sumbu_1; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu II </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_2" size="10" value="<?php echo $berat_kosong_sumbu_2; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu III </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_3" size="10" value="<?php echo $berat_kosong_sumbu_3; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu IV </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_4" size="10" value="<?php echo $berat_kosong_sumbu_4; ?>" class="inputbox"  /></td>
  </tr> 
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Daya Angkut </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Orang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="daya_orang" size="10" value="<?php echo $daya_orang; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Barang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="daya_barang" size="10" value="<?php echo $daya_barang; ?>" class="inputbox"  /></td>
  </tr> <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp; </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jml Berat Yg di diizinkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_diizinkan" size="10" value="<?php echo $jml_berat_diizinkan; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jml Berat komnbinasi yang <br>&nbsp;di diizinkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_kombinasi_diizinkan" size="10" value="<?php echo $jml_berat_kombinasi_diizinkan; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Muata Sumbu Terberat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="muatan_sumbu_terberat" size="10" value="<?php echo $muatan_sumbu_terberat; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kelas Jalan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<select name="kelas_jalan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="I" <?php if($kelas_jalan=="I") {echo "selected";}?>>I</option>
			<option value="II" <?php if($kelas_jalan=="II") {echo "selected";}?>>II</option>
			<option value="III" <?php if($kelas_jalan=="III") {echo "selected";}?>>III</option>
		</select></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku Uji </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="masa_berlaku_uji" id="masa_berlaku_uji" size="15" value="<?php echo $masa_berlaku_uji; ?>" class="inputbox" readonly=""  />
	  <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_uji'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  </tr>
    <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.kendaraan_wajib_uji"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>
   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from pkb_kendaraan_wajib_uji where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
   <table width="520" border="1" cellpadding="1" cellspacing="0">
   <form name="frmadd" method="post" action="update_kendaraan_wajib_uji.php" >
   <input type="hidden" name="id" value="<?php echo $id; ?>">
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
        Data Kendaraan Wajib Uji  </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td width="180" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama Pemilik </td>
	  <td width="16" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td width="310" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="nama" size="25" value="<?php echo $row[nama]; ?>" class="inputbox"  /></td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="alamat" size="40" value="<?php echo $row[alamat]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Uji </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Kendaraan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_kend" size="15" value="<?php echo $row[no_kend]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Merk </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="merk" size="15" value="<?php echo $row[merk]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Type </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="type" size="15" value="<?php echo $row[type]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td height="25" bgcolor="efefef">&nbsp;<select name="jenis" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Mobil Penumpang" <?php if($row[jenis]=="Mobil Penumpang") {echo "selected";}?>>Mobil Penumpang</option>
			<option value="Mobil Barang" <?php if($row[jenis]=="Mobil Barang") {echo "selected";}?>>Mobil Barang</option>
			<option value="Mobil Bus" <?php if($row[jenis]=="Mobil Bus") {echo "selected";}?>>Mobil Bus</option>
			<option value="Kereta Gandengan" <?php if($row[jenis]=="Kereta Gandengan") {echo "selected";}?>>Kereta Gandengan</option>
			<option value="Kereta Tempelan" <?php if($row[jenis]=="Kereta Tempelan") {echo "selected";}?>>Kereta Tempelan</option>
			<option value="Lainnya" <?php if ($row[jenis]<>"Mobil Penumpang" and $row[jenis]<>"Mobil Barang" and $row[jenis]<>"Mobil Bus" and $row[jenis]<>"Kereta Gandengan" and $row[jenis]<>"Kereta Tempelan") { echo "selected"; } ?>>Lainnya</option>
		</select>&nbsp;
		<?php
		if ($row[jenis]<>"Mobil Penumpang" and $row[jenis]<>"Mobil Barang" and $row[jenis]<>"Mobil Bus" and $row[jenis]<>"Kereta Gandengan" and $row[jenis]<>"Kereta Tempelan")
		{
		?>
		<input type="text" name="input_jenis" size="15" value="<?php echo $row[jenis]; ?>" class="inputbox"  /></div>
		<?php
		}
		?>
		</td>
  </tr>  
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Model</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef">&nbsp;<select name="model" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
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
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kategori </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td height="25" bgcolor="efefef">&nbsp;<select name="kategori" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>Pilih</option>
			<option value="Dump Truk" <?php if($row[kategori]=="Dump Truk") {echo "selected";}?>>Dump Truk</option>
			<option value="Tanki" <?php if($row[kategori]=="Tanki") {echo "selected";}?>>Tanki</option>
			<option value="Bak Terbuka" <?php if($row[kategori]=="Bak Terbuka") {echo "selected";}?>>Bak Terbuka</option>
			<option value="Bak Tertutup/Box" <?php if($row[kategori]=="Bak Tertutup/Box") {echo "selected";}?>>Bak Tertutup/Box</option>
			<option value="Lainnya" <?php if ($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and 
			$row[kategori]<>"Bak Tertutup/Box") {echo "selected";}?>>Lainnya</option>
		</select>&nbsp;
		<?php
		if ($row[kategori]<>"Dump Truk" and $row[kategori]<>"Tanki" and $row[kategori]<>"Bak Terbuka" and $row[kategori]<>"Bak Tertutup/Box")
		{
		?>
		<input type="text" name="input_kategori"  size="15" value="<?php echo $row[kategori]; ?>" class="inputbox" style="position:relative;visibility:none;"  />
		<?php
		}
		?>
		</td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Isi Silinder </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="cc" size="10" value="<?php echo $row[cc]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Daya Motor </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="daya_motor" size="10" value="<?php echo $row[daya_motor]; ?>" class="inputbox"  /></td>
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
			<option value="lainya" <?php if($row[bahan_bakar]=="lainya") {echo "selected";}?>>lainya</option>
		</select>&nbsp;<input type="text" name="input_bahan" style="position:relative;visibility:hidden;" size="15" value="<?php echo $row[bahan_bakar]; ?>" class="inputbox"  />
	</td>
  </tr>  
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun Pembuatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="tahun_pembuatan" size="5" value="<?php echo $row[tahun_pembuatan]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Status Penggunaan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;
	  	<select name="status_penggunaan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="Umum" <?php if($row[status_penggunaan]=="Umum") {echo "selected";}?>>Umum</option>
			<option value="Bukan Umum" <?php if($row[status_penggunaan]=="Bukan Umum") {echo "selected";}?>>Bukan Umum</option>
		</select>
	</td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No Rangka </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_rangka" size="20" value="<?php echo $row[no_rangka]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Mesin </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_mesin" size="20" value="<?php echo $row[no_mesin]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;No. Tanggal Sertifikat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="no_tgl_sertifik" size="20" value="<?php echo $row[no_tgl_sertifik]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Ukuran Kendaraan </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_panjang" size="10" value="<?php echo $row[uk_kend_panjang]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_lebar" size="10" value="<?php echo $row[uk_kend_lebar]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_tinggi" size="10" value="<?php echo $row[uk_kend_tinggi]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jalur Belakang (ROH) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_jalur_belakang" size="10" value="<?php echo $row[uk_kend_jalur_belakang]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jalur Depan (FOH) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="uk_kend_jalur_depan" size="10" value="<?php echo $row[uk_kend_jalur_depan]; ?>" class="inputbox"  /></td>
  </tr>
 <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jarak Sumbu (mm) </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu I-II </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_1_2" size="10" value="<?php echo $row[jarak_sumbu_1_2]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu II-III </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_2_3" size="10" value="<?php echo $row[jarak_sumbu_2_3]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu III-IV </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_sumbu_3_4" size="10" value="<?php echo $row[jarak_sumbu_3_4]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Q (jarak titik berat) </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jarak_titik_berat" size="10" value="<?php echo $row[jarak_titik_berat]; ?>" class="inputbox"  /></td>
  </tr> 
 <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Dimensi Bak Muatan (mm) </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_panjang" size="10" value="<?php echo $row[dim_bak_panjang]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_lebar" size="10" value="<?php echo $row[dim_bak_lebar]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_tinggi" size="10" value="<?php echo $row[dim_bak_tinggi]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Bak	 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_bak_bahan_bak" size="10" value="<?php echo $row[dim_bak_bahan_bak]; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Dimensi Tangki </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Panjang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_panjang" size="10" value="<?php echo $row[dim_tangki_panjang]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Lebar </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_lebar" size="10" value="<?php echo $row[dim_tangki_lebar]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tinggi </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_tinggi" size="10" value="<?php echo $row[dim_tangki_tinggi]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Volume </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_volume" size="10" value="<?php echo $row[dim_tangki_volume]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Muatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_jenis" size="10" value="<?php echo $row[dim_tangki_jenis]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Berat Jenis Muatan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_berat_jenis_muatan" size="10" value="<?php echo $row[dim_tangki_berat_jenis_muatan]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bahan Tangki </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="dim_tangki_bahan_tangki" size="10" value="<?php echo $row[dim_tangki_bahan_tangki]; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Pemakaian Ban yang Diizinkan </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-1 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_1" size="10" value="<?php echo $row[ban_sumbu_1]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-2 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_2" size="10" value="<?php echo $row[ban_sumbu_2]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-3 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_3" size="10" value="<?php echo $row[ban_sumbu_3]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu ke-4 </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="ban_sumbu_4" size="10" value="<?php echo $row[ban_sumbu_4]; ?>" class="inputbox"  /></td>
  </tr>
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp; </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Konfiguasi Sumbu </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="konfig_sumbu" size="10" value="<?php echo $row[konfig_sumbu]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah  Berat yang di<br>&nbsp;Perbolehkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_diperbolehkan" size="10" value="<?php echo $row[jml_berat_diperbolehkan]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah Berat Kombinasi yang<br>&nbsp;di Perbolehkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_kombinasi_diperbolehkan" size="10" value="<?php echo $row[jml_berat_kombinasi_diperbolehkan]; ?>" class="inputbox"  /></td>
  </tr> 
<tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Berat Kosong </td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu I </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_1" size="10" value="<?php echo $row[berat_kosong_sumbu_1]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu II </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_2" size="10" value="<?php echo $row[berat_kosong_sumbu_2]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu III </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_3" size="10" value="<?php echo $row[berat_kosong_sumbu_3]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Sumbu IV </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="berat_kosong_sumbu_4" size="10" value="<?php echo $row[berat_kosong_sumbu_4]; ?>" class="inputbox"  /></td>
  </tr> 
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Daya Angkut </td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Orang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="daya_orang" size="10" value="<?php echo $row[daya_orang]; ?>" class="inputbox"  /></td>
  </tr>  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Barang </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="daya_barang" size="10" value="<?php echo $row[daya_barang]; ?>" class="inputbox"  /></td>
  </tr> <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp; </td>
  </tr>   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah Berat yang di diizinkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_diizinkan" size="10" value="<?php echo $row[jml_berat_diizinkan]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jumlah Berat Kombinasi yang<br>&nbsp;di diizinkan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="jml_berat_kombinasi_diizinkan" size="10" value="<?php echo $row[jml_berat_kombinasi_diizinkan]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Muata Sumbu Terberat </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="muatan_sumbu_terberat" size="10" value="<?php echo $row[muatan_sumbu_terberat]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;Kelas Jalan </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<select name="kelas_jalan" class="inputbox">
			<option value="-" selected disabled>Pilih</option>
			<option value="I" <?php if($row[kelas_jalan]=="I") {echo "selected";}?>>I</option>
			<option value="II" <?php if($row[kelas_jalan]=="II") {echo "selected";}?>>II</option>
			<option value="III" <?php if($row[kelas_jalan]=="III") {echo "selected";}?>>III</option>
		</select></div></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd">&nbsp;masa berlaku uji </td>
	  <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
	  <td valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="masa_berlaku_uji" size="15" value="<?php if ($row[masa_berlaku_uji]=="0000-00-00") { echo "&nbsp;"; } else { echo $row[masa_berlaku_uji]; } ?>" class="inputbox" id="masa_berlaku_uji"  /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku_uji'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
    <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.kendaraan_wajib_uji"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
	</table>
	<?php
	}
else
{
?>
<table width="1350" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="493"><a href="?act=add&do=data.kendaraan_wajib_uji"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan Wajib Uji"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.kendaraan_wajib_uji">
                    <input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
                    <input type="hidden" name="key2" value="<?php echo $key2; ?>" id="key2_sr">
                    <td><select name="kategori" class="inputbox" onChange="submit();" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama </option>
	<option value="no_uji" <?php if ($kategori=="no_uji") echo "selected"; ?>>No. Uji</option>
    <option value="merk" <?php if ($kategori=="merk") echo "selected"; ?>>Merk</option>
    <option value="type" <?php if ($kategori=="type") echo "selected"; ?>>Type</option>
    <option value="jenis" <?php if ($kategori=="jenis") echo "selected"; ?>>Jenis Kendaraan</option>
    <option value="model" <?php if ($kategori=="model") echo "selected"; ?>>Model Kendaraan</option>
    <option value="kategori" <?php if ($kategori=="kategori") echo "selected"; ?>>Kategori</option>
    <option value="bahan_bakar" <?php if ($kategori=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
    <option value="tahun_pembuatan" <?php if ($kategori=="tahun_pembuatan") echo "selected"; ?>>Tahun</option>
    <option value="masa_berlaku_uji" <?php if ($kategori=="masa_berlaku_uji") echo "selected"; ?>>Masa Berlaku Uji</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.kendaraan_wajib_uji">
    				<td> 
                    <?php
					if ($kategori=="tanggal_sk" or $kategori=="masa_berlaku_uji")
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
                    <form method="post" action="index.php?do=data.kendaraan_wajib_uji">
                    <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
                    <input type="hidden" name="key" value="<?php echo $key; ?>" id="key_sr">
                    <td><select name="kategori2" class="inputbox" onChange="submit();" id="kategori2">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori2=="nama") echo "selected"; ?>>Nama </option>
	<option value="no_uji" <?php if ($kategori2=="no_uji") echo "selected"; ?>>No. Uji</option>
    <option value="merk" <?php if ($kategori2=="merk") echo "selected"; ?>>Merk</option>
    <option value="type" <?php if ($kategori2=="type") echo "selected"; ?>>Type</option>
    <option value="jenis" <?php if ($kategori2=="jenis") echo "selected"; ?>>Jenis Kendaraan</option>
    <option value="model" <?php if ($kategori2=="model") echo "selected"; ?>>Model Kendaraan</option>
    <option value="kategori" <?php if ($kategori2=="kategori") echo "selected"; ?>>Kategori</option>
    <option value="bahan_bakar" <?php if ($kategori2=="bahan_bakar") echo "selected"; ?>>Bahan Bakar</option>
    <option value="tahun_pembuatan" <?php if ($kategori2=="tahun_pembuatan") echo "selected"; ?>>Tahun</option>
    <option value="masa_berlaku_uji" <?php if ($kategori2=="masa_berlaku_uji") echo "selected"; ?>>Masa Berlaku Uji</option>
	</select></td>
    </form>
    <form name="input_key2" method="post" action="index.php?do=data.kendaraan_wajib_uji">
    				<td> 
                    <?php
					if ($kategori2=="tanggal_sk" or $kategori2=="masa_berlaku_uji")
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
                	<td colspan="5"><input type="button" value=" Cari " class="inputbox" onClick=" document.location.href='index.php?do=data.kendaraan_wajib_uji&kategori='+document.getElementById('kategori').value+'&key='+document.getElementById('key').value+'&kategori2='+document.getElementById('kategori2').value+'&key2='+document.getElementById('key2').value; "></td>
                </tr>
            </table>
        </fieldset>
    </td>
	<td width="8"></td>
	<td width="829" align="right" valign="bottom"><div align="right"><a href="excel_kendaraan_wajib_uji.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<!--<a href="index.php?do=data.kendaraan_wajib_uji&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a>--></div></td>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="3230">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td rowspan="2" width="130" background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td> 
    <td rowspan="2" width="170" background="images/bgcell.gif" height="25" align="center">Alamat</td>                       
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">No.<br>Kendaraan</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Merk</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Type</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Jenis<br>Kendaraan</td> 
	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Model<br>Kendaraan</td> 
	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Kategori</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">CC</td>              
	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Daya Motor (Kw/PS/HP)</td>           
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Bahan<br>Bakar</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Status</td>              
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">No.<br>Rangka</td> 
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">No.<br>Mesin</td>             
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">No.<br>Tanggal Sertifikat </td>             
    <td colspan="5" background="images/bgcell.gif" height="25" align="center">Ukuran Kendaraan</td>             
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">Jarak Sumbu</td>             
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">Dimensi Bak Muatan</td>             
    <td colspan="7" background="images/bgcell.gif" height="25" align="center">Dimensi Tangki</td>             
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">Pemakaian Ban Diizinkan</td>    
 	<td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Konfigurasi<br>Sumbu</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Jumlah<br>Berat Diperbolehkan (JBB) </td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Jumlah<br>Berat Kombinasi yang Diperbolehkan</td> 	
    <td colspan="4" background="images/bgcell.gif" height="25" align="center">Berat Kosong</td>             
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td>             
	<td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Jumlah<br>Berat<br>diizinkan<br>(JBI) </td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Jumlah<br>Berat<br>Kombinasi<br>diizinkan</td>    
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Muatan Sumbu Terberat</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Kelas<br>Jalan</td>              
    <td rowspan="2" width="110" background="images/bgcell.gif" height="25" align="center">Masa Berlaku Uji</td>                                      
  </tr>
  <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">Panjang</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Lebar</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Tinggi</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Julur Belakang (ROH)</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Julur Depan (FOH)</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Sumbu<br>I-II</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Sumbu<br>II-III</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Sumbu<br>III-IV</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Q (Jarak Titik Berat)</td>  
	<td width="50" background="images/bgcell.gif" height="25" align="center">Panjang</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Lebar</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Tinggi</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Bahan Bak</td>  
	<td width="50" background="images/bgcell.gif" height="25" align="center">Panjang</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Lebar</td>              
	<td width="50" background="images/bgcell.gif" height="25" align="center">Tinggi</td>  	
	<td width="50" background="images/bgcell.gif" height="25" align="center">Volume (liter) </td>  	
	<td width="50" background="images/bgcell.gif" height="25" align="center">Jenis<br>Muatan</td>  	
	<td width="50" background="images/bgcell.gif" height="25" align="center">Berat<br>Jenis<br>Muatan (kg/dm3)</td>  	
	<td width="50" background="images/bgcell.gif" height="25" align="center">Bahan Tangki</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>1</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>2</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>3</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>4</td>  	 
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>1</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>2</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>3</td>  	
	<td width="40" background="images/bgcell.gif" height="25" align="center">Sumbu<br>4</td> 	
	<td width="50" background="images/bgcell.gif" height="25" align="center">Orang<br>(0rg)</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Barang<br>(Kg)</td>
  </tr>
  <?php
  /*if ($kategori=="nama")
  {  $strsql="select * from pkb_kendaraan_wajib_uji where nama like '%$key%'  order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select * from pkb_kendaraan_wajib_uji where no_uji like '%$key%'  order by id desc"; }*/
  
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_kendaraan_wajib_uji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		 	$strsql="select * from pkb_kendaraan_wajib_uji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
			  $strsql="select * from pkb_kendaraan_wajib_uji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
  else
  {  $strsql="select * from pkb_kendaraan_wajib_uji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.kendaraan_wajib_uji&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.kendaraan_wajib_uji&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[type]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[model]; ?></td>
	<td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_motor]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pembuatan]; ?></td>
    <td height="25" align="center"><?php echo $row[status_penggunaan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rangka]; ?></td>
    <td height="25" align="center"><?php echo $row[no_mesin]; ?></td>
    <td height="25" align="center"><?php echo $row[no_tgl_sertifik]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_lebar]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_jalur_belakang]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_jalur_depan]; ?></td>
	<td height="25" align="center"><?php echo $row[jarak_sumbu_1_2]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_sumbu_2_3]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_sumbu_3_4]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_titik_berat]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_bak_panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_bak_lebar]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_bak_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_bak_bahan_bak]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_panjang]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_lebar]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_volume]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_berat_jenis_muatan]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_bahan_tangki]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_1]; ?></td>
	<td height="25" align="center"><?php echo $row[ban_sumbu_2]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_3]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_4]; ?></td>
	<td height="25" align="center"><?php echo $row[	konfig_sumbu]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_diperbolehkan]; ?></td>
	<td height="25" align="center"><?php echo $row[jml_berat_kombinasi_diperbolehkan]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_1]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_2]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_3]; ?></td>
	<td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_4]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_diizinkan]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_kombinasi_diizinkan]; ?></td>
	<td height="25" align="center"><?php echo $row[muatan_sumbu_terberat]; ?></td>
    <td height="25" align="center"><?php echo $row[kelas_jalan]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_uji]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
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
