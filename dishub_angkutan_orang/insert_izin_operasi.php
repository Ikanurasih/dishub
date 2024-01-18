<?php 
include "global/config.php";

$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$cc							=$_REQUEST['cc'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun						=$_REQUEST['tahun'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jenis_angkutan				=$_REQUEST['jenis_angkutan'];
$jenis_trayek				=$_REQUEST['jenis_trayek'];
$jenis_pelayanan			=$_REQUEST['jenis_pelayanan'];
$kode_trayek				=$_REQUEST['kode_trayek'];
$status_trayek				=$_REQUEST['status_trayek'];
$jadwal_perjalanan			=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr				=$_REQUEST['wilayah_opr'];
$masa_operasi				=$_REQUEST['masa_operasi'];
$no_izin_operasi			=$_REQUEST['no_izin_operasi'];
$tgl_izin_operasi			=$_REQUEST['tgl_izin_operasi'];
$sekarang					=date("Y-m-d");

$strsql="INSERT INTO ang_izin_operasi (id_kendaraan_bermotor_umum,masa_operasi,no_izin_operasi,tgl_izin_operasi,tgl_entri) 
VALUES ('$id_kendaraan_bermotor_umum','$masa_operasi','$no_izin_operasi','$tgl_izin_operasi','$sekarang')"; //echo $strsql;

if (empty($no_izin_operasi))
{
echo "<script>alert('No. Izin Operasi Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.izin_operasi&id_kendaraan_bermotor_umum=$id_kendaraan_bermotor_umum&nama=$nama&alamat=$alamat&no_kend=$no_kend&no_uji=$no_uji&merk=$merk&jenis_kend=$jenis_kend&cc=$cc&bahan_bakar=$bahan_bakar&tahun=$tahun&no_rangka=$no_rangka&no_mesin=$no_mesin&daya_orang=$daya_orang&daya_barang=$daya_barang&jenis_angkutan=$jenis_angkutan&jenis_trayek=$jenis_trayek&jenis_pelayanan=$jenis_pelayanan&masa_operasi=$masa_operasi&no_izin_operasi=$no_izin_operasi&tgl_izin_operasi=$tgl_izin_operasi&status_trayek=$status_trayek&jadwal_perjalanan=$jadwal_perjalanan&wilayah_opr=$wilayah_opr';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.izin_operasi");
}
?>