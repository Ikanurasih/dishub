<?php 
include "global/config.php";

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
$sekarang=date("Y-m-d");
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];

$strsql="INSERT INTO ang_master_pengemudi (nama_driver,tmp_lahir,tgl_lahir,alamat_driver,usia,pendidikan,id_trayek,id_pemilik,tgl_entri,jenis_kendaraan) 
VALUES ('$nama_driver','$tmp_lahir','$tgl_lahir','$alamat_driver','$usia','$pendidikan','$id_trayek','$id_pemilik','$sekarang','$jenis_kendaraan')"; //echo $strsql;

if (empty($nama_driver))
{
echo "<script>alert('Nama Pengemudi Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pengemudi&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek&id_pemilik=$id_pemilik&nama_driver=$nama_driver&tmp_lahir=$tmp_lahir&tgl_lahir=$tgl_lahir&alamat_driver=$alamat_driver&usia=$usia&pendidikan=$pendidikan&nama=$nama&alamat=$alamat&jenis_kend=$jenis_kend&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_kendaraan=$jenis_kendaraan';</script>\n";
exit();
}
elseif (empty($jenis_angkutan))
{
echo "<script>alert('Jenis Angkutan dan Trayek Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pengemudi&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek&id_pemilik=$id_pemilik&nama_driver=$nama_driver&tmp_lahir=$tmp_lahir&tgl_lahir=$tgl_lahir&alamat_driver=$alamat_driver&usia=$usia&pendidikan=$pendidikan&nama=$nama&alamat=$alamat&jenis_kend=$jenis_kend&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_kendaraan=$jenis_kendaraan';</script>\n";
exit();
}
elseif (empty($nama))
{
echo "<script>alert('Nama Pemilik Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pengemudi&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek&id_pemilik=$id_pemilik&nama_driver=$nama_driver&tmp_lahir=$tmp_lahir&tgl_lahir=$tgl_lahir&alamat_driver=$alamat_driver&usia=$usia&pendidikan=$pendidikan&nama=$nama&alamat=$alamat&jenis_kend=$jenis_kend&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_kendaraan=$jenis_kendaraan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
	header("location:index.php?do=data.pengemudi");
}
?>