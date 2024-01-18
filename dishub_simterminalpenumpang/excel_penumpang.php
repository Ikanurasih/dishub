<?php
include "global/config.php";
require "global/global_fungsi.php";

	$jabatan=$_REQUEST['jabatan'];
	$nama_pegawai=$_REQUEST['nama_pegawai'];
	$nip=$_REQUEST['nip'];
	$golongan=$_REQUEST['golongan'];
	$bulan=$_REQUEST['bulan'];
	$kategori=$_REQUEST['kategori'];
	$key=$_REQUEST['key'];
	$sekarang=date("Y-m-d");
	
		Header("Content-Type: application/vnd.ms-excel");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIM TERMINAL PENUMPANG</title>
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
<body><center>
<?php
  if ($kategori=="bulan" AND !empty($key))
  {
?>
 REKAPITULASI ANGKUTAN PENUMPANG BULAN <?php bulan($bulan); ?> <?php echo $key; ?>
<?php
 }
 else
 {
 ?>
 REKAPITULASI ANGKUTAN PENUMPANG TAHUN <?php echo $key; ?>
<?php
}
?></center>
<table border="1" cellspacing="0" cellpadding="1" width="1880">
  <tr class="tdtitle_black">
    <td   width="120" height="25" rowspan="3" align="center" bgcolor="#CCCCCC">Tanggal</td> 
    <td height="25"   colspan="7" align="center" bgcolor="#CCCCCC">Jurusan Nganjuk</td>
	<td height="25"   colspan="7" align="center" bgcolor="#CCCCCC">Jurusan Ponorogo</td>                                        
    <td height="25"   colspan="7" align="center" bgcolor="#CCCCCC">Jurusan Magetan</td>                                        
    <td height="25"   colspan="7" align="center" bgcolor="#CCCCCC">Jurusan Ngawi / Solo / Jogya / Jakarta</td>                                        
    <td height="25"   colspan="7" align="center" bgcolor="#CCCCCC">Jumlah</td>                                                                        
  </tr>
   <tr class="tdtitle_black">                               
    <td height="25"   colspan="3" align="center" bgcolor="#CCCCCC">Datang</td> 
	<td height="25"   colspan="4" align="center" bgcolor="#CCCCCC">&nbsp;</td> 
	<td height="25"   colspan="3" align="center" bgcolor="#CCCCCC">Datang</td> 
	<td height="25"   colspan="4" align="center" bgcolor="#CCCCCC">&nbsp;</td>
	<td height="25"   colspan="3" align="center" bgcolor="#CCCCCC">Datang</td> 
	<td height="25"   colspan="4" align="center" bgcolor="#CCCCCC">&nbsp;</td>     
	<td height="25"   colspan="3" align="center" bgcolor="#CCCCCC">Datang</td> 
	<td height="25"   colspan="4" align="center" bgcolor="#CCCCCC">&nbsp;</td>  
	<td height="25"   colspan="3" align="center" bgcolor="#CCCCCC">Datang</td> 
	<td height="25"   colspan="4" align="center" bgcolor="#CCCCCC">&nbsp;</td>                                        
   </tr>
   <tr class="tdtitle_black">
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Bus</td> 
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">RIT</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Nilai Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Hasil Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah PNP</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Bus</td> 
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">RIT</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Nilai Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Hasil Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah PNP</td>   
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Bus</td> 
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">RIT</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Nilai Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Hasil Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah PNP</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Bus</td> 
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">RIT</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Nilai Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Hasil Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah PNP</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">Bus</td> 
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">RIT</td> 
	<td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">PNP Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Nilai Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Hasil Peron</td>                                        
    <td   width="50" height="25" align="center" bgcolor="#CCCCCC">Jumlah PNP</td>                                                                              
   </tr>
  <?php
  if ($kategori=="bulan" AND !empty($key))
  {  $strsql="select * from ter_penumpang where month(tanggal)='$bulan' and year(tanggal)='$key' order by tanggal asc"; }
  elseif ($kategori=="tahun" AND !empty($key))
  {  $strsql="select tanggal, sum(bus_nganjuk) as bus_nganjuk, sum(rit_nganjuk) as rit_nganjuk, sum(pnp_nganjuk) as pnp_nganjuk, sum(pnp_nganjuk) as pnp_nganjuk,    sum(pnp_peron_nganjuk) as pnp_peron_nganjuk, sum(nilai_peron_nganjuk) as nilai_peron_nganjuk, sum(hasil_peron_nganjuk) as hasil_peron_nganjuk, sum(bus_ponorogo) as bus_ponorogo, sum(rit_ponorogo) as rit_ponorogo, sum(pnp_ponorogo) as pnp_ponorogo, sum(pnp_peron_ponorogo) as pnp_peron_ponorogo, sum(nilai_peron_ponorogo) as nilai_peron_ponorogo, sum(hasil_peron_ponorogo) as hasil_peron_ponorogo, sum(bus_magetan) as bus_magetan, sum(rit_magetan) as rit_magetan, sum(pnp_magetan) as pnp_magetan, sum(pnp_peron_magetan) as pnp_peron_magetan, sum(nilai_peron_magetan) as nilai_peron_magetan, sum(hasil_peron_magetan) as hasil_peron_magetan, sum(bus_lainnya) as bus_lainnya, sum(rit_lainnya) as rit_lainnya, sum(pnp_lainnya) as pnp_lainnya, sum(pnp_peron_lainnya) as pnp_peron_lainnya, sum(nilai_peron_lainnya) as nilai_peron_lainnya, sum(hasil_peron_lainnya) as hasil_peron_lainnya 
  from ter_penumpang 
  where year(tanggal)='2012' 
  group by month(tanggal) 
  order by tanggal asc"; }
  else
  {  $strsql="select * from ter_penumpang order by tanggal asc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text"> 
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tanggal]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	 if ($kategori=="tahun")
	 {
	  //echo $tgl;
	  //echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	 }
	 else
	 {
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;	 
	 }
	  ?></td>
    <td height="25" align="center"><?php echo $row[bus_nganjuk]; $total_bus_nganjuk=$total_bus_nganjuk+$row[bus_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_nganjuk]; $total_rit_nganjuk=$total_rit_nganjuk+$row[rit_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_nganjuk]; $total_pnp_nganjuk=$total_pnp_nganjuk+$row[pnp_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_nganjuk]; $total_pnp_peron_nganjuk=$total_pnp_peron_nganjuk+$row[pnp_peron_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_nganjuk]; $total_nilai_peron_nganjuk=$total_nilai_peron_nganjuk+$row[nilai_peron_nganjuk]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_nganjuk]=$row[pnp_peron_nganjuk]*$row[nilai_peron_nganjuk]; $total_hasil_peron_nganjuk=$total_hasil_peron_nganjuk+$row[hasil_peron_nganjuk]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp=$row[pnp_nganjuk]+$row[pnp_peron_nganjuk]; echo $jumlah_pnp; 
	$total_jumlah_pnp_nganjuk=$total_jumlah_pnp_nganjuk+$jumlah_pnp; ?></td>
    <td height="25" align="center"><?php echo $row[bus_ponorogo]; $total_bus_ponorogo=$total_bus_ponorogo+$row[bus_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_ponorogo]; $total_rit_ponorogo=$total_rit_ponorogo+$row[rit_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_ponorogo]; $total_pnp_ponorogo=$total_pnp_ponorogo+$row[pnp_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_ponorogo]; $total_pnp_peron_ponorogo=$total_pnp_peron_ponorogo+$row[pnp_peron_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_ponorogo]; $total_nilai_peron_ponorogo=$total_nilai_peron_ponorogo+$row[nilai_peron_ponorogo]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_ponorogo]=$row[pnp_peron_ponorogo]*$row[nilai_peron_ponorogo]; $total_hasil_peron_ponorogo=$total_hasil_peron_ponorogo+$row[hasil_peron_ponorogo]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_ponorogo=$row[pnp_ponorogo]+$row[pnp_peron_ponorogo]; echo $jumlah_pnp_ponorogo;
	$total_jumlah_pnp_ponorogo=$total_jumlah_pnp_ponorogo+$jumlah_pnp_ponorogo; ?></td>
	<td height="25" align="center"><?php echo $row[bus_magetan]; $total_bus_magetan=$total_bus_magetan+$row[bus_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_magetan]; $total_rit_magetan=$total_rit_magetan+$row[rit_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_magetan]; $total_pnp_magetan=$total_pnp_magetan+$row[pnp_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_magetan];   $total_pnp_peron_magetan=$total_pnp_peron_magetan+$row[pnp_peron_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_magetan]; $total_nilai_peron_magetan=$total_nilai_peron_magetan+$row[nilai_peron_magetan]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_magetan]=$row[pnp_peron_magetan]*$row[nilai_peron_magetan]; $total_hasil_peron_magetan=$total_hasil_peron_magetan+$row[hasil_peron_magetan]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_magetan=$row[pnp_magetan]+$row[pnp_peron_magetan]; echo $jumlah_pnp_magetan; 
	$total_jumlah_pnp_magetan=$total_jumlah_pnp_magetan+$jumlah_pnp_magetan; ?></td>
	<td height="25" align="center"><?php echo $row[bus_lainnya]; $total_bus_lainnya=$total_bus_lainnya+$row[bus_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[rit_lainnya]; $total_rit_lainnya=$total_rit_lainnya+$row[rit_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_lainnya]; $total_pnp_lainnya=$total_pnp_lainnya+$row[pnp_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[pnp_peron_lainnya];  $total_pnp_peron_lainnya=$total_pnp_peron_lainnya+$row[pnp_peron_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[nilai_peron_lainnya]; $total_nilai_peron_lainnya=$total_nilai_peron_lainnya+$row[nilai_peron_lainnya]; ?></td>
    <td height="25" align="center"><?php echo $row[hasil_peron_lainnya]=$row[pnp_peron_lainnya]*$row[nilai_peron_lainnya]; $total_hasil_peron_lainnya=$total_hasil_peron_lainnya+$row[hasil_peron_lainnya]; ?></td>
	<td height="25" align="center"><?php $jumlah_pnp_lainnya=$row[pnp_lainnya]+$row[pnp_peron_lainnya]; echo $jumlah_pnp_lainnya; 
	$total_jumlah_pnp_lainnya=$total_jumlah_pnp_lainnya+$jumlah_pnp_lainnya; ?></td>
	<td height="25" align="center"><?php $i=$row[bus_nganjuk]+$row[bus_ponorogo]+$row[bus_magetan]+$row[bus_lainnya]; echo $i; 
	$i_hasil=$i_hasil+$i; ?></td>
	<td height="25" align="center"><?php $j=$row[rit_nganjuk]+$row[rit_ponorogo]+$row[rit_magetan]+$row[rit_lainnya]; echo $j; 
	$j_hasil=$j_hasil+$j; ?></td>
	<td height="25" align="center"><?php $k=$row[pnp_nganjuk]+$row[pnp_ponorogo]+$row[pnp_magetan]+$row[pnp_lainnya]; echo $k;
	$k_hasil=$k_hasil+$k; ?></td>
	<td height="25" align="center"><?php $l=$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]; echo $l;
	$l_hasil=$l_hasil+$l; ?></td>
	<td height="25" align="center"><?php $m=$row[nilai_peron_nganjuk]+$row[nilai_peron_ponorogo]+$row[nilai_peron_magetan]+$row[nilai_peron_lainnya]; echo $m; 
	$m_hasil=$m_hasil+$m; ?></td>
	<td height="25" align="center"><?php $n=$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]*$row[nilai_peron_nganjuk]+$row[nilai_peron_ponorogo]+$row[nilai_peron_magetan]+$row[nilai_peron_lainnya]; echo $n; 
	$n_hasil=$n_hasil+$n; ?></td>
	<td height="25" align="center">
		<?php  
			$o=	$row[pnp_nganjuk]+$row[pnp_ponorogo]+$row[pnp_magetan]+$row[pnp_lainnya]+
				$row[pnp_peron_nganjuk]+$row[pnp_peron_ponorogo]+$row[pnp_peron_magetan]+$row[pnp_peron_lainnya]
		; echo $o; 
	$o_hasil=$o_hasil+$o; ?>	</td>
   </tr>
  <?php
  }
  ?>
  <tr class="text" bgcolor="efefef">
    <td height="25" align="right">Jumlah&nbsp;</td>
    <td height="25" align="center"><?php echo $total_bus_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_rit_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_nganjuk; ?></td>
    <td height="25" align="center"><?php echo $total_bus_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_rit_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_ponorogo; ?></td>
    <td height="25" align="center"><?php echo $total_bus_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_rit_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_magetan; ?></td>
    <td height="25" align="center"><?php echo $total_bus_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_rit_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_pnp_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_nilai_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_hasil_peron_lainnya; ?></td>
    <td height="25" align="center"><?php echo $total_jumlah_pnp_lainnya; ?></td>
    <td height="25" align="center"><?php echo $i_hasil; ?></td>
    <td height="25" align="center"><?php echo $j_hasil; ?></td>
    <td height="25" align="center"><?php echo $k_hasil; ?></td>
    <td height="25" align="center"><?php echo $l_hasil; ?></td>
    <td height="25" align="center"><?php echo $m_hasil; ?></td>
    <td height="25" align="center"><?php echo $n_hasil; ?></td>
    <td height="25" align="center"><?php echo $o_hasil; ?></td>
  </tr>
</table>
</body>
</html>