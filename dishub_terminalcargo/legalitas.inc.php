<?php
$jenis_peraturan	=$_REQUEST['jenis_peraturan'];
$judul_peraturan	=$_REQUEST['judul_peraturan'];
$nomor				=$_REQUEST['nomor'];
$tahun				=$_REQUEST['tahun'];
$id					=$_REQUEST['id'];
	

if ($act=="del")
{
mysql_query("delete from cargo_legalitas where id='$id'");
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
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Legalitas </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Legalitas: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_legalitas.php" target="_blank">
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
  <td colspan="3"><a href="index.php?do=data.legalitas"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
elseif ($act=="add_peraturan")
{
?>
<table width="442" border="1" cellpadding="0" cellspacing="0">
  <form name="frm_add_user" method="post" action="insert_legalitas.php" enctype="multipart/form-data">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Tambah Data Legalitas</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Peraturan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="jenis_peraturan" size="30" value="<?php echo $jenis_peraturan; ?>" class="inputbox"   />
    </td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Judul Peraturan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="judul_peraturan" size="35" value="<?php echo $judul_peraturan; ?>" class="inputbox"   />
    </td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="nomor" size="15" value="<?php echo $nomor; ?>" class="inputbox"   />
    </td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="tahun" size="15"  maxlength="4" value="<?php echo $tahun; ?>" class="inputbox"   />
    </td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Upload File</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="file" name="upload_file">
    </td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.legalitas"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
        &nbsp;&nbsp; 
        <input type="image" value="Simpan" src="images/simpan.gif" alt="klik disini untuk Simpan">
      </td>
  </tr>
  </form>
</table>
<?php
}
elseif ($act=="edit")
{
  $strsql="select * from cargo_legalitas where id='$id'"; 
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);
?>
<table width="442" border="1" cellpadding="0" cellspacing="0">
  <form method="post" action="update_legalitas.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <!--DWLayoutTable-->
    <tr class="tdtitle_white"> 
	<td height="25" colspan="3" background="images/bgcell.gif"><div align="center">Edit Data Legalitas</div></td>
  </tr>
  <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Jenis Peraturan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="jenis_peraturan" size="30" value="<?php echo $row[jenis_peraturan]; ?>" class="inputbox"   />
    </td>
  </tr>
   <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Judul Peraturan </td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="judul_peraturan" size="35" value="<?php echo $row[judul_peraturan]; ?>" class="inputbox"   />
    </td>
  </tr>
    <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Nomor</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="nomor" size="15" value="<?php echo $row[nomor]; ?>" class="inputbox"   />
    </td>
  </tr>
     <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Tahun</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
    <td width="303" valign="middle" bgcolor="efefef"> 
      &nbsp;<input type="text" name="nomor" size="15" value="<?php echo $row[tahun]; ?>" class="inputbox"   />
    </td>
  </tr>
      <tr class="tdtitle_black">
    <td width="121" height="30" valign="middle" bgcolor="#dddddd">&nbsp;Upload File</td>
    <td width="10" valign="middle" bgcolor="efefef"> 
      <div align="center">:</div></td>
        	<td height="25" align="center" width="300" bgcolor="efefef">	<?php
	  if ($row[upload_file]<>'')
	  {
		echo "<a href='files/$row[upload_file]' target='_blank' class=link>$row[upload_file]</a><br><br>";
	  }
	  ?>
	  &nbsp; <a href="#" onClick='upload("view_upload.php?id=<?php echo $row[id]; ?>&cek=1")'>Upload</a> | <a href="javascript:document.location.reload();">Reload</a> 
	  <?php if ($row[upload_file]<>'') { ?>| <a href="hapus_file.php?id=<?php echo $row[id]; ?>&upload_file=<?php echo $row[upload_file]; ?>&cek=1" onClick="return confirmdelete('File ini');">Hapus File</a><?php } ?></td>
  </tr>
    <tr valign="middle" class="tdtitle_black2"> 
      <td height="40" colspan="3" bgcolor="efefef">&nbsp; <a href="index.php?do=data.legalitas"><img src="images/kembali2.gif" alt="klik disini untuk Kembali ke Halaman Sebelumnya" width="78" height="23" border="0"></a> 
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
<table width="850" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="431"><a href="?act=add_peraturan&do=data.legalitas"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Legalitas Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.legalitas">
    <td>
    <fieldset>
   		<legend>Pencarian: </legend>
        <table>
        	<tr class="text">
           	  <td>Pencarian 1</td>
              <td>:</td>
                <td><select name="kategori" class="inputbox">
                <option value="">---------------------</option>
	<option value="jenis_peraturan" <?php if ($kategori=="jenis_peraturan") echo "selected"; ?>>Jenis Peraturan</option>
	<option value="judul_peraturan" <?php if ($kategori=="judul") echo "selected"; ?>>Judul Peraturan</option>
	<option value="nomor" <?php if ($kategori=="nomor") echo "selected"; ?>>Nomor</option>
	<option value="tahun" <?php if ($kategori=="tahun") echo "selected"; ?>>Tahun</option>
	</select> <input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> </td>
            </tr>
            <tr class="text">
            	<td>Pencarian 2</td>
                <td>:</td>
                <td><select name="kategori2" class="inputbox">
                <option value="">---------------------</option>
	<option value="jenis_peraturan" <?php if ($kategori2=="jenis_peraturan") echo "selected"; ?>>Jenis Peraturan</option>
	<option value="judul_peraturan" <?php if ($kategori2=="judul") echo "selected"; ?>>Judul Peraturan</option>
	<option value="nomor" <?php if ($kategori2=="nomor") echo "selected"; ?>>Nomor</option>
	<option value="tahun" <?php if ($kategori2=="tahun") echo "selected"; ?>>Tahun</option>
	</select> <input type="text" name="key2" value="<?php echo $key2; ?>" class="inputbox"> </td>
            </tr>
            <tr>
            	<td colspan="3"> <input type="image" src="images/tampil.gif"> </td>
            </tr>
        </table>
        
	
    </fieldset>
	&nbsp;&nbsp;</td>
	<td width="255" valign="top"><div align="right"><a href="excel_legalitas.php?do=data.apill&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>&act=excel"><img src="images/excel.jpg" width="68" height="23" border="0"></a>&nbsp;&nbsp;<a href="index.php?do=data.legalitas&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>&kategori2=<?php echo $kategori2; ?>&key2=<?php echo $key2; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
</table>
 <table border="1" cellspacing="0" cellpadding="1" width="850">
  <tr class="tdtitle_white">
	<td colspan="2"   background="images/bgcell.gif" width="100">&nbsp;</td>
    <td   width="150" background="images/bgcell.gif" height="25" align="center">Jenis Peraturan</td> 
    <td   width="250" background="images/bgcell.gif" height="25" align="center">Judul Peraturan</td>                                        
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Nomor</td>              
    <td   width="100" background="images/bgcell.gif" height="25" align="center">Tahun</td>                                  
    <td   width="100" background="images/bgcell.gif" height="25" align="center">File</td>                                  
  </tr>
  <?php
  if (!empty($key) or !empty($key2))
  {  
  	if(!empty($kategori)){
		if(!empty($kategori2)){
			$strsql="select * from cargo_legalitas where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";	
		}else{
			$strsql="select * from cargo_legalitas where $kategori like '%$key%' order by id desc";
		}
	}else{
		if(!empty($kategori2)){
  		$strsql="select * from cargo_legalitas where $kategori2 like '%$key%' order by id desc";
		}
	}
  } 
   else
  {  $strsql="select * from cargo_legalitas order by id desc"; }
  
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>"> 
    <td align="center" width="50"><a href="?do=data.legalitas&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.legalitas&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td> 
    <td height="25" align="left">&nbsp;<?php echo $row[jenis_peraturan]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[judul_peraturan]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[nomor]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[tahun]; ?></td>
	<td height="25" align="center">
	<?php
	if ($row[upload_file]<>'')
	{
	?>
	<a href="files/<?php echo $row[upload_file]; ?>" target="_blank">[Lihat]</a>
	<?php
	}
	else
	{ echo "&nbsp;"; }
	?>
	</td>
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
