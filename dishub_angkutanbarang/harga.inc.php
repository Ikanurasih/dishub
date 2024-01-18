<?php
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
?>
<html>
<head>
<title>Data Karcis</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Set Harga </font></strong></td>
  </tr>
</table>
<br>
<table border="1" cellspacing="0" cellpadding="1">
  <tr class="tdtitle_white"> 
    <td height="25" align="center" background="images/bgcell.gif" width="200">JENIS PEMBAYARAN </td>
    <td height="25" align="center" background="images/bgcell.gif" width="80">HARGA </td>
    <td colspan='1' background="images/bgcell.gif" height="25" align="center" width="100"></td>
  </tr>
<?php
if ($act=="edit")
{
  	  $strsql="select * from bar_harga where id='$id'";
  	  $hasil=mysql_query($strsql);
	  $row=mysql_fetch_array($hasil);
?>
    <tr bgcolor="efefef" class="text">
    <form method="post" name="frmedit" action="update_harga.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<td height="23" align="left"><?php echo $row[jenis_pembayaran]; ?></td>
    <td height="23" align="right"><input type="text" size="15" value="<?php echo $row[harga]; ?>" class="inputbox" name="harga"></td>
    <td width="60" align="center"><a href="index.php?do=data.harga"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="image" src="images/save.gif" title="Klik disini untuk Simpan">
	</td>
	</form>
</tr>
  <?php
  }
  	  $strsql="select * from bar_harga order by tipe asc";
  	  $hasil=mysql_query($strsql);
	  while($row=mysql_fetch_array($hasil))
	  {
	 	$NO++;
		if ($NO%2==1) $warna="efefef"; else $warna="dddddd"; 
  ?>
    <tr bgcolor="<? echo $warna ?>" class="text">
    <td height="23" align="left"><?php echo $row[jenis_pembayaran]; ?></td>
    <td height="23" align="right"><?php null($row[harga]); ?></td>
    <td width="60" align="center"><a href="?do=data.harga&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" alt="klik disini untuk Edit Data" border="0"></a></td>
</tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>