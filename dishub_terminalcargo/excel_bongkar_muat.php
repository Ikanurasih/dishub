<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$kategori2=$_REQUEST['kategori2'];
	$key2=$_REQUEST['key2'];
	$sekarang=date("Y-m-d");
	
		Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Bongkar Muat </title>
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
<a class="tdtitle_black">Data Bongkar Muat di Terminal Barang Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1260" align=center>
  <tr class="tdtitle_black" bgcolor="CCCCCC">
	<td width="50" rowspan="2" align=center>No.</td>
    <td   width="110" rowspan="2" align="center" >Tanggal</td> 
    <td   width="180" rowspan="2" align="center" >Nama</td>                                        
    <td   width="100" rowspan="2" align="center" >Nomor Kendaraan </td>              
    <td   width="100" rowspan="2" align="center" >Jenis Kendaraan </td>              
    <td   width="100" rowspan="2" align="center" >Jenis Izin Bongkar Muat </td>                                  
    <td   width="100" rowspan="2" align="center" >Jenis Barang</td>                                  
    <td height="25" colspan="2" align="center" >Tonase</td>                                  
    <td   width="110" rowspan="2" align="center">Masa Berlaku</td>  
	<td   width="260" rowspan="2" align="center" >Keterangan</td>                                                                  
  </tr>
   <tr class="tdtitle_black" bgcolor="CCCCCC">
	<td   width="50"  height="25" align="center">Kg</td>                                  
    <td   width="50"  height="25" align="center">Ton</td>                                  
   </tr>
	<?php
  if(!empty($key)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
		  $strsql="select * from cargo_bongkar where $kategori like '%$key%' and $kategori2 like '$key2' order by id desc";
		  }else{
			$strsql="select * from cargo_bongkar where $kategori like '%$key%' order by id desc";  
		  }
	  }else{
		  if(!empty($kategori2)){
			  $strsql="select * from cargo_bongkar where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
	else 
  { $strsql="select * from cargo_bongkar order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
	<td align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_izin]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_barang]; ?></td>
	<td height="25" align="center"><?php echo $row[tonase_kg]; ?></td>
	<td height="25" align="center"><?php echo $row[tonase_ton]; ?></td>
    <td height="25" align="left"><?php
	  $temp=explode("-",$row[masa_berlaku]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	<td height="25" align="left"><?php echo $row[keterangan]; ?></td>	
  </tr>
  <?php
  }
  ?>
</table>
</table>
</body>
</html>