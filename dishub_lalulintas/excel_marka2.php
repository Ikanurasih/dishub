<?php
include("global/config.php");
include("excelwriter.inc.php");
$kategori=$_REQUEST['kategori'];
$key=$_REQUEST['key'];
$cari=$_REQUEST['cari'];
//Buat nama file yang di inginkan
$excelfile = 'marka '.date("Y-m-d, H-i-s").'.xls';
//lokasi hasil konversi
$lokasi	   = './excel/';
$excel=new ExcelWriter($lokasi.$excelfile);
	
//Buat header untuk tabel
$myArr	=array("No","Nama Jalan","Dari","Ke","Marka Tepi (P)","Marka Tepi (L)","Marka Tepi (Kondisi)","Marka Tengah Solid/Utuh (P)","Marka Tengah Solid/Utuh (L)","Marka Tengah Solid/Utuh (Kondisi)","Marka Tengah Putus (P)","Marka Tengah Putus (L)","Marka Tengah Putus (Kondisi)","Marka Pembagi Lajur Solid/Utuh (P)","Marka Pembagi Lajur Solid/Utuh (L)","Marka Pembagi Lajur Solid/Utuh (Kondisi)","Marka Pembagi Lajur Putus (P)","Marka Pembagi Lajur Putus (L)","Marka Pembagi Lajur Putus (Kondisi)");
$excel->writeLine($myArr);
//buat query
  if ($kategori=="nama_jalan")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and nama_jalan like '%$key%' order by id desc"; }
  //marka tepi
  elseif ($kategori=="marka_tepi" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tepi" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tepi" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tepi_kondisi like '%$key%' order by id desc";  
  }
  //marka tengah solid
  elseif ($kategori=="marka_tengah_solid" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_solid" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_solid" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_solid_kondisi like '%$key%' order by id desc";  
  }  
  //marka tengah putus
  elseif ($kategori=="marka_tengah_putus" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_putus" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_tengah_putus" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_tengah_putus_kondisi like '%$key%' order by id desc";  
  } 
  //marka pembagi solid
  elseif ($kategori=="marka_pembagi_solid" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_solid" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_solid" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_solid_kondisi like '%$key%' order by id desc";  
  }  
  //marka pembagi solid
  elseif ($kategori=="marka_pembagi_putus" and $cari=="p")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_p like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_putus" and $cari=="l")
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_l like '%$key%' order by id desc";  }
  elseif ($kategori=="marka_pembagi_putus" and $cari=="kondisi")
  {  
  	  	if ($key=="baik" or $key=="Baik")
		{ $key="1"; }
  		elseif ($key=="pudar" or $key=="Pudar")
		{ $key="2"; }
	$strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id and marka_lajur_putus_kondisi like '%$key%' order by id desc";  
  }  
  else
  {  $strsql="select a.*,b.dari, b.ke, b.nama_jalan from lal_marka a, lal_jalan b where a.id_jalan=b.id order by id desc"; }
//Untuk penomoran
$nomor = 1;
$hasil=mysql_query($strsql);
while($data = mysql_fetch_array($hasil)){
	$i++;
	$no			=	$i;
	$nama_jalan	= 	$data['nama_jalan'];
	$dari		=	$data['dari'];
    $ke			=	$data['ke'];
	$marka_tepi_p	= 	$data['marka_tepi_p'];
	$marka_tepi_l	=	$data['marka_tepi_l'];

		if($data[marka_tepi_kondisi]=="1") {$marka_tepi_kondisi_ok="Baik";}
		if($data[marka_tepi_kondisi]=="2") {$marka_tepi_kondisi_ok="Pudar";}
		$marka_tepi_kondisi	=	$marka_tepi_kondisi_ok;
	
	$marka_tengah_solid_p	= $data['marka_tengah_solid_p'];
	$marka_tengah_solid_l	= $data['marka_tengah_solid_l'];

		if($data[marka_tengah_solid_kondisi]=="1") {$marka_tengah_solid_kondisi_ok="Baik";}
		if($data[marka_tengah_solid_kondisi]=="2") {$marka_tengah_solid_kondisi_ok="Pudar";}
		$marka_tengah_solid_kondisi = $marka_tengah_solid_kondisi_ok;

	$marka_tengah_putus_p = $data[marka_tengah_putus_p]; 
    $marka_tengah_putus_l = $data[marka_tengah_putus_l]; 

		if($data[marka_tengah_putus_kondisi]=="1") {$marka_tengah_putus_kondisi_ok="Baik";}
		if($data[marka_tengah_putus_kondisi]=="2") {$marka_tengah_putus_kondisi_ok="Pudar";}
		$marka_tengah_putus_kondisi = $marka_tengah_putus_kondisi_ok;

	
	$marka_lajur_solid_p = $data[marka_lajur_solid_p]; 
	$marka_lajur_solid_l = $data[marka_lajur_solid_l]; 
	
		if($data[marka_lajur_solid_kondisi]=="1") {$marka_lajur_solid_kondisi_ok="Baik";}
		if($data[marka_lajur_solid_kondisi]=="2") {$marka_lajur_solid_kondisi_ok="Pudar";}
		$marka_lajur_solid_kondisi = $marka_lajur_solid_kondisi_ok;

	$marka_lajur_putus_p = $data[marka_lajur_putus_p]; 
	$marka_lajur_putus_l = $data[marka_lajur_putus_l]; 
	
		if($data[marka_lajur_putus_kondisi]=="1") {$marka_lajur_putus_kondisi_ok="Baik";}
		if($data[marka_lajur_putus_kondisi]=="2") {$marka_lajur_putus_kondisi_ok="Pudar";}
		$marka_lajur_putus_kondisi=$marka_lajur_putus_kondisi_ok;

			$arr = array($no,$nama_jalan,$dari,$ke,$marka_tepi_p,$marka_tepi_l,$marka_tepi_kondisi,$marka_tengah_solid_p,$marka_tengah_solid_l,$marka_tengah_solid_kondisi,$marka_tengah_putus_p,$marka_tengah_putus_l,$marka_tengah_putus_kondisi,$marka_lajur_solid_p,$marka_lajur_solid_l,$marka_lajur_solid_kondisi,$marka_lajur_putus_p,$marka_lajur_putus_l,$marka_lajur_putus_kondisi);

		
	$excel->writeLine($arr);
	$nomor++;
}

$excel -> close();
//Buat link untuk download file excel
echo 'Download File Excel: <a href="excel/'.$excelfile.'">'.$excelfile.'</a>';
?>