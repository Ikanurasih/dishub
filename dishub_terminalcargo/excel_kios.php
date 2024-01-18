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
<title>Data Sewa Kios</title>
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
<a class="tdtitle_black">Data Sewa Kios di Terminal Barang Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1200" align="center">
  <tr class="tdtitle_black" bgcolor="CCCCCC">
	<td   width="50" align=center>No.</td>
    <td   width="150" height="25" align="center">Nama</td> 
    <td   width="200" height="25" align="center">Alamat</td>                                        
    <td   width="100" height="25" align="center">Jenis Usaha</td>              
    <td   width="100" height="25" align="center">No. Kios </td>              
    <td   width="120" height="25" align="center">Luas Kios </td>              
    <td   width="100" height="25" align="center">Nomor SK </td>              
    <td   width="100" height="25" align="center">Tanggal SK </td>                                  
    <td   width="110" height="25" align="center">Masa Berlaku Sewa </td>                                  
    <td   width="160" height="25" align="center">Keterangan</td>                                  
  </tr>
  <?php
	/*if ($kategori=="nama" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and nama like '%$key%' order by id desc";	}
	elseif ($kategori=="alamat" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and alamat like '%$key%' order by id desc";	}
	elseif ($kategori=="jenis_usaha" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and jenis_usaha like '%$key%' order by id desc";	}
	elseif ($kategori=="no_gudang" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and no_gudang like '%$key%' order by id desc";	}
	elseif ($kategori=="luas" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and luas like '%$key%' order by id desc";	}
	elseif ($kategori=="nomor_sk" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and nomor_sk like '%$key%' order by id desc";	}
	elseif ($kategori=="tanggal" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and tanggal_sk='$key' order by id desc";	}
	elseif ($kategori=="berlaku" and !empty($key))
	{  $strsql="select * from cargo_wc where status='4' and masa_berlaku='$key' order by id desc";	}*/
	
	if(!empty($key) || !empty($key2)){
		if(!empty($kategori)){
			if(!empty($kategori2)){
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='4' and $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";
			}else{
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='4' and $kategori like '%$key%' order by id desc";
			}	
		}else{
			if(!empty($kategori2)){
				$strsql="select *, to_days(masa_berlaku)-to_days(curdate()) as jatuh_tempo from cargo_wc where status='4' and $kategori2 like '%$key2%' order by id desc";
			}
		}
	}
	else
	{  $strsql="select * from cargo_wc where status='4' order by id desc"; 	}
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
</table>
</body>
</html>