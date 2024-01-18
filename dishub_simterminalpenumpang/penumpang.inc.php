<?php
$id	=$_REQUEST['id'];
$tanggal=$_REQUEST['nama_agen'];
$no_kendaraan=$_REQUEST['no_kendaraan'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_pelayanan=$_REQUEST['jenis_pelayanan'];
$nama_po=$_REQUEST['nama_po'];
$jurusan=$_REQUEST['jurusan'];
$jumlah_penumpang=$_REQUEST['jumlah_penumpang'];
$bulan=$_REQUEST['bulan'];
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];

if ($act=="del")
{
mysql_query("delete from ter_penumpang where id='$id'");
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
    <td width="59"><div align="left"><img src="images/langmanager.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Penumpang </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Penumpang: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_penumpang.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.penumpang"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form name="frmadd" method="post" action="insert_penumpang.php">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Rekapitulasi Penumpang </div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="tanggal" id="tanggal" size="10" value="<?php echo $tanggal; ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Nganjuk </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_nganjuk" size="10" value="<?php echo $bus_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_nganjuk" size="10" value="<?php echo $rit_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_nganjuk" size="10" value="<?php echo $pnp_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_nganjuk" size="10" value="<?php echo $pnp_peron_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_nganjuk" size="10" value="<?php echo $nilai_peron_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_nganjuk" size="10" value="<?php echo $hasil_peron_nganjuk; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Ponorogo </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_ponorogo" size="10" value="<?php echo $bus_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_ponorogo" size="10" value="<?php echo $rit_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_ponorogo" size="10" value="<?php echo $pnp_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_ponorogo" size="10" value="<?php echo $pnp_peron_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_ponorogo" size="10" value="<?php echo $nilai_peron_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_ponorogo" size="10" value="<?php echo $hasil_peron_ponorogo; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Magetan </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_magetan" size="10" value="<?php echo $bus_magetan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_magetan" size="10" value="<?php echo $rit_magetan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_magetan" size="10" value="<?php echo $pnp_magetan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_magetan" size="10" value="<?php echo $pnp_peron_magetan; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_magetan" size="10" value="<?php echo $nilai_peron_magetan; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_magetan" size="10" value="<?php echo $hasil_peron_magetan; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Ngawi / Solo / Jogya / Jakarta </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_lainnya" size="10" value="<?php echo $bus_lainnya; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_lainnya" size="10" value="<?php echo $rit_lainnya; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_lainnya" size="10" value="<?php echo $pnp_lainnya; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_lainnya" size="10" value="<?php echo $pnp_peron_lainnya; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_lainnya" size="10" value="<?php echo $nilai_peron_lainnya; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_lainnya" size="10" value="<?php echo $hasil_peron_lainnya; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr valign="middle" class="tdtitle_black2"> 
      	<td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.penumpang"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a>&nbsp;&nbsp; 
        	<input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
   		</td>
	</tr>
</form>
</table>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from ter_penumpang where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frmadd" method="post" action="update_penumpang.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Rekapitulasi Penumpang </div></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="tanggal" id="tanggal" size="10" value="<?php if ($row[tanggal]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal];} ?>" class="inputbox" readonly  />
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" />
		</td>
  	</tr>
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Nganjuk </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_nganjuk" size="10" value="<?php echo $row[bus_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_nganjuk" size="10" value="<?php echo $row[rit_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_nganjuk" size="10" value="<?php echo $row[pnp_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_nganjuk" size="10" value="<?php echo $row[pnp_peron_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_nganjuk" size="10" value="<?php echo $row[nilai_peron_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_nganjuk" size="10" value="<?php echo $row[hasil_peron_nganjuk]; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Ponorogo </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_ponorogo" size="10" value="<?php echo $row[bus_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_ponorogo" size="10" value="<?php echo $row[rit_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_ponorogo" size="10" value="<?php echo $row[pnp_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_ponorogo" size="10" value="<?php echo $row[pnp_peron_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_ponorogo" size="10" value="<?php echo $row[nilai_peron_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_ponorogo" size="10" value="<?php echo $row[hasil_peron_ponorogo]; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Magetan </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_magetan" size="10" value="<?php echo $row[bus_magetan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_magetan" size="10" value="<?php echo $row[rit_magetan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_magetan" size="10" value="<?php echo $row[pnp_magetan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_magetan" size="10" value="<?php echo $row[pnp_peron_magetan]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_magetan" size="10" value="<?php echo $row[nilai_peron_magetan]; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_magetan" size="10" value="<?php echo $row[hasil_peron_magetan]; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr class="tdtitle_white"> 
		<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Jurusan Ngawi / Solo / Jogya / Jakarta </div></td>
  	</tr>
  	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Bus (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="bus_lainnya" size="10" value="<?php echo $row[bus_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;RIT (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="rit_lainnya" size="10" value="<?php echo $row[rit_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP (Datang)</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_lainnya" size="10" value="<?php echo $row[pnp_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;PNP Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="pnp_peron_lainnya" size="10" value="<?php echo $row[pnp_peron_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>
	<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nilai Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="nilai_peron_lainnya" size="10" value="<?php echo $row[nilai_peron_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>
	<!--<tr class="tdtitle_black">
    	<td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Hasil Peron</td>
    	<td width="10" valign="middle" bgcolor="efefef"> 
     	 <div align="center">:</div></td>
    	<td width="303" valign="middle" bgcolor="efefef">&nbsp;
		<input type="text" name="hasil_peron_lainnya" size="10" value="<?php echo $row[hasil_peron_lainnya]; ?>" class="inputbox"   /></td>
  	</tr>-->
	<tr valign="middle" class="tdtitle_black2"> 
      	<td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.penumpang"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a>&nbsp;&nbsp; 
        	<input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
   		</td>
	</tr>
</form>
</table>
   <?php
   }else{
   ?>
   <table width="1150" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="136"><a href="?act=add&do=data.penumpang"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
    <td>
	  <form method="post" action="index.php?do=data.penumpang">
	Pencarian: &nbsp;<select name="kategori" class="inputbox" onChange="submit();">
	<option value="bulan" <?php if ($kategori=="bulan") echo "selected"; ?>>Bulan</option>
	<option value="tahun" <?php if ($kategori=="tahun") echo "selected"; ?>>Tahun</option>
	</select>
 </form>
	</td>
	<td width="836">
  <form method="post" action="index.php?do=data.penumpang">
  <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
	<?php
	if ($kategori=="tahun")
	{
	?>
	Tahun: &nbsp;<input type="text" name="key" size="5" class="inputbox" value="<?php echo $key; ?>">
	<?php
	}
	else
	{
	?>
	Bulan: &nbsp;<select name="bulan" class="inputbox">
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
	 Tahun: &nbsp;<input type="text" name="key" size="5" class="inputbox" value="<?php echo $key; ?>">
	<?php
	}
	?>
	&nbsp; >> Enter
	</form>
	</td>
	<td width="158"><div align="right"><a href="excel_penumpang.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&act=excel&bulan=<?php echo $bulan; ?>"><img src="images/excel.jpg" width="68" height="23" border="0"></a></div></td>
	
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1980">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="3"  background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="120" rowspan="3" background="images/bgcell.gif" height="25" align="center">Tanggal</td> 
    <td   colspan="7"  background="images/bgcell.gif" height="25" align="center">Jurusan Nganjuk</td>
	<td   colspan="7"  background="images/bgcell.gif" height="25" align="center">Jurusan Ponorogo</td>                                        
    <td   colspan="7" background="images/bgcell.gif" height="25" align="center">Jurusan Magetan</td>                                        
    <td   colspan="7" background="images/bgcell.gif" height="25" align="center">Jurusan Ngawi / Solo / Jogya / Jakarta</td>                                        
    <td   colspan="7" background="images/bgcell.gif" height="25" align="center">Jumlah</td>                                                                        
   </tr>
   <tr class="tdtitle_white">                               
    <td   colspan="3" background="images/bgcell.gif" height="25" align="center">Datang</td> 
	<td   colspan="4" background="images/bgcell.gif" height="25" align="center">&nbsp;</td> 
	<td   colspan="3" background="images/bgcell.gif" height="25" align="center">Datang</td> 
	<td   colspan="4" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>
	<td   colspan="3" background="images/bgcell.gif" height="25" align="center">Datang</td> 
	<td   colspan="4" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>     
	<td   colspan="3" background="images/bgcell.gif" height="25" align="center">Datang</td> 
	<td   colspan="4" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>  
	<td   colspan="3" background="images/bgcell.gif" height="25" align="center">Datang</td> 
	<td   colspan="4" background="images/bgcell.gif" height="25" align="center">&nbsp;</td>                                        
   </tr>
   <tr class="tdtitle_white">
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Bus</td> 
    <td   width="50" background="images/bgcell.gif" height="25" align="center">RIT</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">PNP</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">PNP Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Nilai Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Hasil Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Jumlah PNP</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">Bus</td> 
    <td   width="50" background="images/bgcell.gif" height="25" align="center">RIT</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">PNP</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">PNP Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Nilai Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Hasil Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Jumlah PNP</td>   
	<td   width="50" background="images/bgcell.gif" height="25" align="center">Bus</td> 
    <td   width="50" background="images/bgcell.gif" height="25" align="center">RIT</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">PNP</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">PNP Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Nilai Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Hasil Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Jumlah PNP</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">Bus</td> 
    <td   width="50" background="images/bgcell.gif" height="25" align="center">RIT</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">PNP</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">PNP Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Nilai Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Hasil Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Jumlah PNP</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">Bus</td> 
    <td   width="50" background="images/bgcell.gif" height="25" align="center">RIT</td> 
	<td   width="50" background="images/bgcell.gif" height="25" align="center">PNP</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">PNP Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Nilai Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Hasil Peron</td>                                        
    <td   width="50" background="images/bgcell.gif" height="25" align="center">Jumlah PNP</td>                                                                              
   </tr>
  <?php
  if ($kategori=="bulan" AND !empty($key))
  {  $strsql="select * from ter_penumpang where month(tanggal)='$bulan' and year(tanggal)='$key' order by tanggal asc"; }
  elseif ($kategori=="tahun" AND !empty($key))
  {  $strsql="select tanggal, sum(bus_nganjuk) as bus_nganjuk, sum(rit_nganjuk) as rit_nganjuk, sum(pnp_nganjuk) as pnp_nganjuk, sum(pnp_nganjuk) as pnp_nganjuk,    sum(pnp_peron_nganjuk) as pnp_peron_nganjuk, sum(nilai_peron_nganjuk) as nilai_peron_nganjuk, sum(hasil_peron_nganjuk) as hasil_peron_nganjuk, sum(bus_ponorogo) as bus_ponorogo, sum(rit_ponorogo) as rit_ponorogo, sum(pnp_ponorogo) as pnp_ponorogo, sum(pnp_peron_ponorogo) as pnp_peron_ponorogo, sum(nilai_peron_ponorogo) as nilai_peron_ponorogo, sum(hasil_peron_ponorogo) as hasil_peron_ponorogo, sum(bus_magetan) as bus_magetan, sum(rit_magetan) as rit_magetan, sum(pnp_magetan) as pnp_magetan, sum(pnp_peron_magetan) as pnp_peron_magetan, sum(nilai_peron_magetan) as nilai_peron_magetan, sum(hasil_peron_magetan) as hasil_peron_magetan, sum(bus_lainnya) as bus_lainnya, sum(rit_lainnya) as rit_lainnya, sum(pnp_lainnya) as pnp_lainnya, sum(pnp_peron_lainnya) as pnp_peron_lainnya, sum(nilai_peron_lainnya) as nilai_peron_lainnya, sum(hasil_peron_lainnya) as hasil_peron_lainnya 
  from ter_penumpang 
  where year(tanggal)='2012' 
  group by month(tanggal) 
  order by tanggal asc"; }
  else
  {  $strsql="select * from ter_penumpang order by tanggal asc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="100"><a href="?do=data.penumpang&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.penumpang&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	 if ($kategori=="tahun")
	 {
	  //echo $tgl;
	  //echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	 }
	 else
	 {
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;	 
	 }
	  ?></td>
    <td height="25" align="center"><?php echo $row[bus_nganjuk]; $total_bus_nganjuk=$total_bus_nganjuk+$row[bus_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_nganjuk]; $total_rit_nganjuk=$total_rit_nganjuk+$row[rit_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_nganjuk]; $total_pnp_nganjuk=$total_pnp_nganjuk+$row[pnp_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_nganjuk]; $total_pnp_peron_nganjuk=$total_pnp_peron_nganjuk+$row[pnp_peron_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_nganjuk]; $total_nilai_peron_nganjuk=$total_nilai_peron_nganjuk+$row[nilai_peron_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_nganjuk]=$row[pnp_peron_nganjuk]*$row[nilai_peron_nganjuk]; $total_hasil_peron_nganjuk=$total_hasil_peron_nganjuk+$row[hasil_peron_nganjuk]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp=$row[pnp_nganjuk]+$row[pnp_peron_nganjuk]; echo $jumlah_pnp; 
	$total_jumlah_pnp_nganjuk=$total_jumlah_pnp_nganjuk+$jumlah_pnp; ?></td>
    <td height="25" align="center"><?php echo $row[bus_ponorogo]; $total_bus_ponorogo=$total_bus_ponorogo+$row[bus_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_ponorogo]; $total_rit_ponorogo=$total_rit_ponorogo+$row[rit_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_ponorogo]; $total_pnp_ponorogo=$total_pnp_ponorogo+$row[pnp_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_ponorogo]; $total_pnp_peron_ponorogo=$total_pnp_peron_ponorogo+$row[pnp_peron_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_ponorogo]; $total_nilai_peron_ponorogo=$total_nilai_peron_ponorogo+$row[nilai_peron_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_ponorogo]=$row[pnp_peron_ponorogo]*$row[nilai_peron_ponorogo]; $total_hasil_peron_ponorogo=$total_hasil_peron_ponorogo+$row[hasil_peron_ponorogo]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_ponorogo=$row[pnp_ponorogo]+$row[pnp_peron_ponorogo]; echo $jumlah_pnp_ponorogo;
	$total_jumlah_pnp_ponorogo=$total_jumlah_pnp_ponorogo+$jumlah_pnp_ponorogo; ?></td>
	<td height="25" align="center"><?php echo $row[bus_magetan]; $total_bus_magetan=$total_bus_magetan+$row[bus_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_magetan]; $total_rit_magetan=$total_rit_magetan+$row[rit_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_magetan]; $total_pnp_magetan=$total_pnp_magetan+$row[pnp_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_magetan];   $total_pnp_peron_magetan=$total_pnp_peron_magetan+$row[pnp_peron_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_magetan]; $total_nilai_peron_magetan=$total_nilai_peron_magetan+$row[nilai_peron_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_magetan]=$row[pnp_peron_magetan]*$row[nilai_peron_magetan]; $total_hasil_peron_magetan=$total_hasil_peron_magetan+$row[hasil_peron_magetan]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_magetan=$row[pnp_magetan]+$row[pnp_peron_magetan]; echo $jumlah_pnp_magetan; 
	$total_jumlah_pnp_magetan=$total_jumlah_pnp_magetan+$jumlah_pnp_magetan; ?></td>
	<td height="25" align="center"><?php echo $row[bus_lainnya]; $total_bus_lainnya=$total_bus_lainnya+$row[bus_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_lainnya]; $total_rit_lainnya=$total_rit_lainnya+$row[rit_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_lainnya]; $total_pnp_lainnya=$total_pnp_lainnya+$row[pnp_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_lainnya];  $total_pnp_peron_lainnya=$total_pnp_peron_lainnya+$row[pnp_peron_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_lainnya]; $total_nilai_peron_lainnya=$total_nilai_peron_lainnya+$row[nilai_peron_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_lainnya]=$row[pnp_peron_lainnya]*$row[nilai_peron_lainnya]; $total_hasil_peron_lainnya=$total_hasil_peron_lainnya+$row[hasil_peron_lainnya]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_lainnya=$row[pnp_lainnya]+$row[pnp_peron_lainnya]; echo $jumlah_pnp_lainnya; 
	$total_jumlah_pnp_lainnya=$total_jumlah_pnp_lainnya+$jumlah_pnp_lainnya; ?></td>
	<td height="25" align="center"><?php $i=$row[bus_nganjuk]+$row[bus_ponorogo]+$row[bus_magetan]+$row[bus_lainnya]; echo $i; 
	$i_hasil=$i_hasil+$i; ?></td>
	<td height="25" align="center"><?php $j=$row[rit_nganjuk]+$row[rit_ponorogo]+$row[rit_magetan]+$row[rit_lainnya]; echo $j; 
	$j_hasil=$j_hasil+$j; ?></td>
	<td height="25" align="center"><?php $k=$row[pnp_nganjuk]+$row[pnp_ponorogo]+$row[pnp_magetan]+$row[pnp_lainnya]; echo $k;
	$k_hasil=$k_hasil+$k; ?></td>
	<td height="25" align="center"><?php $l=$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]; echo $l;
	$l_hasil=$l_hasil+$l; ?></td>
	<td height="25" align="center"><?php $m=$row[nilai_peron_nganjuk]+$row[nilai_peron_ponorogo]+$row[nilai_peron_magetan]+$row[nilai_peron_lainnya]; echo $m; 
	$m_hasil=$m_hasil+$m; ?></td>
	<td height="25" align="center"><?php $n=$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]*$row[nilai_peron_nganjuk]+$row[nilai_peron_ponorogo]+$row[nilai_peron_magetan]+$row[nilai_peron_lainnya]; echo $n; 
	$n_hasil=$n_hasil+$n; ?></td>
	<td height="25" align="center">
		<?php  
			$o=	$row[pnp_nganjuk]+$row[pnp_ponorogo]+$row[pnp_magetan]+$row[pnp_lainnya]+
				$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]
		; echo $o; 
	$o_hasil=$o_hasil+$o; ?>	</td>
   </tr>
  <?php
  }
  ?>
  <tr class="text" bgcolor="efefef">
    <td height="25" colspan="3" align="right">Jumlah&nbsp;</td>
    <td height="25" align="center"><?php echo $total_bus_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_rit_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_bus_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_rit_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_bus_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_rit_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_bus_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_rit_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_lainnya; ?></td>
    <td height="25" align="center"><?php echo $i_hasil; ?></td>
    <td height="25" align="center"><?php echo $j_hasil; ?></td>
    <td height="25" align="center"><?php echo $k_hasil; ?></td>
    <td height="25" align="center"><?php echo $l_hasil; ?></td>
    <td height="25" align="center"><?php echo $m_hasil; ?></td>
    <td height="25" align="center"><?php echo $n_hasil; ?></td>
    <td height="25" align="center"><?php echo $o_hasil; ?></td>
  </tr>
</table>
<?php
}
?>
</body>
</html>
