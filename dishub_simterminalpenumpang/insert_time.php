<?php
include "global/config.php";

$no_kendaraan=$_REQUEST['no_kendaraan'];
$jenis_kendaraan=$_REQUEST['jenis_kendaraan'];
$jenis_angkutan=$_REQUEST['jenis_angkutan'];
$jenis_pelayanan=$_REQUEST['jenis_pelayanan'];
$arah=$_REQUEST['arah'];
$jurusan=$_REQUEST['jurusan'];
$kode_trayek=$_REQUEST['kode_trayek'];
$waktu_kedatangan=$_REQUEST['waktu_kedatangan'];
$waktu_keberangkatan=$_REQUEST['waktu_keberangkatan'];
$nama_po=$_REQUEST['nama_po'];

$sekarang=date("Y-m-d");

$strsql="INSERT INTO ter_time (no_kendaraan, jenis_kendaraan, jenis_angkutan, jenis_pelayanan, arah, jurusan, kode_trayek, nama_po,tgl_entri,waktu_kedatangan,waktu_keberangkatan) 
VALUES ('$no_kendaraan', '$jenis_kendaraan', '$jenis_angkutan', '$jenis_pelayanan', '$arah', '$jurusan', '$kode_trayek', '$nama_po','$sekarang','$waktu_kedatangan','$waktu_keberangkatan')"; //echo $strsql;

if (empty($no_kendaraan))
{
echo "<script>alert('No. Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.time&no_kendaraan=$no_kendaraan&jenis_angkutan=$jenis_angkutan&jenis_pelayanan=$jenis_pelayanan$arah=$arah&jurusan=$jurusan&kode_trayek=$kode_trayek&nama_po=$nama_po&waktu_kedatangan=$waktu_kedatangan&waktu_keberangkatan=$waktu_keberangkatan';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.time");
}
?>