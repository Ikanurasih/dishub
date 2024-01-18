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
<a class="tdtitle_black">Data Tukar Lokasi Wilayah Operasi Angkutan Penumpang Umum di Wilayah Kota Madiun</a>
</center>
<br>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="1340">
  <tr class="tdtitle_black">
  	<td width="50" rowspan='2' align="center" bgcolor="#CCCCCC">No.</td>
	<td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Pemilik</td> 
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Alamat</td>                                             
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">No.Kend</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Merk/Type</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Jns.Kend</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">CC</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Bhn.Bakar</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Th</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">No.rangka</td> 
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">No.mesin</td>             
    <td width="100" colspan="2" bgcolor='#cccccc' height="25" align="center">Daya Angkut</td>             
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Jns.Angkutan</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Jns.Trayek</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Jns.Pelayanan</td>              
    <td colspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Kode Trayek</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Status Trayk</td>              
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Jwl.Perjalanan</td>              
    <td colspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Trayek Operasi</td>
    <td rowspan="2" width="100" bgcolor='#cccccc' height="25" align="center">Tahun Tukar</td>
  </tr>
  <tr class="tdtitle_black">
	<td width="100" bgcolor='#cccccc' height="25" align="center">Orang<br>(0rg)</td>              
    <td width="100" bgcolor='#cccccc' height="25" align="center">Barang<br>(Kg)</td>
	<td width='100' bgcolor='#cccccc' height='25' align='center'>Lama</td>
	<td width='100' bgcolor='#cccccc' height='25' align='center'>Baru</td>
	<td width='100' bgcolor='#cccccc' height='25' align='center'>Lama</td>
	<td width='100' bgcolor='#cccccc' height='25' align='center'>baru</td>
  </tr>
 <?php
  if ($kategori=="trayek_lama")
  {  $strsql="select a.*, b.*, c.*, d.*, e.* from ang_tukar_lokasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.trayek_lama like '%$key%' order by a.id desc"; }
  elseif ($kategori=="trayek_baru")
  {  $strsql="select a.*, b.*, c.*, d.*, e.* from ang_tukar_lokasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.trayek_baru like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_tukar, a.kode_trayek_lama, a.kode_trayek_baru, a.trayek_lama, a.trayek_baru, a.tahun_tukar_lokasi, b.*, c.*, d.*, e.* from ang_tukar_lokasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id order by a.id desc"; }
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
    <td height="25" align="center"><?php echo $row[kode_trayek_lama]; ?></td>
    <td height="25" align="center"><?php echo $row[kode_trayek_baru]; ?></td>
	<td height="25" align="left"><?php echo $row[status_trayek]; ?></td>
    <td height="25" align="left"><?php echo $row[jadwal_perjalanan]; ?></td>
	  <td height="25" align="left"><?php echo $row[trayek_lama]; ?></td>
	  <td height="25" align="left"><?php echo $row[trayek_baru]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_tukar_lokasi]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>