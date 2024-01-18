<?php
include "global/config.php";

$id=$_REQUEST['id'];
$nama_driver=$_REQUEST['nama_driver'];
$tmp_lahir=$_REQUEST['tmp_lahir'];
$tgl_lahir=$_REQUEST['tgl_lahir'];
$alamat_driver=$_REQUEST['alamat_driver'];
$usia=$_REQUEST['usia'];
$pendidikan=$_REQUEST['pendidikan'];
$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$jenis_kend=$_REQUEST['jenis_kend'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_trayek=$_REQUEST['jenis_trayek'];
$id_kendaraan=$_REQUEST['id_kendaraan'];
$id_trayek=$_REQUEST['id_trayek'];
$id_pemilik=$_REQUEST['id_pemilik'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];

$strsql="UPDATE ang_master_pengemudi SET 
nama_driver='$nama_driver',
tmp_lahir='$tmp_lahir',
tgl_lahir='$tgl_lahir',
alamat_driver='$alamat_driver',
usia='$usia',
pendidikan='$pendidikan',
id_pemilik='$id_pemilik',
jenis_kendaraan='$jenis_kendaraan',
id_trayek='$id_trayek'
WHERE id='$id'"; //echo $strsql;

if (empty($nama_driver))
{
echo "<script>alert('Nama Pengemudi Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.pengemudi&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pengemudi");
}
?>