<?php
$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$nomor_sk = $_REQUEST['nomor_sk'];
$tgl_sk = $_REQUEST['tgl_sk'];
$masa_berlaku = $_REQUEST['masa_berlaku'];
$luas = $_REQUEST['luas'];
$keterangan = $_REQUEST['keterangan'];
$input1=$_REQUEST['input1'];
$id					=$_REQUEST['id'];
	

if ($act=="del")
{
mysql_query("delete from cargo_wc where id='$id'");
}
?>

<html>
<head>
<title>PAJAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script>  
function showme(){  
var s = document.bengkel.luas;  
var h = document.bengkel.input1;  
if( s.selectedIndex == 1 ) {  
h.style.visibility="visible";  
}else{  
h.style.visibility="hidden";  
}  
}  
</script>

</head>
<body>
<table width="941" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td width="880"><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Sewa Bengkel, Tempat Cuci Kendaraan dan Tambal Ban </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Sewa Bengkel, Tempat Cuci Kendaraan dan Tambal Ban: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_bengkel.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.sewa_bengkel"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
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
  <form name="bengkel" method="post" action="insert_bengkel.php">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Sewa Bengkel, Tempat Cuci Kendaraan Dan Tambal Ban</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nama" size="30" value="<?php echo $nama; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat" size="45" value="<?php echo $alamat; ?>" class="inputbox"   /></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Luas</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <select name="luas" class="inputbox"  onchange="showme()">
			<option value="8m x 10m = 80 m2" <?php if ($luas=="8m x 10m = 80 m2") { echo "selected"; } ?>>8m x 10m = 80 m2</option>
			<option value="Lainnya" <?php if ($luas=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
		  </select><input type ="text" name="input1" style=" position:relative;visibility:hidden;" value="<?php echo $input1; ?>" class="inputbox"> </td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor SK </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nomor_sk" size="15" value="<?php echo $nomor_sk; ?>" class="inputbox"   /></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal SK </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tgl_sk" id="tgl_sk" size="10" value="<?php echo $tgl_sk; ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_sk'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku Sewa </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="masa_berlaku" id="masa_berlaku" size="10" value="<?php echo $masa_berlaku; ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Keterangan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="keterangan" size="45" value="<?php echo $keterangan; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.sewa_bengkel"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
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
  $strsql="select * from cargo_wc where id='$id' order by id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="bengkel" method="post" action="update_bengkel.php">
   <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Sewa Bengkel, Tempat Cuci Kendaraan Dan Tambal Ban</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nama</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nama" size="30" value="<?php echo $row[nama]; ?>" class="inputbox"   /></td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Alamat</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="alamat" size="45" value="<?php echo $row[alamat]; ?>" class="inputbox"   /></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Luas</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;   <select name="luas" class="inputbox" onChange="showme()">
	<option value="8m x 10m = 80 m2" <?php if ($row[luas]=="8m x 10m = 80 m2") { echo "selected"; } ?>>8m x 10m = 80 m2</option>
	<option value="Lainnya" <?php if ($row[luas]=="Lainnya") { echo "selected"; } ?>>Lainnya</option>
	</select><input type ="text" name="input1" style=" position:relative;visibility:hidden;" value="<?php echo $row[luas]; ?>"> </td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor SK </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="nomor_sk" size="15" value="<?php echo $row[nomor_sk]; ?>" class="inputbox"   /></td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tanggal SK </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="tgl_sk" id="tgl_sk" size="10" value="<?php if ($row[tanggal_sk]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal_sk];} ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_sk'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Masa Berlaku Sewa </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp;    <input type="text" name="masa_berlaku" id="masa_berlaku" size="10" value="<?php if ($row[tanggal_sk]=="0000-00-00") {	echo ""; }else{ echo $row[tanggal_sk];} ?>" class="inputbox" readonly /> <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_berlaku'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Keterangan</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
&nbsp; <input type="text" name="keterangan" size="45" value="<?php echo $row[keterangan]; ?>" class="inputbox"   /></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.sewa_bengkel"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
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
<table width="1090" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="710"><a href="?act=add&do=data.sewa_bengkel"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
 <td>
    	<fieldset>
        	<legend>Pencarian</legend>
            <table>
            	<tr class="text">
                	<td>Pencarian 1</td>
                    <td>:</td>
                    <form method="post" action="index.php?do=data.sewa_bengkel">
                    <input type="hidden" name="kategori2" value="<?php echo $kategori2; ?>">
                    <input type="hidden" name="key2" value="<?php echo $key2; ?>" id="key2_sr">
                    <td><select name="kategori" class="inputbox" onChange="submit();" id="kategori">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori=="nama") echo "selected"; ?>>Nama</option>
	<option value="alamat" <?php if ($kategori=="alamat") echo "selected"; ?>>Alamat</option>
    <option value="luas" <?php if ($kategori=="luas") echo "selected"; ?>>Luas</option>
	<option value="nomor_sk" <?php if ($kategori=="nomor_sk") echo "selected"; ?>>Nomor SK</option>
	<option value="tanggal_sk" <?php if ($kategori=="tanggal_sk") echo "selected"; ?>>Tanggal SK</option>
	<option value="masa_berlaku" <?php if ($kategori=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.sewa_bengkel">
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
                    <form method="post" action="index.php?do=data.sewa_bengkel">
                    <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
                    <input type="hidden" name="key" value="<?php echo $key; ?>" id="key_sr">
                    <td><select name="kategori2" class="inputbox" onChange="submit();" id="kategori2">
                    <option value="">-----------------------------</option>
	<option value="nama" <?php if ($kategori2=="nama") echo "selected"; ?>>Nama</option>
	<option value="alamat" <?php if ($kategori2=="alamat") echo "selected"; ?>>Alamat</option>
    <option value="luas" <?php if ($kategori2=="luas") echo "selected"; ?>>Luas</option>
	<option value="nomor_sk" <?php if ($kategori2=="nomor_sk") echo "selected"; ?>>Nomor SK</option>
	<option value="tanggal_sk" <?php if ($kategori2=="tanggal_sk") echo "selected"; ?>>Tanggal SK</option>
	<option value="masa_berlaku" <?php if ($kategori2=="masa_berlaku") echo "selected"; ?>>Masa Berlaku</option>
	</select></td>
    </form>
    <form method="post" action="index.php?do=data.sewa_bengkel">
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
					<input type="text" name="key2" id="key2" value="<?php echo $key2; ?>" class="inputbox" onKeyUp=" document.getElementById('key2_sr').value=this.value;"> 
					<?php
					}
					?>
                    </td>
                  </form>
                </tr>
                <tr>
                	<td colspan="5"><input type="button" value=" Cari " class="inputbox" onClick=" document.location.href='index.php?do=data.sewa_bengkel&kategori='+document.getElementById('kategori').value+'&key='+document.getElementById('key').value+'&kategori2='+document.getElementById('kategori2').value+'&key2='+document.getElementById('key2').value; "></td>
                </tr>
            </table>
        </fieldset>
    </td>
	<td width="79"></td>
	<td width="281" valign="bottom"><div align="right"><a href="excel_bengkel.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.sewa_bengkel&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="1090">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Nama</td> 
    <td   width="250" background="images/bgcell.gif" height="25" align="center">Alamat</td>                                        
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Luas</td>              
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Nomor SK </td>              
    <td   width="130" background="images/bgcell.gif" height="25" align="center">Tanggal SK </td>                                  
    <td   width="200" background="images/bgcell.gif" height="25" align="center">Masa Berlaku Sewa </td>   
	<td   width="300" background="images/bgcell.gif" height="25" align="center">Keterangan </td>                                
	<td   width="120" background="images/bgcell.gif" height="25" align="center">Info Jatuh Tempo </td>                                
  </tr>
  <?php
	/*if ($kategori=="nama" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and nama like '%$key%' order by id desc";	}
	elseif ($kategori=="alamat" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and alamat like '%$key%' order by id desc";	}
	elseif ($kategori=="luas" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and luas like '%$key%' order by id desc";	}
	elseif ($kategori=="nomor_sk" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and nomor_sk like '%$key%' order by id desc";	}
	elseif ($kategori=="tanggal" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and tanggal_sk='$key' order by id desc";	}
	elseif ($kategori=="berlaku" and !empty($key))
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and masa_berlaku='$key' order by id desc";	}*/
	
	if(!empty($key) or !empty($key2)){
		if(!empty($kategori))
		{ 
			if(!empty($kategori2)){
			$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";	
			}else{
			$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and $kategori like '%$key%' order by id desc";
			}
		}else{
			if(!empty($kategori2)){
			$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' and $kategori2 like '%$key%' order by id desc";
			}
		}
	}
	else
	{  $strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='2' order by id desc"; 	}
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
    <td align="center" width="50"><a href="?do=data.sewa_bengkel&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.sewa_bengkel&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
    <td height="25" align="center"><?php echo $row[nomor_sk]; ?></td>
	<td height="25" align="left"><?php
	  $temp=explode("-",$row[tanggal_sk]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25" align="left"><?php
	  $temp=explode("-",$row[masa_berlaku]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25"><?php echo $row[keterangan];?></td>
	<td height="25" align="center"><?php echo $row[jatuh_tempo]." hari"; ?></td>
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
