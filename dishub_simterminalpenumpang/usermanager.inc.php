<?php
$act=$_REQUEST['act'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$id=$_REQUEST['id'];

if ($act=='set')
{
$strsql="select id,aktif from usermanager where id='$id'";
$hasil=mysql_query($strsql);
$row=mysql_fetch_array($hasil);

	if ($row[aktif]=='1')
	{
	mysql_query("update usermanager set aktif='0' where id='$id' and aktif='1'");
	}
	else
	{
	mysql_query("update usermanager set aktif='1' where id='$id' and aktif='0'");
	}
}

if ($act=='del')
{
mysql_query("delete from usermanager where id='$id'");
}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="59"><div align="left"><img src="images/user.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">User Manager </font></strong></td>
  </tr>
</table>
<table width="576" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.usermanager"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
</table>
<table border="1" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_white"> 
    <td width="125" height="25" align="center"  background="images/bgcell.gif">Username</td>
    <td width="125" align="center"   background="images/bgcell.gif">Password</td>
    <td width="100" align="center"  background="images/bgcell.gif" >Tipe</td>	
    <td width="50" align="center"  background="images/bgcell.gif" >Status</td>
    <td width="155" align="center"  background="images/bgcell.gif">Last Login</td>
    <td colspan="3" background="images/bgcell.gif">&nbsp;</td>
  </tr>
  <?php
  if ($act=='add')
  {
  ?>  
  <tr class="text" bgcolor="efefef">
  <form method="post" action="insert_user.php">
    <td align=center><input type=text maxlength=10 name=username size=18 value="<?php echo $username; ?>" class=inputbox></td>
    <td align=center><input type=password maxlength=10 name=password size=18 value="<?php echo $password; ?>" class=inputbox></td>
    <td align=center>
	<select name="tipe2" class=inputbox>
		<option value=1 <?php if ($tipe2=="1") { echo "selected"; }  ?>>Administrator</option>
		<!--<option value=2 <?php if ($tipe2=="2") { echo "selected"; }  ?>>Operator</option>-->
	</select>
    </td>
    <td align=center>&nbsp;</td>
    <td align=center>&nbsp;</td>
    <td colspan="3" background="images/bgcell.gif" align="center" valign="middle">
	<a href="index.php?do=data.usermanager"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="image" src="images/save.gif" title="Klik disini untuk Simpan">
	</td>
	</form>
  </tr>
  <?php
  }
  elseif ($act=="edit")
  {
  $strsql="select * from usermanager where id='$id'";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <tr class="text" bgcolor="efefef">
  <form method="post" action="update_user.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <td align=center><input type=text maxlength=10 name=username size=18 value="<?php echo $row[login]; ?>" class=inputbox></td>
    <td align=center><input type=password maxlength=10 name=password size=18 value="<?php echo $row[pwd]; ?>" class=inputbox></td>
    <td align=center>
	<select name="tipe2" class=inputbox>
		<option value=1 <?php if ($row[tipe]=="1") { echo "selected"; }  ?>>Administrator</option>
		<!--<option value=2 <?php if ($row[tipe]=="2") { echo "selected"; }  ?>>Operator</option>-->
	</select>
    </td>
    <td align=center>&nbsp;</td>
    <td align=center>&nbsp;</td>
    <td colspan="3" background="images/bgcell.gif" align="center" valign="middle">
	<a href="index.php?do=data.usermanager"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="image" src="images/save.gif" title="Klik disini untuk Simpan">
	</td>
	</form>
  </tr>  
  <?php
  }
	$strsql="select id,login,pwd,tipe,aktif,last_login from usermanager where modul = '6' order by id desc";
	$hasil=mysql_query($strsql);
	while($row=mysql_fetch_array($hasil))
	{
	$NO++;
	if ($NO%2==1) $warna="efefef"; else $warna="dddddd"; 
  ?>
  <tr bgcolor="<? echo $warna ?>" class="text"> 
    <td height="23" align="left"><?php echo $row[login]; ?></td>
    <td align="left">
	<?php
	$panjang=strlen($row[pwd]);
	for ($i=0;$i<$panjang;$i++)
	{
	echo "<font size=4><b>&#8226;</b></font>";
	}
	?>
	</td>
    <td height="23" align="left"><?php 
	if ($row[tipe]=="1")
	{
	echo "Administrator";
	}
	else
	{
	echo "Operator";
	}
	 ?></td>
    <td align="center"> 
      <?php if ($row[aktif]=='1') { echo "<img src=images/tick.png>"; } else { echo "<img src=images/cancel.png>"; } ?>
    </td>
    <td align="center"><?php 
	if ($row[last_login]=='') 
	{ 
	echo "&nbsp;"; 
	} 
	else 
	{ 
	echo $row[last_login]; 
	} 
	?></td>
    <td width="60" align="center"><a href="index.php?do=data.usermanager&act=edit&id=<?php echo $row[id]; ?>"><img src="images/icon_edit.gif" alt="klik disini untuk Edit Data" border="0"></a></td>
    <?php
	if ($nameuser==$row[login])
	{
	?>
	<td width="20" align="center"><img src="images/icon_delete.gif" alt="account User masih Aktif" border="0"></td>
    <?php
	}
	else
	{
	?>
	<td width="20" align="center"><a href="index.php?do=data.usermanager&act=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('USERNAME: <?php  echo $row[login]; ?>');"><img src="images/icon_delete.gif" alt="klik disini untuk Hapus Data" border="0"></a></td>
	<?php
	}
	?>
	<td width="20" align="center"><a href="index.php?do=data.usermanager&act=set&id=<?php echo $row[id]; ?>"><img src="images/activate.gif" alt="klik disini untuk Set Aktif atau Non Aktif" border="0"></a></td>
  </tr>
  <?php
	}
	mysql_free_result($hasil);
	?>
</table>
</body>
</html>
