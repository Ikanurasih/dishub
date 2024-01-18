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
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Pemilik</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Alamat</div></td>
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
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Jenis Angkutan</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Jenis Trayek</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Jenis Pelayanan</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Kode Trayek</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Status Trayek</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Jadwal</div></td>
    <td rowspan="2" height="25" background="images/bgcell.gif"><div align="center">Wilayah Operasi</div></td>
    
  </tr>
  <tr class="tdtitle_white">
	<td height="25" background="images/bgcell.gif"><div align="center">Orang(Org)</div></td>
	<td height="25" background="images/bgcell.gif"><div align="center">Barang(Kg)</div></td>
  </tr>
  <?php
  if ($key)
  { $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id && b.no_kend like '%$key%' order by b.no_kend asc";}
  else
  { $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id order by a.nama asc";}
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
  window.close();javascript:window.opener.document.forms[1].no_kend.value='<?php echo $row[no_kend]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_uji.value='<?php echo $row[no_uji]; ?>';
  window.close();javascript:window.opener.document.forms[1].merk.value='<?php echo $row[merk]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_kend.value='<?php echo $row[jenis_kend]; ?>';
  window.close();javascript:window.opener.document.forms[1].cc.value='<?php echo $row[cc]; ?>';
  window.close();javascript:window.opener.document.forms[1].bahan_bakar.value='<?php echo $row[bahan_bakar]; ?>';
  window.close();javascript:window.opener.document.forms[1].tahun.value='<?php echo $row[tahun]; ?>';
  window.close();javascript:window.opener.document.forms[1].no_mesin.value='<?php echo $row[no_mesin]; ?>';
  window.close();javascript:window.opener.document.forms[1].daya_orang.value='<?php echo $row[daya_orang]; ?>';
  window.close();javascript:window.opener.document.forms[1].daya_barang.value='<?php echo $row[daya_barang]; ?>';
   window.close();javascript:window.opener.document.forms[1].jenis_angkutan.value='<?php echo $row[jenis_angkutan]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_trayek.value='<?php echo $row[jenis_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].jenis_pelayanan.value='<?php echo $row[jenis_pelayanan]; ?>';
  window.close();javascript:window.opener.document.forms[1].kode_trayek_lama.value='<?php echo $row[kode_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].status_trayek.value='<?php echo $row[status_trayek]; ?>';
  window.close();javascript:window.opener.document.forms[1].jadwal_perjalanan.value='<?php echo $row[jadwal_perjalanan]; ?>';
  javascript:window.opener.document.forms[1].trayek_lama.value='<?php echo $row[wilayah_opr]; ?>';"> 
    <td height="25" class="text">&nbsp;<?php echo $row[nama]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[alamat]; ?></td>
	<td height="25" class="text">&nbsp;<?php echo $row[no_kend]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_uji]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[merk]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[jenis_kend]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[cc]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[bahan_bakar]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[tahun]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_rangka]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[no_mesin]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[daya_orang]; ?></td>
    <td height="25" class="text">&nbsp;<?php echo $row[daya_barang]; ?></td>
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