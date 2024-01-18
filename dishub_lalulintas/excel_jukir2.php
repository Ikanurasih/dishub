<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'jukir '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
    
//Buat header untuk tabel
$myArr	=array("No","Nama Jukir","Tempat Lahir","Tgl. Lahir","Alamat","Jenis Kelamin","Titik Parkir","Alamat Lokasi");
$excel->writeLine($myArr);

//buat query
  if ($kategori=="nama_jukir")
  {  $strsql="select * from lal_jukir where nama_jukir like '%$key%' order by id desc"; }
  elseif ($kategori=="titik_parkir")
  {  $strsql="select * from lal_jukir where titik_parkir like '%$key%' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select * from lal_jukir where lokasi like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_jukir order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$nama_jalan	= 	$data['nama_jukir'];
	$tmp_lahir		=	$data['tmp_lahir'];
    $tgl_lahir			=	$data['tgl_lahir'];
	$alamat	= 	$data['alamat'];
	$jk			=	$data['jk'];
	$titik_parkir	=	$data['titik_parkir'];	
    $lokasi		=	$data['lokasi'];

	$arr = array($no,$nama_jalan,$tmp_lahir,$tgl_lahir,$alamat,$jk,$titik_parkir,$lokasi);
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="excel/'.$excelfile.'">'.$excelfile.'</a>';
?>