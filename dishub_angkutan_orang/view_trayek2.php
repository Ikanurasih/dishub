<?php
include "global/config.php";
require "global/global_fungsi.php";

$key=$_REQUEST['key'];
?>
<html>
<head>
<TITLE> Lookup Trayek </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
</head>
<body topmargin="8">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset class="tdtitle_black">
<legend>Masukkan Kode Trayek:</legend>
<input type="text" name="key" value="<?php echo $key; ?>" size="25" class="inputbox"> &raquo; <font size="1.5">Enter
</fieldset>
</form>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr class="tdtitle_white"> 
    <td height="25" background="images/bgcell.gif"><div align="center">Jenis Angkutan</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Kode Trayek</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select * from ang_master_trayek where kode_trayek like '%$key%' order by wilayah_opr asc"; }
  else
  { $strsql="select * from ang_master_trayek order by kode_trayek asc"; }
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
  onClick="window.close();javascript:window.opener.document.forms[1].jenis_angkutan.value='<?php echo $row[jenis_angkutan]; ?>';
  window.close();javascript:window.opener.document.forms[1].kode_trayek.value='<?php echo $row[kode_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].id_trayek.value='<?php echo $row[id]; ?>';">
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[kode_trayek]; ?></td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>