<?php
$id					= $_REQUEST['id'];

$nama				= $_REQUEST['nama'];
$nip_lama			= $_REQUEST['nip_lama'];
$nip_baru			= $_REQUEST['nip_baru'];
$tempat_lahir		= $_REQUEST['tempat_lahir'];
$tgl_lahir			= $_REQUEST['tgl_lahir'];
$alamat				= $_REQUEST['alamat'];
$telp_rumah			= $_REQUEST['telp_rumah'];
$telp_hp			= $_REQUEST['telp_hp'];
$jenkel				= $_REQUEST['jenkel'];
$sts_perkawinan		= $_REQUEST['sts_perkawinan'];
$agama				= $_REQUEST['agama'];
$jns_kepegawaian	= $_REQUEST['agama'];
$sts_pegawai		= $_REQUEST['sts_pegawai'];
$tmt_cpns			= $_REQUEST['tmt_cpns'];
$tmt_pns			= $_REQUEST['tmt_pns'];
$tmt_honda			= $_REQUEST['tmt_honda'];
$tmt_kontrak		= $_REQUEST['tmt_kontrak'];
$pangkat 			= $_REQUEST['pangkat'];
$golongan 			= $_REQUEST['golongan'];
$tmt_pangkat 		= $_REQUEST['tmt_pangkat'];

$masa_golongan		= $_REQUEST['masa_golongan'];
$masa_golongan		= $_REQUEST['masa_golongan'];
$masa_tambahan		= $_REQUEST['masa_tambahan'];
$masa_seluruhnya 	= $_REQUEST['masa_seluruhnya'];
$masa_kontrak 	= $_REQUEST['masa_kontrak'];

$jabatan			= $_REQUEST['jabatan'];
$eselon			= $_REQUEST['eselon'];
$tmt_jabatan			= $_REQUEST['tmt_jabatan'];
$no_sk_jabatan			= $_REQUEST['no_sk_jabatan'];
$tgl_sk_jabatan			= $_REQUEST['tgl_sk_jabatan'];
$sk_jabatan_pejabat			= $_REQUEST['tmt_jabatan'];
$uk_bidang			= $_REQUEST['uk_bidang '];
$uk_bagian			= $_REQUEST['uk_bagian'];
$no_karis			= $_REQUEST['no_karis'];
$no_karsu			= $_REQUEST['no_karsu '];
$no_karpeg			= $_REQUEST['no_karpeg'];
$pendidikan			= $_REQUEST['pendidikan'];
$jurusan			= $_REQUEST['jurusan'];
$no_ijazah			= $_REQUEST['no_ijazah'];
$tgl_ijazah			= $_REQUEST['tgl_ijazah'];
$th_lulus			= $_REQUEST['th_lulus'];
$diklat_pimpin		= $_REQUEST['diklat_pimpin'];
$diklat_no_ijazah			= $_REQUEST['diklat_no_ijazah'];
$diklat_tgl_ijazah			= $_REQUEST['diklat_tgl_ijazah'];
$diklat_th_lulus			= $_REQUEST['diklat_th_lulus'];

$riwayat_sekolah		= $_REQUEST['riwayat_sekolah'];
$riwayat_jurusan		= $_REQUEST['riwayat_jurusan'];
$riwayat_status		= $_REQUEST['riwayat_status'];
$riwayat_th_lulus		= $_REQUEST['riwayat_th_lulus'];
$riwayat_no_ijazah		= $_REQUEST['riwayat_no_ijazah'];
$riwayat_tgl_ijazah		= $_REQUEST['riwayat_tgl_ijazah'];

$riwayat_pekerjaan		= $_REQUEST['riwayat_pekerjaan'];
$riwayat_jbt_nama		= $_REQUEST['riwayat_jbt_nama'];
$riwayat_jbt_tmt		= $_REQUEST['riwayat_jbt_tmt'];
$riwayat_jbt_eselon		= $_REQUEST['riwayat_jbt_eselon'];
$riwayat_sat_kerja		= $_REQUEST['riwayat_sat_kerja'];
$riwayat_no_sk		= $_REQUEST['riwayat_no_sk'];
$riwayat_tgl_sk		= $_REQUEST['riwayat_tgl_sk'];
$riwayat_pejabat_sk		= $_REQUEST['riwayat_pejabat_sk'];
$riwayat_pangkat		= $_REQUEST['riwayat_pangkat'];
$riwayat_golongan		= $_REQUEST['riwayat_golongan'];

$keluarga		= $_REQUEST['keluarga'];
$nama_kel		= $_REQUEST['nama_kel'];
$lahir_kel		= $_REQUEST['lahir_kel'];
$nikah_kel		= $_REQUEST['nikah_kel'];
$jenkel_kel		= $_REQUEST['jenkel_kel'];
$kerja_kel		= $_REQUEST['kerja_kel'];
$status_kel		= $_REQUEST['status_kel'];

if ($act=="del")
{
mysql_query("delete from peg_pegawai where id='$id'");
}
?>

 
<html>
<head>
<title>Kepegawaian</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>  
function showme(){  
var s_agama = document.frmadd.agama;  
var h_agama = document.frmadd.input_agama;  
var s_jns_kepegawaian = document.frmadd.jns_kepegawaian;  
var h_jns_kepegawaian = document.frmadd.input_jns_kepegawaian;  
var s_sts_pegawai = document.frmadd.sts_pegawai;  
var h_sts_pegawai = document.frmadd.input_sts_pegawai;  
var s_pangkat = document.frmadd.pangkat;  
var h_pangkat = document.frmadd.input_pangkat;  
var s_golongan = document.frmadd.golongan;  
var h_golongan = document.frmadd.input_golongan;  
var s_jabatan = document.frmadd.jabatan;  
var h_jabatan = document.frmadd.input_jabatan;  
var s_eselon = document.frmadd.eselon;  
var h_eselon = document.frmadd.input_eselon;  
var s_uk_bidang = document.frmadd.uk_bidang;  
var h_uk_bidang = document.frmadd.input_uk_bidang;  
var s_uk_bagian = document.frmadd.uk_bagian;  
var h_uk_bagian = document.frmadd.input_uk_bagian;  
var s_pendidikan = document.frmadd.pendidikan;  
var h_pendidikan = document.frmadd.input_pendidikan;  
var s_diklat_pimpin = document.frmadd.diklat_pimpin;  
var h_diklat_pimpin = document.frmadd.input_diklat_pimpin;  
var s_riwayat_pekerjaan = document.frmadd.riwayat_pekerjaan;  
var h_riwayat_pekerjaan = document.frmadd.input_riwayat_pekerjaan;  
var s_riwayat_jbt_eselon = document.frmadd.riwayat_jbt_eselon;  
var h_riwayat_jbt_eselon = document.frmadd.input_riwayat_jbt_eselon;  
var s_riwayat_pangkat = document.frmadd.riwayat_pangkat;  
var h_riwayat_pangkat = document.frmadd.input_riwayat_pangkat;  
var s_riwayat_golongan = document.frmadd.riwayat_golongan;  
var h_riwayat_golongan = document.frmadd.input_riwayat_golongan;  
var s_kerja_kel = document.frmadd.kerja_kel;  
var h_kerja_kel = document.frmadd.input_kerja_kel;  

if( s_agama.selectedIndex == 6 ) {  
h_agama.style.visibility="visible";  
}else{  
h_agama.style.visibility="hidden";  
}  

if( s_jns_kepegawaian.selectedIndex == 3 ) {  
h_jns_kepegawaian.style.visibility="visible";  
}else{  
h_jns_kepegawaian.style.visibility="hidden";  
}  

if( s_sts_pegawai.selectedIndex == 5 ) {  
h_sts_pegawai.style.visibility="visible";  
}else{  
h_sts_pegawai.style.visibility="hidden";  
} 

if( s_pangkat.selectedIndex ==18 ) {  
h_pangkat.style.visibility="visible";  
}else{  
h_pangkat.style.visibility="hidden";  
}  

if( s_golongan.selectedIndex == 18 ) {  
h_golongan.style.visibility="visible";  
}else{  
h_golongan.style.visibility="hidden";  
} 

if( s_jabatan.selectedIndex == 28 ) {  
h_jabatan.style.visibility="visible";  
}else{  
h_jabatan.style.visibility="hidden";  
} 

if( s_eselon.selectedIndex == 10 ) {  
h_eselon.style.visibility="visible";  
}else{  
h_eselon.style.visibility="hidden";  
} 

if( s_uk_bidang.selectedIndex == 5 ) {  
h_uk_bidang.style.visibility="visible";  
}else{  
h_uk_bidang.style.visibility="hidden";  
} 

if( s_uk_bagian.selectedIndex == 13 ) {  
h_uk_bagian.style.visibility="visible";  
}else{  
h_uk_bagian.style.visibility="hidden";  
} 

if( s_pendidikan.selectedIndex == 21 ) {  
h_pendidikan.style.visibility="visible";  
}else{  
h_pendidikan.style.visibility="hidden";  
} 

if( s_diklat_pimpin.selectedIndex == 8 ) {  
h_diklat_pimpin.style.visibility="visible";  
}else{  
h_diklat_pimpin.style.visibility="hidden";  
} 


if( s_riwayat_pekerjaan.selectedIndex == 8 ) {  
h_riwayat_pekerjaan.style.visibility="visible";  
}else{  
h_riwayat_pekerjaan.style.visibility="hidden";  
} 

if( s_riwayat_jbt_eselon.selectedIndex == 10 ) {  
h_riwayat_jbt_eselon.style.visibility="visible";  
}else{  
h_riwayat_jbt_eselon.style.visibility="hidden";  
} 

if( s_riwayat_pangkat.selectedIndex ==18 ) {  
h_riwayat_pangkat.style.visibility="visible";  
}else{  
h_riwayat_pangkat.style.visibility="hidden";  
}  

if( s_riwayat_golongan.selectedIndex == 18 ) {  
h_riwayat_golongan.style.visibility="visible";  
}else{  
h_riwayat_golongan.style.visibility="hidden";  
} 

if( s_kerja_kel.selectedIndex == 6 ) {  
h_kerja_kel.style.visibility="visible";  
}else{  
h_kerja_kel.style.visibility="hidden";  
} 


}  
</script>

</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/alumni.gif" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Pegawai</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Pegawai Dinas Perhubungan: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_pegawai.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="< ?php echo $key; ?>">
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
  <td colspan="3"><a href="index.php?do=data.pegawai"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
<table border="0" cellpadding="0" cellspacing="0">
<form name="frmadd" method="post" action="insert_pegawai.php">
<tr class="tdtitle_white">
<td colspan="2" height="25" background="images/bgcell.gif" align="center">Tambah Data Pegawai</td>
</tr>
<tr>
<td width="500" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
<!--DWLayoutTable-->
  	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Lengkap </td>
   	    <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nama" size="30" value="<?php echo $nama; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Lama)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nip_lama" size="20" value="<?php echo $nip_lama; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Baru)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nip_baru" size="20" value="<?php echo $nip_baru; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Biodata Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tempat Lahir</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="tempat_lahir" size="20" value="<?php echo $tempat_lahir; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tanggal Lahir</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_lahir" id="tgl_lahir" size="20" value="<?php echo $tgl_lahir; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Alamat</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="alamat" size="30" value="<?php echo $alamat; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Telp (Rumah)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="telp_rumah" size="20" value="<?php echo $telp_rumah; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. HP</td>
   	    <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="286" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="telp_hp" size="20" value="<?php echo $telp_hp; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenkel</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="jenkel" class="inputbox">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Laki - Laki" <?php if ($jenkel=="Laki - Laki") { echo "selected"; } ?>>Laki - Laki</option>
				<option value="Perempuan" <?php if ($jenkel=="Perempuan") { echo "selected"; } ?>>Perempuan</option>
	  		</select>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Perkawinan</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="sts_perkawinan" class="inputbox">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Kawin" <?php if ($sts_perkawinan=="Kawin") { echo "selected"; } ?>>Kawin</option>
				<option value="Belum Kawin" <?php if ($sts_perkawinan=="Belum Kawin") { echo "selected"; } ?>>Belum Kawin</option>
				<option value="Duda" <?php if ($sts_perkawinan=="Duda") { echo "selected"; } ?>>Duda</option>
				<option value="Janda" <?php if ($sts_perkawinan=="Janda") { echo "selected"; } ?>>Janda</option>		
  			</select>	
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Agama</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="agama" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Islam" <?php if ($agama=="Islam") { echo "selected"; } ?>>Islam</option>
				<option value="Kristen" <?php if ($agama=="Kristen") { echo "selected"; } ?>>Kristen</option>
				<option value="Katolik" <?php if ($agama=="Katolik") { echo "selected"; } ?>>Katolik</option>
				<option value="Budha" <?php if ($agama=="Budha") { echo "selected"; } ?>>Budha</option>
				<option value="Hindu" <?php if ($agama=="Hindu") { echo "selected"; } ?>>Hindu</option>
				<option value="Lainnya" <?php if ($agama=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<input type ="text" name="input_agama" style="  position:relative;visibility:hidden;" value="<?php echo $input_agama; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Status Kepegawaian</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Kepegawaian</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="jns_kepegawaian" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="PNS Daerah Otonom" <?php if ($jns_kepegawaian=="PNS Daerah Otonom") { echo "selected"; } ?>>PNS Daerah Otonom</option>
				<option value="DP Pusat" <?php if ($jns_kepegawaian=="DP Pusat") { echo "selected"; } ?>>DP Pusat</option>
				<option value="Lainnya" <?php if ($jns_kepegawaian=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<input type ="text" name="input_jns_kepegawaian" style="  position:relative;visibility:hidden;" value="<?php echo $input_jns_kepegawaian; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Pegawai</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="sts_pegawai" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="CPNS" <?php if ($sts_pegawai=="CPNS") { echo "selected"; } ?>>CPNS</option>
				<option value="PNS" <?php if ($sts_pegawai=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="HONDA" <?php if ($sts_pegawai=="HONDA") { echo "selected"; } ?>>HONDA</option>
				<option value="KONTRAK" <?php if ($sts_pegawai=="KONTRAK") { echo "selected"; } ?>>KONTRAK</option>
				<option value="Lainnya" <?php if ($sts_pegawai=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<input type ="text" name="input_sts_pegawai" style="  position:relative;visibility:hidden;" value="<?php echo $input_sts_pegawai; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat CPNS</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_cpns" id="tmt_cpns" size="20" value="<?php echo $tmt_cpns; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_cpns'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat PNS</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_pns" id="tmt_pns" size="20" value="<?php echo $tmt_pns; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_pns'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat HONDA</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_honda" id="tmt_honda" size="20" value="<?php echo $tmt_honda; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_honda'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat Kontrak </td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_kontrak" id="tmt_kontrak" size="20" value="<?php echo $tmt_kontrak; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_kontrak'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pangkat/Golongan/Masa Kerja Karyawan</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pangkat</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="pangkat" class="inputbox"  onchange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Juru Muda" <?php if ($pangkat=="Juru Muda") { echo "selected"; } ?>>Juru Muda</option>
			<option value="Juru Muda TK.I" <?php if ($pangkat=="Juru Muda  TK.I") { echo "selected"; } ?>>Juru Muda  TK.I</option>
			<option value="Juru" <?php if ($pangkat=="Juru") { echo "selected"; } ?>>Juru</option>
			<option value="Juru TK.I" <?php if ($pangkat=="Juru TK.I") { echo "selected"; } ?>>Juru TK.I</option>
			<option value="Pengatur Muda" <?php if ($pangkat=="Pengatur Muda") { echo "selected"; } ?>>Pengatur Muda</option>
			<option value="Pengatur Muda TK.I" <?php if ($pangkat=="Pengatur Muda TK.I") { echo "selected"; } ?>>Pengatur Muda TK.I</option>
			<option value="Pengatur" <?php if ($pangkat=="Pengatur") { echo "selected"; } ?>>Pengatur</option>
			<option value="Pengatur TK.I" <?php if ($pangkat=="Pengatur TK.I") { echo "selected"; } ?>>Pengatur TK.I</option>
			<option value="Penata Muda" <?php if ($pangkat=="Penata Muda") { echo "selected"; } ?>>Penata Muda</option>
			<option value="Penata Muda TK.I" <?php if ($pangkat=="Penata Muda TK.I") { echo "selected"; } ?>>Penata Muda TK.I</option>
			<option value="Penata" <?php if ($pangkat=="Penata") { echo "selected"; } ?>>Penata</option>
			<option value="Penata TK.I" <?php if ($pangkat=="Penata TK.I") { echo "selected"; } ?>>Penata TK.I</option>
			<option value="Pembina" <?php if ($pangkat=="Pembina") { echo "selected"; } ?>>Pembina</option>
			<option value="Pembina TK.I" <?php if ($pangkat=="Pembina TK.I") { echo "selected"; } ?>>Pembina TK.I</option>
			<option value="Pembina Utama Muda" <?php if ($pangkat=="Pembina Utama Muda") { echo "selected"; } ?>>Pembina Utama Muda</option>
			<option value="Pembina Utama Madya" <?php if ($pangkat=="Pembina Utama Madya") { echo "selected"; } ?>>Pembina Utama Madya</option>
			<option value="Pembina Utama" <?php if ($pangkat=="Pembina Utama") { echo "selected"; } ?>>Pembina Utama</option>
			<option value="Lainnya" <?php if ($pangkat=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
		  </select>&nbsp;
		  <input type ="text" name="input_pangkat" style=" position:relative;visibility:hidden;" value="<?php echo $input_pangkat; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Golongan</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="golongan" class="inputbox"  onchange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ia" <?php if ($golongan=="Ia") { echo "selected"; } ?>>Ia</option>
				<option value="Ib" <?php if ($golongan=="Ib") { echo "selected"; } ?>>Ib</option>
				<option value="Ic" <?php if ($golongan=="Ic") { echo "selected"; } ?>>Ic</option>
				<option value="Id" <?php if ($golongan=="Id") { echo "selected"; } ?>>Id</option>
				<option value="IIa" <?php if ($golongan=="IIa") { echo "selected"; } ?>>IIa</option>
				<option value="IIb" <?php if ($golongan=="IIb") { echo "selected"; } ?>>IIb</option>
				<option value="IIc" <?php if ($golongan=="IIc") { echo "selected"; } ?>>IIc</option>
				<option value="IId" <?php if ($golongan=="IId") { echo "selected"; } ?>>IId</option>
				<option value="IIIa" <?php if ($golongan=="IIIa") { echo "selected"; } ?>>IIIa</option>
				<option value="IIIb" <?php if ($golongan=="IIIb") { echo "selected"; } ?>>IIIb</option>
				<option value="IIIc" <?php if ($golongan=="IIIc") { echo "selected"; } ?>>IIIc</option>
				<option value="IIId" <?php if ($golongan=="IIId") { echo "selected"; } ?>>IIId</option>
				<option value="IVa" <?php if ($golongan=="IVa") { echo "selected"; } ?>>IVa</option>
				<option value="IVb" <?php if ($golongan=="IVb") { echo "selected"; } ?>>IVb</option>
				<option value="IVc" <?php if ($golongan=="IVc") { echo "selected"; } ?>>IVc</option>
				<option value="IVd" <?php if ($golongan=="IVd") { echo "selected"; } ?>>IVd</option>
				<option value="IVe" <?php if ($golongan=="IVe") { echo "selected"; } ?>>IVe</option>
				<option value="Lainnya" <?php if ($golongan=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
			</select>&nbsp;
			<input type ="text" name="input_golongan" style=" position:relative;visibility:hidden;" value="<?php echo $input_golongan; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Pangkat/Golongan</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_pangkat" id="tmt_pangkat" size="20" value="<?php echo $tmt_pangkat; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_pangkat'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Golongan)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="golongan_tahun" size="5" value="<?php echo $golongan_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="golongan_bulan" class="inputbox">
				<option value="01" <?php if ($golongan_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($golongan_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($golongan_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($golongan_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($golongan_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($golongan_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($golongan_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($golongan_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($golongan_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($golongan_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($golongan_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($golongan_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan	
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Tambahan)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tambahan_tahun" size="5" value="<?php echo $tambahan_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="tambahan_bulan" class="inputbox">
				<option value="01" <?php if ($tambahan_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($tambahan_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($tambahan_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($tambahan_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($tambahan_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($tambahan_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($tambahan_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($tambahan_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($tambahan_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($tambahan_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($tambahan_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($tambahan_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Seluruhnya)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="seluruhnya_tahun" size="5" value="<?php echo $seluruhnya_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="seluruhnya_bulan" class="inputbox">
				<option value="01" <?php if ($seluruhnya_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($seluruhnya_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($seluruhnya_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($seluruhnya_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($seluruhnya_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($seluruhnya_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($seluruhnya_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($seluruhnya_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($seluruhnya_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($seluruhnya_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($seluruhnya_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($seluruhnya_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Di Dishub)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="dishub_tahun" size="5" value="<?php echo $dishub_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="dishub_bulan" class="inputbox">
				<option value="01" <?php if ($_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="200" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Kontrak)</td>
   	  <td width="9" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="286" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="masa_kontrak_awal" id="masa_kontrak_awal" size="10" value="<?php echo $masa_kontrak_awal; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_kontrak_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /> &nbsp; s/d &nbsp;
			<input type="text" name="masa_kontrak_akhir" id="masa_kontrak_akhir" size="10" value="<?php echo $masa_kontrak_akhir; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_kontrak_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr>
	<td colspan="3" height="50" valign="middle">&nbsp;&nbsp;
	<a href="index.php?do=data.pegawai"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a>
	&nbsp; 
<input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
	</td>
	</tr>	
</table></td>
<td width="500" valign="top">
<table width="100%" border="1" cellpadding="0" cellspacing="0">	
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jabatan/Eselon/Unit Kerja Karyawan</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jabatan</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="jabatan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="kadishubkomiinfo" <?php if ($jabatan=="kadishubkomiinfo") { echo "selected"; } ?>>Kadishubkomiinfo</option>
			<option value="sekretaris" <?php if ($jabatan=="sekretaris") { echo "selected"; } ?>>Sekretaris</option>
			<option value="Kabid Lalin Darat" <?php if ($jabatan=="Kabid Lalin Darat") { echo "selected"; } ?>>Kabid Lalin Darat</option>
			<option value="Kabid Angdar" <?php if ($jabatan=="Kabid Angdar") { echo "selected"; } ?>>Kabid Angdar</option>
			<option value="Kabid Komiinfo" <?php if ($jabatan=="Kabid Komiinfo") { echo "selected"; } ?>>Kabid Komiinfo</option>
			<option value="Kasubag Umum" <?php if ($jabatan=="Kasubag Umum") { echo "selected"; } ?>>Kasubag Umum</option>
			<option value="Kasubag Renpeg" <?php if ($jabatan=="Kasubag Renpeg") { echo "selected"; } ?>>Kasubag Renpeg</option>
			<option value="Kasubag Keuangan" <?php if ($jabatan=="Kasubag Keuangan") { echo "selected"; } ?>>Kasubag Keuangan</option>
			<option value="Kasi Reklin" <?php if ($jabatan=="Kasi Reklin") { echo "selected"; } ?>>Kasi Reklin</option>
			<option value="Kasi Sarpras" <?php if ($jabatan=="Kasi Sarpras") { echo "selected"; } ?>>Kasi Sarpras</option>
			<option value="Kasi Wasdal" <?php if ($jabatan=="Kasi Wasdal") { echo "selected"; } ?>>Kasi Wasdal</option>
			<option value="Kasi Angbar" <?php if ($jabatan=="Kasi Angbar") { echo "selected"; } ?>>Kasi Angbar</option>
			<option value="Kasi Angkor" <?php if ($jabatan=="Kasi Angkor") { echo "selected"; } ?>>Kasi Angkor</option>
			<option value="Kasi Postel" <?php if ($jabatan=="Kasi Postel") { echo "selected"; } ?>>Kasi Postel</option>
			<option value="Kasi Frekosarkom" <?php if ($jabatan=="Kasi Frekosarkom") { echo "selected"; } ?>>Kasi Frekosarkom</option>
			<option value="KA. UPTD Terminal Penumpang" <?php if ($jabatan=="KA. UPTD Terminal Penumpang") { echo "selected"; } ?>>KA. UPTD Terminal Penumpang</option>
			<option value="KA. UPTD Terminal Barang" <?php if ($jabatan=="KA. UPTD Terminal Barang") { echo "selected"; } ?>>KA. UPTD Terminal Barang</option>
			<option value="KA. UPTD Balai PKB" <?php if ($jabatan=="KA. UPTD Balai PKB") { echo "selected"; } ?>>KA. UPTD Balai PKB</option>
			<option value="Kasubag TU UPTD Terminal Penumpang" <?php if ($jabatan=="Kasubag TU UPTD Terminal Penumpang") { echo "selected"; } ?>>Kasubag TU UPTD Terminal Penumpang</option>
			<option value="Kasubag TU UPTD Terminal Barang" <?php if ($jabatan=="Kasubag TU UPTD Terminal Barang") { echo "selected"; } ?>>Kasubag TU UPTD Terminal Barang</option>
			<option value="Kasubag TU UPTD Balai PKB" <?php if ($jabatan=="Kasubag TU UPTD Balai PKB") { echo "selected"; } ?>>Kasubag TU UPTD Balai PKB</option>
			<option value="Penguji Pemula" <?php if ($jabatan=="Penguji Pemula") { echo "selected"; } ?>>Penguji Pemula</option>
			<option value="Penguji Pelaksana" <?php if ($jabatan=="Penguji Pelaksana") { echo "selected"; } ?>>Penguji Pelaksana</option>
			<option value="Penguji Pelaksana Lanjutan" <?php if ($jabatan=="Penguji Pelaksana Lanjutan") { echo "selected"; } ?>>Penguji Pelaksana Lanjutan</option>
			<option value="Penguji Penyelia" <?php if ($jabatan=="Penguji Penyelia") { echo "selected"; } ?>>Penguji Penyelia</option>
			<option value="Staf" <?php if ($jabatan=="Staf") { echo "selected"; } ?>>Staf</option>
			<option value="Fungsional" <?php if ($jabatan=="Fungsional") { echo "selected"; } ?>>Fungsional</option>
			<option value="Lainnya" <?php if ($jabatan=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;<br/>&nbsp;
		<input type ="text" name="input_jabatan" style="  position:relative;visibility:hidden;" value="<?php echo $input_jabatan; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Eselon</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="eselon" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Ia" <?php if ($eselon=="Ia") { echo "selected"; } ?>>Ia</option>
			<option value="Ib" <?php if ($eselon=="Ib") { echo "selected"; } ?>>Ib</option>
			<option value="IIa" <?php if ($eselon=="IIa") { echo "selected"; } ?>>IIa</option>
			<option value="IIb" <?php if ($eselon=="IIb") { echo "selected"; } ?>>IIb</option>
			<option value="IIIa" <?php if ($eselon=="IIIa") { echo "selected"; } ?>>IIIa</option>
			<option value="IIIb" <?php if ($eselon=="IIIb") { echo "selected"; } ?>>IIIb</option>
			<option value="IVa" <?php if ($eselon=="IVa") { echo "selected"; } ?>>IVa</option>
			<option value="IVb" <?php if ($eselon=="IVb") { echo "selected"; } ?>>IVb</option>
			<option value="V" <?php if ($eselon=="V") { echo "selected"; } ?>>V</option>
			<option value="Lainnya" <?php if ($eselon=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_eselon" style="  position:relative;visibility:hidden;" value="<?php echo $input_eselon; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Jabatan / Eselon</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_jabatan" id="tmt_jabatan" size="20" value="<?php echo $tmt_jabatan; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_jabatan'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. SK Jabatan</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_sk_jabatan" size="20" value="<?php echo $no_sk_jabatan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. SK Jabatan</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_sk_jabatan" id="tgl_sk_jabatan" size="20" value="<?php echo $tgl_sk_jabatan; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_sk_jabatan'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; SK Jabatan Pejabat</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="sk_jabatan_pejabat" size="20" value="<?php echo $sk_jabatan_pejabat; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bidang)</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="uk_bidang" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Sekretariat" <?php if ($uk_bidang=="Sekretariat") { echo "selected"; } ?>>Sekretariat</option>
			<option value="Lalin Darat" <?php if ($uk_bidang=="Lalin Darat") { echo "selected"; } ?>>Lalin Darat</option>
			<option value="Angdar" <?php if ($uk_bidang=="Angdar") { echo "selected"; } ?>>Angdar</option>
			<option value="Kominfo" <?php if ($uk_bidang=="Kominfo") { echo "selected"; } ?>>Kominfo</option>
			<option value="Lainnya" <?php if ($uk_bidang=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_uk_bidang" style="  position:relative;visibility:hidden;" value="<?php echo $input_uk_bidang; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bagian / Seksi / UPTD)</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="uk_bagian" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Umum" <?php if ($uk_bagian=="Umum") { echo "selected"; } ?>>Umum</option>
			<option value="Renpeg" <?php if ($uk_bagian=="Renpeg") { echo "selected"; } ?>>Renpeg</option>
			<option value="Keuangan" <?php if ($uk_bagian=="Keuangan") { echo "selected"; } ?>>Keuangan</option>
			<option value="Reklin" <?php if ($uk_bagian=="Reklin") { echo "selected"; } ?>>Reklin</option>
			<option value="Sarpras" <?php if ($uk_bagian=="Sarpras") { echo "selected"; } ?>>Sarpras</option>
			<option value="Wasdal" <?php if ($uk_bagian=="Wasdal") { echo "selected"; } ?>>Sarpras</option>
			<option value="Angbar" <?php if ($uk_bagian=="Angbar") { echo "selected"; } ?>>Angbar</option>
			<option value="Angkor" <?php if ($uk_bagian=="Angkor") { echo "selected"; } ?>>Angkor</option>
			<option value="Postel" <?php if ($uk_bagian=="Postel") { echo "selected"; } ?>>Postel</option>
			<option value="Frekorsakom" <?php if ($uk_bagian=="Frekorsakom") { echo "selected"; } ?>>Frekorsakom</option>
			<option value="Terminal Penumpang" <?php if ($uk_bagian=="Terminal Penumpang") { echo "selected"; } ?>>Terminal Penumpang</option>
			<option value="Terminal Barang" <?php if ($uk_bagian=="Terminal Barang") { echo "selected"; } ?>>Terminal Barang</option>
			<option value="Lainnya" <?php if ($uk_bagian=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_uk_bagian" style="  position:relative;visibility:hidden;" value="<?php echo $input_uk_bagian; ?>" class="inputbox">
	  </td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">KARIS/KARSU/KARPEG Karyawan</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARIS</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karis" size="20" value="<?php echo $no_karis; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARSU</td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karsu" size="20" value="<?php echo $no_karsu; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARPEG </td>
   	  <td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karpeg" size="20" value="<?php echo $no_karpeg; ?>" class="inputbox"   /></td>
  	</tr>	
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pendidikan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pendidikan</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="pendidikan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="SD" <?php if ($pendidikan=="SD") { echo "selected"; } ?>>SD</option>
			<option value="MI" <?php if ($pendidikan=="MI") { echo "selected"; } ?>>MI</option>
			<option value="SMP" <?php if ($pendidikan=="MTs") { echo "selected"; } ?>>MTs</option>
			<option value="KPAA" <?php if ($pendidikan=="KPAA") { echo "selected"; } ?>>KPAA</option>
			<option value="KPA" <?php if ($pendidikan=="KPA") { echo "selected"; } ?>>KPA</option>
			<option value="Paket A" <?php if ($pendidikan=="Paket A") { echo "selected"; } ?>>Paket A</option>
			<option value="Paket B" <?php if ($pendidikan=="Paket B") { echo "selected"; } ?>>Paket B</option>
			<option value="Paket C" <?php if ($pendidikan=="Paket C") { echo "selected"; } ?>>Paket C</option>
			<option value="SMA" <?php if ($pendidikan=="SMA") { echo "selected"; } ?>>SMA</option>
			<option value="STM" <?php if ($pendidikan=="STM") { echo "selected"; } ?>>STM</option>
			<option value="SMK" <?php if ($pendidikan=="SMK") { echo "selected"; } ?>>SMK</option>
			<option value="SMEA" <?php if ($pendidikan=="SMEA") { echo "selected"; } ?>>SMEA</option>
			<option value="MAN" <?php if ($pendidikan=="MAN") { echo "selected"; } ?>>MAN</option>
			<option value="DI" <?php if ($pendidikan=="DI") { echo "selected"; } ?>>DI</option>
			<option value="DII" <?php if ($pendidikan=="DII") { echo "selected"; } ?>>DII</option>
			<option value="DIII" <?php if ($pendidikan=="DIII") { echo "selected"; } ?>>DIII</option>
			<option value="DIV" <?php if ($pendidikan=="DIV") { echo "selected"; } ?>>DIV</option>
			<option value="SI" <?php if ($pendidikan=="SI") { echo "selected"; } ?>>SI</option>
			<option value="SII" <?php if ($pendidikan=="SII") { echo "selected"; } ?>>SII</option>
			<option value="SIII" <?php if ($pendidikan=="SIII") { echo "selected"; } ?>>SIII</option>
			<option value="Lainnya" <?php if ($pendidikan=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_pendidikan" style="  position:relative;visibility:hidden;" value="<?php echo $input_pendidikan; ?>" class="inputbox">		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jurusan</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="jurusan" size="20" value="<?php echo $jurusan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_ijazah" size="20" value="<?php echo $no_ijazah; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_ijazah" id="tgl_ijazah" size="20" value="<?php echo $tgl_ijazah; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="th_lulus" size="20" value="<?php echo $th_lulus; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Diklat Kepemimpinan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
	   	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Diklat Kepemimpinan</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
    	<select name="diklat_pimpin" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="DIKLATPIM TK.I" <?php if ($diklat_pimpin=="DIKLATPIM TK.I") { echo "selected"; } ?>>DIKLATPIM TK.I</option>
			<option value="DIKLATPIM TK.II" <?php if ($diklat_pimpin=="DIKLATPIM TK.II") { echo "selected"; } ?>>DIKLATPIM TK.II</option>
			<option value="DIKLATPIM TK.III" <?php if ($diklat_pimpin=="DIKLATPIM TK.III") { echo "selected"; } ?>>DIKLATPIM TK.III</option>
			<option value="DIKLATPIM TK.IV" <?php if ($diklat_pimpin=="DIKLATPIM TK.IV") { echo "selected"; } ?>>DIKLATPIM TK.IV</option>
			<option value="ADUM" <?php if ($diklat_pimpin=="ADUM") { echo "selected"; } ?>>ADUM</option>
			<option value="ADUMLA" <?php if ($diklat_pimpin=="ADUMLA") { echo "selected"; } ?>>ADUMLA</option>
			<option value="SEPAMEN" <?php if ($diklat_pimpin=="SEPAMEN") { echo "selected"; } ?>>SEPAMEN</option>
			<option value="Lainnya" <?php if ($diklat_pimpin=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_diklat_pimpin" style="  position:relative;visibility:hidden;" value="<?php echo $input_diklat_pimpin; ?>" class="inputbox">		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah (Diklat)</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="diklat_no_ijazah" size="20" value="<?php echo $diklat_no_ijazah; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah (Diklat)</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="diklat_tgl_ijazah" id="diklat_tgl_ijazah" size="20" value="<?php echo $diklat_tgl_ijazah; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('diklat_tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus (Diklat)</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="diklat_th_lulus" size="20" value="<?php echo $diklat_th_lulus; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Identitas Istri / Suami </div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Keluarga</td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="keluarga" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Suami" <?php if ($keluarga=="Suami") { echo "selected"; } ?>>Suami</option>
				<option value="Istri" <?php if ($keluarga=="Istri") { echo "selected"; } ?>>Istri</option>
  			</select>&nbsp;		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Istri / Suami </td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nama_kel" size="30" value="<?php echo $nama_kel; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Lahir Istri / Suami </td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="lahir_kel" id="lahir_kel" size="20" value="<?php echo $lahir_kel; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('lahir_kel'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Nikah </td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="nikah_kel" id="nikah_kel" size="20" value="<?php echo $nikah_kel; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('nikah_kel'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="206" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pekerjaan </td>
    	<td width="10" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="276" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="kerja_kel" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ibu Rumah Tangga" <?php if ($kerja_kel=="Ibu Rumah Tangga") { echo "selected"; } ?>>Ibu Rumah Tangga</option>
				<option value="Wiraswasta" <?php if ($kerja_kel=="Wiraswasta") { echo "selected"; } ?>>Wiraswasta</option>
				<option value="PNS" <?php if ($kerja_kel=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="TNI" <?php if ($kerja_kel=="TNI") { echo "selected"; } ?>>TNI</option>
				<option value="POLRI" <?php if ($kerja_kel=="POLRI") { echo "selected"; } ?>>POLRI</option>
				<option value="Lainnya" <?php if ($kerja_kel=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
		  </select>&nbsp;
		<input type ="text" name="input_kerja_kel" style="  position:relative;visibility:hidden;" value="<?php echo $input_kerja_kel; ?>" class="inputbox">		</td>
  	</tr>
</table>
</td>
</tr>
</form>
</table>
  <?php
  }
  elseif ($act=="edit")
  {
   $strsql="select * from peg_pegawai where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table border="0" cellpadding="0" cellspacing="0">
<form name="frmadd" method="post" action="update_pegawai.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<tr class="tdtitle_white">
<td colspan="2" height="25" background="images/bgcell.gif"><div align="center">Edit Data Pegawai</div></td>
</tr>
<tr>
<td width="500" valign="top">
<table width="501" border="1" cellpadding="0" cellspacing="0">
<!--DWLayoutTable-->
  	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Lengkap</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nama" size="30" value="<?php echo $row[nama]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Lama)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nip_lama" size="20" value="<?php echo $row[nip_lama]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Baru)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nip_baru" size="20" value="<?php echo $row[nip_baru]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Biodata Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tempat Lahir</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="tempat_lahir" size="20" value="<?php echo $row[tempat_lahir]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tanggal Lahir</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_lahir" id="tgl_lahir" size="20" value="<?php if ($row[tgl_lahir]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_lahir];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Alamat</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="alamat" size="30" value="<?php echo $row[alamat]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Telp (Rumah)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="telp_rumah" size="20" value="<?php echo $row[telp_rumah]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. HP</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="telp_hp" size="20" value="<?php echo $row[telp_hp]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Kelamin </td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="jenkel" class="inputbox">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Laki - Laki" <?php if ($row[jenkel]=="Laki - Laki") { echo "selected"; } ?>>Laki - Laki</option>
				<option value="Perempuan" <?php if ($row[jenkel]=="Perempuan") { echo "selected"; } ?>>Perempuan</option>
	  		</select>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Perkawinan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="sts_perkawinan" class="inputbox">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Kawin" <?php if ($row[sts_perkawinan]=="Kawin") { echo "selected"; } ?>>Kawin</option>
				<option value="Belum Kawin" <?php if ($row[sts_perkawinan]=="Belum Kawin") { echo "selected"; } ?>>Belum Kawin</option>
				<option value="Duda" <?php if ($row[sts_perkawinan]=="Duda") { echo "selected"; } ?>>Duda</option>
				<option value="Janda" <?php if ($row[sts_perkawinan]=="Janda") { echo "selected"; } ?>>Janda</option>		
  			</select>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Agama</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="agama" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Islam" <?php if ($row[agama]=="Islam") { echo "selected"; } ?>>Islam</option>
				<option value="Kristen" <?php if ($row[agama]=="Kristen") { echo "selected"; } ?>>Kristen</option>
				<option value="Katolik" <?php if ($row[agama]=="Katolik") { echo "selected"; } ?>>Katolik</option>
				<option value="Budha" <?php if ($row[agama]=="Budha") { echo "selected"; } ?>>Budha</option>
				<option value="Hindu" <?php if ($row[agama]=="Hindu") { echo "selected"; } ?>>Hindu</option>
				<option value="Lainnya" <?php if($row[agama]<>"Islam" and $row[agama]<>"Kristen" and $row[agama]<>"Katolik" and $row[agama]<>"Budha" and $row[agama]<>"Hindu") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<?php
			if($row[agama]<>"Islam" and $row[agama]<>"Kristen" and $row[agama]<>"Katolik" and $row[agama]<>"Budha" and $row[agama]<>"Hindu")
			{
			?>
			<input type ="text" name="input_agama"  value="" class="inputbox">
			<?php
			}elseif($row[agama]<>"Lainnya")
			{
			?>
			<input type ="text" name="input_agama" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}else{
			?>
			<input type ="text" name="input_agama" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}
			?>
	  </td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Status Kepegawaian</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Kepegawaian</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="jns_kepegawaian" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="PNS Daerah Otonom" <?php if ($row[jns_kepegawaian]=="PNS Daerah Otonom") { echo "selected"; } ?>>PNS Daerah Otonom</option>
				<option value="DP Pusat" <?php if ($row[jns_kepegawaian]=="DP Pusat") { echo "selected"; } ?>>DP Pusat</option>
				<option value="Lainnya" <?php if($row[jns_kepegawaian]<>"PNS Daerah Otonom" and $row[jns_kepegawaian]<>"DP Pusat") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<?php
			if($row[jns_kepegawaian]<>"PNS Daerah Otonom" and $row[jns_kepegawaian]<>"DP Pusat")
			{
			?>
			<input type ="text" name="input_jns_kepegawaian"  value="<?php echo $row[jns_kepegawaian]; ?>" class="inputbox">
			<?php
			}
			?>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Pegawai</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="sts_pegawai" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="CPNS" <?php if ($row[sts_pegawai]=="CPNS") { echo "selected"; } ?>>CPNS</option>
				<option value="PNS" <?php if ($row[sts_pegawai]=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="HONDA" <?php if ($row[sts_pegawai]=="HONDA") { echo "selected"; } ?>>HONDA</option>
				<option value="KONTRAK" <?php if ($row[sts_pegawai]=="KONTRAK") { echo "selected"; } ?>>KONTRAK</option>
				<option value="Lainnya" <?php if($row[sts_pegawai]<>"CPNS" and $row[sts_pegawai]<>"PNS" and $row[sts_pegawai]<>"HONDA" and $row[sts_pegawai]<>"KONTRAK") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<?php
			if($row[sts_pegawai]<>"CPNS" and $row[sts_pegawai]<>"PNS" and $row[sts_pegawai]<>"HONDA" and $row[sts_pegawai]<>"KONTRAK")
			{
			?>
			<input type ="text" name="input_sts_pegawai"  class="inputbox" value="<?php echo $row[sts_pegawai]; ?>">
			<?php
			}
			?>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat CPNS</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_cpns" id="tmt_cpns" size="20" value="<?php if ($row[tmt_cpns]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_cpns];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_cpns'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat PNS</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_pns" id="tmt_pns" size="20" value="<?php if ($row[tmt_pns]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_pns];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_pns'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat HONDA</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_honda" id="tmt_honda" size="20" value="<?php if ($row[tmt_honda]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_honda];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_honda'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat Kontrak </td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_kontrak" id="tmt_kontrak" size="20" value="<?php if ($row[tmt_kontrak]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_kontrak];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_kontrak'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_white">
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pangkat/Golongan/Masa Kerja Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pangkat</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="pangkat" class="inputbox"  onchange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Juru Muda" <?php if ($row[pangkat]=="Juru Muda") { echo "selected"; } ?>>Juru Muda</option>
			<option value="Juru Muda TK.I" <?php if ($row[pangkat]=="Juru Muda  TK.I") { echo "selected"; } ?>>Juru Muda  TK.I</option>
			<option value="Juru" <?php if ($row[pangkat]=="Juru") { echo "selected"; } ?>>Juru</option>
			<option value="Juru TK.I" <?php if ($row[pangkat]=="Juru TK.I") { echo "selected"; } ?>>Juru TK.I</option>
			<option value="Pengatur Muda" <?php if ($row[pangkat]=="Pengatur Muda") { echo "selected"; } ?>>Pengatur Muda</option>
			<option value="Pengatur Muda TK.I" <?php if ($row[pangkat]=="Pengatur Muda TK.I") { echo "selected"; } ?>>Pengatur Muda TK.I</option>
			<option value="Pengatur" <?php if ($row[pangkat]=="Pengatur") { echo "selected"; } ?>>Pengatur</option>
			<option value="Pengatur TK.I" <?php if ($row[pangkat]=="Pengatur TK.I") { echo "selected"; } ?>>Pengatur TK.I</option>
			<option value="Penata Muda" <?php if ($row[pangkat]=="Penata Muda") { echo "selected"; } ?>>Penata Muda</option>
			<option value="Penata Muda TK.I" <?php if ($row[pangkat]=="Penata Muda TK.I") { echo "selected"; } ?>>Penata Muda TK.I</option>
			<option value="Penata" <?php if ($row[pangkat]=="Penata") { echo "selected"; } ?>>Penata</option>
			<option value="Penata TK.I" <?php if ($row[pangkat]=="Penata TK.I") { echo "selected"; } ?>>Penata TK.I</option>
			<option value="Pembina" <?php if ($row[pangkat]=="Pembina") { echo "selected"; } ?>>Pembina</option>
			<option value="Pembina TK.I" <?php if ($row[pangkat]=="Pembina TK.I") { echo "selected"; } ?>>Pembina TK.I</option>
			<option value="Pembina Utama Muda" <?php if ($row[pangkat]=="Pembina Utama Muda") { echo "selected"; } ?>>Pembina Utama Muda</option>
			<option value="Pembina Utama Madya" <?php if ($row[pangkat]=="Pembina Utama Madya") { echo "selected"; } ?>>Pembina Utama Madya</option>
			<option value="Pembina Utama" <?php if ($row[pangkat]=="Pembina Utama") { echo "selected"; } ?>>Pembina Utama</option>
			<option value="Lainnya" <?php 
			if(	$row[pangkat]<>"Juru Muda" and $row[pangkat]<>"Juru Muda TK.I" and $row[pangkat]<>"Juru" and $row[pangkat]<>"Juru TK.I" and 
				$row[pangkat]<>"Pengatur Muda" and $row[pangkat]<>"Pengatur Muda TK.I" and $row[pangkat]<>"Pengatur" and $row[pangkat]<>"Pengatur TK.I" and
				$row[pangkat]<>"Penata Muda" and $row[pangkat]<>"Penata Muda TK.I" and $row[pangkat]<>"Penata" and $row[pangkat]<>"Penata TK.I" and
				$row[pangkat]<>"Pembina" and $row[pangkat]<>"Pembina TK.I" and $row[pangkat]<>"Pembina Utama Muda" and 
				$row[pangkat]<>"Pembina Utama Madya" and $row[pangkat]<>"Pembina Utama")
			{ echo "selected"; } ?>>Lainnya</option>
		  </select>&nbsp;
		  <?php
			if(	$row[pangkat]<>"Juru Muda" and $row[pangkat]<>"Juru Muda TK.I" and $row[pangkat]<>"Juru" and $row[pangkat]<>"Juru TK.I" and 
				$row[pangkat]<>"Pengatur Muda" and $row[pangkat]<>"Pengatur Muda TK.I" and $row[pangkat]<>"Pengatur" and $row[pangkat]<>"Pengatur TK.I" and
				$row[pangkat]<>"Penata Muda" and $row[pangkat]<>"Penata Muda TK.I" and $row[pangkat]<>"Penata" and $row[pangkat]<>"Penata TK.I" and
				$row[pangkat]<>"Pembina" and $row[pangkat]<>"Pembina TK.I" and $row[pangkat]<>"Pembina Utama Muda" and 
				$row[pangkat]<>"Pembina Utama Madya" and $row[pangkat]<>"Pembina Utama")
			{
			?>
			<input type ="text" name="input_pangkat"  value="<?php echo $row[pangkat]; ?>" class="inputbox">
			<?php
			}
			?>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Golongan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="golongan" class="inputbox"  onchange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ia" <?php if ($row[golongan]=="Ia") { echo "selected"; } ?>>Ia</option>
				<option value="Ib" <?php if ($row[golongan]=="Ib") { echo "selected"; } ?>>Ib</option>
				<option value="Ic" <?php if ($row[golongan]=="Ic") { echo "selected"; } ?>>Ic</option>
				<option value="Id" <?php if ($row[golongan]=="Id") { echo "selected"; } ?>>Id</option>
				<option value="IIa" <?php if ($row[golongan]=="IIa") { echo "selected"; } ?>>IIa</option>
				<option value="IIb" <?php if ($row[golongan]=="IIb") { echo "selected"; } ?>>IIb</option>
				<option value="IIc" <?php if ($row[golongan]=="IIc") { echo "selected"; } ?>>IIc</option>
				<option value="IId" <?php if ($row[golongan]=="IId") { echo "selected"; } ?>>IId</option>
				<option value="IIIa" <?php if ($row[golongan]=="IIIa") { echo "selected"; } ?>>IIIa</option>
				<option value="IIIb" <?php if ($row[golongan]=="IIIb") { echo "selected"; } ?>>IIIb</option>
				<option value="IIIc" <?php if ($row[golongan]=="IIIc") { echo "selected"; } ?>>IIIc</option>
				<option value="IIId" <?php if ($row[golongan]=="IIId") { echo "selected"; } ?>>IIId</option>
				<option value="IVa" <?php if ($row[golongan]=="IVa") { echo "selected"; } ?>>IVa</option>
				<option value="IVb" <?php if ($row[golongan]=="IVb") { echo "selected"; } ?>>IVb</option>
				<option value="IVc" <?php if ($row[golongan]=="IVc") { echo "selected"; } ?>>IVc</option>
				<option value="IVd" <?php if ($row[golongan]=="IVd") { echo "selected"; } ?>>IVd</option>
				<option value="IVe" <?php if ($row[golongan]=="IVe") { echo "selected"; } ?>>IVe</option>
				<option value="Lainnya" <?php 
				if(	$row[golongan]<>"Ia" and $row[golongan]<>"Ib" and $row[golongan]<>"Ic" and $row[golongan]<>"Id" and 
				$row[golongan]<>"IIa" and $row[golongan]<>"IIb" and $row[golongan]<>"IIc" and $row[golongan]<>"IId" and
				$row[golongan]<>"IIIa" and $row[golongan]<>"IIIb" and $row[golongan]<>"IIIc" and $row[golongan]<>"IIId" and
				$row[golongan]<>"IVa" and $row[golongan]<>"IVb" and $row[golongan]<>"IVc" and 
				$row[golongan]<>"IVd" and $row[golongan]<>"IVe") 
				{ echo "selected"; } ?>>Lainnya</option>
			</select>&nbsp;
			<?php
			if(	$row[golongan]<>"Ia" and $row[golongan]<>"Ib" and $row[golongan]<>"Ic" and $row[golongan]<>"Id" and 
				$row[golongan]<>"IIa" and $row[golongan]<>"IIb" and $row[golongan]<>"IIc" and $row[golongan]<>"IId" and
				$row[golongan]<>"IIIa" and $row[golongan]<>"IIIb" and $row[golongan]<>"IIIc" and $row[golongan]<>"IIId" and
				$row[golongan]<>"IVa" and $row[golongan]<>"IVb" and $row[golongan]<>"IVc" and 
				$row[golongan]<>"IVd" and $row[golongan]<>"IVe")
			{
			?>
			<input type ="text" name="input_golongan"  value="" class="inputbox">
			<?php
			}elseif($row[golongan]<>"Lainnya")
			{
			?>
			<input type ="text" name="input_golongan" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}else{
			?>
			<input type ="text" name="input_golongan" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}
			?>
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Pangkat/Golongan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_pangkat" id="tmt_pangkat" size="20" value="<?php if ($row[tmt_pangkat]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_pangkat];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_pangkat'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>
	<tr class="tdtitle_black">
	<?php
	$temp=explode("-",$row[masa_golongan]);
	$golongan_tahun=$temp[0];
	$golongan_bulan=$temp[1];
	?>
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Golongan)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="golongan_tahun" size="5" value="<?php echo $golongan_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="golongan_bulan" class="inputbox">
				<option value="01" <?php if ($golongan_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($golongan_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($golongan_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($golongan_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($golongan_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($golongan_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($golongan_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($golongan_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($golongan_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($golongan_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($golongan_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($golongan_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan	
	  </td>
  	</tr>
	<tr class="tdtitle_black">
	<?php
	$temp=explode("-",$row[masa_tambahan]);
	$tambahan_tahun=$temp[0];
	$tambahan_bulan=$temp[1];
	?>
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Tambahan)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tambahan_tahun" size="5" value="<?php echo $tambahan_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="tambahan_bulan" class="inputbox">
				<option value="01" <?php if ($tambahan_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($tambahan_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($tambahan_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($tambahan_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($tambahan_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($tambahan_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($tambahan_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($tambahan_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($tambahan_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($tambahan_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($tambahan_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($tambahan_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
	<?php
	$temp=explode("-",$row[masa_seluruhnya]);
	$seluruhnya_tahun=$temp[0];
	$seluruhnya_bulan=$temp[1];
	?>
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Seluruhnya)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="seluruhnya_tahun" size="5" value="<?php echo $seluruhnya_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="seluruhnya_bulan" class="inputbox">
				<option value="01" <?php if ($seluruhnya_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($seluruhnya_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($seluruhnya_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($seluruhnya_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($seluruhnya_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($seluruhnya_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($seluruhnya_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($seluruhnya_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($seluruhnya_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($seluruhnya_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($seluruhnya_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($seluruhnya_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
	<?php
	$temp=explode("-",$row[masa_dishub]);
	$dishub_tahun=$temp[0];
	$dishub_bulan=$temp[1];
	?>
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Di Dishub)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="dishub_tahun" size="5" value="<?php echo $dishub_tahun; ?>" maxlength="4" class="inputbox"   />&nbsp; Tahun &nbsp;
			<select name="dishub_bulan" class="inputbox">
				<option value="01" <?php if ($dishub_bulan=="01") { echo "selected"; } ?>>Januari</option>
				<option value="02" <?php if ($dishub_bulan=="02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if ($dishub_bulan=="03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if ($dishub_bulan=="04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if ($dishub_bulan=="05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if ($dishub_bulan=="06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if ($dishub_bulan=="07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if ($dishub_bulan=="08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if ($dishub_bulan=="09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if ($dishub_bulan=="10") { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if ($dishub_bulan=="11") { echo "selected"; } ?>>November</option>
				<option value="12" <?php if ($dishub_bulan=="12") { echo "selected"; } ?>>Desember</option>				
			</select>&nbsp;&nbsp; Bulan
	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Kontrak)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="masa_kontrak_awal" id="masa_kontrak_awal" size="10" value="<?php echo $row[masa_kontrak_awal]; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_kontrak_awal'),'yyyy-mm-dd',this)" style="cursor:pointer" /> &nbsp; s/d &nbsp;
			<input type="text" name="masa_kontrak_akhir" id="masa_kontrak_akhir" size="10" value="<?php echo $row[masa_kontrak_akhir]; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_kontrak_akhir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	  </td>
  	</tr>	
	<tr>
	<td colspan="3" height="50">&nbsp;&nbsp;
	<a href="index.php?do=data.pegawai"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
&nbsp;&nbsp; 
<input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
	</td>
	</tr>
</table>
</td>
<td width="500" valign="top">
<table width="500" border="1" cellpadding="0" cellspacing="0">
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jabatan/Eselon/Unit Kerja Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jabatan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="jabatan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="kadishubkomiinfo" <?php if ($row[jabatan]=="kadishubkomiinfo") { echo "selected"; } ?>>Kadishubkomiinfo</option>
			<option value="sekretaris" <?php if ($row[jabatan]=="sekretaris") { echo "selected"; } ?>>Sekretaris</option>
			<option value="Kabid Lalin Darat" <?php if ($row[jabatan]=="Kabid Lalin Darat") { echo "selected"; } ?>>Kabid Lalin Darat</option>
			<option value="Kabid Angdar" <?php if ($row[jabatan]=="Kabid Angdar") { echo "selected"; } ?>>Kabid Angdar</option>
			<option value="Kabid Komiinfo" <?php if ($row[jabatan]=="Kabid Komiinfo") { echo "selected"; } ?>>Kabid Komiinfo</option>
			<option value="Kasubag Umum" <?php if ($row[jabatan]=="Kasubag Umum") { echo "selected"; } ?>>Kasubag Umum</option>
			<option value="Kasubag Renpeg" <?php if ($row[jabatan]=="Kasubag Renpeg") { echo "selected"; } ?>>Kasubag Renpeg</option>
			<option value="Kasubag Keuangan" <?php if ($row[jabatan]=="Kasubag Keuangan") { echo "selected"; } ?>>Kasubag Keuangan</option>
			<option value="Kasi Reklin" <?php if ($row[jabatan]=="Kasi Reklin") { echo "selected"; } ?>>Kasi Reklin</option>
			<option value="Kasi Sarpras" <?php if ($row[jabatan]=="Kasi Sarpras") { echo "selected"; } ?>>Kasi Sarpras</option>
			<option value="Kasi Wasdal" <?php if ($row[jabatan]=="Kasi Wasdal") { echo "selected"; } ?>>Kasi Wasdal</option>
			<option value="Kasi Angbar" <?php if ($row[jabatan]=="Kasi Angbar") { echo "selected"; } ?>>Kasi Angbar</option>
			<option value="Kasi Angkor" <?php if ($row[jabatan]=="Kasi Angkor") { echo "selected"; } ?>>Kasi Angkor</option>
			<option value="Kasi Postel" <?php if ($row[jabatan]=="Kasi Postel") { echo "selected"; } ?>>Kasi Postel</option>
			<option value="Kasi Frekosarkom" <?php if ($row[jabatan]=="Kasi Frekosarkom") { echo "selected"; } ?>>Kasi Frekosarkom</option>
			<option value="KA. UPTD Terminal Penumpang" <?php if ($row[jabatan]=="KA. UPTD Terminal Penumpang") { echo "selected"; } ?>>KA. UPTD Terminal Penumpang</option>
			<option value="KA. UPTD Terminal Barang" <?php if ($row[jabatan]=="KA. UPTD Terminal Barang") { echo "selected"; } ?>>KA. UPTD Terminal Barang</option>
			<option value="KA. UPTD Balai PKB" <?php if ($row[jabatan]=="KA. UPTD Balai PKB") { echo "selected"; } ?>>KA. UPTD Balai PKB</option>
			<option value="Kasubag TU UPTD Terminal Penumpang" <?php if ($row[jabatan]=="Kasubag TU UPTD Terminal Penumpang") { echo "selected"; } ?>>Kasubag TU UPTD Terminal Penumpang</option>
			<option value="Kasubag TU UPTD Terminal Barang" <?php if ($row[jabatan]=="Kasubag TU UPTD Terminal Barang") { echo "selected"; } ?>>Kasubag TU UPTD Terminal Barang</option>
			<option value="Kasubag TU UPTD Balai PKB" <?php if ($row[jabatan]=="Kasubag TU UPTD Balai PKB") { echo "selected"; } ?>>Kasubag TU UPTD Balai PKB</option>
			<option value="Penguji Pemula" <?php if ($row[jabatan]=="Penguji Pemula") { echo "selected"; } ?>>Penguji Pemula</option>
			<option value="Penguji Pelaksana" <?php if ($row[jabatan]=="Penguji Pelaksana") { echo "selected"; } ?>>Penguji Pelaksana</option>
			<option value="Penguji Pelaksana Lanjutan" <?php if ($row[jabatan]=="Penguji Pelaksana Lanjutan") { echo "selected"; } ?>>Penguji Pelaksana Lanjutan</option>
			<option value="Penguji Penyelia" <?php if ($row[jabatan]=="Penguji Penyelia") { echo "selected"; } ?>>Penguji Penyelia</option>
			<option value="Staf" <?php if ($row[jabatan]=="Staf") { echo "selected"; } ?>>Staf</option>
			<option value="Fungsional" <?php if ($row[jabatan]=="Fungsional") { echo "selected"; } ?>>Fungsional</option>
			<option value="Lainnya" <?php 
			if(	$row[jabatan]<>"kadishubkomiinfo" and $row[jabatan]<>"sekretaris" and $row[jabatan]<>"Kabid Lalin Darat" and $row[jabatan]<>"Kabid Angdar" and 
				$row[jabatan]<>"Kabid Komiinfo" and $row[jabatan]<>"Kasubag Umum" and $row[jabatan]<>"Kasubag Renpeg" and $row[jabatan]<>"Kasubag Keuangan" and
				$row[jabatan]<>"Kasi Reklin" and $row[jabatan]<>"Kasi Sarpras" and $row[jabatan]<>"Kasi Wasdal" and $row[jabatan]<>"Kasi Angbar" and
				$row[jabatan]<>"Kasi Angkor" and $row[jabatan]<>"Kasi Postel" and $row[jabatan]<>"Kasi Frekosarkom" and 
				$row[jabatan]<>"KA. UPTD Terminal Penumpang" and $row[jabatan]<>"KA. UPTD Terminal Barang" and $row[jabatan]<>"KA. UPTD Balai PKB" and
				$row[jabatan]<>"Penguji Pemula" and $row[jabatan]<>"Penguji Pelaksana" and $row[jabatan]<>"Penguji Pelaksana Lanjutan" and $row[jabatan]<>"Penguji Penyelia" and
				$row[jabatan]<>"Staf" and $row[jabatan]<>"Fungsional") 
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;<br/>&nbsp;
		<?php
			if(	$row[jabatan]<>"kadishubkomiinfo" and $row[jabatan]<>"sekretaris" and $row[jabatan]<>"Kabid Lalin Darat" and $row[jabatan]<>"Kabid Angdar" and 
				$row[jabatan]<>"Kabid Komiinfo" and $row[jabatan]<>"Kasubag Umum" and $row[jabatan]<>"Kasubag Renpeg" and $row[jabatan]<>"Kasubag Keuangan" and
				$row[jabatan]<>"Kasi Reklin" and $row[jabatan]<>"Kasi Sarpras" and $row[jabatan]<>"Kasi Wasdal" and $row[jabatan]<>"Kasi Angbar" and
				$row[jabatan]<>"Kasi Angkor" and $row[jabatan]<>"Kasi Postel" and $row[jabatan]<>"Kasi Frekosarkom" and 
				$row[jabatan]<>"KA. UPTD Terminal Penumpang" and $row[jabatan]<>"KA. UPTD Terminal Barang" and $row[jabatan]<>"KA. UPTD Balai PKB" and
				$row[jabatan]<>"Penguji Pemula" and $row[jabatan]<>"Penguji Pelaksana" and $row[jabatan]<>"Penguji Pelaksana Lanjutan" and $row[jabatan]<>"Penguji Penyelia" and
				$row[jabatan]<>"Staf" and $row[jabatan]<>"Fungsional")
			{
			?>
			<input type ="text" name="input_jabatan"  value="<?php echo $row[jabatan]; ?>" class="inputbox">
			<?php
			}
			?>	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Eselon</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
		<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="eselon" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Ia" <?php if ($row[eselon]=="Ia") { echo "selected"; } ?>>Ia</option>
			<option value="Ib" <?php if ($row[eselon]=="Ib") { echo "selected"; } ?>>Ib</option>
			<option value="IIa" <?php if ($row[eselon]=="IIa") { echo "selected"; } ?>>IIa</option>
			<option value="IIb" <?php if ($row[eselon]=="IIb") { echo "selected"; } ?>>IIb</option>
			<option value="IIIa" <?php if ($row[eselon]=="IIIa") { echo "selected"; } ?>>IIIa</option>
			<option value="IIIb" <?php if ($row[eselon]=="IIIb") { echo "selected"; } ?>>IIIb</option>
			<option value="IVa" <?php if ($row[eselon]=="IVa") { echo "selected"; } ?>>IVa</option>
			<option value="IVb" <?php if ($row[eselon]=="IVb") { echo "selected"; } ?>>IVb</option>
			<option value="V" <?php if ($row[eselon]=="V") { echo "selected"; } ?>>V</option>
			<option value="Lainnya" <?php 
			if(	$row[eselon]<>"Ia" and $row[eselon]<>"Ib" and $row[eselon]<>"IIa" and $row[eselon]<>"IIb" and $row[eselon]<>"IIIa" and 
				$row[eselon]<>"IIIb" and $row[eselon]<>"IVa" and $row[eselon]<>"IVb" and $row[eselon]<>"V") 
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php
			if(	$row[eselon]<>"Ia" and $row[eselon]<>"Ib" and $row[eselon]<>"IIa" and $row[eselon]<>"IIb" and $row[eselon]<>"IIIa" and 
				$row[eselon]<>"IIIb" and $row[eselon]<>"IVa" and $row[eselon]<>"IVb" and $row[eselon]<>"V")
			{
			?>
			<input type ="text" name="input_eselon"  value="<?php echo $row[eselon]; ?>" class="inputbox">
			<?php
			}
			?>	  </td>
	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Jabatan/Eselon</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tmt_jabatan" id="tmt_jabatan" size="20" value="<?php if ($row[tmt_jabatan]=="0000-00-00") {	echo ""; }else{ echo $row[tmt_jabatan];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tmt_jabatan'),'yyyy-mm-dd',this)" style="cursor:pointer" />	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. SK Jabatan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_sk_jabatan" size="20" value="<?php echo $row[no_sk_jabatan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. SK Jabatan</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_sk_jabatan" id="tgl_sk_jabatan" size="20" value="<?php if ($row[tgl_sk_jabatan]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_sk_jabatan];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_sk_jabatan'),'yyyy-mm-dd',this)" style="cursor:pointer" />	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; SK Jabatan Pejabat</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="sk_jabatan_pejabat" size="20" value="<?php echo $row[sk_jabatan_pejabat]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bidang)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="uk_bidang" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Sekretariat" <?php if ($row[uk_bidang]=="Sekretariat") { echo "selected"; } ?>>Sekretariat</option>
			<option value="Lalin Darat" <?php if ($row[uk_bidang]=="Lalin Darat") { echo "selected"; } ?>>Lalin Darat</option>
			<option value="Angdar" <?php if ($row[uk_bidang]=="Angdar") { echo "selected"; } ?>>Angdar</option>
			<option value="Kominfo" <?php if ($row[uk_bidang]=="Kominfo") { echo "selected"; } ?>>Kominfo</option>
			<option value="Lainnya" <?php 
			if(	$row[uk_bidang]<>"Sekretariat" and $row[uk_bidang]<>"Lalin Darat" and $row[uk_bidang]<>"Angdar" and $row[uk_bidang]<>"Kominfo")
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php
			if(	$row[uk_bidang]<>"Sekretariat" and $row[uk_bidang]<>"Lalin Darat" and $row[uk_bidang]<>"Angdar" and $row[uk_bidang]<>"Kominfo")
			{
			?>
			<input type ="text" name="input_uk_bidang"  value="<?php echo $row[uk_bidang]; ?>" class="inputbox">
			<?php
			}
			?>	  </td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bagian/Seksi/UPTD)</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="uk_bagian" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Umum" <?php if ($row[uk_bagian]=="Umum") { echo "selected"; } ?>>Umum</option>
			<option value="Renpeg" <?php if ($row[uk_bagian]=="Renpeg") { echo "selected"; } ?>>Renpeg</option>
			<option value="Keuangan" <?php if ($row[uk_bagian]=="Keuangan") { echo "selected"; } ?>>Keuangan</option>
			<option value="Reklin" <?php if ($row[uk_bagian]=="Reklin") { echo "selected"; } ?>>Reklin</option>
			<option value="Sarpras" <?php if ($row[uk_bagian]=="Sarpras") { echo "selected"; } ?>>Sarpras</option>
			<option value="Wasdal" <?php if ($row[uk_bagian]=="Wasdal") { echo "selected"; } ?>>Sarpras</option>
			<option value="Angbar" <?php if ($row[uk_bagian]=="Angbar") { echo "selected"; } ?>>Angbar</option>
			<option value="Angkor" <?php if ($row[uk_bagian]=="Angkor") { echo "selected"; } ?>>Angkor</option>
			<option value="Postel" <?php if ($row[uk_bagian]=="Postel") { echo "selected"; } ?>>Postel</option>
			<option value="Frekorsakom" <?php if ($row[uk_bagian]=="Frekorsakom") { echo "selected"; } ?>>Frekorsakom</option>
			<option value="Terminal Penumpang" <?php if ($row[uk_bagian]=="Terminal Penumpang") { echo "selected"; } ?>>Terminal Penumpang</option>
			<option value="Terminal Barang" <?php if ($row[uk_bagian]=="Terminal Barang") { echo "selected"; } ?>>Terminal Barang</option>
			<option value="Lainnya" <?php 
			if(	$row[uk_bagian]<>"Umum" and $row[uk_bagian]<>"Renpeg" and $row[uk_bagian]<>"Keuangan" and $row[uk_bagian]<>"Reklin" and
				$row[uk_bagian]<>"Sarpras" and $row[uk_bagian]<>"Wasdal" and $row[uk_bagian]<>"Angbar" and $row[uk_bagian]<>"Angkor" and
				$row[uk_bagian]<>"Postel" and $row[uk_bagian]<>"Frekorsakom" and $row[uk_bagian]<>"Terminal Penumpang" and $row[uk_bagian]<>"Terminal Barang")
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php
			if(	$row[uk_bagian]<>"Umum" and $row[uk_bagian]<>"Renpeg" and $row[uk_bagian]<>"Keuangan" and $row[uk_bagian]<>"Reklin" and
				$row[uk_bagian]<>"Sarpras" and $row[uk_bagian]<>"Wasdal" and $row[uk_bagian]<>"Angbar" and $row[uk_bagian]<>"Angkor" and
				$row[uk_bagian]<>"Postel" and $row[uk_bagian]<>"Frekorsakom" and $row[uk_bagian]<>"Terminal Penumpang" and $row[uk_bagian]<>"Terminal Barang")
			{
			?>
			<input type ="text" name="input_uk_bagian"  value="<?php echo $row[uk_bagian]; ?>" class="inputbox">
			<?php
			}
			?>	  </td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">KARIS/KARSU/KARPEG</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARIS</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karis" size="20" value="<?php echo $row[no_karis]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARSU</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karsu" size="20" value="<?php echo $row[no_karsu]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Karpeg</td>
   	  <td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
   	  <td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_karpeg" size="20" value="<?php echo $row[no_karpeg]; ?>" class="inputbox"   /></td>
</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pendidikan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pendidikan</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<select name="pendidikan" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="SD" <?php if ($row[pendidikan]=="SD") { echo "selected"; } ?>>SD</option>
			<option value="MI" <?php if ($row[pendidikan]=="MI") { echo "selected"; } ?>>MI</option>
			<option value="SMP" <?php if ($row[pendidikan]=="MTs") { echo "selected"; } ?>>MTs</option>
			<option value="KPAA" <?php if ($row[pendidikan]=="KPAA") { echo "selected"; } ?>>KPAA</option>
			<option value="KPA" <?php if ($row[pendidikan]=="KPA") { echo "selected"; } ?>>KPA</option>
			<option value="Paket A" <?php if ($row[pendidikan]=="Paket A") { echo "selected"; } ?>>Paket A</option>
			<option value="Paket B" <?php if ($row[pendidikan]=="Paket B") { echo "selected"; } ?>>Paket B</option>
			<option value="Paket C" <?php if ($row[pendidikan]=="Paket C") { echo "selected"; } ?>>Paket C</option>
			<option value="SMA" <?php if ($row[pendidikan]=="SMA") { echo "selected"; } ?>>SMA</option>
			<option value="STM" <?php if ($row[pendidikan]=="STM") { echo "selected"; } ?>>STM</option>
			<option value="SMK" <?php if ($row[pendidikan]=="SMK") { echo "selected"; } ?>>SMK</option>
			<option value="SMEA" <?php if ($row[pendidikan]=="SMEA") { echo "selected"; } ?>>SMEA</option>
			<option value="MAN" <?php if ($row[pendidikan]=="MAN") { echo "selected"; } ?>>MAN</option>
			<option value="DI" <?php if ($row[pendidikan]=="DI") { echo "selected"; } ?>>DI</option>
			<option value="DII" <?php if ($row[pendidikan]=="DII") { echo "selected"; } ?>>DII</option>
			<option value="DIII" <?php if ($row[pendidikan]=="DIII") { echo "selected"; } ?>>DIII</option>
			<option value="DIV" <?php if ($row[pendidikan]=="DIV") { echo "selected"; } ?>>DIV</option>
			<option value="SI" <?php if ($row[pendidikan]=="SI") { echo "selected"; } ?>>SI</option>
			<option value="SII" <?php if ($row[pendidikan]=="SII") { echo "selected"; } ?>>SII</option>
			<option value="SIII" <?php if ($row[pendidikan]=="SIII") { echo "selected"; } ?>>SIII</option>
			<option value="Lainnya" <?php 
			if(	$row[pendidikan]<>"SD" and $row[pendidikan]<>"MI" and $row[pendidikan]<>"SMP" and $row[pendidikan]<>"KPAA" and
				$row[pendidikan]<>"KPA" and $row[pendidikan]<>"Paket A" and $row[pendidikan]<>"Paket B" and $row[pendidikan]<>"Paket C" and
				$row[pendidikan]<>"SMA" and $row[pendidikan]<>"STM" and $row[pendidikan]<>"SMK" and $row[pendidikan]<>"SMEA" and $row[pendidikan]<>"MAN" and
				$row[pendidikan]<>"DI" and $row[pendidikan]<>"DII" and $row[pendidikan]<>"DII" and $row[pendidikan]<>"DIV" and $row[pendidikan]<>"SI" and
				$row[pendidikan]<>"SII" and $row[pendidikan]<>"SIII" )
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php
			if(	$row[pendidikan]<>"SD" and $row[pendidikan]<>"MI" and $row[pendidikan]<>"SMP" and $row[pendidikan]<>"KPAA" and
				$row[pendidikan]<>"KPA" and $row[pendidikan]<>"Paket A" and $row[pendidikan]<>"Paket B" and $row[pendidikan]<>"Paket C" and
				$row[pendidikan]<>"SMA" and $row[pendidikan]<>"STM" and $row[pendidikan]<>"SMK" and $row[pendidikan]<>"SMEA" and $row[pendidikan]<>"MAN" and
				$row[pendidikan]<>"DI" and $row[pendidikan]<>"DII" and $row[pendidikan]<>"DII" and $row[pendidikan]<>"DIV" and $row[pendidikan]<>"SI" and
				$row[pendidikan]<>"SII" and $row[pendidikan]<>"SIII" )
			{
			?>
			<input type ="text" name="input_pendidikan"  value="<?php echo $row[pendidikan]; ?>" class="inputbox">
			<?php
			}
			?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jurusan</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="jurusan" size="20" value="<?php echo $row[jurusan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="no_ijazah" size="20" value="<?php echo $row[no_ijazah]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="tgl_ijazah" id="tgl_ijazah" size="20" value="<?php if ($row[tgl_ijazah]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_ijazah];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="th_lulus" size="20" value="<?php echo $row[th_lulus]; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Diklat Kepemimpinan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
	   	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Diklat Kepemimpinan</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
    	<select name="diklat_pimpin" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="DIKLATPIM TK.I" <?php if ($row[diklat_pimpin]=="DIKLATPIM TK.I") { echo "selected"; } ?>>DIKLATPIM TK.I</option>
			<option value="DIKLATPIM TK.II" <?php if ($row[diklat_pimpin]=="DIKLATPIM TK.II") { echo "selected"; } ?>>DIKLATPIM TK.II</option>
			<option value="DIKLATPIM TK.III" <?php if ($row[diklat_pimpin]=="DIKLATPIM TK.III") { echo "selected"; } ?>>DIKLATPIM TK.III</option>
			<option value="DIKLATPIM TK.IV" <?php if ($row[diklat_pimpin]=="DIKLATPIM TK.IV") { echo "selected"; } ?>>DIKLATPIM TK.IV</option>
			<option value="ADUM" <?php if ($row[diklat_pimpin]=="ADUM") { echo "selected"; } ?>>ADUM</option>
			<option value="ADUMLA" <?php if ($row[diklat_pimpin]=="ADUMLA") { echo "selected"; } ?>>ADUMLA</option>
			<option value="SEPAMEN" <?php if ($row[diklat_pimpin]=="SEPAMEN") { echo "selected"; } ?>>SEPAMEN</option>
			<option value="Lainnya" <?php 
			if(	$row[diklat_pimpin]<>"DIKLATPIM TK.I" and $row[diklat_pimpin]<>"DIKLATPIM TK.II" and $row[diklat_pimpin]<>"DIKLATPIM TK.III" and 
			$row[diklat_pimpin]<>"DIKLATPIM TK.IV" and $row[diklat_pimpin]<>"ADUM" and $row[diklat_pimpin]<>"ADUMLA" and $row[diklat_pimpin]<>"SEPAMEN" )
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php
			if(	$row[diklat_pimpin]<>"DIKLATPIM TK.I" and $row[diklat_pimpin]<>"DIKLATPIM TK.II" and $row[diklat_pimpin]<>"DIKLATPIM TK.III" and 
			$row[diklat_pimpin]<>"DIKLATPIM TK.IV" and $row[diklat_pimpin]<>"ADUM" and $row[diklat_pimpin]<>"ADUMLA" and $row[diklat_pimpin]<>"SEPAMEN" )
			{
			?>
			<input type ="text" name="input_diklat_pimpin"  value="" class="inputbox">
			<?php
			}elseif($row[diklat_pimpin]<>"Lainnya")
			{
			?>
			<input type ="text" name="input_diklat_pimpin" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}else{
			?>
			<input type ="text" name="input_diklat_pimpin" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}
			?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah (diklat)</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="diklat_no_ijazah" size="20" value="<?php echo $row[diklat_no_ijazah]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah (Diklat)</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="diklat_tgl_ijazah" id="diklat_tgl_ijazah" size="20" value="<?php echo $row[diklat_tgl_ijazah]; ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('diklat_tgl_ijazah'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus (Diklat)</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="diklat_th_lulus" size="20" value="<?php echo $row[diklat_th_lulus]; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Identitas Istri / Suami </div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Keluarga</td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="keluarga" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Suami" <?php if ($row[keluarga]=="Suami") { echo "selected"; } ?>>Suami</option>
				<option value="Istri" <?php if ($row[keluarga]=="Istri") { echo "selected"; } ?>>Istri</option>
  			</select>&nbsp;		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Istri / Suami </td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <input type="text" name="nama_kel" size="30" value="<?php echo $row[nama_kel]; ?>" class="inputbox"/>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Lahir </td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="lahir_kel" id="lahir_kel" size="20" value="<?php if ($row[lahir_kel]=="0000-00-00") {	echo ""; }else{ echo $row[lahir_kel];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('lahir_kel'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Nikah </td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<input type="text" name="nikah_kel" id="nikah_kel" size="20" value="<?php if ($row[nikah_kel]=="0000-00-00") {	echo ""; }else{ echo $row[nikah_kel];} ?>" class="inputbox" readonly  />
			<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('nikah_kel'),'yyyy-mm-dd',this)" style="cursor:pointer" />		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="203" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pekerjaan </td>
    	<td width="13" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<select name="kerja_kel" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ibu Rumah Tangga" <?php if ($kerja_kel=="Ibu Rumah Tangga") { echo "selected"; } ?>>Ibu Rumah Tangga</option>
				<option value="Wiraswasta" <?php if ($kerja_kel=="Wiraswasta") { echo "selected"; } ?>>Wiraswasta</option>
				<option value="PNS" <?php if ($kerja_kel=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="TNI" <?php if ($kerja_kel=="TNI") { echo "selected"; } ?>>TNI</option>
				<option value="POLRI" <?php if ($kerja_kel=="POLRI") { echo "selected"; } ?>>POLRI</option>
				<option value="Lainnya" <?php if($row[kerja_kel]<>"Ibu Rumah Tangga" and $row[kerja_kel]<>"Wiraswasta" and $row[kerja_kel]<>"PNS" and $row[kerja_kel]<>"TNI" and $row[kerja_kel]<>"POLRI") { echo "selected"; } ?>>Lainnya</option>
  			</select>&nbsp;
			<?php
			if(	$row[kerja_kel]<>"Ibu Rumah Tangga" and $row[kerja_kel]<>"Wiraswasta" and $row[kerja_kel]<>"PNS" and 
			 	$row[kerja_kel]<>"TNI" and $row[kerja_kel]<>"POLRI"					
			)
			{
			?>
			<input type ="text" name="input_kerja_kel"  value="<?php echo $row[kerja_kel]; ?>" class="inputbox">
			<?php
			}
			?>		</td>
  	</tr>
</table>
</td>
</tr>
</form>
  </table> 
  <?php
  }
  elseif ($act=="detail")
  {
   $strsql="select * from peg_pegawai where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table border="0" cellpadding="0" cellspacing="0">
  <tr class="tdtitle_white">
   <td height="25" colspan="2" align="center" background="images/bgcell.gif">Detil Data Pegawai</td>
  </tr>
  <tr>
  <td width="500" valign="top">
  <table width="500" border="1" cellpadding="0" cellspacing="0">
<!--DWLayoutTable-->
  	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Lengkap </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;<?php echo $row[nama]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Lama)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[nip_lama]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; NIP (Baru)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;<?php echo $row[nip_baru]; ?></td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Biodata Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tempat Lahir</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[tempat_lahir]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tanggal Lahir</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[tgl_lahir]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Usia</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
		<?php 
			if ($row[tgl_lahir]<>"0000-00-00")
			{
			$temp=explode("-",$row[tgl_lahir]); 
			$tahun=$temp[0];
			$umur_skr=date("Y")-$tahun;
			
			echo $umur_skr;
			}
		?>&nbsp;th		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Alamat</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[alamat]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Telp (Rumah)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[telp_rumah]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. HP</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[telp_hp]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Kelamin </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[jenkel];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Perkawinan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[sts_perkawinan]; ?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Agama</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[agama];?>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Status Kepegawaian</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Kepegawaian</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[jns_kepegawaian];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Pegawai</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[sts_pegawai];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat CPNS</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[tmt_cpns]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat PNS</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[tmt_pns]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat HONDA</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[tmt_honda]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tamat Kontrak </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[tmt_kontrak]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pangkat/Golongan/Masa Kerja Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pangkat</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[pangkat];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Golongan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[golongan];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Pangkat/Golongan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[tmt_pangkat]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Golongan)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[masa_golongan]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
		echo " Bulan : &nbsp;";
	  	bulan($bulan);
	  	echo ".&nbsp; Tahun : &nbsp;";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Tambahan)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[masa_tambahan]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
		echo " Bulan : &nbsp;";
	  	bulan($bulan);
	  	echo ".&nbsp; Tahun : &nbsp;";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Seluruhnya)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[masa_seluruhnya]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
		echo " Bulan : &nbsp;";
	  	bulan($bulan);
	  	echo ".&nbsp; Tahun : &nbsp;";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Di Dishub)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[masa_dishub]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
		echo " Bulan : &nbsp;";
	  	bulan($bulan);
	  	echo ".&nbsp; Tahun : &nbsp;";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Masa Kerja (Kontrak)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[masa_kontrak_awal]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>&nbsp; s/d &nbsp;
			<?php
	  	$temp=explode("-",$row[masa_kontrak_akhir]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr>
	<td colspan="3" height="40" valign="middle">&nbsp;&nbsp;
	<a href="index.php?do=data.pegawai"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
	</td>
	</tr>
</table>
  </td>
  <td width="500" valign="top">
<table width="501" border="1" cellpadding="0" cellspacing="0">
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jabatan/Eselon/Unit Kerja Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jabatan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[jabatan];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Eselon</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
		<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[eselon];?>		</td>
	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; TMT Jabatan/Eselon</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp;
			<?php
	  	$temp=explode("-",$row[tmt_jabatan]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. SK Jabatan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[no_sk_jabatan]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. SK Jabatan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[tgl_sk_jabatan]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; SK Jabatan Pejabat</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[sk_jabatan_pejabat]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bidang)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[uk_bidang];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Unit Kerja (Bagian/Seksi/UPTD)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[uk_bagian];?>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">KARIS/KARSU/KARPEG</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARIS</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[no_karis]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. KARSU</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[no_karsu]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="187" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Karpeg</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="293" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[no_karpeg]; ?></td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Pendidikan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pendidikan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[pendidikan];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jurusan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[jurusan]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[no_ijazah]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[tgl_ijazah]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[th_lulus]; ?>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Diklat Kepemimpinan Terakhir Pegawai</div></td>
  	</tr>
	<tr class="tdtitle_black">
	   	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Jenis Diklat Kepemimpinan</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[diklat_pimpin];?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; No. Ijazah (diklat)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[diklat_no_ijazah]; ?></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Ijazah (Diklat)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[diklat_tgl_ijazah]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tahun Lulus (Diklat)</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[diklat_th_lulus]; ?>		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Identitas Istri / Suami </div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Status Keluarga</td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[keluarga]; ?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Nama Istri / Suami </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[nama_kel]; ?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Lahir </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[lahir_kel]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Tgl. Nikah </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; 
			<?php
	  	$temp=explode("-",$row[nikah_kel]); 
	  	$tahun=$temp[0];
	  	$bulan=$temp[1];
	  	$tgl=$temp[2];
	  	echo $tgl;
	  	echo " ";
	  	bulan($bulan);
	  	echo " ";
	  	echo $tahun;
	  	?>		</td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="192" height="30" valign="middle" bgcolor="#dddddd">&nbsp; Pekerjaan </td>
    	<td width="12" valign="middle" bgcolor="efefef"><div align="center">:</div></td>
    	<td width="289" valign="middle" bgcolor="efefef">&nbsp; <?php echo $row[kerja_kel]; ?>		</td>
  	</tr>
</table>  
  </td>
  </tr>
  </table>
<!--end detail-->

  <?php
  }else{
  ?>
  <table width="1290" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="150"><a href="?act=add&do=data.pegawai"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.pegawai">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama</option>
	<option value="nip_lama" <?php if ($kategori=="nip_lama") echo "selected"; ?>>NIP Lama</option>
	<option value="nip_baru" <?php if ($kategori=="nip_baru") echo "selected"; ?>>NIP Baru</option>
	</select>&nbsp;&nbsp;
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</form>
	</td>
	<td width="287"><div align="right"><a href="excel_pegawai.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.pegawai&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1290">
  <tr class="tdtitle_white">
	<td colspan="6" rowspan="2" background="images/bgcell.gif" width="200">&nbsp;</td>
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">NIP</td>    
    <td width="170" rowspan="2" background="images/bgcell.gif" height="25" align="center">Nama Lengkap</td> 
	<td width="200" rowspan="2" background="images/bgcell.gif" height="25" align="center">Tempat, Tgl. Lahir</td>   
	<td width="50" rowspan="2" background="images/bgcell.gif" height="25" align="center">Usia</td>    
	<td width="210" rowspan="2" background="images/bgcell.gif" height="25" align="center">Alamat</td>    
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">No. Telp</td>    
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Jenis Kelamin</td>    
  </tr>
   <tr class="tdtitle_white">
    <td width="80" background="images/bgcell.gif" height="25" align="center">Lama</td> 
	<td width="80" background="images/bgcell.gif" height="25" align="center">Baru</td>  
	<td width="100" background="images/bgcell.gif" height="25" align="center">Rumah</td> 
	<td width="100" background="images/bgcell.gif" height="25" align="center">HP</td>  		                             
  </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from peg_pegawai where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="nip_lama")
  {  $strsql="select * from peg_pegawai where nip_lama like '%$key%' order by id desc"; }
  elseif ($kategori=="nip_baru")
  {  $strsql="select * from peg_pegawai where nip_baru like '%$key%' order by id desc"; }
   else
  {  $strsql="select * from peg_pegawai order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil) or die(mysql_error()))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center"><a href="?do=data.pegawai&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center"><a href="?do=data.pegawai&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td width="40" align="center"><a href="?do=data.pegawai&act=detail&id=<?php echo $row[id]; ?>">Detil</a></td>
	<td width="60" align="center"><a href="?do=data.anak&act=anak&id=<?php echo $row[id]; ?>">Data Anak</a></td>
	<td width="60" align="center"><a href="?do=data.pendidikan&act=pendidikan&id=<?php echo $row[id]; ?>">Riwayat Pendidikan</a></td>
	<td width="60" align="center"><a href="?do=data.pekerjaan&act=pekerjaan&id=<?php echo $row[id]; ?>">Riwayat Pekerjaan</a></td>
	<td height="25" align="center"><?php echo $row[nip_lama]; ?></td>
	<td height="25" align="center"><?php echo $row[nip_baru]; ?></td>
	<td height="25" align="left"><?php echo $row[nama]; ?></td>
	<td height="25" align="left">
		<?php echo $row[tempat_lahir]; ?>, 
		<?php
	  	$temp=explode("-",$row[tgl_lahir]); 
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
	<td height="25" align="center">
		<?php 
			if ($row[tgl_lahir]<>"0000-00-00")
			{
			$temp=explode("-",$row[tgl_lahir]); 
			$tahun=$temp[0];
			$umur_skr=date("Y")-$tahun;
			
			echo $umur_skr;
			}
		?>&nbsp;th
	</td>
	<td height="25" align="left"><?php echo $row[alamat]; ?></td>
	<td height="25" align="center"><?php echo $row[telp_rumah]; ?></td>
	<td height="25" align="center"><?php echo $row[telp_hp]; ?></td>
	<td height="25" align="center"><?php echo $row[jenkel]; ?></td>
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