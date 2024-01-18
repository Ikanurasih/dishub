<?php
	$id_pegawai= $_REQUEST['id'];
	$id_anak=$_REQUEST['id_anak'];

if ($act=="del")
{
mysql_query("delete from peg_anak where id_anak='$id_anak'");
}
?>

<html>
<head>
<title>Anak</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>  
function showme(){  
var s_kerja_sekolah= document.frmadd.kerja_sekolah;  
var h_kerja_sekolah = document.frmadd.input_kerja_sekolah;  

if( s_kerja_sekolah.selectedIndex == 19 ) {  
h_kerja_sekolah.style.visibility="visible";  
}else{  
h_kerja_sekolah.style.visibility="hidden";  
}  

}  
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Anak </font></strong></td>
  </tr>
</table>
<table width="1020" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.anak&id=<?php echo $id_pegawai; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
</table>
<?php
   $strsql="select * from peg_pegawai where id='$id_pegawai'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table border="0" cellpadding="2" cellspacing="2">
  <tr class="tdtitle_black">
  <td width="150" height="25" bgcolor="efefef">&nbsp;Nama Orang Tua</td>
  <td width="10">:</td>
  <td width="200"><?php echo $row[nama]; ?></td>
  </tr>
  </table>
<table border="1" cellspacing="0" cellpadding="1" width="730">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="250" background="images/bgcell.gif" height="25" align="center">Nama Lengkap </td>   
	<td width="180" background="images/bgcell.gif" height="25" align="center">Tgl. Lahir </td>   
	<td width="100" background="images/bgcell.gif" height="25" align="center">Jenis Kelamin </td>  
	<td width="150" background="images/bgcell.gif" height="25" align="center">Pekerjaan / Sekolah</td>  
	<td width="100" background="images/bgcell.gif" height="25" align="center">Status Keluarga</td>    
  </tr>
  <?php 
 if($act=="add"){
 ?>
 <form name="frmadd" method="post" action="insert_data_anak.php">
 <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
 <tr>
    <td align="center" width="35"><a href="index.php?do=data.anak&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
 	<td height="25" align="center"><input name="nama_anak" type="text" class="inputbox" value="<?php echo $nama; ?>" size="25"/></td>
	<td height="25" align="center">
		<input type="text" name="tgl_lahir" size="10" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center">
		<select name="jenkel" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Laki - Laki" <?php if ($jenkel=="Laki - Laki") { echo "selected"; } ?>>Laki - Laki</option>
			<option value="Perempuan" <?php if ($jenkel=="Perempuan") { echo "selected"; } ?>>Perempuan</option>
  		</select>
	</td>
	<td height="25" align="center">
		<select name="kerja_sekolah" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="SD" <?php if ($kerja_sekolah=="SD") { echo "selected"; } ?>>SD</option>
			<option value="MI" <?php if ($kerja_sekolah=="MI") { echo "selected"; } ?>>MI</option>
			<option value="SMP" <?php if ($kerja_sekolah=="MTs") { echo "selected"; } ?>>MTs</option>
			<option value="KPAA" <?php if ($kerja_sekolah=="KPAA") { echo "selected"; } ?>>KPAA</option>
			<option value="KPA" <?php if ($kerja_sekolah=="KPA") { echo "selected"; } ?>>KPA</option>
			<option value="Paket A" <?php if ($kerja_sekolah=="Paket A") { echo "selected"; } ?>>Paket A</option>
			<option value="Paket B" <?php if ($kerja_sekolah=="Paket B") { echo "selected"; } ?>>Paket B</option>
			<option value="Paket C" <?php if ($kerja_sekolah=="Paket C") { echo "selected"; } ?>>Paket C</option>
			<option value="SMA" <?php if ($kerja_sekolah=="SMA") { echo "selected"; } ?>>SMA</option>
			<option value="SMK" <?php if ($kerja_sekolah=="SMK") { echo "selected"; } ?>>SMK</option>
			<option value="MAN" <?php if ($kerja_sekolah=="MAN") { echo "selected"; } ?>>MAN</option>
			<option value="D1" <?php if ($kerja_sekolah=="D1") { echo "selected"; } ?>>D1</option>
			<option value="D2" <?php if ($kerja_sekolah=="D2") { echo "selected"; } ?>>D2</option>
			<option value="D3" <?php if ($kerja_sekolah=="D3") { echo "selected"; } ?>>D3</option>
			<option value="D4" <?php if ($kerja_sekolah=="D4") { echo "selected"; } ?>>D4</option>
			<option value="S1" <?php if ($kerja_sekolah=="S1") { echo "selected"; } ?>>S1</option>
			<option value="S2" <?php if ($kerja_sekolah=="S2") { echo "selected"; } ?>>S2</option>
			<option value="S3" <?php if ($kerja_sekolah=="S3") { echo "selected"; } ?>>S3</option>
			<option value="Lainnya" <?php if ($kerja_sekolah=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<input type ="text" name="input_kerja_sekolah" style="  position:relative;visibility:hidden;" value="<?php echo $input_kerja_sekolah; ?>" class="inputbox">
	</td>
	<td height="25" align="center">
		<select name="status" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="AK" <?php if ($status=="AK") { echo "selected"; } ?>>AK</option>
			<option value="AT" <?php if ($status=="AT") { echo "selected"; } ?>>AT</option>
			<option value="AA" <?php if ($status=="AA") { echo "selected"; } ?>>AA</option>
			<option value="AK**" <?php if ($status=="AK**") { echo "selected"; } ?>>AK**</option>
			<option value="AT**" <?php if ($status=="AT**") { echo "selected"; } ?>>AT**</option>
			<option value="AA**" <?php if ($status=="AA**") { echo "selected"; } ?>>AA**</option>		
  		</select>
	</td>	
 </tr>
 </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from peg_anak where id_anak='$id_anak'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form name="frmadd" method="post" action="update_data_anak.php">
  <input type="hidden" name="id_anak" value="<?php echo $id_anak; ?>">
  <input type="hidden" name="id_pegawai" value="<?php echo $row[id_pegawai]; ?>">
  <tr class="text" bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.anak&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
  	<td height="25" align="center"><input name="nama_anak" type="text" class="inputbox" value="<?php echo $row[nama_anak]; ?>" size="30"/></td>
	<td height="25" align="center">
		<input type="text" name="tgl_lahir" id="tgl_lahir" size="10" value="<?php if ($row[tgl_lahir]=="0000-00-00") {	echo ""; }else{ echo $row[tgl_lahir];} ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center">
		<select name="jenkel" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Laki - Laki" <?php if ($row[jenkel]=="Laki - Laki") { echo "selected"; } ?>>Laki - Laki</option>
			<option value="Perempuan" <?php if ($row[jenkel]=="Perempuan") { echo "selected"; } ?>>Perempuan</option>
  		</select>
	</td>
	<td height="25" align="center">
		<select name="kerja_sekolah" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="SD" <?php if ($row[kerja_sekolah]=="SD") { echo "selected"; } ?>>SD</option>
			<option value="MI" <?php if ($row[kerja_sekolah]=="MI") { echo "selected"; } ?>>MI</option>
			<option value="SMP" <?php if ($row[kerja_sekolah]=="MTs") { echo "selected"; } ?>>MTs</option>
			<option value="KPAA" <?php if ($row[kerja_sekolah]=="KPAA") { echo "selected"; } ?>>KPAA</option>
			<option value="KPA" <?php if ($row[kerja_sekolah]=="KPA") { echo "selected"; } ?>>KPA</option>
			<option value="Paket A" <?php if ($row[kerja_sekolah]=="Paket A") { echo "selected"; } ?>>Paket A</option>
			<option value="Paket B" <?php if ($row[kerja_sekolah]=="Paket B") { echo "selected"; } ?>>Paket B</option>
			<option value="Paket C" <?php if ($row[kerja_sekolah]=="Paket C") { echo "selected"; } ?>>Paket C</option>
			<option value="SMA" <?php if ($row[kerja_sekolah]=="SMA") { echo "selected"; } ?>>SMA</option>
			<option value="SMK" <?php if ($row[kerja_sekolah]=="SMK") { echo "selected"; } ?>>SMK</option>
			<option value="MAN" <?php if ($row[kerja_sekolah]=="MAN") { echo "selected"; } ?>>MAN</option>
			<option value="D1" <?php if ($row[kerja_sekolah]=="D1") { echo "selected"; } ?>>D1</option>
			<option value="D2" <?php if ($row[kerja_sekolah]=="D2") { echo "selected"; } ?>>D2</option>
			<option value="D3" <?php if ($row[kerja_sekolah]=="D3") { echo "selected"; } ?>>D3</option>
			<option value="D4" <?php if ($row[kerja_sekolah]=="D4") { echo "selected"; } ?>>D4</option>
			<option value="S1" <?php if ($row[kerja_sekolah]=="S1") { echo "selected"; } ?>>S1</option>
			<option value="S2" <?php if ($row[kerja_sekolah]=="S2") { echo "selected"; } ?>>S2</option>
			<option value="S3" <?php if ($row[kerja_sekolah]=="S3") { echo "selected"; } ?>>S3</option>
			<option value="Lainnya" <?php 
			if(	$row[kerja_sekolah]<>"SD" and $row[kerja_sekolah]<>"MI" and $row[kerja_sekolah]<>"SMP" and 
			$row[kerja_sekolah]<>"KPAA" and $row[kerja_sekolah]<>"KPA" and $row[kerja_sekolah]<>"Paket A" and $row[kerja_sekolah]<>"Paket B" and $row[kerja_sekolah]<>"Paket C" and 
			$row[kerja_sekolah]<>"SMA" and $row[kerja_sekolah]<>"SMK" and $row[kerja_sekolah]<>"MAN" and $row[kerja_sekolah]<>"D1" and $row[kerja_sekolah]<>"D2" and 
			$row[kerja_sekolah]<>"D3" and $row[kerja_sekolah]<>"D4" and $row[kerja_sekolah]<>"S1" and $row[kerja_sekolah]<>"S2" and $row[kerja_sekolah]<>"S3" )
			{ echo "selected"; } ?>>Lainnya</option>
  		</select>&nbsp;
		<?php 
			if(	$row[kerja_sekolah]<>"SD" and $row[kerja_sekolah]<>"MI" and $row[kerja_sekolah]<>"SMP" and 
			$row[kerja_sekolah]<>"KPAA" and $row[kerja_sekolah]<>"KPA" and $row[kerja_sekolah]<>"Paket A" and $row[kerja_sekolah]<>"Paket B" and $row[kerja_sekolah]<>"Paket C" and 
			$row[kerja_sekolah]<>"SMA" and $row[kerja_sekolah]<>"SMK" and $row[kerja_sekolah]<>"MAN" and $row[kerja_sekolah]<>"D1" and $row[kerja_sekolah]<>"D2" and 
			$row[kerja_sekolah]<>"D3" and $row[kerja_sekolah]<>"D4" and $row[kerja_sekolah]<>"S1" and $row[kerja_sekolah]<>"S2" and $row[kerja_sekolah]<>"S3" )
			{
		?>
			<input type ="text" name="input_kerja_sekolah"  value="" class="inputbox">
			<?php
			}elseif($row[input_kerja_sekolah]<>"Lainnya")
			{
			?>
			<input type ="text" name="input_input_kerja_sekolah" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}else{
			?>
			<input type ="text" name="input_input_kerja_sekolah" style=" position:relative;visibility:hidden;" value="" class="inputbox">
			<?php
			}
			?>
	</td>
	<td height="25" align="center">
		<select name="status" class="inputbox">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="AK" <?php if ($row[status]=="AK") { echo "selected"; } ?>>AK</option>
			<option value="AT" <?php if ($row[status]=="AT") { echo "selected"; } ?>>AT</option>
			<option value="AA" <?php if ($row[status]=="AA") { echo "selected"; } ?>>AA</option>
			<option value="AK**" <?php if ($row[status]=="AK**") { echo "selected"; } ?>>AK**</option>
			<option value="AT**" <?php if ($row[status]=="AT**") { echo "selected"; } ?>>AT**</option>
			<option value="AA**" <?php if ($row[status]=="AA**") { echo "selected"; } ?>>AA**</option>		
  		</select>
	</td>
  </tr>
  </form>
   <?php
  }
  $strsql="select * from peg_anak where id_pegawai='$id_pegawai' order by id_anak desc"; 
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.anak&act=edit&id=<?php echo $row[id_pegawai]; ?>&id_anak=<?php echo $row[id_anak]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.anak&act=del&id=<?php echo $row[id_pegawai]; ?>&id_anak=<?php echo $row[id_anak]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
	<td height="25" align="left"><?php echo $row[nama_anak]; ?></td>
	<td height="25" align="center">
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
	<td height="25" align="center"><?php echo $row[jenkel]; ?></td>
	<td height="25" align="center"><?php echo $row[kerja_sekolah]; ?></td>
	<td height="25" align="center"><?php echo $row[status]; ?></td>
  </tr>
<?php
}
?>
</table>
<table>
<tr><td height="5"></td></tr>
</table>
<a href="index.php?do=data.pegawai"><img src="images/kembali2.gif" border="0"></a>
</body>
</html>