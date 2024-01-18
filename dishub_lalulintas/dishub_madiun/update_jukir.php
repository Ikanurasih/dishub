<?php
include "global/config.php";

$nama_jukir=$_REQUEST['nama_jukir'];
$tmp_lahir=$_REQUEST['tmp_lahir'];
$tgl_lahir=$_REQUEST['tgl_lahir'];
$alamat=$_REQUEST['alamat'];
$lokasi=$_REQUEST['lokasi'];
$titik_parkir=$_REQUEST['titik_parkir'];
$jk=$_REQUEST['jk'];
$sekarang=date("Y-m-d");

$strsql="UPDATE lal_jukir  SET 
nama_jukir='$nama_jukir', 
tmp_lahir='$tmp_lahir', 
tgl_lahir='$tgl_lahir', 
alamat='$alamat', 
jk='$jk', 
titik_parkir='$titik_parkir', 
lokasi='$lokasi'
WHERE id='$id'";

if (empty($nama_jukir))
{
echo "<script>alert('Nama Jukir Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.jukir&id=$id&';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.jukir");
}
?>