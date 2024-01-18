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
	$tanggal=$_REQUEST['tanggal'];
	$bulan=$_REQUEST['bulan'];
	$tahun=$_REQUEST['tahun'];
	
	Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DISHUB MADIUN</title>
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
<a class="tdtitle_black">Data Pengajuan Izin Bongkar / Muat Barang <?php if (!empty($tanggal)) { echo "Harian"; } else { echo "Bulanan"; } ?> di Kota Madiun </a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="1250" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
  <td rowspan="2" width="50" align="center">No.</td>
	<td rowspan="2" width="130" height="25" align="center">Tanggal</td> 
    <td colspan="3" height="25" align="center">Jenis Kendaraan</td>                    
    <td rowspan="2" width="50" height="25" align="center">Jumlah Kendaraan</td>              
    <td colspan="3" height="25" align="center">Pendapatan (Rp)</td>              
    <td colspan="3" height="25" align="center">Tonase</td>              
    <td rowspan="2" width="60" height="25" align="center">Jumlah<br>
    Kendaraan</td>              
    <td colspan="7" height="25" align="center">Jenis Barang</td>              
    <td rowspan="2" width="60" height="25" align="center">Jumlah Barang</td>              
    <td rowspan="2" width="100" height="25" align="center">Keterangan</td>              
  </tr>
   <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td width="50" height="25" align="center">Pick Up</td>              
    <td width="50" height="25" align="center">Truk</td>
    <td width="50" height="25" align="center">Tronton<br>
     Gandengan<br>Tempelan</td>
	<td width="50" height="25" align="center">Pick Up</td>              
    <td width="50" height="25" align="center">Truk</td>
    <td width="50" height="25" align="center">Tronton<br>
     Gandengan<br>Tempelan</td>
	<td width="50" height="25" align="center">Pick Up</td>              
    <td width="50" height="25" align="center">Truk</td>
    <td width="50" height="25" align="center">Tronton<br>
     Gandengan<br>Tempelan</td>
	<td width="50" height="25" align="center">BBM/BBG</td>              
    <td width="50" height="25" align="center">Sembako</td>
    <td width="50" height="25" align="center">Kelontong</td>
	<td width="50" height="25" align="center">Bahan Bangunan</td>              
    <td width="50" height="25" align="center">Hewan</td>
    <td width="50" height="25" align="center">Paket</td>
    <td width="50" height="25" align="center">Lain</td>
  </tr>
  <?php
  if (!empty($tanggal))
  {  $strsql="select * from bar_izin_bongkar_muat where tanggal like '%$tanggal%' order by tanggal asc"; }
  elseif (!empty($tahun))
  {  $strsql="select * from bar_izin_bongkar_muat where month(tanggal)='$bulan' and  year(tanggal)='$tahun' order by tanggal asc"; }  
  else
  {  $strsql="select * from bar_izin_bongkar_muat order by tanggal asc";}
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
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
    <td height="25" align="center"><?php echo $row[jenis_kend_pickup]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_kend_truk]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis_kend_tgt]; ?></td>
	<td height="25" align="center"><?php echo $row[jml_kend_1]; ?></td>
	<td height="25" align="right"><?php null($row[pend_pickup]); ?></td>
	<td height="25" align="right"><?php null($row[pend_truk]); ?></td>
	<td height="25" align="right"><?php null($row[pend_tgt]); ?></td>
	<td height="25" align="center"><?php echo $row[tonase_pickup]; ?></td>
	<td height="25" align="center"><?php echo $row[tonase_truk]; ?></td>
    <td height="25" align="center"><?php echo $row[tonase_tgt]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_kend_2]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_bbm]; ?></td>
	<td height="25" align="center"><?php echo $row[jb_sembako]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_kelontong]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_bangunan]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_hewan]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_paket]; ?></td>
    <td height="25" align="center"><?php echo $row[jb_lain]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_barang]; ?></td>
    <td height="25" align="left"><?php echo $row[ket]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>