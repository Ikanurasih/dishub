<?php
$tanggal = $_REQUEST['tanggal'];
$no_kendaraan = $_REQUEST['no_kendaraan'];
$jenis_kendaraan = $_REQUEST['jenis_kendaraan'];
$id	= $_REQUEST['id'];
$keterangan=$_REQUEST['keterangan'];
$input1=$_REQUEST['input1'];
	

if ($act=="del")
{
mysql_query("delete from cargo_kendaraan where id='$id'");
}
?>

<html>
<head>
<title>PAJAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>
function showme(){
var s = document.frmadd.jenis_kendaraan;
var h = document.frmadd.input1;
if(s.selectedIndex== 7 ){
h.style.visibility="visible";
}else{
h.style.visibility="hidden";
}
}
</script>
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Parkir </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Parkir: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_parkir.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.parkir"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form name="frmadd" method="post" action="insert_parkir.php">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Sewa Parkir</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tanggal" id="tanggal" size="10" value="<?php echo $tanggal; ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor Kendaraan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="20" value="<?php echo $no_kendaraan; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <select name="jenis_kendaraan" class="inputbox" onChange="showme()">
			<option value="Sepeda Motor" <?php if ($jenis_kendaraan=="Sepeda Motor") echo "selected"; ?>>Sepeda Motor</option>
			<option value="Mobil Pribadi" <?php if ($jenis_kendaraan=="Mobil Pribadi") echo "selected"; ?>>Mobil Pribadi</option>
			<option value="Pick Up" <?php if ($jenis_kendaraan=="Pick Up") echo "selected"; ?>>Pick Up</option>
			<option value="Truk" <?php if ($jenis_kendaraan=="Truk") echo "selected"; ?>>Truk</option>
			<option value="Tronton" <?php if ($jenis_kendaraan=="Tronton") echo "selected"; ?>>Tronton</option>
			<option value="Gandengan" <?php if ($jenis_kendaraan=="Gandengan") echo "selected"; ?>>Gandengan</option>
			<option value="Tempelan" <?php if ($jenis_kendaraan=="Tempelan") echo "selected"; ?>>Tempelan</option>
			<option value="Lainnya" <?php if ($jenis_kendaraan=="Lainnya") echo "selected"; ?>>Lainnya</option>
		</select><input type="text" name="input1" style="position:relative;visibility:hidden;" value="<?php echo $input1 ?>" class="inputbox"/></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Keterangan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="keterangan" size="45" value="<?php echo $keterangan; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.parkir"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select * from cargo_kendaraan where id='$id' order by id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frmadd" method="post" action="update_parkir.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Sewa Parkir</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tanggal" id="tanggal" size="10" value="<?php if ($row[tanggal]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal];} ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tanggal'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor Kendaraan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="no_kendaraan" size="20" value="<?php echo $row[no_kendaraan]; ?>" class="inputbox"   /></td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Kendaraan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <select name="jenis_kendaraan" class="inputbox" onChange="showme()">
			<option value="Sepeda Motor" <?php if ($row[jenis_kendaraan]=="Sepeda Motor") echo "selected"; ?>>Sepeda Motor</option>
			<option value="Mobil Pribadi" <?php if ($row[jenis_kendaraan]=="Mobil Pribadi") echo "selected"; ?>>Mobil Pribadi</option>
			<option value="Pick Up" <?php if ($row[jenis_kendaraan]=="Pick Up") echo "selected"; ?>>Pick Up</option>
			<option value="Truk" <?php if ($row[jenis_kendaraan]=="Truk") echo "selected"; ?>>Truk</option>
			<option value="Tronton" <?php if ($row[jenis_kendaraan]=="Tronton") echo "selected"; ?>>Tronton</option>
			<option value="Gandengan" <?php if ($row[jenis_kendaraan]=="Gandengan") echo "selected"; ?>>Gandengan</option>
			<option value="Tempelan" <?php if ($row[jenis_kendaraan]=="Tempelan") echo "selected"; ?>>Tempelan</option>
			<option value="Lainnya" <?php if ($row[jenis_kendaraan]=="Lainnya") echo "selected"; ?>>Lainnya</option>
		</select><input type="text" name="input1" value="<?php echo $row[jenis_kendaraan]; ?>" class="inputbox"/></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Keterangan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="keterangan" size="45" value="<?php echo $row[keterangan]; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.parkir"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
   <?php
   }
   else
   {
   ?>
   <table width="800" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="610"><a href="?act=add&do=data.parkir"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.parkir">
                    <input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
                    <input type="hidden" name="key2" value="<?php echo $key2; ?>" id="key2_sr">
                    <td><select name="kategori" class="inputbox" onChange="submit();" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="no_kendaraan" <?php if ($kategori=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
	<option value="jenis_kendaraan" <?php if ($kategori=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="tanggal" <?php if ($kategori=="tanggal") echo "selected"; ?>>Tanggal</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.parkir">
    				<td> 
                    <?php
					if ($kategori=="tanggal")
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
                    <form method="post" action="index.php?do=data.parkir">
                    <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
                    <input type="hidden" name="key" value="<?php echo $key; ?>" id="key_sr">
                    <td><select name="kategori2" class="inputbox" onChange="submit();" id="kategori2">
                    <option value="">-----------------------------</option>
	<option value="no_kendaraan" <?php if ($kategori2=="no_kendaraan") echo "selected"; ?>>No. Kendaraan</option>
	<option value="jenis_kendaraan" <?php if ($kategori2=="jenis_kendaraan") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="tanggal" <?php if ($kategori2=="tanggal") echo "selected"; ?>>Tanggal</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.parkir">
    				<td> 
                    <?php
					if ($kategori2=="tanggal")
					{
					?>
					<input type="text" name="key2" id="key2" size="10" value="<?php echo $key2; ?>" class="inputbox" readonly=""> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('key2'),'yyyy-mm-dd',this)" style="cursor:pointer" />&nbsp;
					<?php

					}
					else
					{
					?>
					<input type="text" name="key2" id="key2" value="<?php echo $key2; ?>" class="inputbox" onKeyUp=" document.getElementById('key2_sr').value=this.value;"> 
					<?php
					}
					?>
                    </td>
                  </form>
                </tr>
                <tr>
                	<td colspan="5"><input type="button" value=" Cari " class="inputbox" onClick=" document.location.href='index.php?do=data.parkir&kategori='+document.getElementById('kategori').value+'&key='+document.getElementById('key').value+'&kategori2='+document.getElementById('kategori2').value+'&key2='+document.getElementById('key2').value; "></td>
                </tr>
            </table>
        </fieldset>
    </td>
	<td width="18"></td>
	<td width="152" valign="bottom"><div align="right"><a href="excel_parkir.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.parkir&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="800">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Tanggal</td> 
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Nomor Kendaraan </td>                                        
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan </td>
	<td   width="350" background="images/bgcell.gif" height="25" align="center">Keterangan </td>              
   </tr>
  <?php
	/*if ($kategori=="no_kendaraan" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where no_kendaraan like '%$key%' order by id desc";	}
	elseif ($kategori=="jenis_kendaraan" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where jenis_kendaraan like '%$key%' order by id desc";	}
	elseif ($kategori=="tanggal" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where tanggal='$key' order by id desc";	}*/
	
	if(!empty($key)){
		if(!empty($kategori)){
			if(!empty($kategori2)){
			$strsql="select * from cargo_kendaraan where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";
			}else{
			$strsql="select * from cargo_kendaraan where $kategori like '%$key%' order by id desc";
			}
		}else{
			if(!empty($kategori2)){
				$strsql="select * from cargo_kendaraan where $kategori2 like '%$key2%' order by id desc";
			}
		}
	}
	else
	{  $strsql="select * from cargo_kendaraan order by id desc"; 	}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="50"><a href="?do=data.parkir&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.parkir&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
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
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
	<td height="25" align="left"><?php echo $row[keterangan]; ?></td>
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
