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
<title>DISHUB MADIUN</title>
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
<a class="tdtitle_black">Data Tenaga Penguji</a>
</center>
<br>
<table border="1" cellspacing="0" cellpadding="1" width="1160" align="center">
  <tr class="tdtitle_black">
	<td width="50" rowspan="2" align="center" bgcolor="#CCCCCC">No.</td>
    <td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama Lengkap </td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">NIP</td>
	<td width="170" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Tempat, Tgl. Lahir</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Pangkat</td>
	<td width="80" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Golongan</td>
	<td width="70" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Usia</td>
	<td width="80" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Pendidikan</td>
    <td width="80" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenjang Penguji</td>
    <td height="25" colspan="3" align="center" bgcolor="#CCCCCC">SK</td>
  </tr>
   <tr class="tdtitle_black">
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">NO.SK</td>                                  
    <td   width="110" height="25" align="center" bgcolor="#CCCCCC">Tanggal</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Pejabat</td>                                  
   </tr>
  <?php
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
		  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select *, year(now())-year(tanggal_lahir) as usia_skr from pkb_tenaga_penguji order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
	<td height="25" align="center"><?php echo $row[nim]; ?></td>
	<td height="25" align="left">
		<?php echo $row[tempat_lahir]; ?>, 
		<?php
	  $temp=explode("-",$row[tanggal_lahir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>	</td>
	<td height="25" align="center"><?php echo $row[pangkat]; ?></td>
	<td height="25" align="center"><?php echo $row[golongan]; ?></td>
	<td height="25" align="center"><?php echo $row[usia_skr]; ?></td>
	<td height="25" align="center"><?php echo $row[pendidikan]; ?></td>
    <td height="25" align="center"><?php echo $row[tingkatan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_sk]; ?></td>
	<td height="25" align="center">
		<?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>	</td>
	<td height="25" align="center"><?php echo $row[pejabat]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>