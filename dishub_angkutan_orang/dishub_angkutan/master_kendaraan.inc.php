<?php 
$no_kend		=$_REQUEST['no_kend'];
$no_uji			=$_REQUEST['no_uji'];
$merk			=$_REQUEST['merk'];
$jenis_kend		=$_REQUEST['jenis_kend'];
$cc				=$_REQUEST['cc'];
$bahan_bakar	=$_REQUEST['bahan_bakar'];
$tahun			=$_REQUEST['tahun'];
$no_rangka		=$_REQUEST['no_rangka'];
$no_mesin		=$_REQUEST['no_mesin'];
$daya_orang		=$_REQUEST['daya_orang'];
$daya_barang	=$_REQUEST['daya_barang'];
$id				=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from ang_master_kendaraan where id='$id'");
}
?>
<html>
<head>
<title>Angkutan Orang / Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/table_green_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Kendaraan </font></strong></td>
  </tr>
</table>
<table width="821" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.kendaraan&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.kendaraan">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="no_kend" <?php if ($kategori=="no_kend") echo "selected"; ?>>Nomor Kendaraan</option>
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.kendaraan&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"></a></div></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1100">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
	<td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No.Kend</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="60" background="images/bgcell.gif" height="25" align="center">Merk/Type</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Jenis Kendaraan</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">CC</td>              
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Bahan Bakar</td>              
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No.rangka</td> 
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No.mesin</td>             
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td>     
  </tr>
  <tr class="tdtitle_white">
	<td width="70" background="images/bgcell.gif" height="25" align="center">Orang(0rg)</td>              
    <td width="70" background="images/bgcell.gif" height="25" align="center">Barang(Kg)</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_master_kendaraan.php">
    <td align="center" width="35"><a href="index.php?do=data.kendaraan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="no_kend" size="15" value="<?php echo $no_kend; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="15" value="<?php echo $no_uji; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="merk" size="10" value="<?php echo $merk; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="jenis_kend" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<?php
		$a = "SELECT * FROM ang_jenis_kendaraan order by id asc";  
		$b = mysql_query($a);
		while($c = mysql_fetch_array($b)){ ?> 
		<option value='<?php echo $c[jenis_kendaraan];?>' <?php if($jenis_kend==$c[jenis_kendaraan]) echo "selected"?>><?php echo $c[jenis_kendaraan]; ?></option> <?php } ?>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="cc" size="6" maxlength="5" value="<?php echo $cc; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="bahan_bakar" class='inputbox'>
		<option value='pilihan' selected disabled><b>--Pilih--</b></option>
		<?php
		$a = "SELECT * FROM ang_bahan_bakar order by id asc";  
		$b = mysql_query($a);
		while($c = mysql_fetch_array($b)){ ?> 
		<option value='<?php echo $c[bahan_bakar];?>' <?php if($bahan_bakar==$c[bahan_bakar]) echo "selected"?>><?php echo $c[bahan_bakar]; ?></option>
		<?php } ?>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="no_rangka" size="15" value="<?php echo $no_rangka; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="no_mesin" size="15" value="<?php echo $no_mesin; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="daya_orang" size="8" value="<?php echo $daya_orang; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="daya_barang" size="8" value="<?php echo $daya_barang; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from ang_master_kendaraan where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_master_kendaraan.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.kendaraan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="no_kend" size="15" value="<?php echo $row[no_kend]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="15" value="<?php echo $row[no_uji]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="merk" size="10" value="<?php echo $row[merk]; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="jenis_kend" class='inputbox'>
		<option value='pilihan' selected><b>--Pilih--</b></option>
		<?php
		$a = "SELECT * FROM ang_jenis_kendaraan order by id asc";  
		$b = mysql_query($a);
		while($c = mysql_fetch_array($b)){ ?> 
		<option value='<?php echo $c[jenis_kendaraan];?>' <?php if($row[jenis_kend]==$c[jenis_kendaraan]) echo "selected"?>><?php echo $c[jenis_kendaraan]; ?></option> <?php } ?>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="cc" size="6" maxlength="5" value="<?php echo $row[cc]; ?>" class="inputbox"></td>
	<td height="25" align="center">
	<select name="bahan_bakar" class='inputbox'>
		<option value='pilihan' selected><b>--Pilih--</b></option>
		<?php
		$a = "SELECT * FROM ang_bahan_bakar order by id asc";  
		$b = mysql_query($a);
		while($c = mysql_fetch_array($b)){ ?> 
		<option value='<?php echo $c[bahan_bakar];?>' <?php if($row[bahan_bakar]==$c[bahan_bakar]) echo "selected"?>><?php echo $c[bahan_bakar]; ?></option>
		<?php } ?>
	</select>
	</td>
	<td height="25" align="center"><input type="text" name="tahun" size="5" maxlength="4" value="<?php echo $row[tahun]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="no_rangka" size="15" value="<?php echo $row[no_rangka]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="no_mesin" size="15" value="<?php echo $row[no_mesin]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="daya_orang" size="8" value="<?php echo $row[daya_orang]; ?>" class="inputbox"></td>
	<td height="25" align="center"><input type="text" name="daya_barang" size="8" value="<?php echo $row[daya_barang]; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  if ($kategori=="no_kend")
  {  $strsql="select * from ang_master_kendaraan where no_kend like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from ang_master_kendaraan order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.kendaraan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.kendaraan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left">&nbsp;<?php echo $row[no_kend]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[no_uji]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[merk]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[jenis_kend]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[cc]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[tahun]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[no_rangka]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[no_mesin]; ?></td>
	<td height="25" align="left">&nbsp;<?php echo $row[daya_orang]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[daya_barang]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>