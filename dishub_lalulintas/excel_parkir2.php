<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'parkir '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
    
//Buat header untuk tabel
$myArr	=array("No","Nama Jalan","Dari","Ke");
$excel->writeLine($myArr);

//buat query
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.dari like '%$key%' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id and b.ke like '%$key%' order by id desc"; }
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_parkir a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$nama_jalan	= 	$data['nama_jalan'];
	$dari		=	$data['dari'];
    $ke			=	$data['ke'];
    $warna1_jml	=	$data['warna1_jml'];

		if($data[warna1_kondisi]=="1") { $warna1_kondisi_ok="Baik";}
		if($data[warna1_kondisi]=="2") { $warna1_kondisi_ok="Mati";}
		if($data[warna1_kondisi]=="3") { $warna1_kondisi_ok="Rusak";}
		
	$warna1_kondisi	=	$warna1_kondisi_ok;
	$warna1_tahun	=	$data[warna1_tahun];
    $warna1_lokasi	=	$data[warna1_lokasi]; 
	
	$warna2_jml		=	$data[warna2_jml]; 

		if($data[warna2_kondisi]=="1") { $warna2_kondisi_ok="Baik";}
		if($data[warna2_kondisi]=="2") { $warna2_kondisi_ok="Mati";}
		if($data[warna2_kondisi]=="3") { $warna2_kondisi_ok="Rusak";}
	$warna2_kondisi	=	$warna2_kondisi_ok;
	$warna2_tahun	=	$data[warna2_tahun];
    $warna2_lokasi	=	$data[warna2_lokasi]; 
	
	$warna3_jml		=	$data[warna3_jml]; 

		if($data[warna3_kondisi]=="1") { $warna3_kondisi_ok="Baik";}
		if($data[warna3_kondisi]=="2") { $warna3_kondisi_ok="Mati";}
		if($data[warna3_kondisi]=="3") { $warna3_kondisi_ok="Rusak";}
	$warna3_kondisi	=	$warna3_kondisi_ok;
	$warna3_tahun	=	$data[warna3_tahun];
    $warna3_lokasi	=	$data[warna3_lokasi]; 

	$arr = array($no,$nama_jalan,$dari,$ke,$warna1_jml,$warna1_kondisi,$warna1_tahun,$warna1_lokasi,$warna2_jml,$warna2_kondisi,$warna2_tahun,$warna2_lokasi,$warna3_jml,$warna3_kondisi,$warna3_tahun,$warna3_lokasi);
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="'.$lokasi.$excelfile.'">'.$excelfile.'</a>';
?>