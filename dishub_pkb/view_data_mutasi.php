<?php
include "global/config.php";
require "global/global_fungsi.php";

$key=$_REQUEST['key'];
?>
<html>
<head>
<TITLE> Lookup Kendaraan </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
</head>
<body topmargin="8">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset class="tdtitle_black">
<legend>Masukkan No. Kendaraan:</legend>
<input type="text" name="key" value="<?php echo $key; ?>" size="25" class="inputbox"> &raquo; <font size="1.5">Enter
</fieldset>
</form>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr class="tdtitle_white"> 
    <td  height="25" background="images/bgcell.gif"><div align="center">Pemilik</div></td>
    <td  height="25" background="images/bgcell.gif"><div align="center">Alamat</div></td>
    <td  height="25" background="images/bgcell.gif"><div align="center">No. Kend</div></td>
    <td  height="25" background="images/bgcell.gif"><div align="center">No. Uji</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select a.*,b.*,c.* from ang_kendaraan_bermotor_umum c, ang_master_pemilik a, ang_master_kendaraan b where c.id_pemilik=a.id && c.id_kendaraan=b.id && b.no_kend like '%$key%' order by b.no_kend asc";}
  else
  { $strsql="select a.*,b.*,c.* from ang_kendaraan_bermotor_umum c, ang_master_pemilik a, ang_master_kendaraan b where c.id_pemilik=a.id && c.id_kendaraan=b.id order by a.nama asc";}
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
  onClick="window.close();javascript:window.opener.document.forms[1].id_kendaraan_bermotor_umum.value='<?php echo $row[id]; ?>';
  window.close();javascript:window.opener.document.forms[1].nama.value='<?php echo $row[nama]; ?>';
  window.close();javascript:window.opener.document.forms[1].alamat.value='<?php echo $row[alamat]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_kend.value='<?php echo $row[no_kend]; ?>';
  javascript:window.opener.document.forms[1].no_uji.value='<?php echo $row[no_uji]; ?>';">
    <td height="25" class="text">&nbsp;<?php echo $row[nama]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[alamat]; ?></td>
	<td height="25" class="text">&nbsp;<?php echo $row[no_kend]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_uji]; ?></td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>