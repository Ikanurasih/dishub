<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$sekarang=date("Y-m-d");
	
	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DISHUB MADIUN MODUL ANGKUTAN BARANG</title>
<style>
.tdtitle_black
{
	font-family:tahoma;
	font-size: 11px;
	color: #000000;
	font-weight: bold;
}
.text
{
	font-family:tahoma;
	font-size: 11px;
	color: #000000;
}
</style></head>
<body>
<center>
<a class="tdtitle_black">Data Kendaraan Angkutan Barang di Kota Madiun </a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1350" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
  <td  rowspan="2" width="50" align="center">No.</td>
	<td rowspan="2" width="150" height="25" align="center">Nama Pemilik</td> 
    <td rowspan="2" width="150" height="25" align="center">Alamat</td>                    
    <td rowspan="2" width="80" height="25" align="center">No.<br>
    Kendaraan</td>              
    <td rowspan="2" width="80" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="80" height="25" align="center">Merk/Type</td>              
    <td rowspan="2" width="80" height="25" align="center">Jenis<br>
    Kendaraan</td>              
    <td rowspan="2" width="80" height="25" align="center">Model<br>
    Kendaraan</td>              
    <td rowspan="2" width="80" height="25" align="center">Status</td>              
    <td rowspan="2" width="80" height="25" align="center">CC</td>              
    <td rowspan="2" width="80" height="25" align="center">Bahan<br>
    Bakar</td>              
    <td rowspan="2" width="50" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="100" height="25" align="center">No. Rangka</td> 
    <td rowspan="2" width="100" height="25" align="center">No. Mesin</td>             
    <td colspan="2" height="25" align="center">Daya Angkut</td>       
    <td rowspan="2" width="50" height="25" align="center">JBB</td>  
    <td rowspan="2" width="50" height="25" align="center">JBI</td>  
    <td rowspan="2" width="50" height="25" align="center">MST</td>  
    <td rowspan="2" width="50" height="25" align="center">Kelas Jalan</td>  	
  </tr>
   <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" height="25" align="center">Orang<br>
     (0rg)</td>              
    <td width="50" height="25" align="center">Barang<br>
     (Kg)</td>
  </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from bar_barang where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from bar_barang where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="no_kendaraan")
  {  $strsql="select * from bar_barang where no_kend like '%$key%' order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select * from bar_barang where no_uji like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from bar_barang order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[model_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[status]; ?></td>
	<td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rangka]; ?></td>
    <td height="25" align="center"><?php echo $row[no_mesin]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jbb]; ?></td>
    <td height="25" align="center"><?php echo $row[jbi]; ?></td>
    <td height="25" align="center"><?php echo $row[mst]; ?></td>
    <td height="25" align="center"><?php echo $row[kelas_jalan]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>