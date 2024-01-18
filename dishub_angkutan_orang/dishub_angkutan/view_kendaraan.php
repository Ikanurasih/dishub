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
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">No. Kend</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">No. Uji</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Merk/Type</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Jenis Kend.</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">CC</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Bahan Bakar</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Tahun</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">No. Rangka</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">No. Mesin</div></td>
    <td colspan="2" height="25" background="images/bgcell.gif"><div align="center">Daya Angkut</div></td>
  </tr>
  <tr class="tdtitle_white">
	<td height="25" background="images/bgcell.gif"><div align="center">Orang(Org)</div></td>
	<td height="25" background="images/bgcell.gif"><div align="center">Barang(Kg)</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select * from ang_master_kendaraan where no_kend like '%$key%' order by no_kend asc"; }
  else
  { $strsql="select * from ang_master_kendaraan order by no_kend asc"; }
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
  onClick="window.close();javascript:window.opener.document.forms[1].id_kendaraan.value='<?php echo $row[id]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_kend.value='<?php echo $row[no_kend]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_uji.value='<?php echo $row[no_uji]; ?>';
  window.close();javascript:window.opener.document.forms[1].merk.value='<?php echo $row[merk]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_kend.value='<?php echo $row[jenis_kend]; ?>';
  window.close();javascript:window.opener.document.forms[1].cc.value='<?php echo $row[cc]; ?>';
  window.close();javascript:window.opener.document.forms[1].bahan_bakar.value='<?php echo $row[bahan_bakar]; ?>';
  window.close();javascript:window.opener.document.forms[1].tahun.value='<?php echo $row[tahun]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_rangka.value='<?php echo $row[no_rangka]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_mesin.value='<?php echo $row[no_mesin]; ?>';
  window.close();javascript:window.opener.document.forms[1].daya_orang.value='<?php echo $row[daya_orang]; ?>';
  javascript:window.opener.document.forms[1].daya_barang.value='<?php echo $row[daya_barang]; ?>';"> 
    <td height="25" class="text">&nbsp;<?php echo $row[no_kend]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_uji]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[merk]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_kend]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[cc]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[bahan_bakar]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[tahun]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_rangka]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_mesin]; ?></td>
    <td height="25" class="text" align="center">&nbsp;<?php echo $row[daya_orang]; ?></td>
    <td height="25" class="text" align="center">&nbsp;<?php echo $row[daya_barang]; ?></td>
  </tr>
  <?php
  }
  mysql_free_result($hasil);
  ?>
</table>
</body>
</html>