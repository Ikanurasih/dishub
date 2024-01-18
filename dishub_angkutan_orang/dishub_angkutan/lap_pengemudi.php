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
	$nama_driver=$_REQUEST['nama_driver'];
	$tmp_lahir=$_REQUEST['tmp_lahir'];
	$tgl_lahir=$_REQUEST['tgl_lahir'];
	$alamat_driver=$_REQUEST['alamat_driver'];
	$usia=$_REQUEST['usia'];
	$pendidikan=$_REQUEST['pendidikan'];
	$nama=$_REQUEST['nama'];
	$alamat=$_REQUEST['alamat'];
	$jenis_kend=$_REQUEST['jenis_kend'];
	$jenis_angkutan=$_REQUEST['jenis_angkutan'];
	$jenis_trayek=$_REQUEST['jenis_trayek'];
	$id_kendaraan=$_REQUEST['id_kendaraan'];
	$id_trayek=$_REQUEST['id_trayek'];
	$id_pemilik=$_REQUEST['id_pemilik'];
	$id=$_REQUEST['id'];
	$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ANGKUTAN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Pengemudi Angkutan Umum di Kota Madiun </a>
</center>
<br>  
<table border="1" cellspacing="0" cellpadding="1" width="1240" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" align="center">No.</td>
	<td width="130" height="25" align="center">Nama Pengemudi</td>              
    <td width="130" height="25" align="center">Tempat, Tgl. Lahir</td>              
    <td width="180" height="25" align="center">Alamat</td>              
    <td width="50" height="25" align="center">Usia</td>              
    <td width="70" height="25" align="center">Pendidikan</td>              
    <td width="70" height="25" align="center">Jenis <br>
    Kendaraan</td>              
    <td width="130" height="25" align="center">Jenis Angkutan</td>    
    <td width="100" height="25" align="center">Jenis Trayek</td>    
    <td width="130" height="25" align="center">Nama Pemilik</td>    
    <td width="180" height="25" align="center">Alamat Pemilik</td>    
  </tr>
  <?php
  if ($kategori=="nama_driver")
  {  $strsql="select a.*,b.nama,b.alamat,d.jenis_angkutan,d.jenis_trayek 
  from ang_master_pengemudi a, ang_master_pemilik b, ang_master_trayek d where a.id_pemilik=b.id && a.id_trayek=d.id && a.nama_driver like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.*,b.nama,b.alamat,d.jenis_angkutan,d.jenis_trayek 
  from ang_master_pengemudi a, ang_master_pemilik b, ang_master_trayek d where a.id_pemilik=b.id && a.id_trayek=d.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
	<td align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama_driver]; ?></td>
    <td height="25" align="left"><?php echo $row[tmp_lahir]; ?>, <br><?php
	  $temp=explode("-",$row[tgl_lahir]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="left"><?php echo $row[alamat_driver]; ?></td>
    <td height="25" align="center"><?php echo $row[usia]; ?>&nbsp;th</td>
    <td height="25" align="left"><?php echo $row[pendidikan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kendaraan]; ?></td>
    <td height="25" align="left"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_trayek]; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>