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
<legend>Masukkan Wilayah Operasi:</legend>
<input type="text" name="key" value="<?php echo $key; ?>" size="25" class="inputbox"> &raquo; <font size="1.5">Enter
</fieldset>
</form>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr class="tdtitle_white"> 
    <td height="25" background="images/bgcell.gif"><div align="center">Jenis<br>Angkutan</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Jenis<br>Trayek</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Jenis<br>Pelayanan</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Kode Trayek</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Status Trayek</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Jadwal<br>Perjalanan</div></td>
    <td height="25" background="images/bgcell.gif"><div align="center">Trayek/<br>Wilayah Operasi</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select * from ang_master_trayek where wilayah_opr like '%$key%' order by wilayah_opr asc"; }
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
  onClick="window.close();javascript:window.opener.document.forms[1].id_trayek.value='<?php echo $row[id]; ?>'; 
  window.close();javascript:window.opener.document.forms[1].jenis_angkutan.value='<?php echo $row[jenis_angkutan]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_trayek.value='<?php echo $row[jenis_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_pelayanan.value='<?php echo $row[jenis_pelayanan]; ?>';
  window.close();javascript:window.opener.document.forms[1].kode_trayek.value='<?php echo $row[kode_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].status_trayek.value='<?php echo $row[status_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].jadwal_perjalanan.value='<?php echo $row[jadwal_perjalanan]; ?>';
  javascript:window.opener.document.forms[1].wilayah_opr.value='<?php echo $row[wilayah_opr]; ?>';">
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_trayek]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[kode_trayek]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[status_trayek]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[jadwal_perjalanan]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[wilayah_opr]; ?></td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>