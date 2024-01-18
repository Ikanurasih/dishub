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
<a class="tdtitle_black">penambahan Kendaraan</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1350">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="100" align="center">No.</td>
    <td rowspan="2" width="100" height="25" align="center">Nama Pemilik/ <br>
    Perusahaan</td> 
    <td rowspan="2" width="150" height="25" align="center">Alamat</td>                                     
    <td rowspan="2" width="100" height="25" align="center">No.Kend</td>              
    <td rowspan="2" width="100" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="100" height="25" align="center">Merk/Type</td>              
    <td rowspan="2" width="100" height="25" align="center">Jenis<br>
    Kendaraan</td>              
    <td rowspan="2" width="100" height="25" align="center">CC</td>              
    <td rowspan="2" width="100" height="25" align="center">Bahan<br>
    Bakar</td>              
    <td rowspan="2" width="50" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="100" height="25" align="center">No. Rangka</td> 
    <td rowspan="2" width="100" height="25" align="center">No. Mesin</td>             
    <td colspan="2" height="25" align="center">Daya Angkut</td>             
    <td rowspan="2" width="100" height="25" align="center">Jenis<br>
    Angkutan</td>              
    <td rowspan="2" width="100" height="25" align="center">Jenis<br>
    Trayek</td>              
    <td rowspan="2" width="100" height="25" align="center">Jenis<br>
    Pelayanan</td>              
    <td rowspan="2" width="100" height="25" align="center">Kode<br>
    Trayek</td>              
    <td rowspan="2" width="100" height="25" align="center">Status<br>
    Trayek</td>              
    <td rowspan="2" width="100" height="25" align="center">Jadwal<br>
    Perjalanan</td>              
    <td rowspan="2" width="100" height="25" align="center">Trayek<br>
    Operasi</td>                           
    <td rowspan="2" width="100" height="25" align="center">Tahun<br>
    Penambahan</td>                           
  </tr>
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="60" height="25" align="center">Orang<br>
    (0rg)</td>              
    <td width="60" height="25" align="center">Barang<br>
    (Kg)</td>
  </tr>
 <?php
  if ($kategori=="nama")
  {  $strsql="select a.*, b.*, c.*, d.*, e.* from ang_penambahan_kendaraan a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && c.nama like '%$key%' order by a.id desc"; }
  elseif ($kategori=="no_kend")
  {  $strsql="select a.*, b.*, c.*, d.*, e.* from ang_penambahan_kendaraan a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && d.no_kend like '%$key%' order by a.id desc"; }
   elseif ($kategori=="wilayah_opr")
  {  $strsql="select a.*, b.*, c.*, d.*, e.* from ang_penambahan_kendaraan a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && e.wilayah_opr like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_kurang, a.tahun_penambahan, b.*, c.*, d.*, e.* from ang_penambahan_kendaraan a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[merk]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend]; ?></td>
    <td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="left"><?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="left"><?php echo $row[tahun]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rangka]; ?></td>
    <td height="25" align="center"><?php echo $row[no_mesin]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_trayek]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" align="center"><?php echo $row[kode_trayek]; ?></td>
	<td height="25" align="left"><?php echo $row[status_trayek]; ?></td>
    <td height="25" align="left"><?php echo $row[jadwal_perjalanan]; ?></td>
    <td height="25" align="left"><?php echo $row[wilayah_opr]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_penambahan]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>