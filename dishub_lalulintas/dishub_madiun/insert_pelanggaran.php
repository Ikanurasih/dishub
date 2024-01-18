<?php
include "global/config.php";

$bulan=$_REQUEST['bulan'];
$tahun=$_REQUEST['tahun'];
$no_kend=$_REQUEST['no_kend'];
$no_uji=$_REQUEST['no_uji'];
$jenis_kend=$_REQUEST['jenis_kend'];
$nama_pmilik=$_REQUEST['nama_pmilik'];
$alamat_pmilik=$_REQUEST['alamat_pmilik'];
$nama_driver=$_REQUEST['nama_driver'];
$alamat_driver=$_REQUEST['alamat_driver'];
$pasal_pelanggaran=$_REQUEST['pasal_pelanggaran'];
$jaminan=$_REQUEST['jaminan'];
$keterangan=$_REQUEST['keterangan'];

$ok=$tahun."-".$bulan."-01";

$sekarang=date("Y-m-d");

$strsql="INSERT INTO lal_pelanggaran (bulan,no_kend,no_uji,jenis_kend,nama_pmilik,alamat_pmilik,nama_driver,alamat_driver,pasal_pelanggaran,jaminan,keterangan,tgl_entri) 
VALUES ('$ok','$no_kend','$no_uji','$jenis_kend','$nama_pmilik','$alamat_pmilik','$nama_driver','$alamat_driver','$pasal_pelanggaran','$jaminan','$keterangan','$sekarang')";

if (empty($bulan))
{
echo "<script>alert('Bulan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pelanggaran&bulan=$bulan&tahun=$tahun&no_kend=$no_kend&no_uji=$no_uji&jenis_kend=$jenis_kend&nama_pmilik=$nama_pmilik&alamat_pmilik=$alamat_pmilik&nama_driver=$nama_driver&alamat_driver=$alamat_driver&pasal_pelanggaran=$pasal_pelanggaran&jaminan=$jaminan&keterangan=$keterangan';</script>\n";
exit();
}
elseif (empty($tahun))
{
echo "<script>alert('Tahun Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pelanggaran&bulan=$bulan&tahun=$tahun&no_kend=$no_kend&no_uji=$no_uji&jenis_kend=$jenis_kend&nama_pmilik=$nama_pmilik&alamat_pmilik=$alamat_pmilik&nama_driver=$nama_driver&alamat_driver=$alamat_driver&pasal_pelanggaran=$pasal_pelanggaran&jaminan=$jaminan&keterangan=$keterangan';</script>\n";
exit();
}
elseif (empty($no_kend))
{
echo "<script>alert('No. Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pelanggaran&bulan=$bulan&tahun=$tahun&no_kend=$no_kend&no_uji=$no_uji&jenis_kend=$jenis_kend&nama_pmilik=$nama_pmilik&alamat_pmilik=$alamat_pmilik&nama_driver=$nama_driver&alamat_driver=$alamat_driver&pasal_pelanggaran=$pasal_pelanggaran&jaminan=$jaminan&keterangan=$keterangan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pelanggaran");
}
?>