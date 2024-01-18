<?php
include "global/config.php";
require "global/global_fungsi.php";

$key=$_REQUEST['key'];
?>
<html>
<head>
<TITLE> Lookup Jalan </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
</head>
<body topmargin="8">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset class="tdtitle_black">
<legend>Masukkan Nama Jalan:</legend>
<input type="text" name="key" value="<?php echo $key; ?>" size="25" class="inputbox"> &raquo; <font size="1.5">Enter
</fieldset>
</form>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr class="tdtitle_white"> 
    <td width="35%" height="25" background="images/bgcell.gif"><div align="center">Nama Jalan </div></td>
    <td width="33%" background="images/bgcell.gif"><div align="center">Dari</div></td>
    <td width="32%" background="images/bgcell.gif"><div align="center">Ke</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select * from lal_jalan where nama_jalan like '%$key%' order by nama_jalan asc"; }
  else
  { $strsql="select * from lal_jalan order by nama_jalan asc"; }
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
  onClick="window.close();javascript:window.opener.document.forms[1].id_jalan.value='<?php echo $row[id]; ?>';
  window.close();javascript:window.opener.document.forms[1].nama_jalan.value='<?php echo $row[nama_jalan]; ?>';
   javascript:window.opener.document.forms[1].dari.value='<?php echo $row[dari]; ?>';javascript:window.opener.document.forms[1].ke.value='<?php echo $row[ke]; ?>'"> 
    <td height="25" class="text">&nbsp;<?php echo $row[nama_jalan]; ?></td>
    <td class="text">&nbsp;<?php echo $row[dari]; ?></td>
    <td class="text" align="left"><?php echo $row[ke]; ?>&nbsp;</td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>
