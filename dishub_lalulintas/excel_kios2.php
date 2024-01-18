<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'kios_shelter '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
	
//Buat header untuk tabel
$myArr	=array("No","No. Kios","Nama Penyewa","Alamat","Luas Kios (m2)","Jenis Usaha","No. Izin","Tgl. Izin","Masa Berlaku","Biaya");
$excel->writeLine($myArr);

//buat query
  if ($kategori=="no_kios")
  {  $strsql="select * from lal_kios where no_kios like '%$key%' order by id desc"; }
  elseif ($kategori=="nama_penyewa")
  {  $strsql="select * from lal_kios where nama_penyewa like '%$key%' order by id desc"; }
  elseif ($kategori=="alamat")
  {  $strsql="select * from lal_kios where alamat like '%$key%' order by id desc"; }
  elseif ($kategori=="usaha")
  {  $strsql="select * from lal_kios where usaha like '%$key%' order by id desc"; }
  elseif ($kategori=="no_izin")
  {  $strsql="select * from lal_kios where no_izin like '%$key%' order by id desc"; }
  elseif ($kategori=="tgl_izin")
  {  $strsql="select * from lal_kios where tgl_izin like '%$key%' order by id desc"; }
  else
  {  $strsql="select * from lal_kios order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$no_kios	= 	$data['no_kios'];
	$nama_penyewa		=	$data['nama_penyewa'];
    $alamat			=	$data['alamat'];
	$luas	= 	$data['luas'];
	$usaha			=	$data['usaha'];
	$tgl_izin	=	$data['tgl_izin'];	
    $masa_berlaku		=	$data['masa_awal']." s/d ".$data['masa_akhir'];
	$biaya	=	$data['biaya'];
	$no_izin	=	$data['no_izin'];


	$arr = array($no,$no_kios,$nama_penyewa,$alamat,$luas,$usaha,$no_izin,$tgl_izin,$masa_berlaku,$biaya);
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="excel/'.$excelfile.'">'.$excelfile.'</a>';
?>