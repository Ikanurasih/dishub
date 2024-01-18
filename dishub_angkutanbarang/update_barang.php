<?php
include "global/config.php";

$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$model_kend					=$_REQUEST['model_kend'];
$status						=$_REQUEST['status'];
$cc							=$_REQUEST['cc'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun						=$_REQUEST['tahun'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jbb						=$_REQUEST['jbb'];
$jbi						=$_REQUEST['jbi'];
$mst						=$_REQUEST['mst'];
$kelas_jalan				=$_REQUEST['kelas_jalan'];
$id				=$_REQUEST['id'];

$strsql="UPDATE bar_barang SET 
nama='$nama',
alamat='$alamat',
no_kend='$no_kend',
no_uji='$no_uji',
merk='$merk',
jenis_kend='$jenis_kend',
model_kend='$model_kend',
status='$status',
cc='$cc',
bahan_bakar='$bahan_bakar',
tahun='$tahun',
no_rangka='$no_rangka',
no_mesin='$no_mesin',
daya_orang='$daya_orang',
daya_barang='$daya_barang',
jbb='$jbb',
jbi='$jbi',
mst='$mst',
kelas_jalan='$kelas_jalan'
WHERE id='$id'";

if (empty($nama))
{
echo "<script>alert('Nama Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.barang&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.barang");
}
?>