<?php
	$id_pegawai= $_REQUEST['id'];
	$id_pekerjaan=$_REQUEST['id_pekerjaan'];
	$act=$_REQUEST['act'];
	
if ($act=="del")
{
mysql_query("delete from peg_pekerjaan where id_pekerjaan='$id_pekerjaan'");
}
?>

<html>
<head>
<title>Anak</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>
function showme(){
var s_riwayat_pekerjaan = document.frmadd.riwayat_pekerjaan;  
var h_riwayat_pekerjaan = document.frmadd.input_riwayat_pekerjaan;  
var s_riwayat_jbt_eselon = document.frmadd.riwayat_jbt_eselon;  
var h_riwayat_jbt_eselon = document.frmadd.input_riwayat_jbt_eselon;  
var s_riwayat_pangkat = document.frmadd.riwayat_pangkat;  
var h_riwayat_pangkat = document.frmadd.input_riwayat_pangkat;  
var s_riwayat_golongan = document.frmadd.riwayat_golongan;  
var h_riwayat_golongan = document.frmadd.input_riwayat_golongan; 

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
}
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Riwayat Pekerjaan </font></strong></td>
  </tr>
</table>
<table width="1020" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.pekerjaan&id=<?php echo $id_pegawai; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
</table>
<?php
   $strsql="select * from peg_pegawai where id='$id_pegawai'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table border="0" cellpadding="2" cellspacing="2">
  <tr class="tdtitle_black">
  <td width="150" height="25" bgcolor="efefef">&nbsp;Nama Pegawai </td>
  <td width="10">:</td>
  <td width="200"><?php echo $row[nama]; ?></td>
  </tr>
  </table>
<table border="1" cellspacing="0" cellpadding="1" width="1100">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="100">&nbsp;</td>
    <td width="150" rowspan="2" background="images/bgcell.gif" height="25" align="center">Pekerjaan </td>   
	<td colspan="2" background="images/bgcell.gif" height="25" align="center">Jabatan </td>   
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Satuan Kerja </td>  
	<td colspan="3" background="images/bgcell.gif" height="25" align="center">SK</td> 
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Pangkat </td>   
	<td width="100" rowspan="2" background="images/bgcell.gif" height="25" align="center">Golongan </td>  
  </tr>
  <tr class="tdtitle_white">
	<td width="160" background="images/bgcell.gif" height="25" align="center">TMT</td>   
	<td width="80" background="images/bgcell.gif" height="25" align="center">Eselon</td>   
	<td width="80" background="images/bgcell.gif" height="25" align="center">Nomor </td>  
	<td width="150" background="images/bgcell.gif" height="25" align="center">Tanggal</td>   
	<td width="80" background="images/bgcell.gif" height="25" align="center">Pejabat</td>   		
  </tr>
  <?php 
 if($act=="add"){
 ?>
 <form name="frmadd" method="post" action="insert_data_pekerjaan.php">
 <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
 <tr bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.pekerjaan&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
 	<td valign="top" bgcolor="efefef" align="center"><select name="riwayat_pekerjaan" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="CPNS" <?php if ($riwayat_pekerjaan=="CPNS") { echo "selected"; } ?>>CPNS</option>
				<option value="PNS" <?php if ($riwayat_pekerjaan=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="Kenaikan Pangkat" <?php if ($riwayat_pekerjaan=="Kenaikan Pangkat") { echo "selected"; } ?>>Kenaikan Pangkat</option>
				<option value="Struktural" <?php if ($riwayat_pekerjaan=="Struktural") { echo "selected"; } ?>>Struktural</option>
				<option value="Kenaikan Struktural" <?php if ($riwayat_pekerjaan=="Kenaikan Struktural") { echo "selected"; } ?>>Kenaikan Struktural</option>
				<option value="Mutasi" <?php if ($riwayat_pekerjaan=="Mutasi") { echo "selected"; } ?>>Mutasi</option>
				<option value="Fungsional" <?php if ($riwayat_pekerjaan=="Fungsional") { echo "selected"; } ?>>Fungsional</option>
				<option value="Lainnya" <?php if ($riwayat_pekerjaan=="Lainnya") { echo "selected"; } ?>>Lainnya</option>				
		</select><input type ="text" name="input_riwayat_pekerjaan" style="position:relative;visibility:hidden;" value="<?php echo $input_riwayat_pekerjaan; ?>" class="inputbox" size="15">
	  </td>
	<td align="center" bgcolor="efefef" valign="top"><input type="text" name="riwayat_jbt_tmt" size="10" id="riwayat_jbt_tmt" value="<?php echo $riwayat_jbt_tmt; ?>" class="inputbox" readonly/> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_jbt_tmt'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="0" align="center" bgcolor="efefef">
		<select name="riwayat_jbt_eselon" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Ia" <?php if ($riwayat_jbt_eselon=="Ia") { echo "selected"; } ?>>Ia</option>
			<option value="Ib" <?php if ($riwayat_jbt_eselon=="Ib") { echo "selected"; } ?>>Ib</option>
			<option value="IIa" <?php if ($riwayat_jbt_eselon=="IIa") { echo "selected"; } ?>>IIa</option>
			<option value="IIb" <?php if ($riwayat_jbt_eselon=="IIb") { echo "selected"; } ?>>IIb</option>
			<option value="IIIa" <?php if ($riwayat_jbt_eselon=="IIIa") { echo "selected"; } ?>>IIIa</option>
			<option value="IIIb" <?php if ($riwayat_jbt_eselon=="IIIb") { echo "selected"; } ?>>IIIb</option>
			<option value="IVa" <?php if ($riwayat_jbt_eselon=="IVa") { echo "selected"; } ?>>IVa</option>
			<option value="IVb" <?php if ($riwayat_jbt_eselon=="IVb") { echo "selected"; } ?>>IVb</option>
			<option value="V" <?php if ($riwayat_jbt_eselon=="V") { echo "selected"; } ?>>V</option>
			<option value="Lainnya" <?php if ($riwayat_jbt_eselon=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
  		</select><input size="10" type ="text" name="input_riwayat_jbt_eselon" style="  position:relative;visibility:hidden;" value="<?php echo $input_riwayat_jbt_eselon; ?>" class="inputbox">
	</td>	
	<td height="0" align="center" bgcolor="efefef" valign="top"><input name="riwayat_sat_kerja" type="text" class="inputbox" value="<?php echo $riwayat_sat_kerja; ?>" size="15"/></td>
	<td height="0" align="center" bgcolor="efefef" valign="top"><input name="riwayat_no_sk" type="text" class="inputbox" value="<?php echo $riwayat_no_sk; ?>" size="15"/></td>
	<td height="0" align="center" bgcolor="efefef" valign="top">
		<input type="text" name="riwayat_tgl_sk" size="10" id="riwayat_tgl_sk" value="<?php echo $riwayat_tgl_sk; ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_tgl_sk'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="0" align="center" bgcolor="efefef" valign="top"><input name="riwayat_pejabat_sk" type="text" class="inputbox" value="<?php echo $riwayat_pejabat_sk; ?>" size="15"/></td>
	<td height="0" bgcolor="efefef" valign="top">
		<select name="riwayat_pangkat" class="inputbox"  onchange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Juru Muda" <?php if ($riwayat_pangkat=="Juru Muda") { echo "selected"; } ?>>Juru Muda</option>
			<option value="Juru Muda TK.I" <?php if ($riwayat_pangkat=="Juru Muda  TK.I") { echo "selected"; } ?>>Juru Muda  TK.I</option>
			<option value="Juru" <?php if ($riwayat_pangkat=="Juru") { echo "selected"; } ?>>Juru</option>
			<option value="Juru TK.I" <?php if ($riwayat_pangkat=="Juru TK.I") { echo "selected"; } ?>>Juru TK.I</option>
			<option value="Pengatur Muda" <?php if ($riwayat_pangkat=="Pengatur Muda") { echo "selected"; } ?>>Pengatur Muda</option>
			<option value="Pengatur Muda TK.I" <?php if ($riwayat_pangkat=="Pengatur Muda TK.I") { echo "selected"; } ?>>Pengatur Muda TK.I</option>
			<option value="Pengatur" <?php if ($riwayat_pangkat=="Pengatur") { echo "selected"; } ?>>Pengatur</option>
			<option value="Pengatur TK.I" <?php if ($riwayat_pangkat=="Pengatur TK.I") { echo "selected"; } ?>>Pengatur TK.I</option>
			<option value="Penata Muda" <?php if ($riwayat_pangkat=="Penata Muda") { echo "selected"; } ?>>Penata Muda</option>
			<option value="Penata Muda TK.I" <?php if ($riwayat_pangkat=="Penata Muda TK.I") { echo "selected"; } ?>>Penata Muda TK.I</option>
			<option value="Penata" <?php if ($riwayat_pangkat=="Penata") { echo "selected"; } ?>>Penata</option>
			<option value="Penata TK.I" <?php if ($riwayat_pangkat=="Penata TK.I") { echo "selected"; } ?>>Penata TK.I</option>
			<option value="Pembina" <?php if ($riwayat_pangkat=="Pembina") { echo "selected"; } ?>>Pembina</option>
			<option value="Pembina TK.I" <?php if ($riwayat_pangkat=="Pembina TK.I") { echo "selected"; } ?>>Pembina TK.I</option>
			<option value="Pembina Utama Muda" <?php if ($riwayat_pangkat=="Pembina Utama Muda") { echo "selected"; } ?>>Pembina Utama Muda</option>
			<option value="Pembina Utama Madya" <?php if ($riwayat_pangkat=="Pembina Utama Madya") { echo "selected"; } ?>>Pembina Utama Madya</option>
			<option value="Pembina Utama" <?php if ($riwayat_pangkat=="Pembina Utama") { echo "selected"; } ?>>Pembina Utama</option>
			<option value="Lainnya" <?php if ($riwayat_pangkat=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
	    </select>&nbsp;
		  <input size="15" type ="text" name="input_riwayat_pangkat" style=" position:relative;visibility:hidden;" value="<?php echo $input_riwayat_pangkat; ?>" class="inputbox">
	  </td>
	  <td align="center" valign="top" bgcolor="efefef"><select name="riwayat_golongan" class="inputbox"  onchange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ia" <?php if ($riwayat_golongan=="Ia") { echo "selected"; } ?>>Ia</option>
				<option value="Ib" <?php if ($riwayat_golongan=="Ib") { echo "selected"; } ?>>Ib</option>
				<option value="Ic" <?php if ($riwayat_golongan=="Ic") { echo "selected"; } ?>>Ic</option>
				<option value="Id" <?php if ($riwayat_golongan=="Id") { echo "selected"; } ?>>Id</option>
				<option value="IIa" <?php if ($riwayat_golongan=="IIa") { echo "selected"; } ?>>IIa</option>
				<option value="IIb" <?php if ($riwayat_golongan=="IIb") { echo "selected"; } ?>>IIb</option>
				<option value="IIc" <?php if ($riwayat_golongan=="IIc") { echo "selected"; } ?>>IIc</option>
				<option value="IId" <?php if ($riwayat_golongan=="IId") { echo "selected"; } ?>>IId</option>
				<option value="IIIa" <?php if ($riwayat_golongan=="IIIa") { echo "selected"; } ?>>IIIa</option>
				<option value="IIIb" <?php if ($riwayat_golongan=="IIIb") { echo "selected"; } ?>>IIIb</option>
				<option value="IIIc" <?php if ($riwayat_golongan=="IIIc") { echo "selected"; } ?>>IIIc</option>
				<option value="IIId" <?php if ($riwayat_golongan=="IIId") { echo "selected"; } ?>>IIId</option>
				<option value="IVa" <?php if ($riwayat_golongan=="IVa") { echo "selected"; } ?>>IVa</option>
				<option value="IVb" <?php if ($riwayat_golongan=="IVb") { echo "selected"; } ?>>IVb</option>
				<option value="IVc" <?php if ($riwayat_golongan=="IVc") { echo "selected"; } ?>>IVc</option>
				<option value="IVd" <?php if ($riwayat_golongan=="IVd") { echo "selected"; } ?>>IVd</option>
				<option value="IVe" <?php if ($riwayat_golongan=="IVe") { echo "selected"; } ?>>IVe</option>
				<option value="Lainnya" <?php if ($riwayat_golongan=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
			</select>&nbsp;
			<input size="15" type ="text" name="input_riwayat_golongan" style=" position:relative;visibility:hidden;" value="<?php echo $input_riwayat_golongan; ?>" class="inputbox">
	  </td>
 </tr>
 </form>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from peg_pekerjaan where id_pekerjaan='$id_pekerjaan'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form name="frmadd" method="post" action="update_data_pekerjaan.php">
  <input type="hidden" name="id_pekerjaan" value="<?php echo $id_pekerjaan; ?>">
  <input type="hidden" name="id_pegawai" value="<?php echo $row[id_pegawai]; ?>">
  <tr bgcolor="efefef">
    <td align="center" width="35"><a href="index.php?do=data.pekerjaan&id=<?php echo $id_pegawai; ?>"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
 	<td valign="top" bgcolor="efefef" align="center"><select name="riwayat_pekerjaan" class="inputbox" onChange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="CPNS" <?php if ($row[riwayat_pekerjaan]=="CPNS") { echo "selected"; } ?>>CPNS</option>
				<option value="PNS" <?php if ($row[riwayat_pekerjaan]=="PNS") { echo "selected"; } ?>>PNS</option>
				<option value="Kenaikan Pangkat" <?php if ($row[riwayat_pekerjaan]=="Kenaikan Pangkat") { echo "selected"; } ?>>Kenaikan Pangkat</option>
				<option value="Struktural" <?php if ($row[riwayat_pekerjaan]=="Struktural") { echo "selected"; } ?>>Struktural</option>
				<option value="Kenaikan Struktural" <?php if ($row[riwayat_pekerjaan]=="Kenaikan Struktural") { echo "selected"; } ?>>Kenaikan Struktural</option>
				<option value="Mutasi" <?php if ($row[riwayat_pekerjaan]=="Mutasi") { echo "selected"; } ?>>Mutasi</option>
				<option value="Fungsional" <?php if ($row[riwayat_pekerjaan]=="Fungsional") { echo "selected"; } ?>>Fungsional</option>
				<option value="Lainnya" <?php if($row[riwayat_pekerjaan]<>"CPNS" and $row[riwayat_pekerjaan]<>"PNS" and $row[riwayat_pekerjaan]<>"Kenaikan Pangkat" and $row[riwayat_pekerjaan]<>"Struktural" and $row[riwayat_pekerjaan]<>"Kenaikan Struktural" and $row[riwayat_pekerjaan]<>"Mutasi" and $row[riwayat_pekerjaan]<>"Fungsional") { echo "selected"; } ?>>Lainnya</option>				
  			</select>&nbsp;
			<?php
			if(	$row[riwayat_pekerjaan]<>"CPNS" and $row[riwayat_pekerjaan]<>"PNS" and $row[riwayat_pekerjaan]<>"Kenaikan Pangkat" and 
			$row[riwayat_pekerjaan]<>"Struktural" and $row[riwayat_pekerjaan]<>"Kenaikan Struktural" and $row[riwayat_pekerjaan]<>"Mutasi" and $row[riwayat_pekerjaan]<>"Fungsional"					)
			{
			?>
			<input name="input_riwayat_pekerjaan" type ="text" class="inputbox"  value="<?php echo $row[riwayat_pekerjaan]; ?>" size="15">
			<?php
			}
			?>
	  </td>
	<td align="center" valign="top"><input type="text" name="riwayat_jbt_tmt" size="10" id="riwayat_jbt_tmt" value="<?php if ($row[riwayat_jbt_tmt]=="0000-00-00") {	echo ""; }else{ echo $row[riwayat_jbt_tmt];} ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_jbt_tmt'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center" valign="top"><select name="riwayat_jbt_eselon" class="inputbox" onChange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Ia" <?php if ($row[riwayat_jbt_eselon]=="Ia") { echo "selected"; } ?>>Ia</option>
			<option value="Ib" <?php if ($row[riwayat_jbt_eselon]=="Ib") { echo "selected"; } ?>>Ib</option>
			<option value="IIa" <?php if ($row[riwayat_jbt_eselon]=="IIa") { echo "selected"; } ?>>IIa</option>
			<option value="IIb" <?php if ($row[riwayat_jbt_eselon]=="IIb") { echo "selected"; } ?>>IIb</option>
			<option value="IIIa" <?php if ($row[riwayat_jbt_eselon]=="IIIa") { echo "selected"; } ?>>IIIa</option>
			<option value="IIIb" <?php if ($row[riwayat_jbt_eselon]=="IIIb") { echo "selected"; } ?>>IIIb</option>
			<option value="IVa" <?php if ($row[riwayat_jbt_eselon]=="IVa") { echo "selected"; } ?>>IVa</option>
			<option value="IVb" <?php if ($row[riwayat_jbt_eselon]=="IVb") { echo "selected"; } ?>>IVb</option>
			<option value="V" <?php if ($row[riwayat_jbt_eselon]=="V") { echo "selected"; } ?>>V</option>
			<option value="Lainnya" <?php if($row[riwayat_jbt_eselon]<>"Ia" and $row[riwayat_jbt_eselon]<>"Ib" and $row[riwayat_jbt_eselon]<>"IIa" and $row[riwayat_jbt_eselon]<>"IIb" and $row[riwayat_jbt_eselon]<>"IVa" and $row[riwayat_jbt_eselon]<>"IVb" and $row[riwayat_jbt_eselon]<>"V") { echo "selected"; } ?>>Lainnya</option>
  		</select>
		<?php
			if(	$row[riwayat_jbt_eselon]<>"Ia" and $row[riwayat_jbt_eselon]<>"Ib" and $row[riwayat_jbt_eselon]<>"IIa" and $row[riwayat_jbt_eselon]<>"IIb" and
				 $row[riwayat_jbt_eselon]<>"IVa" and $row[riwayat_jbt_eselon]<>"IVb" and $row[riwayat_jbt_eselon]<>"V" 					
			)
			{
			?><input name="input_riwayat_jbt_eselon" type ="text" class="inputbox"  value="<?php echo $row[riwayat_jbt_eselon]; ?>" size="10">
			<?php
			}
			?>
	</td>	
	<td align="center" valign="top"><input name="riwayat_sat_kerja" type="text" class="inputbox" value="<?php echo $row[riwayat_sat_kerja]; ?>" size="15"/></td>
	<td height="25" align="center" valign="top"><input name="riwayat_no_sk" type="text" class="inputbox" value="<?php echo $row[riwayat_no_sk]; ?>" size="15"/></td>
	<td height="25" align="center" valign="top"><input type="text" name="riwayat_tgl_sk" size="10" id="riwayat_tgl_sk" value="<?php if ($row[riwayat_tgl_sk]=="0000-00-00") {	echo ""; }else{ echo $row[riwayat_tgl_sk];} ?>" class="inputbox" readonly/>
		<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('riwayat_tgl_sk'),'yyyy-mm-dd',this)" style="cursor:pointer" />
	</td>
	<td height="25" align="center" valign="top"><input name="riwayat_pejabat_sk" type="text" class="inputbox" value="<?php echo $row[riwayat_pejabat_sk]; ?>" size="15"/></td>
	<td valign="top" align="center" bgcolor="efefef"><select name="riwayat_pangkat" class="inputbox"  onchange="showme()">
			<option value="-" selected disabled>---Pilih---</option>
			<option value="Juru Muda" <?php if ($row[riwayat_pangkat]=="Juru Muda") { echo "selected"; } ?>>Juru Muda</option>
			<option value="Juru Muda TK.I" <?php if ($row[riwayat_pangkat]=="Juru Muda  TK.I") { echo "selected"; } ?>>Juru Muda  TK.I</option>
			<option value="Juru" <?php if ($row[riwayat_pangkat]=="Juru") { echo "selected"; } ?>>Juru</option>
			<option value="Juru TK.I" <?php if ($row[riwayat_pangkat]=="Juru TK.I") { echo "selected"; } ?>>Juru TK.I</option>
			<option value="Pengatur Muda" <?php if ($row[riwayat_pangkat]=="Pengatur Muda") { echo "selected"; } ?>>Pengatur Muda</option>
			<option value="Pengatur Muda TK.I" <?php if ($row[riwayat_pangkat]=="Pengatur Muda TK.I") { echo "selected"; } ?>>Pengatur Muda TK.I</option>
			<option value="Pengatur" <?php if ($row[riwayat_pangkat]=="Pengatur") { echo "selected"; } ?>>Pengatur</option>
			<option value="Pengatur TK.I" <?php if ($row[riwayat_pangkat]=="Pengatur TK.I") { echo "selected"; } ?>>Pengatur TK.I</option>
			<option value="Penata Muda" <?php if ($row[riwayat_pangkat]=="Penata Muda") { echo "selected"; } ?>>Penata Muda</option>
			<option value="Penata Muda TK.I" <?php if ($row[riwayat_pangkat]=="Penata Muda TK.I") { echo "selected"; } ?>>Penata Muda TK.I</option>
			<option value="Penata" <?php if ($row[riwayat_pangkat]=="Penata") { echo "selected"; } ?>>Penata</option>
			<option value="Penata TK.I" <?php if ($row[riwayat_pangkat]=="Penata TK.I") { echo "selected"; } ?>>Penata TK.I</option>
			<option value="Pembina" <?php if ($row[riwayat_pangkat]=="Pembina") { echo "selected"; } ?>>Pembina</option>
			<option value="Pembina TK.I" <?php if ($row[riwayat_pangkat]=="Pembina TK.I") { echo "selected"; } ?>>Pembina TK.I</option>
			<option value="Pembina Utama Muda" <?php if ($row[riwayat_pangkat]=="Pembina Utama Muda") { echo "selected"; } ?>>Pembina Utama Muda</option>
			<option value="Pembina Utama Madya" <?php if ($row[riwayat_pangkat]=="Pembina Utama Madya") { echo "selected"; } ?>>Pembina Utama Madya</option>
			<option value="Pembina Utama" <?php if ($row[riwayat_pangkat]=="Pembina Utama") { echo "selected"; } ?>>Pembina Utama</option>
			<option value="Lainnya" <?php 
			if(	$row[riwayat_pangkat]<>"Juru Muda" and $row[riwayat_pangkat]<>"Juru Muda TK.I" and $row[riwayat_pangkat]<>"Juru" and $row[riwayat_pangkat]<>"Juru TK.I" and 
				$row[riwayat_pangkat]<>"Pengatur Muda" and $row[riwayat_pangkat]<>"Pengatur Muda TK.I" and $row[riwayat_pangkat]<>"Pengatur" and $row[riwayat_pangkat]<>"Pengatur TK.I" and
				$row[riwayat_pangkat]<>"Penata Muda" and $row[riwayat_pangkat]<>"Penata Muda TK.I" and $row[riwayat_pangkat]<>"Penata" and $row[riwayat_pangkat]<>"Penata TK.I" and
				$row[riwayat_pangkat]<>"Pembina" and $row[riwayat_pangkat]<>"Pembina TK.I" and $row[riwayat_pangkat]<>"Pembina Utama Muda" and 
				$row[riwayat_pangkat]<>"Pembina Utama Madya" and $row[riwayat_pangkat]<>"Pembina Utama")
			{ echo "selected"; } ?>>Lainnya</option>
	    </select>&nbsp;
		  <?php
			if(	$row[riwayat_pangkat]<>"Juru Muda" and $row[riwayat_pangkat]<>"Juru Muda TK.I" and $row[riwayat_pangkat]<>"Juru" and $row[riwayat_pangkat]<>"Juru TK.I" and 
				$row[riwayat_pangkat]<>"Pengatur Muda" and $row[riwayat_pangkat]<>"Pengatur Muda TK.I" and $row[riwayat_pangkat]<>"Pengatur" and $row[riwayat_pangkat]<>"Pengatur TK.I" and
				$row[riwayat_pangkat]<>"Penata Muda" and $row[riwayat_pangkat]<>"Penata Muda TK.I" and $row[riwayat_pangkat]<>"Penata" and $row[riwayat_pangkat]<>"Penata TK.I" and
				$row[riwayat_pangkat]<>"Pembina" and $row[riwayat_pangkat]<>"Pembina TK.I" and $row[riwayat_pangkat]<>"Pembina Utama Muda" and 
				$row[riwayat_pangkat]<>"Pembina Utama Madya" and $row[riwayat_pangkat]<>"Pembina Utama")
			{
			?>
			<input name="input_riwayat_pangkat" type ="text" class="inputbox"  value="<?php echo $row[riwayat_pangkat]; ?>" size="15">
			<?php
			}
			?>
	  </td>
	  <td valign="top" bgcolor="efefef" align="center"><select name="riwayat_golongan" class="inputbox"  onchange="showme()">
				<option value="-" selected disabled>---Pilih---</option>
				<option value="Ia" <?php if ($row[riwayat_golongan]=="Ia") { echo "selected"; } ?>>Ia</option>
				<option value="Ib" <?php if ($row[riwayat_golongan]=="Ib") { echo "selected"; } ?>>Ib</option>
				<option value="Ic" <?php if ($row[riwayat_golongan]=="Ic") { echo "selected"; } ?>>Ic</option>
				<option value="Id" <?php if ($row[riwayat_golongan]=="Id") { echo "selected"; } ?>>Id</option>
				<option value="IIa" <?php if ($row[riwayat_golongan]=="IIa") { echo "selected"; } ?>>IIa</option>
				<option value="IIb" <?php if ($row[riwayat_golongan]=="IIb") { echo "selected"; } ?>>IIb</option>
				<option value="IIc" <?php if ($row[riwayat_golongan]=="IIc") { echo "selected"; } ?>>IIc</option>
				<option value="IId" <?php if ($row[riwayat_golongan]=="IId") { echo "selected"; } ?>>IId</option>
				<option value="IIIa" <?php if ($row[riwayat_golongan]=="IIIa") { echo "selected"; } ?>>IIIa</option>
				<option value="IIIb" <?php if ($row[riwayat_golongan]=="IIIb") { echo "selected"; } ?>>IIIb</option>
				<option value="IIIc" <?php if ($row[riwayat_golongan]=="IIIc") { echo "selected"; } ?>>IIIc</option>
				<option value="IIId" <?php if ($row[riwayat_golongan]=="IIId") { echo "selected"; } ?>>IIId</option>
				<option value="IVa" <?php if ($row[riwayat_golongan]=="IVa") { echo "selected"; } ?>>IVa</option>
				<option value="IVb" <?php if ($row[riwayat_golongan]=="IVb") { echo "selected"; } ?>>IVb</option>
				<option value="IVc" <?php if ($row[riwayat_golongan]=="IVc") { echo "selected"; } ?>>IVc</option>
				<option value="IVd" <?php if ($row[riwayat_golongan]=="IVd") { echo "selected"; } ?>>IVd</option>
				<option value="IVe" <?php if ($row[riwayat_golongan]=="IVe") { echo "selected"; } ?>>IVe</option>
				<option value="Lainnya" <?php 
				if(	$row[riwayat_golongan]<>"Ia" and $row[riwayat_golongan]<>"Ib" and $row[riwayat_golongan]<>"Ic" and $row[riwayat_golongan]<>"Id" and 
				$row[riwayat_golongan]<>"IIa" and $row[riwayat_golongan]<>"IIb" and $row[riwayat_golongan]<>"IIc" and $row[riwayat_golongan]<>"IId" and
				$row[riwayat_golongan]<>"IIIa" and $row[riwayat_golongan]<>"IIIb" and $row[riwayat_golongan]<>"IIIc" and $row[riwayat_golongan]<>"IIId" and
				$row[riwayat_golongan]<>"IVa" and $row[riwayat_golongan]<>"IVb" and $row[riwayat_golongan]<>"IVc" and 
				$row[riwayat_golongan]<>"IVd" and $row[riwayat_golongan]<>"IVe") 
				{ echo "selected"; } ?>>Lainnya</option>
			</select>&nbsp;
			<?php
			if(	$row[riwayat_golongan]<>"Ia" and $row[riwayat_golongan]<>"Ib" and $row[riwayat_golongan]<>"Ic" and $row[riwayat_golongan]<>"Id" and 
				$row[riwayat_golongan]<>"IIa" and $row[riwayat_golongan]<>"IIb" and $row[riwayat_golongan]<>"IIc" and $row[riwayat_golongan]<>"IId" and
				$row[riwayat_golongan]<>"IIIa" and $row[riwayat_golongan]<>"IIIb" and $row[riwayat_golongan]<>"IIIc" and $row[riwayat_golongan]<>"IIId" and
				$row[riwayat_golongan]<>"IVa" and $row[riwayat_golongan]<>"IVb" and $row[riwayat_golongan]<>"IVc" and 
				$row[riwayat_golongan]<>"IVd" and $row[riwayat_golongan]<>"IVe")
			{
			?>
			<input name="input_riwayat_golongan" type ="text" class="inputbox"  value="<?php echo $row[riwayat_golongan]; ?>" size="15">
			<?php
			}
			?>
	  </td>
 </tr>
  </form>
   <?php
  }
  $strsql="select * from peg_pekerjaan where id_pegawai='$id_pegawai' order by id_pekerjaan desc"; 
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="70"><a href="?do=data.pekerjaan&act=edit&id=<?php echo $row[id_pegawai]; ?>&id_pekerjaan=<?php echo $row[id_pekerjaan]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="30"><a href="?do=data.pekerjaan&act=del&id=<?php echo $row[id_pegawai]; ?>&id_pekerjaan=<?php echo $row[id_pekerjaan]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
	<td height="25" align="left"><?php echo $row[riwayat_pekerjaan]; ?></td>
	<td height="25" align="center">
	<?php
	  	$temp=explode("-",$row[riwayat_jbt_tmt]); 
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
	<td height="25" align="center"><?php echo $row[riwayat_jbt_eselon]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_sat_kerja]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_no_sk]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[riwayat_tgl_sk]); 
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
	<td height="25" align="center"><?php echo $row[riwayat_pejabat_sk]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_pangkat]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_golongan]; ?></td>
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