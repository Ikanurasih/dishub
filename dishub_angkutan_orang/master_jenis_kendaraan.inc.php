<?php 
$nama		=$_REQUEST['nama'];
$alamat		=$_REQUEST['alamat'];
$id			=$_REQUEST['id'];

if ($act=="del")
{
mysql_query("delete from ang_jenis_kendaraan where id='$id'");
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
    <td width="59"><div align="left"><img src="images/table_48.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Master Jenis Kendaraan </font></strong></td>
  </tr>
</table>
<table width="821" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="430"><a href="?act=add&do=data.jenis_kendaraan&id=<?php echo $id; ?>"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="1" width="270">
  <tr class="tdtitle_white">
	<td colspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td width="200" background="images/bgcell.gif" height="25" align="center">Nama Jenis Kendaraan </td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_jenis_kendaraan.php">
    <td align="center" width="50"><a href="index.php?do=data.jenis_kendaraan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="20"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="25" value="<?php echo $nama; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  elseif ($act=="edit")
  {
  $strsql2="select * from ang_jenis_kendaraan where id='$id'";
  $hasil=mysql_query($strsql2);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_jenis_kendaraan.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <td align="center" width="35"><a href="index.php?do=data.jenis_kendaraan"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="30" value="<?php echo $row[jenis_kendaraan]; ?>" class="inputbox"></td>
    </form>
  </tr>
   <?php
  }
  $strsql="select * from ang_jenis_kendaraan order by id desc";
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.jenis_kendaraan&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.jenis_kendaraan&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[jenis_kendaraan]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>