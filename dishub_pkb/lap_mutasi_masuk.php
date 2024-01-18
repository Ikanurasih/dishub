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
	$kategori2=$_REQUEST['kategori2'];
	$key2=$_REQUEST['key2'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pajak</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Mutasi Masuk </a>
</center>
<br>
<table width="1310" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr class="tdtitle_black">
	<td width="50" rowspan="2" align="center" bgcolor="#CCCCCC">No.</td>
    <td height="25" colspan="2" align="center" bgcolor="#CCCCCC">Nama Pemilik</td>
	<td width="170" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Alamat Pemilik</td>
	<td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No. Kendaraan</td>
	<td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No. Uji</td>
	<td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenis Kendaraan</td>
	<td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Model Kendaraan</td>
    <td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Kategori</td>
    <td width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Merk</td> 
	<td width="50" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Type</td>                                  
    <td   width="50" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Tahun</td>   
	<td   width="50" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">CC</td> 
	<td   width="50" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Bahan Bakar</td> 
	<td height="25"   colspan="2" align="center" bgcolor="#CCCCCC">Daya Angkut</td> 
	<td   width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Masa Berlaku</td> 
	<td   width="60" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Status Penggunaan</td>  
    <td width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Tgl. Mutasi Masuk </td>
	<td width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenis Mutasi </td>
	<td width="110" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Lokasi Mutasi </td>
  </tr>
   <tr class="tdtitle_black">
   		<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Lama</td>                                  
   		<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Baru</td>   		
   		<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Type</td>                                  
   		<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Tahun</td>   
   </tr>
  <?php
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_mutasi where status='1' and $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		 	$strsql="select * from pkb_mutasi where status='1' and $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
			  $strsql="select * from pkb_mutasi where status='1' and $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
   else
  {  $strsql="select * from pkb_mutasi where status='1' order by id desc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[pemilik_lama]; ?></td>
	<td height="25" align="left"><?php echo $row[pemilik_baru]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kendaraan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[model]; ?></td>
    <td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[type]; ?></td>
	<td height="25" align="center"><?php echo $row[tahun]; ?></td>
	<td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
	<td height="25" align="center"><?php echo $row[angkut_orang]; ?></td>
	<td height="25" align="center"><?php echo $row[angkut_barang]; ?></td>
	<td height="25" align="center">
		<?php
	  $temp=explode("-",$row[masa_berlaku]); 
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
	<td height="25" align="center"><?php echo $row[status_penggunaan]; ?></td>
    <td height="25" align="center">
	<?php
	  $temp=explode("-",$row[tgl_mutasi]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
	 <td height="25" align="center"><?php echo $row[jenis_mutasi]; ?></td>
	 <td height="25" align="center"><?php echo $row[lokasi_mutasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>