<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'guardraill '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
    
//Buat header untuk tabel
$myArr	=array("No","Nama Jalan","Dari","Ke","Panjang Guardraill (m2)","Kondisi","Tahun Pengadaan","Lokasi");
$excel->writeLine($myArr);

//buat query
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and b.nama_jalan like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="dari")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and dari like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="ke")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and ke like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="jumlah")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and jumlah like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="kondisi")
  {  
	  if ($key=="baik" or $key=="Baik")
	  { $key="1"; }
	  elseif ($key=="Rusak" or $key=="rusak") 
	  { $key="2";}
	  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and kondisi like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="tahun")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and thn_pengadaan like '%$key%' && tipe='2' order by id desc"; }
  elseif ($kategori=="lokasi")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and lokasi like '%$key%' && tipe='2' order by id desc"; }  
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_umum a, lal_jalan b where a.id_jalan=b.id and tipe='2' order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$nama_jalan	= 	$data['nama_jalan'];
	$dari		=	$data['dari'];
    $ke			=	$data['ke'];
    $jumlah		=	$data['jumlah'];
	 
		if($data[kondisi]=='1') { $kondisi_ok="Baik"; }
		elseif($data[kondisi]=='2'){ $kondisi_ok="Rusak"; } 
	$kondisi	= $kondisi_ok;
	$tahun_pengadaan = $data['thn_pengadaan'];
    $lokasi		=	$data['lokasi'];

	$arr = array($no,$nama_jalan,$dari,$ke,$jumlah,$kondisi,$tahun_pengadaan,$lokasi);
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="excel/'.$excelfile.'">'.$excelfile.'</a>';
?>