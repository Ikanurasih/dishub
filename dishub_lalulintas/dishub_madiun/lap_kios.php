<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$sekarang=date("Y-m-d");
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
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
<a class="tdtitle_black">Data Kios Shelter</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="990">
  <tr class="tdtitle_black" width="970">
    <td width="50" align="center" bgcolor="#CCCCCC">No.</td>
    <td width="50" bgcolor="#CCCCCC" height="25" align="center">No Kios</td>
    <td width="100" bgcolor="#CCCCCC" height="25" align="center">Nama Penyewa</td>
    <td width="140" bgcolor="#CCCCCC" height="25" align="center">Alamat</td>    
    <td width="70" bgcolor="#CCCCCC" height="25" align="center">Luas Kios (m2)</td>             
    <td width="80" bgcolor="#CCCCCC" height="25" align="center">Jenis Usaha</td>             
    <td width="120" bgcolor="#CCCCCC" height="25" align="center">No. Izin</td>            
    <td width="100" bgcolor="#CCCCCC" height="25" align="center">Tgl. Izin</td>	
    <td width="180" bgcolor="#CCCCCC" height="25" align="center">Masa Berlaku</td>
    <td width="80" bgcolor="#CCCCCC" height="25" align="center">Biaya<br><i>(Luas Kios x Rp. 3.000 x 12)</i></td>
  </tr>
  <?php
  if ($kategori=="no_kios")
  {  $strsql="select * from lal_kios where no_kios like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_penyewa")
  {  $strsql="select * from lal_kios where nama_penyewa like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from lal_kios where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="usaha")
  {  $strsql="select * from lal_kios where usaha like '%$key%' order by id desc"; }
  elseif ($kategori=="no_izin")
  {  $strsql="select * from lal_kios where no_izin like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_kios order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[no_kios]; ?></td>
    <td height="25" align="left"><?php echo $row[nama_penyewa]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
    <td height="25" align="left"><?php echo $row[usaha]; ?></td>
    <td height="25" align="left"><?php echo $row[no_izin]; ?></td>
    <td height="25" align="left">
	<?php
	  $temp=explode("-",$row[tgl_izin]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	</td>
	<td height="25" align="left">
	<?php
	  $temp=explode("-",$row[masa_awal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>&nbsp; s/d&nbsp;
	  <?php
	  $temp=explode("-",$row[masa_akhir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?>
	</td>
	<td height="25" align="right"><?php null($row[biaya]); ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>