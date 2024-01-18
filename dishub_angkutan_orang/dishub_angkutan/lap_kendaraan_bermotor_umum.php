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
<a class="tdtitle_black">Data Kendaraan Bermotor Umum</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1350" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="100" align="center">No.</td>
    <td rowspan="2" width="100" height="25" align="center">NamaPemilik/<br>
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
    <td rowspan="2" width="100" height="25" align="center">No. <br>
    Rangka</td> 
    <td rowspan="2" width="100" height="25" align="center">No. <br>
    Mesin</td>             
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
  </tr>
  <tr class="tdtitle_black">
	<td width="60" height="25" align="center" bgcolor="#CCCCCC">Orang<br>
    (0rg)</td>              
    <td width="60" height="25" align="center" bgcolor="#CCCCCC">Barang<br>
    (Kg)</td>
  </tr>
 <?php
  if ($kategori=="nama")
  {  $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id && a.nama like '%$key%' order by d.id desc"; }
  elseif ($kategori=="no_kend")
  {  $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id && b.no_kend like '%$key%' order by d.id desc"; }
   elseif ($kategori=="wilayah_opr")
  {  $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id && c.wilayah_opr like '%$key%' order by d.id desc"; }
  else
  {  $strsql="select a.*,b.*,c.*,d.* from ang_kendaraan_bermotor_umum d, ang_master_pemilik a, ang_master_kendaraan b, ang_master_trayek c where d.id_pemilik=a.id && d.id_kendaraan=b.id && d.id_trayek=c.id order by d.id desc"; }
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
	<td height="25" align="left"><?php echo $row[daya_orang]; ?></td>
    <td height="25" align="left"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_trayek]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" align="center"><?php echo $row[kode_trayek]; ?></td>
	<td height="25" align="left"><?php echo $row[status_trayek]; ?></td>
    <td height="25" align="left"><?php echo $row[jadwal_perjalanan]; ?></td>
    <td height="25" align="left"><?php echo $row[wilayah_opr]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>