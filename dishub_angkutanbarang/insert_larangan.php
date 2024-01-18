<?php
include "global/config.php";

$nama_jalan					=$_REQUEST['nama_jalan'];
$segmen_dari				=$_REQUEST['segmen_dari'];
$segmen_ke					=$_REQUEST['segmen_ke'];
$sistem						=$_REQUEST['sistem'];
$jenis_larangan				=$_REQUEST['jenis_larangan'];
$pemberlakuan_dari			=$_REQUEST['pemberlakuan_dari'];
$pemberlakuan_ke			=$_REQUEST['pemberlakuan_ke'];
$sekarang			=date("Y-m-d");

$strsql="INSERT INTO bar_larangan (nama_jalan, segmen_dari, segmen_ke, sistem, jenis_larangan, pemberlakuan_dari ,pemberlakuan_ke, tgl_entri) 
VALUES ('$nama_jalan','$segmen_dari','$segmen_ke','$sistem','$jenis_larangan','$pemberlakuan_dari','$pemberlakuan_ke','$sekarang')"; //echo $strsql;

if (empty($nama_jalan))
{
echo "<script>alert('Nama Jalan Tidak Boleh Kosong'); document.location.href='index.php?act=add&do=data.larangan&nama_jalan=$nama_jalan&segmen_dari=$segmen_dari&segmen_ke=$segmen_ke&sistem=$sistem&jenis_larangan=$jenis_larangan&pemberlakuan_dari=$pemberlakuan_dari&pemberlakuan_ke=$pemberlakuan_ke';</script>\n";
exit();
}
else
{
mysql_query($strsql);
header("location:index.php?do=data.larangan");
}
?>