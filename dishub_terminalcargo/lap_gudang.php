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
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Sewa Gudang</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Sewa Gudang di Terminal Barang Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1260" align="center">
  <tr class="tdtitle_black" bgcolor="CCCCCC">
	<td   width="50" align=center>No.</td>
    <td   width="150" height="25" align="center">Nama</td> 
    <td   width="200" height="25" align="center">Alamat</td>                                        
    <td   width="100" height="25" align="center">Jenis Usaha</td>              
    <td   width="100" height="25" align="center">No. Gudang</td>              
    <td   width="120" height="25" align="center">Luas Gudang</td>              
    <td   width="100" height="25" align="center">Nomor SK </td>              
    <td   width="100" height="25" align="center">Tanggal SK </td>                                  
    <td   width="110" height="25" align="center">Masa Berlaku Sewa </td> 
	 <td   width="230"  height="25" align="center">Keterangan </td>                                                                                                 
  </tr>
  <?php
	if(!empty($key) || !empty($key2)){
		if(!empty($kategori)){
			if(!empty($kategori2)){
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='3' and $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";
			}else{
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='3' and $kategori like '%$key%' order by id desc";
			}	
		}else{
			if(!empty($kategori2)){
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='3' and $kategori2 like '%$key2%' order by id desc";
			}
		}
	}
	else
	{  $strsql="select * from cargo_wc where status='3' order by id desc"; 	}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_usaha]; ?></td>
    <td height="25" align="center"><?php echo $row[no_gudang]; ?></td>
    <td height="25" align="center"><?php echo $row[luas]; ?></td>
    <td height="25" align="center"><?php echo $row[nomor_sk]; ?></td>
	<td height="25" align="left"><?php
	  $temp=explode("-",$row[tanggal_sk]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
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
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>