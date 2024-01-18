<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'halte '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
    
//Buat header untuk tabel
$myArr	=array("No","Nama Jalan","Dari","Ke","Nama Halte","Identitas Halte","Rambu Petunjuk","Papan Informasi Trayek","Lampu Penerangan","Tempat Duduk");
$excel->writeLine($myArr);

//buat query
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_halte")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id and nama_halte like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_halte a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$nama_jalan	= 	$data['nama_jalan'];
	$dari		=	$data['dari'];
    $ke			=	$data['ke'];
	$nama_halte	= 	$data['nama_halte'];

		if($data[identitas]=='1') { $identitas_ok="Ada"; }
		elseif($data[identitas]=='2'){ $identitas_ok="Tidak Ada"; } 
	$identitas	= $identitas_ok;
		
		if($data[rambu]=='1') { $rambu_ok="Ada"; }
		elseif($data[rambu]=='2'){ $rambu_ok="Tidak Ada"; } 
	$rambu		= $rambu_ok;
	
		if($data[papan_info]=='1') { $papan_info_ok="Ada"; }
		elseif($data[papan_info]=='2'){ $papan_info_ok="Tidak Ada"; } 
	$papan_info	= $papan_info_ok;
	
		if($data[lampu]=='1') { $lampu_ok="Ada"; }
		elseif($data[lampu]=='2'){ $lampu_ok="Tidak Ada"; } 
	$lampu	=	$lampu_ok;

		if($data[tmp_duduk]=='1') { $tmp_duduk_ok="Ada"; }
		elseif($data[tmp_duduk]=='2'){ $tmp_duduk_ok="Tidak Ada"; } 
	$tmp_duduk	= $tmp_duduk_ok;

	$arr = array($no,$nama_jalan,$dari,$ke,$nama_halte,$identitas,$rambu,$papan_info,$lampu,$tmp_duduk);
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="excel/'.$excelfile.'">'.$excelfile.'</a>';
?>