<?php
include "global/config.php";

$id=$_REQUEST['id'];
$no_kios=$_REQUEST['no_kios'];
$nama_penyewa=$_REQUEST['nama_penyewa'];
$alamat=$_REQUEST['alamat'];
$luas=$_REQUEST['luas'];
$usaha=$_REQUEST['usaha'];
$no_izin=$_REQUEST['no_izin'];
$tgl_izin=$_REQUEST['tgl_izin'];
$masa_awal=$_REQUEST['masa_awal'];
$masa_akhir=$_REQUEST['masa_akhir'];
$biaya=$_REQUEST['biaya'];


$strsql="UPDATE lal_kios SET no_kios='$no_kios',nama_penyewa='$nama_penyewa',
alamat='$alamat',luas='$luas', usaha='$usaha', no_izin='$no_izin', tgl_izin='$tgl_izin', masa_awal='$masa_awal', masa_akhir='$masa_akhir', biaya='$biaya' WHERE id='$id'";

if (empty($no_kios))
{
echo "<script>alert('No Kios Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kios_shelter&id=$id';</script>\n";
exit();
}
elseif (empty($nama_penyewa))
{
echo "<script>alert('Nama Penyewa Tidak Boleh Kosong'); document.location.href='index.php?act=edit&do=data.kios_shelter&id=$id';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.kios_shelter");
}
?>