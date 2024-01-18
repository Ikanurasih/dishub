<?php
include "global/config.php";

$status=$_REQUEST['status'];
$jenis=$_REQUEST['jenis'];
$uraian=$_REQUEST['uraian'];
$kondisi=$_REQUEST['kondisi'];
$jumlah=$_REQUEST['jumlah'];
$sekarang=date("Y-m-d");

$fileName = $_FILES['upload_file']['name'];
$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['upload_file']['name']);
$fileName = $_FILES['upload_file']['name'];

$strsql="INSERT INTO ter_fasilitas (status, jenis, uraian, kondisi, jumlah, gambar, tgl_entri) 
VALUES ('$status','$jenis', '$uraian', '$kondisi', '$jumlah', '$fileName', '$sekarang')"; //echo $strsql;

if (empty($jenis))
{
echo "<script>alert('Jenis Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.terminal&status=$status&jenis=$jenis&uraian=$uraian&kondisi=$kondisi&jumlah=$jumlah&gambar=$fileName';</script>\n";
exit();
}
else
{
move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadfile);

mysql_query($strsql);
header("location:index.php?do=data.terminal");
}
?>