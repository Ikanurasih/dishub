<?php
include "global/config.php";

$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$sekarang=date("Y-m-d");

$strsql="INSERT INTO ang_master_pemilik (nama, alamat, tgl_entri) 
VALUES ('$nama','$alamat','$sekarang')";

if (empty($nama))
{
echo "<script>alert('Nama Pemilik / Perusahaan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.pemilik&nama=$nama&alamat=$alamat';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.pemilik");
}
?>