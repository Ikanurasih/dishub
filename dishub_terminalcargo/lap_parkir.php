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
<title>Data Parkir</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Parkir di Terminal Barang Kota Madiun</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="750" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50"><div align="center">No.</div></td>
    <td   width="150" height="25" align="center">Tanggal</td> 
    <td   width="100" height="25" align="center">Nomor Kendaraan </td>                                        
    <td   width="100" height="25" align="center">Jenis Kendaraan </td>
	<td   width="350" height="25" align="center">Keterangan </td>              
   </tr>
  <?php
	/*if ($kategori=="no_kendaraan" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where no_kendaraan like '%$key%' order by id desc";	}
	elseif ($kategori=="jenis_kendaraan" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where jenis_kendaraan like '%$key%' order by id desc";	}
	elseif ($kategori=="tanggal" and !empty($key))
	{  $strsql="select * from cargo_kendaraan where tanggal='$key' order by id desc";	}*/
	
	if(!empty($key)){
		if(!empty($kategori)){
			if(!empty($kategori2)){
			$strsql="select * from cargo_kendaraan where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";
			}else{
			$strsql="select * from cargo_kendaraan where $kategori like '%$key%' order by id desc";
			}
		}else{
			if(!empty($kategori2)){
				$strsql="select * from cargo_kendaraan where $kategori2 like '%$key2%' order by id desc";
			}
		}
	}
	else
	{  $strsql="select * from cargo_kendaraan order by id desc"; 	}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td align="center"><?php echo $NO."."; ?></td> 
    <td height="25" align="center"><?php
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
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
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