<?php 
include "global/config.php";

$nama				=$_REQUEST['nama'];
$alamat				=$_REQUEST['alamat'];
$no_kend			=$_REQUEST['no_kend'];
$no_uji				=$_REQUEST['no_uji'];
$merk				=$_REQUEST['merk'];
$jenis_kend			=$_REQUEST['jenis_kend'];
$cc					=$_REQUEST['cc'];
$bahan_bakar		=$_REQUEST['bahan_bakar'];
$tahun				=$_REQUEST['tahun'];
$no_rangka			=$_REQUEST['no_rangka'];
$no_mesin			=$_REQUEST['no_mesin'];
$daya_orang			=$_REQUEST['daya_orang'];
$daya_barang		=$_REQUEST['daya_barang'];
$jenis_angkutan		=$_REQUEST['jenis_angkutan'];
$jenis_trayek		=$_REQUEST['jenis_trayek'];
$jenis_pelayanan	=$_REQUEST['jenis_pelayanan'];
$kode_trayek		=$_REQUEST['kode_trayek'];
$status_trayek		=$_REQUEST['status_trayek'];
$jadwal_perjalanan 	=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr		=$_REQUEST['wilayah_opr'];
$id_pemilik			=$_REQUEST['id_pemilik'];
$id_kendaraan		=$_REQUEST['id_kendaraan'];
$id_trayek			=$_REQUEST['id_trayek'];
$sekarang			=date("Y-m-d");

$strsql="INSERT INTO ang_kendaraan_bermotor_umum (id_pemilik,id_kendaraan,id_trayek,tgl_entri) 
VALUES ('$id_pemilik','$id_kendaraan','$id_trayek','$sekarang')"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Nama Pemilik atau Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kendaraan_bermotor_umum&nama=$nama&alamat=$alamat&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&bahan_bakar=$bahan_bakar&tahun=$tahun&no_rangka=$no_rangka&no_mesin=$no_mesin&daya_orang=$daya_orang&daya_barang=$daya_barang&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_pelayanan=$jenis_pelayanan&kode_trayek=$kode_trayek&status_trayek=$status_trayek&jadwal_perjalanan=$jadwal_perjalanan&wilayah_opr=$wilayah_opr&id_pemilik=$id_pemilik&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek';</script>\n";
exit();
}
elseif (empty($no_kend))
{
echo "<script>alert('No. Kendaraan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kendaraan_bermotor_umum&nama=$nama&alamat=$alamat&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&bahan_bakar=$bahan_bakar&tahun=$tahun&no_rangka=$no_rangka&no_mesin=$no_mesin&daya_orang=$daya_orang&daya_barang=$daya_barang&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_pelayanan=$jenis_pelayanan&kode_trayek=$kode_trayek&status_trayek=$status_trayek&jadwal_perjalanan=$jadwal_perjalanan&wilayah_opr=$wilayah_opr&id_pemilik=$id_pemilik&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek';</script>\n";
exit();
}
elseif (empty($wilayah_opr))
{
echo "<script>alert('Trayek Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.kendaraan_bermotor_umum&nama=$nama&alamat=$alamat&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&bahan_bakar=$bahan_bakar&tahun=$tahun&no_rangka=$no_rangka&no_mesin=$no_mesin&daya_orang=$daya_orang&daya_barang=$daya_barang&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_pelayanan=$jenis_pelayanan&kode_trayek=$kode_trayek&status_trayek=$status_trayek&jadwal_perjalanan=$jadwal_perjalanan&wilayah_opr=$wilayah_opr&id_pemilik=$id_pemilik&id_kendaraan=$id_kendaraan&id_trayek=$id_trayek';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan_bermotor_umum");
}
?>