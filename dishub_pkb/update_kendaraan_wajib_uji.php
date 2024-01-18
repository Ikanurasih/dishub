<?php
include "global/config.php";

$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$type						=$_REQUEST['type'];
$jenis						=$_REQUEST['jenis'];
$model						=$_REQUEST['model'];
$cc							=$_REQUEST['cc'];
$daya_motor					=$_REQUEST['daya_motor'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun_pembuatan			=$_REQUEST['tahun_pembuatan'];
$status_penggunaan			=$_REQUEST['status_penggunaan'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$no_tgl_sertifik			=$_REQUEST['no_tgl_sertifik'];
$uk_kend_panjang			=$_REQUEST['uk_kend_panjang'];
$uk_kend_lebar				=$_REQUEST['uk_kend_lebar'];
$uk_kend_tinggi				=$_REQUEST['uk_kend_tinggi'];
$uk_kend_jalur_belakang		=$_REQUEST['uk_kend_jalur_belakang'];
$uk_kend_jalur_depan		=$_REQUEST['uk_kend_jalur_depan'];
$jarak_sumbu_1_2			=$_REQUEST['jarak_sumbu_1_2'];
$jarak_sumbu_2_3			=$_REQUEST['jarak_sumbu_2_3'];
$jarak_sumbu_3_4			=$_REQUEST['jarak_sumbu_3_4'];
$jarak_titik_berat			=$_REQUEST['jarak_titik_berat'];
$dim_bak_panjang			=$_REQUEST['dim_bak_panjang'];
$dim_bak_lebar				=$_REQUEST['dim_bak_lebar'];
$dim_bak_tinggi				=$_REQUEST['dim_bak_tinggi'];
$dim_bak_bahan_bak			=$_REQUEST['dim_bak_bahan_bak'];
$dim_tangki_panjang			=$_REQUEST['dim_tangki_panjang'];
$dim_tangki_lebar			=$_REQUEST['dim_tangki_lebar'];
$dim_tangki_tinggi			=$_REQUEST['dim_tangki_tinggi'];
$dim_tangki_volume			=$_REQUEST['dim_tangki_volume'];
$dim_tangki_jenis			=$_REQUEST['dim_tangki_jenis'];
$dim_tangki_berat_jenis_muatan	=$_REQUEST['dim_tangki_berat_jenis_muatan'];
$dim_tangki_bahan_tangki		=$_REQUEST['dim_tangki_bahan_tangki'];
$ban_sumbu_1				=$_REQUEST['ban_sumbu_1'];
$ban_sumbu_2				=$_REQUEST['ban_sumbu_2'];
$ban_sumbu_3				=$_REQUEST['ban_sumbu_3'];
$ban_sumbu_4				=$_REQUEST['ban_sumbu_4'];
$konfig_sumbu				=$_REQUEST['konfig_sumbu'];
$jml_berat_diperbolehkan	=$_REQUEST['jml_berat_diperbolehkan'];
$jml_berat_kombinasi_diperbolehkan		=$_REQUEST['jml_berat_kombinasi_diperbolehkan'];
$berat_kosong_sumbu_1		=$_REQUEST['berat_kosong_sumbu_1'];
$berat_kosong_sumbu_2		=$_REQUEST['berat_kosong_sumbu_2'];
$berat_kosong_sumbu_3		=$_REQUEST['berat_kosong_sumbu_3'];
$berat_kosong_sumbu_4		=$_REQUEST['berat_kosong_sumbu_4'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jml_berat_diizinkan		=$_REQUEST['jml_berat_diizinkan'];
$jml_berat_kombinasi_diizinkan		=$_REQUEST['jml_berat_kombinasi_diizinkan'];
$muatan_sumbu_terberat		=$_REQUEST['muatan_sumbu_terberat'];
$kelas_jalan				=$_REQUEST['kelas_jalan'];
$masa_berlaku_uji			=$_REQUEST['masa_berlaku_uji'];
$input_jenis			=$_REQUEST['input_jenis'];
$input_kategori			=$_REQUEST['input_kategori'];
$input_bahan			=$_REQUEST['input_bahan'];
$kategori=$_REQUEST['kategori'];
if($input_jenis<>""){
$jenis=$input_jenis;
}
if($input_bahan<>""){
$bahan_bakar=$input_bahan;
}
if($input_kategori<>""){
$kategori=$input_kategori;
}


$id				=$_REQUEST['id'];

$strsql="UPDATE pkb_kendaraan_wajib_uji SET 
nama='$nama',
alamat='$alamat',
no_kend='$no_kend',
no_uji='$no_uji',
merk='$merk',
type='$type',
jenis= '$jenis',
model= '$model',
kategori= '$kategori',
cc='$cc',
daya_motor='$daya_motor',
bahan_bakar='$bahan_bakar',
tahun_pembuatan= '$tahun_pembuatan',
status_penggunaan='$status_penggunaan',
no_rangka='$no_rangka',
no_mesin='$no_mesin',
no_tgl_sertifik='$no_tgl_sertifik',
uk_kend_panjang='$uk_kend_panjang', 
uk_kend_lebar='$uk_kend_lebar',
uk_kend_tinggi='$uk_kend_tinggi',
uk_kend_jalur_belakang= '$uk_kend_jalur_belakang',
uk_kend_jalur_depan='$uk_kend_jalur_depan',
jarak_sumbu_1_2='$jarak_sumbu_1_2',
jarak_sumbu_2_3='$jarak_sumbu_2_3',
jarak_sumbu_3_4='$jarak_sumbu_3_4',
jarak_titik_berat='$jarak_titik_berat',
dim_bak_panjang='$dim_bak_panjang',
dim_bak_lebar='$dim_bak_lebar',
dim_bak_tinggi='$dim_bak_tinggi',
dim_bak_bahan_bak='$dim_bak_bahan_bak',
dim_tangki_panjang='$dim_tangki_panjang',
dim_tangki_lebar='$dim_tangki_lebar',
dim_tangki_tinggi='$dim_tangki_tinggi',
dim_tangki_volume='$dim_tangki_volume',
dim_tangki_jenis= '$dim_tangki_jenis',
dim_tangki_berat_jenis_muatan='$dim_tangki_berat_jenis_muatan',
dim_tangki_bahan_tangki='$dim_tangki_bahan_tangki',
ban_sumbu_1='$ban_sumbu_1',
ban_sumbu_2= '$ban_sumbu_2',
ban_sumbu_3='$ban_sumbu_3',
ban_sumbu_4='$ban_sumbu_4',
konfig_sumbu= '$konfig_sumbu',
jml_berat_diperbolehkan='$jml_berat_diperbolehkan',
jml_berat_kombinasi_diperbolehkan='$jml_berat_kombinasi_diperbolehkan',
berat_kosong_sumbu_1='$berat_kosong_sumbu_1',
berat_kosong_sumbu_2= '$berat_kosong_sumbu_2',
berat_kosong_sumbu_3= '$berat_kosong_sumbu_3',
berat_kosong_sumbu_4= '$berat_kosong_sumbu_4',
daya_orang='$daya_orang',
 daya_barang= '$daya_barang',
jml_berat_diizinkan='$jml_berat_diizinkan',
jml_berat_kombinasi_diizinkan='$jml_berat_kombinasi_diizinkan',
muatan_sumbu_terberat= '$muatan_sumbu_terberat',
kelas_jalan= '$kelas_jalan',
masa_berlaku_uji= '$masa_berlaku_uji' WHERE id='$id'"; //echo $strsql;

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kendaraan_wajib_uji&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kendaraan_wajib_uji");
}
?>