<?php
$nama_driver=$_REQUEST['nama_driver'];
$tmp_lahir=$_REQUEST['tmp_lahir'];
$tgl_lahir=$_REQUEST['tgl_lahir'];
$alamat_driver=$_REQUEST['alamat_driver'];
$usia=$_REQUEST['usia'];
$pendidikan=$_REQUEST['pendidikan'];
$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$jenis_kend=$_REQUEST['jenis_kend'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_trayek=$_REQUEST['jenis_trayek'];
$id_kendaraan=$_REQUEST['id_kendaraan'];
$id_trayek=$_REQUEST['id_trayek'];
$id_pemilik=$_REQUEST['id_pemilik'];
$id=$_REQUEST['id'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];

if ($act=="del")
{
mysql_query("delete from ang_master_pengemudi where id='$id'");
}
?>

<html>
<head>
<title>Pengemudi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/dosen_wali.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Pengemudi </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Pengemudi: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_pengemudi.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.pengemudi"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
else
{
?>
<table width="1260" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <td width="430"><a href="?act=add&do=data.pengemudi&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Kendaraan"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.pengemudi">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<option value="nama_driver" <?php if ($kategori=="nama_driver") echo "selected"; ?>>Nama Pengemudi</option>
	<!--<option value="jenis_kend" <?php if ($kategori=="jenis_kend") echo "selected"; ?>>Jenis Kendaraan</option>
	<option value="nama" <?php if ($kategori=="wilayah_opr") echo "selected"; ?>>Nama Pemilik</option>-->
	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377" align="right"><a href="index.php?do=data.pengemudi&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" border="0" title="Klik disini untuk Cetak Laporan"></a></td>
	</form>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="1260">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
	<td width="130" background="images/bgcell.gif" height="25" align="center">Nama Pengemudi</td>              
    <td width="130" background="images/bgcell.gif" height="25" align="center">Tempat, Tgl. Lahir</td>              
    <td width="180" background="images/bgcell.gif" height="25" align="center">Alamat</td>              
    <td width="50" background="images/bgcell.gif" height="25" align="center">Usia</td>              
    <td width="70" background="images/bgcell.gif" height="25" align="center">Pendidikan</td>              
    <td width="70" background="images/bgcell.gif" height="25" align="center">Jenis <br>Kendaraan</td>              
    <td width="130" background="images/bgcell.gif" height="25" align="center">Jenis Angkutan</td>    
    <td width="100" background="images/bgcell.gif" height="25" align="center">Jenis Trayek</td>    
    <td width="130" background="images/bgcell.gif" height="25" align="center">Nama Pemilik</td>    
    <td width="180" background="images/bgcell.gif" height="25" align="center">Alamat Pemilik</td>    
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_master_pengemudi.php">
  <input type="hidden" name="id_pemilik" value="<?php echo $id_pemilik; ?>">
  <input type="hidden" name="id_trayek" value="<?php echo $id_trayek; ?>">
  <input type="hidden" name="id_kendaraan" value="<?php echo $id_kendaraan; ?>">
    <td align="center" width="35"><a href="index.php?do=data.pengemudi"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
	<td height="25" align="center"><input type="text" name="nama_driver" size="20" value="<?php echo $nama_driver; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tmp_lahir" size="15" value="<?php echo $tmp_lahir; ?>" class="inputbox">Tgl. Lahir,<br> 
	<input type="text" name="tgl_lahir" size="10" id="tgl_lahir" class="inputbox" value="<?php echo $tgl_lahir; ?>" readonly />
    <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer">
	</td>
    <td height="25" align="center"><textarea name="alamat_driver" class="inputbox" cols="30" rows="5"><?php echo $alamat_driver; ?></textarea></td>
    <td height="25" align="center"><input type="text" name="usia" size="4" maxlength="3" value="<?php echo $usia; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="pendidikan" size="15" value="<?php echo $pendidikan; ?>" class="inputbox"></td>
    <td height="25" align="center"><!--<input type="text" name="jenis_kend" size="10" value="<?php echo $jenis_kend; ?>" readonly class="inputbox"><input type="hidden" name="no_kend" value="<?php echo $no_kend; ?>"><input type="hidden" name="no_uji" value="<?php echo $no_uji; ?>"><input type="hidden" name="merk" value="<?php echo $merk; ?>"><input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen_kend("view_kendaraan.php")'>-->
	<select name="jenis_kendaraan" class="inputbox">
		<?php
		$strsql="select * from ang_jenis_kendaraan order by id asc";
		$hasil=mysql_query($strsql);
		while($row=mysql_fetch_array($hasil))
		{
		?>
		<option value="<?php echo $row[jenis_kendaraan]; ?>" <?php if ($jenis_kendaraan==$row[jenis_kendaraan]) { echo "selected"; } ?>><?php echo $row[jenis_kendaraan]; ?></option>
		<?php
		}
		?>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $jenis_angkutan; ?>" readonly class="inputbox"><input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen_try("view_trayek.php")'></td>
    <td height="25" align="center"><input type="text" name="jenis_trayek" size="15" value="<?php echo $jenis_trayek; ?>" readonly class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama" size="15" value="<?php echo $nama; ?>" readonly class="inputbox"><input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_pemilik.php")'></td>
    <td height="25" align="center"><textarea name="alamat" class="inputbox" cols="30" rows="5" readonly="readonly"><?php echo $alamat; ?></textarea></td>
    </form>
  </tr>
   <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select a.*,b.nama,b.alamat,d.jenis_angkutan,d.jenis_trayek 
  from ang_master_pengemudi a, ang_master_pemilik b, ang_master_trayek d 
  where a.id_pemilik=b.id && a.id_trayek=d.id && a.id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_master_pengemudi.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_pemilik" value="<?php echo $row[id_pemilik]; ?>">
  <input type="hidden" name="id_kendaraan" value="<?php echo $row[id_kendaraan]; ?>">
  <input type="hidden" name="id_trayek" value="<?php echo $row[id_trayek]; ?>">
    <td align="center" width="35"><a href="index.php?do=data.pengemudi"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama_driver" size="20" value="<?php echo $row[nama_driver]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="tmp_lahir" size="15" value="<?php echo $row[tmp_lahir]; ?>" class="inputbox">Tgl. Lahir,<br> 
	<input type="text" name="tgl_lahir" size="10" id="tgl_lahir" class="inputbox" value="<?php echo $row[tgl_lahir]; ?>" readonly />
    <img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_lahir'),'yyyy-mm-dd',this)" style="cursor:pointer">
	</td>
    <td height="25" align="center"><textarea name="alamat_driver" class="inputbox" cols="30" rows="5"><?php echo $row[alamat_driver]; ?></textarea></td>
    <td height="25" align="center"><input type="text" name="usia" size="4" maxlength="3" value="<?php echo $row[usia]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="pendidikan" size="15" value="<?php echo $row[pendidikan]; ?>" class="inputbox"></td>
    <td height="25" align="center">
	<select name="jenis_kendaraan" class="inputbox">
		<option value="<?php echo $row[jenis_kendaraan]; ?>"><?php echo $row[jenis_kendaraan]; ?></option>
		<?php
		$strsql3="select * from ang_jenis_kendaraan where jenis_kendaraan<>'$row[jenis_kendaraan]' order by id asc";
		$hasil3=mysql_query($strsql3);
		while($row3=mysql_fetch_array($hasil3))
		{
		?>
		<option value="<?php echo $row3[jenis_kendaraan]; ?>"><?php echo $row3[jenis_kendaraan]; ?></option>
		<?php
		}
		?>
	</select>
	</td>
    <td height="25" align="center"><input type="text" name="jenis_angkutan" size="15" value="<?php echo $row[jenis_angkutan]; ?>" class="inputbox"><input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen_try("view_trayek.php")'></td>
    <td height="25" align="center"><input type="text" name="jenis_trayek" size="15" value="<?php echo $row[jenis_trayek]; ?>" class="inputbox"></td>
    <td height="25" align="center"><input type="text" name="nama" size="15" value="<?php echo $row[nama]; ?>" class="inputbox"><input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen("view_pemilik.php")'></td>
    <td height="25" align="center"><input type="text" name="alamat" size="20" value="<?php echo $row[alamat]; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  if ($kategori=="nama_driver")
  {  $strsql="select a.*,b.nama,b.alamat,d.jenis_angkutan,d.jenis_trayek 
  from ang_master_pengemudi a, ang_master_pemilik b, ang_master_trayek d where a.id_pemilik=b.id && a.id_trayek=d.id && a.nama_driver like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.*,b.nama,b.alamat,d.jenis_angkutan,d.jenis_trayek 
  from ang_master_pengemudi a, ang_master_pemilik b, ang_master_trayek d where a.id_pemilik=b.id && a.id_trayek=d.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.pengemudi&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.pengemudi&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama_driver]; ?></td>
    <td height="25" align="left"><?php echo $row[tmp_lahir]; ?>, <br><?php
	  $temp=explode("-",$row[tgl_lahir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo $row[alamat_driver]; ?></td>
    <td height="25" align="center"><?php echo $row[usia]; ?>&nbsp;th</td>
    <td height="25" align="left"><?php echo $row[pendidikan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_trayek]; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
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