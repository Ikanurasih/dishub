<?php
$tanggal						=$_REQUEST['tanggal'];
$jenis_kend_pickup						=$_REQUEST['jenis_kend_pickup'];
$jenis_kend_truk					=$_REQUEST['jenis_kend_truk'];
$jenis_kend_tgt						=$_REQUEST['jenis_kend_tgt'];
$jml_kend_1						=$_REQUEST['jml_kend_1'];
$pend_pickup					=$_REQUEST['pend_pickup'];
$pend_truk					=$_REQUEST['pend_truk'];
$pend_tgt						=$_REQUEST['pend_tgt'];
$tonase_pickup							=$_REQUEST['tonase_pickup'];
$tonase_truk				=$_REQUEST['tonase_truk'];
$tonase_tgt						=$_REQUEST['tonase_tgt'];
$jml_kend_2					=$_REQUEST['jml_kend_2'];
$jb_bbm					=$_REQUEST['jb_bbm'];
$jb_sembako					=$_REQUEST['jb_sembako'];
$jb_kelontong				=$_REQUEST['jb_kelontong'];
$jb_bangunan						=$_REQUEST['jb_bangunan'];
$jb_hewan						=$_REQUEST['jb_hewan'];
$jb_paket						=$_REQUEST['jb_paket'];
$jb_lain				=$_REQUEST['jb_lain'];
$jml_barang				=$_REQUEST['jml_barang'];
$ket				=$_REQUEST['ket'];
$id					=$_REQUEST['id'];
$tahun=$_REQUEST['tahun'];
$bulan=$_REQUEST['bulan'];
if ($act=="del")
{
mysql_query("delete from bar_izin_bongkar_muat where id='$id'");
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
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Pengajuan Izin Bongkar / Muat Barang</font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Pengajuan Izin Bongkar / Muat Barang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_izin_bongkar.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
<input type="hidden" name="bulan" value="<?php echo $bulan; ?>">
<input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
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
  <td colspan="3"><a href="index.php?do=data.izin_bongkar"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form method="post" action="insert_izin_bongkar.php" >
  <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tambah 
        Data Izin Bongkar Muat Barang </td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="250">&nbsp;Tanggal</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
     <td valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tanggal" id="tanggal" size="15" value="<?php if ($row[tanggal]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jenis Kendaraan </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_pickup" size="10" value="<?php echo $jenis_kend_pickup; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_truk" size="10" value="<?php echo $jenis_kend_truk; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;T.Tronton / T.Gandengan / T. Tempelan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_tgt" size="10" value="<?php echo $jenis_kend_tgt; ?>" class="inputbox"  /></td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jumlah Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp; Otomatis</td>
  </tr> 
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Pendapatan </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<!--<input type="text" name="pend_pickup" size="40" value="<?php echo $pend_pickup; ?>" class="inputbox"  />--> Otomatis</td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<!--<input type="text" name="pend_truk" size="40" value="<?php echo $pend_truk; ?>" class="inputbox"  />--> Otomatis      </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;T.Tronton / T.Gandengan / T. Tempelan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<!--<input type="text" name="pend_tgt" size="40" value="<?php echo $pend_tgt; ?>" class="inputbox"  />--> Otomatis</td>
  </tr>
    <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tonase </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_pickup" size="10" value="<?php echo $tonase_pickup; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_truk" size="10" value="<?php echo $tonase_truk; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;T.Tronton / T.Gandengan / T. Tempelan</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_tgt" size="10" value="<?php echo $tonase_tgt; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jumlah Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;Otomatis</td>
  </tr> 
  
   <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jenis Barang </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;BBM/BBG </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_bbm" size="10" value="<?php echo $jb_bbm; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Sembako </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_sembako" size="10" value="<?php echo $jb_sembako; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Kelontong </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_kelontong" size="10" value="<?php echo $jb_kelontong; ?>" class="inputbox"  /></td>
  </tr>
        <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Bahan Bangunan</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_bangunan" size="10" value="<?php echo $jb_bangunan; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Hewan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_hewan" size="10" value="<?php echo $jb_hewan; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Paket </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_paket" size="10" value="<?php echo $jb_paket; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Lain </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_lain" size="10" value="<?php echo $jb_lain; ?>" class="inputbox"  /></td>
  </tr>
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Jumlah Barang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;Otomatis</td>
  </tr>
   <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp;</td>
  </tr>
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="120">&nbsp;Keterangan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="ket" size="50" value="<?php echo $ket; ?>" class="inputbox"  /></td>
  </tr>
   <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.izin_bongkar"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
	</form>
</table>

   <?php
  }
   elseif($act=="edit")
  {
  $strsql="select * from bar_izin_bongkar_muat where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_izin_bongkar.php">
    
	 <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table width="599" border="1" cellpadding="1" cellspacing="0">
 <!--DWLayoutTable-->
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Edit 
      Data Izin Bongkar Muat Barang </td>
  </tr>
         <!--DWLayoutTable-->
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Tanggal</td>
      <td width="3" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
     <td width="329" valign="middle" bgcolor="efefef">&nbsp;<input type="text" name="tanggal" id="tanggal" size="15" value="<?php if ($row[tanggal]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal];} ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jenis Kendaraan </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_pickup" size="10" value="<?php echo $row[jenis_kend_pickup]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_truk" size="10" value="<?php echo $row[jenis_kend_truk]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;T.Tronton / T.Gandengan / T. Tempelan</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jenis_kend_tgt" size="10" value="<?php echo $row[jenis_kend_tgt]; ?>" class="inputbox"  /></td>
  </tr>
    <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Jumlah Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;Otomatis</td>
  </tr> 
  <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Pendapatan </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<?php echo $row[pend_pickup]; ?></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<?php echo $row[pend_truk]; ?>      </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;T.Tronton / T.Gandengan / T. Tempelan</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp<?php echo $row[pend_tgt]; ?></td>
  </tr>
    <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Tonase </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Pick Up </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_pickup" size="10" value="<?php echo $row[tonase_pickup]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Truk </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_truk" size="10" value="<?php echo $row[tonase_truk]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;T.Tronton / T.Gandengan / T. Tempelan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="tonase_tgt" size="10" value="<?php echo $row[tonase_tgt]; ?>" class="inputbox"  /></td>
  </tr>
  <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Jumlah Kendaraan </td>
      <td valign="middle" bgcolor="efefef"><div align="center">:</div></td>
      <td valign="middle" bgcolor="efefef"> &nbsp;Otomatis</td>
  </tr> 
  
   <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">Jenis Barang </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;BBM/BBG </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_bbm" size="10" value="<?php echo $row[jb_bbm]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Sembako </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_sembako" size="10" value="<?php echo $row[jb_sembako]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Kelontong </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_kelontong" size="10" value="<?php echo $row[jb_kelontong]; ?>" class="inputbox"  /></td>
  </tr>
        <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Bahan Bangunan</td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_bangunan" size="10" value="<?php echo $row[jb_bangunan]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Hewan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_hewan" size="10" value="<?php echo $row[jb_hewan]; ?>" class="inputbox"  />       </td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Paket </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_paket" size="10" value="<?php echo $row[jb_paket]; ?>" class="inputbox"  /></td>
  </tr>
      <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Lain </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="jb_lain" size="10" value="<?php echo $row[jb_lain]; ?>" class="inputbox"  /></td>
  </tr>
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Jumlah Barang </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;Otomatis</td>
  </tr>
   <tr class="tdtitle_white"> 
      <td height="25" colspan="3" align="center"  background="images/bgcell.gif">&nbsp;</td>
  </tr>
   <tr class="tdtitle_black"> 
      <td height="30" valign="middle" bgcolor="#dddddd" width="253">&nbsp;Keterangan </td>
      <td valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
      <td colspan='6' valign="middle" bgcolor="efefef"> &nbsp;<input type="text" name="ket" size="50" value="<?php echo $row[ket]; ?>" class="inputbox"  /></td>
  </tr>
   <tr valign="middle" bgcolor="efefef" class="tdtitle_black2"> 
      <td height="40" colspan="6">&nbsp; <a href="index.php?do=data.izin_bongkar"><img src="images/batal.gif" border="0" alt="klik disini untuk Kembali ke Halaman Sebelumnya"></a> 
        &nbsp;&nbsp; <input name="image" type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan"></td>
  </tr>
  </table>
</form>
	<?php
	}
else
{
?>
<table width="1300" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="195"><a href="?act=add&do=data.izin_bongkar"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Barang"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
    <td><form method="post" action="index.php?do=data.izin_bongkar">
      Pencarian &amp; Cetak: &nbsp;
      <select name="kategori" class="inputbox" onChange="submit();">
	<option value="harian" <?php if ($kategori=="harian") echo "selected"; ?>>Harian</option>
	<option value="bulanan" <?php if ($kategori=="bulanan") echo "selected"; ?>>Bulanan</option>
	</select>
	<!--<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>-->
	&nbsp;&nbsp;</form></td>
	<td width="708">
	<form method="post" action="index.php?do=data.izin_bongkar">
	<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
	<?php
	if ($kategori=="bulanan")
	{
	?>
	<select name="bulan" class="inputbox">
	<option value="01" <?php if ($bulan=="01") echo "selected"; ?>>Januari</option>
	<option value="02" <?php if ($bulan=="02") echo "selected"; ?>>Februari</option>
	<option value="03" <?php if ($bulan=="03") echo "selected"; ?>>Maret</option>
	<option value="04" <?php if ($bulan=="04") echo "selected"; ?>>April</option>
	<option value="05" <?php if ($bulan=="05") echo "selected"; ?>>Mei</option>
	<option value="06" <?php if ($bulan=="06") echo "selected"; ?>>Juni</option>
	<option value="07" <?php if ($bulan=="07") echo "selected"; ?>>Juli</option>
	<option value="08" <?php if ($bulan=="08") echo "selected"; ?>>Agustus</option>
	<option value="09" <?php if ($bulan=="09") echo "selected"; ?>>September</option>
	<option value="10" <?php if ($bulan=="10") echo "selected"; ?>>Oktober</option>
	<option value="11" <?php if ($bulan=="11") echo "selected"; ?>>November</option>
	<option value="12" <?php if ($bulan=="12") echo "selected"; ?>>Desember</option>
	</select>
	&nbsp;Tahun: <input type="text" name="tahun" id="tanggal" size="5" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox">  &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;
	<?php
	}
	else
	{
	?>
	<input type="text" name="tanggal" id="tanggal" size="15" value="<?php echo $tanggal; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	&nbsp;<input type="submit" value=" Cari " class="inputbox">
	<?php
	}
	?>
	</form>
	</td>
	<td width="377"><div align="right"><a href="excel_izin_bongkar_muat.php?do=data.barang&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&bulan=<?php echo $bulan; ?>&tahun=<?php echo $tahun; ?>&tanggal=<?php echo $tanggal; ?>"><img src="images/excel.jpg" title="Klik disini untuk Cetak Laporan dalam Bentuk Excel" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="index.php?do=data.izin_bongkar&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&bulan=<?php echo $bulan; ?>&tahun=<?php echo $tahun; ?>&tanggal=<?php echo $tanggal; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1390">
  <tr class="tdtitle_white">
  <td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
	    <td rowspan="2" width="130" background="images/bgcell.gif" height="25" align="center">Tanggal</td> 
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>                    
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Jumlah Kendaraan</td>              
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Pendapatan (Rp)</td>              
    <td colspan="3" background="images/bgcell.gif" height="25" align="center">Tonase</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Jumlah<br>Kendaraan</td>              
    <td colspan="7" background="images/bgcell.gif" height="25" align="center">Jenis Barang</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Jumlah Barang</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Keterangan</td>              
  </tr>
   <tr class="tdtitle_white">
	<td width="50" background="images/bgcell.gif" height="25" align="center">Pick Up</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Truk</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Tronton<br>Gandengan<br>Tempelan</td>
	<td width="80" background="images/bgcell.gif" height="25" align="center">Pick Up</td>              
    <td width="80" background="images/bgcell.gif" height="25" align="center">Truk</td>
    <td width="80" background="images/bgcell.gif" height="25" align="center">Tronton<br>Gandengan<br>Tempelan</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Pick Up</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Truk</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Tronton<br>Gandengan<br>Tempelan</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">BBM/BBG</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Sembako</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Kelontong</td>
	<td width="50" background="images/bgcell.gif" height="25" align="center">Bahan Bangunan</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Hewan</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Paket</td>
    <td width="50" background="images/bgcell.gif" height="25" align="center">Lain</td>
  </tr>
  <?php
  if (!empty($tanggal))
  {  $strsql="select * from bar_izin_bongkar_muat where tanggal like '%$tanggal%' order by tanggal asc"; }
  elseif (!empty($tahun))
  {  $strsql="select * from bar_izin_bongkar_muat where month(tanggal)='$bulan' and  year(tanggal)='$tahun' order by tanggal asc"; }  
  else
  {  $strsql="select * from bar_izin_bongkar_muat order by tanggal asc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.izin_bongkar&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.izin_bongkar&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kend_pickup]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kend_truk]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend_tgt]; ?></td>
	<td height="25" align="center"><?php echo $row[jml_kend_1]; ?></td>
	<td height="25" align="right"><?php null($row[pend_pickup]); ?></td>
	<td height="25" align="right"><?php null($row[pend_truk]); ?></td>
	<td height="25" align="right"><?php null($row[pend_tgt]); ?></td>
	<td height="25" align="center"><?php echo $row[tonase_pickup]; ?></td>
	<td height="25" align="center"><?php echo $row[tonase_truk]; ?></td>
    <td height="25" align="center"><?php echo $row[tonase_tgt]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_kend_2]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_bbm]; ?></td>
	<td height="25" align="center"><?php echo $row[jb_sembako]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_kelontong]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_bangunan]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_hewan]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_paket]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_lain]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_barang]; ?></td>
    <td height="25" align="left"><?php echo $row[ket]; ?></td>
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
