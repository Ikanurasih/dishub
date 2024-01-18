<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$sekarang=date("Y-m-d");
	$bulan=$_REQUEST['bulan'];
	$tahun=$_REQUEST['tahun'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LALU LINTAS</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Pelanggaran Lalu Lintas</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1180">
  <tr class="tdtitle_black">
  	<td width="40" bgcolor="#cccccc" align="center">No.</td>
    <td width="80" bgcolor="#cccccc" height="25" align="center">Bulan</td> 
    <td width="80" bgcolor="#cccccc" height="25" align="center">No. Kendaraan</td>              
    <td width="80" bgcolor="#cccccc" height="25" align="center">Nomor Uji</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Jenis Kendaraan</td>              
    <td width="120" bgcolor="#cccccc" height="25" align="center">Nama Pemilik</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Alamat Pemilik</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Nama Pengemudi</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Alamat Pengemudi</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Pasal Pelanggaran</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Bukti Jaminan</td>              
    <td width="100" bgcolor="#cccccc" height="25" align="center">Keterangan</td>
  </tr>
   <?php
  if ($tahun)
  {
    $strsql="select * from lal_pelanggaran where month(bulan)='$bulan' and year(bulan)='$tahun' order by id desc"; }
  else
  {  $strsql="select * from lal_pelanggaran order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php
	  $temp=explode("-",$row[bulan]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  bulan2($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[no_kend]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[no_uji]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[jenis_kend]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[nama_pmilik]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[alamat_pmilik]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[nama_driver]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[alamat_driver]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[pasal_pelanggaran]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[jaminan]); ?></td>
    <td height="25" align="left"><?php echo strtoupper($row[keterangan]); ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>