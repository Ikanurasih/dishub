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

$strsql="INSERT INTO lal_jukir (nama_jukir, tmp_lahir, tgl_lahir, alamat, jk, titik_parkir, lokasi,tgl_entri) 
VALUES ('$nama_jukir','$tmp_lahir','$tgl_lahir','$alamat','$jk','$titik_parkir','$lokasi','$sekarang')";

if (empty($nama_jukir))
{
echo "<script>alert('Nama Jukir Tidak Boleh Kosong'); document.location.href='index.php?act=add_jukir&do=data.jukir&nama_jukir=$nama_jukir&tmp_lahir=$tmp_lahir&tgl_lahir=$tgl_lahir&alamat=$alamat&jk=$jk&lokasi=$lokasi&titik_parkir=$titik_parkir';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.jukir");
}
?>