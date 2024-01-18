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
	$id_pangkal=$_REQUEST['id_pangkal'];
	$kategori2 = $_REQUEST["kategori2"];
	$kategori3 = $_REQUEST["kategori3"];
	$kategori4 = $_REQUEST["kategori4"];
	
	$key2 = $_REQUEST["key2"];
	$key3 = $_REQUEST["key3"];
	$key4 = $_REQUEST["key4"];

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
<a class="tdtitle_black">Rekap Data Rambu</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="780">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
    <td width="50" height="25" align="center">No.</td>
    <td width="90" height="25" align="center">Nama Jalan</td>
    <td width="90" height="25" align="center">Jenis Rambu</td>
    <td width="50" height="25" align="center">No. Rambu</td>
    <td width="50" height="25" align="center">No. Tabel</td>
    <td width="60" height="25" align="center">Posisi</td>    
    <td width="100" height="25" align="center">Spesifikasi</td>     
    <td width="50" height="25" align="center">Kondisi</td>     
    <td width="130" height="25" align="center">Lokasi</td>     
    <td width="200" height="25" align="center">Gambar</td>     
  </tr>
   <?php 
   if(!empty($id_pangkal)){
	if(!empty($kategori2)){
		  if(!empty($kategori3)){
			  if(!empty($kategori4)){
				$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori2 like '%$key2%' and $kategori3 like '%$key3%' and $kategori4 like '%$key4%' order by b.nama asc";  
			  }else{
			  	$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori2 like '%$key2%' and $kategori3 like '%$key3%' order by b.nama asc";
			  }
		  }else{
			  if(!empty($kategori4)){
				  $strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori2 like '%$key2%' and $kategori4 like '%$key4%' order by b.nama asc";
			  }else{
		  		$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori2 like '%$key2%' order by b.nama asc";
			  }
		  }
	  }else{
		  if(!empty($kategori3)){
			  if(!empty($kategori4)){
				  	$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori3 like '$key3' and $kategori4 like '%$key4%' order by b.nama asc";
			   }else{
		  			$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori3 like '$key3' order by b.nama asc";
			   }
		  }else{
			  if(!empty($kategori4)){
		  		$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal' and $kategori4 like '$key4'  order by b.nama asc";
				echo "asd";
			  }else{
				$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and b.id='$id_pangkal'  order by b.nama asc";
				
			  }
		  }
	  }
}else{
	if(!empty($kategori2)){
		  if(!empty($kategori3)){
			  if(!empty($kategori4)){
				$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori2 like '%$key2%' and $kategori3 like '%$key3%' and $kategori4 like '%$key4%' order by b.nama asc ";  
			  }else{
			  	$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori2 like '%$key2%' and $kategori3 like '%$key3%' order by b.nama asc";
			  }
		  }else{
			  if(!empty($kategori4)){
				  $strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori2 like '%$key2%' and $kategori4 like '%$key4%' order by b.nama asc";
			  }else{
		  		$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori2 like '%$key2%' order by b.nama asc";
			  }
		  }
	  }else{
		  if(!empty($kategori3)){
			  if(!empty($kategori4)){
				  	$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori3 like '$key3' and $kategori4 like '%$key4%' order by b.nama asc";
			   }else{
		  			$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori3 like '$key3' order by b.nama asc";
			   }
		  }else{
			  if(!empty($kategori4)){
		  		$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id and $kategori4 like '$key4' order by b.nama asc";
				echo "asd";
			  }else{
				$strsql = "SELECT * FROM lal_rambu a, lal_pangkal b where a.id_pangkal=b.id order by b.nama asc";
				
			  }
		  }
	  }
}
	  
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td align="center" width="50"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rambu]; ?></td>
    <td height="25" align="center"><?php echo $row[no_tabel]; ?></td>
    <td height="25" align="center"><?php echo $row[posisi]; ?></td>
    <td height="25" align="center"><?php echo $row[spesifikasi]; ?></td>
    <td height="25" align="center"><?php echo $row[kondisi]; ?></td>
    <td height="25" align="left"><?php echo $row[lokasi]; ?></td>
    <td height="25" align="center">	<?php
	if ($row[gambar]<>'')
	{
	echo "<img src='files/$row[gambar]' height='48'>"; 
	}
	else
	{ 
	echo "&nbsp;"; 
	}
	?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>