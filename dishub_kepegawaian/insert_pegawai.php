<?php
include "global/config.php";

$nama			=$_REQUEST['nama'];
$nip_lama		=$_REQUEST['nip_lama'];
$nip_baru		=$_REQUEST['nip_baru'];
$tempat_lahir	=$_REQUEST['tempat_lahir'];
$tgl_lahir	=$_REQUEST['tgl_lahir'];
$alamat	=$_REQUEST['alamat'];
$telp_rumah	=$_REQUEST['telp_rumah'];
$telp_hp	=$_REQUEST['telp_hp'];
$jenkel	=$_REQUEST['jenkel'];
$sts_perkawinan	=$_REQUEST['sts_perkawinan'];

$agama	=$_REQUEST['agama'];
$input_agama=$_REQUEST['input_agama'];
if($input_agama<>""){
$agama=$input_agama;
}

$jns_kepegawaian=$_REQUEST['jns_kepegawaian'];
$input_jns_kepegawaian=$_REQUEST['input_jns_kepegawaian'];
if($input_jns_kepegawaian<>""){
$jns_kepegawaian=$input_jns_kepegawaian;
}

$sts_pegawai=$_REQUEST['sts_pegawai'];
$input_sts_pegawai=$_REQUEST['input_sts_pegawai'];
if($input_sts_pegawai<>""){
$sts_pegawai=$input_sts_pegawai;
}

$tmt_cpns	=$_REQUEST['tmt_cpns'];
$tmt_pns	=$_REQUEST['tmt_pns'];
$tmt_honda	=$_REQUEST['tmt_honda'];
$tmt_kontrak	=$_REQUEST['tmt_kontrak'];

$pangkat	=$_REQUEST['pangkat'];
$input_pangkat	=$_REQUEST['input_pangkat'];
if($input_pangkat<>""){
$pangkat=$input_pangkat;
}

$golongan	=$_REQUEST['golongan'];
$input_golongan	=$_REQUEST['input_golongan'];
if($input_golongan<>""){
$golongan=$input_golongan;
}

$tmt_pangkat	=$_REQUEST['tmt_pangkat'];

$jabatan	=$_REQUEST['jabatan'];
$input_jabatan	=$_REQUEST['input_jabatan'];
if($input_jabatan<>""){
$jabatan=$input_jabatan;
}

$eselon	=$_REQUEST['eselon'];
$input_eselon	=$_REQUEST['input_eselon'];
if($input_eselon<>""){
$eselon=$input_eselon;
}

$tmt_jabatan	=$_REQUEST['tmt_jabatan'];
$no_sk_jabatan			= $_REQUEST['no_sk_jabatan'];
$tgl_sk_jabatan			= $_REQUEST['tgl_sk_jabatan'];
$sk_jabatan_pejabat			= $_REQUEST['sk_jabatan_pejabat'];

$uk_bidang	=$_REQUEST['uk_bidang'];
$input_uk_bidang	=$_REQUEST['input_uk_bidang'];
if($input_uk_bidang<>""){
$uk_bidang=$input_uk_bidang;
}

$uk_bagian	=$_REQUEST['uk_bagian'];
$input_uk_bagian	=$_REQUEST['input_uk_bagian'];
if($input_uk_bagian<>""){
$uk_bagian=$input_uk_bagian;
}

$no_karis			= $_REQUEST['no_karis'];
$no_karsu			= $_REQUEST['no_karsu'];
$no_karpeg			= $_REQUEST['no_karpeg'];

$pendidikan	=$_REQUEST['pendidikan'];
$input_pendidikan	=$_REQUEST['input_pendidikan'];
if($input_pendidikan<>""){
$pendidikan=$input_pendidikan;
}

$jurusan			= $_REQUEST['jurusan'];
$no_ijazah			= $_REQUEST['no_ijazah'];
$tgl_ijazah			= $_REQUEST['tgl_ijazah'];
$th_lulus			= $_REQUEST['th_lulus'];

$diklat_pimpin	=$_REQUEST['diklat_pimpin'];
$input_diklat_pimpin	=$_REQUEST['input_diklat_pimpin'];
if($input_diklat_pimpin<>""){
$diklat_pimpin=$input_diklat_pimpin;
}

$diklat_no_ijazah			= $_REQUEST['diklat_no_ijazah'];
$diklat_tgl_ijazah			= $_REQUEST['diklat_tgl_ijazah'];
$diklat_th_lulus			= $_REQUEST['diklat_th_lulus'];


$keluarga		= $_REQUEST['keluarga'];
$nama_kel		= $_REQUEST['nama_kel'];
$lahir_kel		= $_REQUEST['lahir_kel'];
$nikah_kel		= $_REQUEST['nikah_kel'];
$jenkel_kel		= $_REQUEST['jenkel_kel'];

$kerja_kel		= $_REQUEST['kerja_kel'];
$input_kerja_kel	=$_REQUEST['input_kerja_kel'];
if($input_kerja_kel<>""){
$kerja_kel=$input_kerja_kel;
}

$status_kel		= $_REQUEST['status_kel'];

$golongan_tahun=$_REQUEST['golongan_tahun'];
$golongan_bulan=$_REQUEST['golongan_bulan'];
$masa_golongan=$golongan_tahun."-".$golongan_bulan."-"."01";

$tambahan_tahun=$_REQUEST['tambahan_tahun'];
$tambahan_bulan=$_REQUEST['tambahan_bulan'];
$masa_tambahan=$tambahan_tahun."-".$tambahan_bulan."-"."01";

$seluruhnya_tahun=$_REQUEST['seluruhnya_tahun'];
$seluruhnya_bulan=$_REQUEST['seluruhnya_bulan'];
$masa_seluruhnya=$seluruhnya_tahun."-".$seluruhnya_bulan."-"."01";

$dishub_tahun=$_REQUEST['dishub_tahun'];
$dishub_bulan=$_REQUEST['dishub_bulan'];
$masa_dishub=$dishub_tahun."-".$dishub_bulan."-"."01";

$masa_kontrak_awal= $_REQUEST['masa_kontrak_awal'];
$masa_kontrak_akhir= $_REQUEST['masa_kontrak_akhir'];

$sekarang	=date("Y-m-d");

$strsql="INSERT INTO peg_pegawai (nama, nip_lama, nip_baru, tempat_lahir, tgl_lahir, alamat, telp_rumah, telp_hp, jenkel, sts_perkawinan, agama, jns_kepegawaian, sts_pegawai, tmt_cpns, tmt_pns, tmt_honda, tmt_kontrak, pangkat, golongan, tmt_pangkat, masa_golongan, masa_tambahan, masa_seluruhnya, masa_dishub, masa_kontrak_awal, masa_kontrak_akhir,  jabatan, eselon, tmt_jabatan, no_sk_jabatan, tgl_sk_jabatan, sk_jabatan_pejabat, uk_bidang, uk_bagian, no_karis, no_karsu, no_karpeg, pendidikan, jurusan, no_ijazah, tgl_ijazah, th_lulus, diklat_pimpin, diklat_no_ijazah, diklat_tgl_ijazah, diklat_th_lulus, riwayat_sekolah, riwayat_jurusan, riwayat_status, riwayat_th_lulus, riwayat_no_ijazah, riwayat_tgl_ijazah, riwayat_pekerjaan, riwayat_jbt_nama, riwayat_jbt_tmt, riwayat_jbt_eselon, riwayat_sat_kerja, riwayat_no_sk, riwayat_tgl_sk, riwayat_pejabat_sk, riwayat_pangkat, riwayat_golongan, keluarga, nama_kel, lahir_kel, nikah_kel, jenkel_kel, kerja_kel, status_kel, tgl_entri) 
VALUES ('$nama', '$nip_lama', '$nip_baru', '$tempat_lahir', '$tgl_lahir', '$alamat', '$telp_rumah', '$telp_hp', '$jenkel', '$sts_perkawinan', '$agama', '$jns_kepegawaian', '$sts_pegawai', '$tmt_cpns', '$tmt_pns', '$tmt_honda', '$tmt_kontrak', '$pangkat', '$golongan', '$tmt_pangkat', '$masa_golongan', '$masa_tambahan', '$masa_seluruhnya', '$masa_dishub', '$masa_kontrak_awal',  '$masa_kontrak_akhir', '$jabatan', '$eselon', '$tmt_jabatan', '$no_sk_jabatan', '$tgl_sk_jabatan', '$sk_jabatan_pejabat', '$uk_bidang', '$uk_bagian', '$no_karis', '$no_karsu', '$no_karpeg', '$pendidikan', '$jurusan', '$no_ijazah', '$tgl_ijazah', '$th_lulus', '$diklat_pimpin', '$diklat_no_ijazah', '$diklat_tgl_ijazah', '$diklat_th_lulus', '$riwayat_sekolah', '$riwayat_jurusan', '$riwayat_status', '$riwayat_th_lulus', '$riwayat_no_ijazah', '$riwayat_tgl_ijazah', '$riwayat_pekerjaan', '$riwayat_jbt_nama', '$riwayat_jbt_tmt', '$riwayat_jbt_eselon', '$riwayat_sat_kerja', '$riwayat_no_sk', '$riwayat_tgl_sk', '$riwayat_pejabat_sk', '$riwayat_pangkat', '$riwayat_golongan', '$keluarga', '$nama_kel', '$lahir_kel', '$nikah_kel', '$jenkel_kel', '$kerja_kel', '$status_kel', '$sekarang')";

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); 
document.location.href='index.php?act=add&do=data.pegawai
&nama=$nama
&nip_lama=$nip_lama
&nip_baru=$nip_baru
&tempat_lahir=$tempat_lahir
&alamat=$alamat
&telp_rumah=$telp_rumah
&telp_hp=$telp_hp
&pangkat=$pangkat
&golongan=$golongan
&no_sk_pejabat=$no_sk_pejabat
&sk_jabatan_pejabat=$sk_jabatan_pejabat
&no_karis=$no_karis
&no_karsu=$no_karsu
&no_karpeg=$no_karpeg
&jurusan=$jurusan
&no_ijazah=$no_ijazah
&th_lulus=$th_lulus
&diklat_no_ijazah=$diklat_no_ijazah
&diklat_th_lulus=$diklat_th_lulus
&riwayat_sekolah=$riwayat_sekolah
&riwayat_jurusan=$riwayat_jurusan
&riwayat_th_lulus=$riwayat_th_lulus
&riwayat_no_ijazah=$riwayat_no_ijazah
&riwayat_jbt_nama=$riwayat_jbt_nama
&riwayat_sat_kerja=$riwayat_sat_kerja
&riwayat_no_sk=$riwayat_no_sk
&riwayat_pejabat_sk=$riwayat_pejabat_sk
&nama_kel=$nama_kel

';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pegawai");
}
?>