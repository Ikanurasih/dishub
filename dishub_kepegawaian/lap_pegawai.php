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
<a class="tdtitle_black">Data Pegawai Dinas Perhubungan</a>
</center>
<br>
<table border="1" cellspacing="0" cellpadding="1" width="1160" align="center">
  <tr class="tdtitle_black">
	<td width="50" rowspan="2" align="center" bgcolor="#CCCCCC">No.</td>
    <td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama</td>
	<td width="150" height="25" colspan="2" align="center" bgcolor="#CCCCCC">NIP</td>
    <td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">TTL</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Alamat</td>
	<td width="150" height="25" colspan="2" align="center" bgcolor="#CCCCCC">No. Telp</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenkel</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Sts. Perkawinan</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Agama</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jns. Kepegawaian</td>
	<td width="150" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Sts. Pegawai</td>
	<td width="150" height="25" colspan="4" align="center" bgcolor="#CCCCCC">TMT Sts. Pegawai</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Pangkat</td>  
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Golongan</td>  
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">TMT. Pangkat/Golongan</td>  
	<td width="100" height="25" colspan="4" align="center" bgcolor="#CCCCCC">Masa Kerja</td>  
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Masa Kerja Kontrak</td>  
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jabatan</td>  
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Eselon</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">TMT. Jabatan/Eselon</td>
	<td width="100" height="25" colspan="3" align="center" bgcolor="#CCCCCC">SK Jabatan</td>
	<td width="100" height="25" colspan="2" align="center" bgcolor="#CCCCCC">Unit Kerja</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No. Karis</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No. KARSU</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">No. KARPEG</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jenjang Pendidikan</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jurusan</td>
	<td width="100" height="25" colspan="2" align="center" bgcolor="#CCCCCC">Ijazah Pendidikan<</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Th. Lulus</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Jns. Diklat Kepemimpinan</td>
	<td width="100" height="25" colspan="2" align="center" bgcolor="#CCCCCC">Ijazah (Diklat)</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Th. Lulus (Diklat)</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Susunan Keluarga</td>
	<td width="100" height="25" colspan="6" align="center" bgcolor="#CCCCCC">Suami/Istri/Anak</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama Sekolah</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Nama Jurusan/Diklat/Kursus</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Status Sekolah</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Tahun Lulus</td>
	<td width="100" height="25" colspan="2" align="center" bgcolor="#CCCCCC">Ijazah</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Riwayat_pekerjaan</td>
	<td width="100" height="25" colspan="3" align="center" bgcolor="#CCCCCC">Jabatan</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Satuan Kerja</td>
	<td width="100" height="25" colspan="3" align="center" bgcolor="#CCCCCC">Surat Keputusan</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">Pangkat</td>
	<td width="100" height="25" rowspan="2" align="center" bgcolor="#CCCCCC">golongan</td>	
   </tr>
   <tr class="tdtitle_black">                          
    <td   width="110" height="25" align="center" bgcolor="#CCCCCC">Lama</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Baru</td>    
	<td   width="110" height="25" align="center" bgcolor="#CCCCCC">Rumah</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">HP</td> 
	<td   width="110" height="25" align="center" bgcolor="#CCCCCC">CPNS</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">PNS</td>    
	<td   width="110" height="25" align="center" bgcolor="#CCCCCC">HONDA</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">KONTRAK</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Golongan</td>  
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tambahan</td>  
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Seluruhnya</td>  
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Di Dishub</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">No. SK</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. SK</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Pejabat</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Bidang</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Bagian/Seksi/UPTD</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">No. Ijazah</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. Ijazah</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">No. Ijazah (Diklat)</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. Ijazah (Diklat)</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Nama</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. Lahir</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. Nikah</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Jns. Kelamin</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Pekerjaan/Sekolah</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Status Keluarga</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Riwayat No.Ijazah</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Riwayat Tgl.Ijazah</td>   
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Nama</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">TMT</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Eselon</td>  
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">No. SK</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Tgl. SK</td> 
	<td   width="100" height="25" align="center" bgcolor="#CCCCCC">Pejabat</td>                              
   </tr>
  <?php
  if ($kategori=="nama")
  {  $strsql="select * from peg_pegawai where nama like '%$key%' order by id desc"; }
  elseif ($kategori=="nip_lama")
  {  $strsql="select * from peg_pegawai where nip_lama like '%$key%' order by id desc"; }
  elseif ($kategori=="nip_baru")
  {  $strsql="select * from peg_pegawai where nip_baru like '%$key%' order by id desc"; }
  elseif ($kategori=="tempat_lahir")
  {  $strsql="select * from peg_pegawai where tempat_lahir like '%$key%' order by id desc"; }
  elseif ($kategori=="tgl_lahir")
  {  $strsql="select * from peg_pegawai where tgl_lahir like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from peg_pegawai where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="telp_rumah")
  {  $strsql="select * from peg_pegawai where telp_rumah like '%$key%' order by id desc"; }
  elseif ($kategori=="telp_hp")
  {  $strsql="select * from peg_pegawai where telp_hp like '%$key%' order by id desc"; }
  elseif ($kategori=="jenkel")
  {  $strsql="select * from peg_pegawai where jenkel like '%$key%' order by id desc"; }
   elseif ($kategori=="sts_perkawinan")
  {  $strsql="select * from peg_pegawai where sts_perkawinan like '%$key%' order by id desc"; }
   elseif ($kategori=="agama")
  {  $strsql="select * from peg_pegawai where agama like '%$key%' order by id desc"; }
   elseif ($kategori=="jns_kepegawaian")
  {  $strsql="select * from peg_pegawai where jns_kepegawaian like '%$key%' order by id desc"; }
   elseif ($kategori=="sts_pegawai")
  {  $strsql="select * from peg_pegawai where sts_pegawai like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_cpns")
  {  $strsql="select * from peg_pegawai where tmt_cpns like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_pns")
  {  $strsql="select * from peg_pegawai where tmt_pns like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_honda")
  {  $strsql="select * from peg_pegawai where tmt_honda like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_kontrak")
  {  $strsql="select * from peg_pegawai where tmt_kontrak like '%$key%' order by id desc"; }
    elseif ($kategori=="pangkat")
  {  $strsql="select * from peg_pegawai where pangkat like '%$key%' order by id desc"; }
    elseif ($kategori=="golongan")
  {  $strsql="select * from peg_pegawai where golongan like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_pangkat")
  {  $strsql="select * from peg_pegawai where tmt_pangkat like '%$key%' order by id desc"; }
    elseif ($kategori=="jabatan")
  {  $strsql="select * from peg_pegawai where jabatan like '%$key%' order by id desc"; }
    elseif ($kategori=="eselon")
  {  $strsql="select * from peg_pegawai where eselon like '%$key%' order by id desc"; }
    elseif ($kategori=="tmt_jabatan")
  {  $strsql="select * from peg_pegawai where tmt_jabatan like '%$key%' order by id desc"; }
    elseif ($kategori=="no_sk_jabatan")
  {  $strsql="select * from peg_pegawai where no_sk_jabatan like '%$key%' order by id desc"; }
    elseif ($kategori=="tgl_sk_jabatan")
  {  $strsql="select * from peg_pegawai where tgl_sk_jabatan like '%$key%' order by id desc"; }
    elseif ($kategori=="sk_jabatan_pejabat")
  {  $strsql="select * from peg_pegawai where sk_jabatan_pejabat like '%$key%' order by id desc"; }
    elseif ($kategori=="uk_bidang")
  {  $strsql="select * from peg_pegawai where uk_bidang like '%$key%' order by id desc"; }
    elseif ($kategori=="uk_bagian")
  {  $strsql="select * from peg_pegawai where uk_bagian like '%$key%' order by id desc"; } 
    elseif ($kategori=="no_karis")
  {  $strsql="select * from peg_pegawai where no_karis like '%$key%' order by id desc"; } 
    elseif ($kategori=="no_karsu")
  {  $strsql="select * from peg_pegawai where no_karsu like '%$key%' order by id desc"; } 
    elseif ($kategori=="no_karpeg")
  {  $strsql="select * from peg_pegawai where no_karpeg like '%$key%' order by id desc"; } 
    elseif ($kategori=="pendidikan")
  {  $strsql="select * from peg_pegawai where pendidikan like '%$key%' order by id desc"; } 
    elseif ($kategori=="jurusan")
  {  $strsql="select * from peg_pegawai where jurusan like '%$key%' order by id desc"; } 
    elseif ($kategori=="no_ijazah")
  {  $strsql="select * from peg_pegawai where no_ijazah like '%$key%' order by id desc"; } 
    elseif ($kategori=="tgl_ijazah")
  {  $strsql="select * from peg_pegawai where tgl_ijazah like '%$key%' order by id desc"; } 
    elseif ($kategori=="th_lulus")
  {  $strsql="select * from peg_pegawai where th_lulus like '%$key%' order by id desc"; } 
    elseif ($kategori=="diklat_pimpin")
  {  $strsql="select * from peg_pegawai where diklat_pimpin like '%$key%' order by id desc"; } 
    elseif ($kategori=="diklat_no_ijazah")
  {  $strsql="select * from peg_pegawai where diklat_no_ijazah like '%$key%' order by id desc"; } 
    elseif ($kategori=="diklat_tgl_ijazah")
  {  $strsql="select * from peg_pegawai where diklat_tgl_ijazah like '%$key%' order by id desc"; } 
    elseif ($kategori=="diklat_th_lulus")
  {  $strsql="select * from peg_pegawai where diklat_th_lulus like '%$key%' order by id desc"; }  
    elseif ($kategori=="riwayat_sekolah")
  {  $strsql="select * from peg_pegawai where riwayat_sekolah like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_jurusan")
  {  $strsql="select * from peg_pegawai where riwayat_jurusan like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_status")
  {  $strsql="select * from peg_pegawai where riwayat_status like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_th_lulus")
  {  $strsql="select * from peg_pegawai where riwayat_th_lulus like '%$key%' order by id desc"; }  
    elseif ($kategori=="riwayat_no_ijazah")
  {  $strsql="select * from peg_pegawai where riwayat_no_ijazah like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_tgl_ijazah")
  {  $strsql="select * from peg_pegawai where riwayat_tgl_ijazah like '%$key%' order by id desc"; }
    elseif ($kategori=="riwayat_pekerjaan")
  {  $strsql="select * from peg_pegawai where riwayat_pekerjaan like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_jbt_nama")
  {  $strsql="select * from peg_pegawai where riwayat_jbt_nama like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_jbt_tmt")
  {  $strsql="select * from peg_pegawai where riwayat_jbt_tmt like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_jbt_eselon")
  {  $strsql="select * from peg_pegawai where riwayat_jbt_eselon like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_sat_kerja")
  {  $strsql="select * from peg_pegawai where riwayat_sat_kerja like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_no_sk")
  {  $strsql="select * from peg_pegawai where riwayat_no_sk like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_tgl_sk")
  {  $strsql="select * from peg_pegawai where riwayat_tgl_sk like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_pejabat_sk")
  {  $strsql="select * from peg_pegawai where riwayat_pejabat_sk like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_pangkat")
  {  $strsql="select * from peg_pegawai where riwayat_pangkat like '%$key%' order by id desc"; } 
    elseif ($kategori=="riwayat_golongan")
  {  $strsql="select * from peg_pegawai where riwayat_golongan like '%$key%' order by id desc"; } 
  
   else
  {  $strsql="select * from peg_pegawai order by id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil) or die(mysql_error()))
  {
  $NO++;
  ?>
  <tr class="text">
    <td height="25" align="center"><?php echo $NO."."; ?></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
	<td height="25" align="center"><?php echo $row[nip_lama]; ?></td>
	<td height="25" align="center"><?php echo $row[nip_baru]; ?></td>
	<td height="25" align="center">
		<?php echo $row[tempat_lahir]; ?>, 
		<?php
	  	$temp=explode("-",$row[tgl_lahir]); 
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
	<td height="25" align="center"><?php echo $row[alamat]; ?></td>
	<td height="25" align="center"><?php echo $row[telp_rumah]; ?></td>
	<td height="25" align="center"><?php echo $row[telp_hp]; ?></td>
	<td height="25" align="center"><?php echo $row[jenkel]; ?></td>
	<td height="25" align="center"><?php echo $row[sts_perkawinan]; ?></td>
	<td height="25" align="center"><?php echo $row[agama]; ?></td>
	<td height="25" align="center"><?php echo $row[jns_kepegawaian]; ?></td>
	<td height="25" align="center"><?php echo $row[sts_pegawai]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_cpns]); 
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
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_pns]); 
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
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_honda]); 
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
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_kontrak]); 
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
	<td height="25" align="center"><?php echo $row[pangkat]; ?></td>
	<td height="25" align="center"><?php echo $row[golongan]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_pangkat]); 
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
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td height="25" align="center"><?php echo $row[jabatan]; ?></td>
	<td height="25" align="center"><?php echo $row[eselon]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tmt_jabatan]); 
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
	<td height="25" align="center"><?php echo $row[no_sk_jabatan]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tgl_sk_jabatan]); 
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
	<td height="25" align="center"><?php echo $row[sk_jabatan_pejabat]; ?></td>
	<td height="25" align="center"><?php echo $row[uk_bidang]; ?></td>
	<td height="25" align="center"><?php echo $row[uk_bagian]; ?></td>
	<td height="25" align="center"><?php echo $row[no_karis]; ?></td>
	<td height="25" align="center"><?php echo $row[no_karsu]; ?></td>
	<td height="25" align="center"><?php echo $row[no_karpeg]; ?></td>
	<td height="25" align="center"><?php echo $row[pendidikan]; ?></td>
	<td height="25" align="center"><?php echo $row[jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[no_ijazah]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[tgl_ijazah]); 
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
	<td height="25" align="center"><?php echo $row[th_lulus]; ?></td>
	<td height="25" align="center"><?php echo $row[diklat_pimpin]; ?></td>
	<td height="25" align="center"><?php echo $row[diklat_no_ijazah]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[diklat_tgl_ijazah]); 
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
	<td height="25" align="center"><?php echo $row[diklat_th_lulus]; ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td height="25" align="center"><?php echo $row[riwayat_sekolah]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_jurusan]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_status]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_th_lulus]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_no_ijazah]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[riwayat_tgl_ijazah]); 
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
	<td height="25" align="center"><?php echo $row[riwayat_pekerjaan]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_jbt_nama]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[riwayat_jbt_tmt]); 
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
	<td height="25" align="center"><?php echo $row[riwayat_jbt_eselon]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_sat_kerja]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_no_sk]; ?></td>
	<td height="25" align="center">
		<?php
	  	$temp=explode("-",$row[riwayat_tgl_sk]); 
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
	<td height="25" align="center"><?php echo $row[riwayat_pejabat_sk]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_pangkat]; ?></td>
	<td height="25" align="center"><?php echo $row[riwayat_golongan]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
<?php include "footer.inc.php"; ?>
</body>
</html>