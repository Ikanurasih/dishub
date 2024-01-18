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
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DISHUB MADIUN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
<?php include "header.inc.php"; ?>
<br>
<center>
<a class="tdtitle_black">Data Pelayanan Izin Trayek</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1350" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="50" align="center">No.</td>
    <td rowspan="2" width="100" height="25" align="center">Nama<br>
    Pemilik/Perusahaan</td> 
    <td rowspan="2" width="150" height="25" align="center">Alamat</td>                                     
    <td rowspan="2" width="70" height="25" align="center">No.Kend</td>              
    <td rowspan="2" width="80" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="70" height="25" align="center">Merk/Type</td>                           
    <td rowspan="2" width="50" height="25" align="center">CC</td>                        
    <td rowspan="2" width="50" height="25" align="center">Tahun</td>                      
    <td colspan="2" height="25" align="center">Daya Angkut</td>             
    <td rowspan="2" width="130" height="25" align="center">Jenis<br>
    Angkutan</td>                          
    <td rowspan="2" width="80" height="25" align="center">Jenis<br>
    Pelayanan</td>              
    <td rowspan="2" width="120" height="25" align="center">Kode Trayek </td>              
    <td rowspan="2" width="100" height="25" align="center">Masa Berlaku<br>
Izin Trayek </td>           
    <td rowspan="2" width="100" height="25" align="center">No. Izin<br>
    Trayek</td>              
    <td rowspan="2" width="100" height="25" align="center">Tgl. Izin<br>
    Trayek</td>                       
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="60" height="25" align="center">Orang<br>
    (0rg)</td>              
    <td width="60" height="25" align="center">Barang<br>
    (Kg)</td>
  </tr>
 <?php
  if ($kategori=="masa_trayek")
  {  $strsql="select a.id as id_izin_trayek,a.masa_trayek,a.no_izin_trayek,a.tgl_izin_trayek, b.*, c.*, d.*, e.* from ang_izin_trayek a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.masa_trayek like '%$key%' order by a.id desc"; }
  elseif ($kategori=="no_izin_trayek")
  {  $strsql="select a.id as id_izin_trayek,a.masa_trayek,a.no_izin_trayek,a.tgl_izin_trayek, b.*, c.*, d.*, e.* from ang_izin_trayek a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.no_izin_trayek like '%$key%' order by a.id desc"; }
  elseif ($kategori=="tgl_izin_trayek")
  {  $strsql="select a.id as id_izin_trayek,a.masa_trayek,a.no_izin_trayek,a.tgl_izin_trayek, b.*, c.*, d.*, e.* from ang_izin_trayek a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.tgl_izin_trayek like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_izin_trayek,a.masa_trayek,a.no_izin_trayek,a.tgl_izin_trayek, b.*, c.*, d.*, e.* from ang_izin_trayek a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[nama]; ?></td>
    <td height="25" align="left">&nbsp;<?php echo $row[alamat]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[no_kend]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[no_uji]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[merk]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[cc]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[tahun]; ?></td>
	<td height="25" align="center">&nbsp;<?php echo $row[daya_orang]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[kode_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php
	  $temp=explode("-",$row[masa_trayek]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="center">&nbsp;<?php echo $row[no_izin_trayek]; ?></td>
    <td height="25" align="center">&nbsp;<?php
	  $temp=explode("-",$row[tgl_izin_trayek]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>