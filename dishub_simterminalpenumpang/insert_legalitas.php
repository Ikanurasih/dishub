<?php
include "global/config.php";

$jenis_peraturan=$_REQUEST['jenis_peraturan'];
$judul_peraturan=$_REQUEST['judul_peraturan'];
$nomor=$_REQUEST['nomor'];
$tahun=$_REQUEST['tahun'];
$sekarang=date("Y-m-d");

$fileName = $_FILES['upload_file']['name'];
$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['upload_file']['name']);
$fileName = $_FILES['upload_file']['name'];

$strsql="INSERT INTO ter_legalitas (jenis_peraturan,judul_peraturan,nomor,tahun,upload_file,tgl_entri) 
VALUES ('$jenis_peraturan','$judul_peraturan','$nomor','$tahun','$fileName','$sekarang')"; //echo $strsql;

if (empty($jenis_peraturan))
{
echo "<script>alert('Jenis Peraturan Tidak Boleh Kosong'); document.location.href='index.php?act=add_peraturan&do=data.legalitas&jenis_peraturan=$jenis_peraturan&judul_peraturan=$judul_peraturan&nomor=$nomor&tahun=$tahun';</script>\n";
exit();
}
else
{
move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadfile);
mysql_query($strsql);
header("location:index.php?do=data.legalitas");
}
?>