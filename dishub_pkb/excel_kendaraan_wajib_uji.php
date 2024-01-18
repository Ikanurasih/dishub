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
<title>Pajak</title>
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
<a class="tdtitle_black">Data Kendaraan Wajib Uji</a>
</center>
<br>
 <table border="1" cellspacing="0" cellpadding="1" width="3260" align="center">
  <tr class="tdtitle_black" bgcolor="#CCCCCC">
	<td rowspan="2" width="50" align="center">No.</td>
    <td rowspan="2" width="130" height="25" align="center">Nama Pemilik</td> 
    <td rowspan="2" width="170" height="25" align="center">Alamat</td>                       
    <td rowspan="2" width="60" height="25" align="center">No. Kendaraan</td>              
    <td rowspan="2" width="60" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="60" height="25" align="center">Merk</td>              
    <td rowspan="2" width="60" height="25" align="center">Type</td>              
    <td rowspan="2" width="80" height="25" align="center">Jenis Kendaraan</td>
	<td rowspan="2" width="80" height="25" align="center">Model Kendaraan</td>
	<td rowspan="2" width="80" height="25" align="center">Kategori</td>                
    <td rowspan="2" width="50" height="25" align="center">CC</td>              
	<td rowspan="2" width="80" height="25" align="center">Daya Motor (Kw/PS/HP)</td>           
    <td rowspan="2" width="50" height="25" align="center">Bahan Bakar</td>              
    <td rowspan="2" width="50" height="25" align="center">Tahun</td>              
    <td rowspan="2" width="50" height="25" align="center">Status</td>              
    <td rowspan="2" width="70" height="25" align="center">No. Rangka</td> 
    <td rowspan="2" width="70" height="25" align="center">No. Mesin</td>             
    <td rowspan="2" width="70" height="25" align="center">No. Tanggal Sertifikat </td>             
    <td colspan="5" height="25" align="center">Ukuran Kendaraan</td>             
    <td colspan="4" height="25" align="center">Jarak Sumbu</td>             
    <td colspan="4" height="25" align="center">Dimensi Bak Muatan</td>             
    <td colspan="7" height="25" align="center">Dimensi Tangki</td>             
    <td colspan="4" height="25" align="center">Pemakaian Ban Diizinkan</td>    
 	<td rowspan="2" width="80" height="25" align="center">Konfigurasi Sumbu</td>              
    <td rowspan="2" width="80" height="25" align="center">Jumlah Berat Diperbolehkan (JBB) </td>              
    <td rowspan="2" width="100" height="25" align="center">Jumlah Berat Kombinasi yang Diperbolehkan</td> 	
    <td colspan="4" height="25" align="center">Berat Kosong</td>             
    <td colspan="2" height="25" align="center">Daya Angkut</td>             
	<td rowspan="2" width="60" height="25" align="center">Jumlah Berat diizinkan (JBI) </td>              
    <td rowspan="2" width="60" height="25" align="center">Jumlah Berat Kombinasi diizinkan</td>    
    <td rowspan="2" width="60" height="25" align="center">Muatan Sumbu Terberat</td>              
    <td rowspan="2" width="50" height="25" align="center">Kelas Jalan</td>              
    <td rowspan="2" width="110" height="25" align="center">Masa Berlaku Uji</td>                                      
  </tr>
  <tr class="tdtitle_black">
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Panjang</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Lebar</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Tinggi</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Julur Belakang (ROH)</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Julur Depan (FOH)</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Sumbu I-II</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Sumbu II-III</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Sumbu III-IV</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Q (Jarak Titik Berat)</td>  
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Panjang</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Lebar</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Tinggi</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Bahan Bak</td>  
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Panjang</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Lebar</td>              
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Tinggi</td>  	
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Volume (liter) </td>  	
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Jenis Muatan</td>  	
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Berat Jenis Muatan (kg/dm3)</td>  	
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Bahan Tangki</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 1</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 2</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 3</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 4</td>  	 
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 1</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 2</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 3</td>  	
	<td width="40" height="25" align="center" bgcolor="#CCCCCC">Sumbu 4</td> 	
	<td width="50" height="25" align="center" bgcolor="#CCCCCC">Orang (0rg)</td>              
    <td width="50" height="25" align="center" bgcolor="#CCCCCC">Barang (Kg)</td>
  </tr>
  <?php
  /*if ($kategori=="nama")
  {  $strsql="select * from pkb_kendaraan_wajib_uji where nama like '%$key%'  order by id desc"; }
  elseif ($kategori=="no_uji")
  {  $strsql="select * from pkb_kendaraan_wajib_uji where no_uji like '%$key%'  order by id desc"; }*/
  
  if(!empty($key) or !empty($key2)){
	  if(!empty($kategori)){
		  if(!empty($kategori2)){
			$strsql="select * from pkb_kendaraan_wajib_uji where $kategori like '%$key%' and $kategori2 like '%$key2%' order by id desc";  
		  }else{
		 	$strsql="select * from pkb_kendaraan_wajib_uji where $kategori like '%$key%' order by id desc";
		  }
	  }else{
		  if(!empty($kategori2)){
			  $strsql="select * from pkb_kendaraan_wajib_uji where $kategori2 like '%$key2%' order by id desc";
		  }
	  }
  }
  else
  {  $strsql="select * from pkb_kendaraan_wajib_uji order by id desc"; }
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
	<td height="25" align="center"><?php echo $row[type]; ?></td>
	<td height="25" align="center"><?php echo $row[jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[model]; ?></td>
	<td height="25" align="center"><?php echo $row[kategori]; ?></td>
    <td height="25" align="center"><?php echo $row[cc]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_motor]; ?></td>
	<td height="25" align="center"><?php echo $row[bahan_bakar]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun_pembuatan]; ?></td>
    <td height="25" align="center"><?php echo $row[status_penggunaan]; ?></td>
    <td height="25" align="center"><?php echo $row[no_rangka]; ?></td>
    <td height="25" align="center"><?php echo $row[no_mesin]; ?></td>
    <td height="25" align="center"><?php echo $row[no_tgl_sertifik]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_lebar]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_jalur_belakang]; ?></td>
    <td height="25" align="center"><?php echo $row[uk_kend_jalur_depan]; ?></td>
	<td height="25" align="center"><?php echo $row[jarak_sumbu_1_2]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_sumbu_2_3]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_sumbu_3_4]; ?></td>
    <td height="25" align="center"><?php echo $row[jarak_titik_berat]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_bak_panjang]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_bak_lebar]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_bak_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_bak_bahan_bak]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_panjang]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_lebar]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_tinggi]; ?></td>
    <td height="25" align="center"><?php echo $row[dim_tangki_volume]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_jenis]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_berat_jenis_muatan]; ?></td>
	<td height="25" align="center"><?php echo $row[dim_tangki_bahan_tangki]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_1]; ?></td>
	<td height="25" align="center"><?php echo $row[ban_sumbu_2]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_3]; ?></td>
    <td height="25" align="center"><?php echo $row[ban_sumbu_4]; ?></td>
	<td height="25" align="center"><?php echo $row[	konfig_sumbu]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_diperbolehkan]; ?></td>
	<td height="25" align="center"><?php echo $row[jml_berat_kombinasi_diperbolehkan]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_1]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_2]; ?></td>
    <td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_3]; ?></td>
	<td height="25" align="center"><?php echo $row[	berat_kosong_sumbu_4]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_diizinkan]; ?></td>
    <td height="25" align="center"><?php echo $row[jml_berat_kombinasi_diizinkan]; ?></td>
	<td height="25" align="center"><?php echo $row[muatan_sumbu_terberat]; ?></td>
    <td height="25" align="center"><?php echo $row[kelas_jalan]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_berlaku_uji]); 
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
</body>
</html>