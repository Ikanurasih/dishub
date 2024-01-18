<?php
include "global/config.php";
require "global/global_fungsi.php";

$key=$_REQUEST['key'];
?>
<html>
<head>
<TITLE> Lookup Pemilik </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
</head>
<body topmargin="8">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset class="tdtitle_black">
<legend>Masukkan Nama Pemilik/Perusahaan:</legend>
<input type="text" name="key" value="<?php echo $key; ?>" size="25" class="inputbox"> &raquo; <font size="1.5">Enter
</fieldset>
</form>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr class="tdtitle_white"> 
    <td width="40%" height="25" background="images/bgcell.gif"><div align="center">Nama Pemilik/Perusahaan</div></td>
    <td width="60%" height="25" background="images/bgcell.gif"><div align="center">Alamat</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select * from ang_master_pemilik where nama like '%$key%' order by nama asc"; }
  else
  { $strsql="select * from ang_master_pemilik order by nama asc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
    $NO++;
	if ($NO%2==1)
    $warna="#dddddd";
	else
	$warna="#efefef";	
  ?>
  <tr bgcolor="<?php echo $warna; ?>" onMouseOver="this.className='rowover';" onMouseOut="this.className='rowselected-even';"
  onClick="window.close();javascript:window.opener.document.forms[1].id_pemilik.value='<?php echo $row[id]; ?>';
  window.close();javascript:window.opener.document.forms[1].nama.value='<?php echo $row[nama]; ?>';
   javascript:window.opener.document.forms[1].alamat.value='<?php echo $row[alamat]; ?>';"> 
    <td height="25" class="text">&nbsp;<?php echo $row[nama]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[alamat]; ?></td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>