<?php
include "global/config.php";

$tanggal=$_REQUEST['tanggal'];
$bus_nganjuk=$_REQUEST['bus_nganjuk'];
$rit_nganjuk=$_REQUEST['rit_nganjuk'];
$pnp_nganjuk=$_REQUEST['pnp_nganjuk'];
$pnp_peron_nganjuk=$_REQUEST['pnp_peron_nganjuk'];
$nilai_peron_nganjuk=$_REQUEST['nilai_peron_nganjuk'];
$hasil_peron_nganjuk=$_REQUEST['hasil_peron_nganjuk'];
$bus_ponorogo=$_REQUEST['bus_ponorogo'];
$rit_ponorogo=$_REQUEST['rit_ponorogo'];
$pnp_ponorogo=$_REQUEST['pnp_ponorogo'];
$pnp_peron_ponorogo=$_REQUEST['pnp_peron_ponorogo'];
$nilai_peron_ponorogo=$_REQUEST['nilai_peron_ponorogo'];
$hasil_peron_ponorogo=$_REQUEST['hasil_peron_ponorogo'];
$bus_magetan=$_REQUEST['bus_magetan'];
$rit_magetan=$_REQUEST['rit_magetan'];
$pnp_magetan=$_REQUEST['pnp_magetan'];
$pnp_peron_magetan=$_REQUEST['pnp_peron_magetan'];
$nilai_peron_magetan=$_REQUEST['nilai_peron_magetan'];
$hasil_peron_magetan=$_REQUEST['hasil_peron_magetan'];
$bus_lainnya=$_REQUEST['bus_lainnya'];
$rit_lainnya=$_REQUEST['rit_lainnya'];
$pnp_lainnya=$_REQUEST['pnp_lainnya'];
$pnp_peron_lainnya=$_REQUEST['pnp_peron_lainnya'];
$nilai_peron_lainnya=$_REQUEST['nilai_peron_lainnya'];
$hasil_peron_lainnya=$_REQUEST['hasil_peron_lainnya'];
$sekarang=date("Y-m-d");
$id=$_REQUEST['id'];

$strsql="update ter_penumpang set
	tanggal='$tanggal', 
	bus_nganjuk='$bus_nganjuk', rit_nganjuk='$rit_nganjuk', pnp_nganjuk='$pnp_nganjuk', pnp_peron_nganjuk='$pnp_peron_nganjuk', nilai_peron_nganjuk='$nilai_peron_nganjuk', hasil_peron_nganjuk='$hasil_peron_nganjuk', 
	bus_ponorogo='$bus_ponorogo', rit_ponorogo='$rit_ponorogo', pnp_ponorogo='$pnp_ponorogo', pnp_peron_ponorogo='$pnp_peron_ponorogo', nilai_peron_ponorogo='$nilai_peron_ponorogo', hasil_peron_ponorogo='$hasil_peron_ponorogo', 
	bus_magetan='$bus_magetan', rit_magetan='$rit_magetan', pnp_magetan='$pnp_magetan', pnp_peron_magetan='$pnp_peron_magetan', nilai_peron_magetan='$nilai_peron_magetan', hasil_peron_magetan='$hasil_peron_magetan', 
	bus_lainnya='$bus_lainnya', rit_lainnya='$rit_lainnya', pnp_lainnya='$pnp_lainnya', pnp_peron_lainnya='$pnp_peron_lainnya', nilai_peron_lainnya='$nilai_peron_lainnya', hasil_peron_lainnya='$hasil_peron_lainnya'
	WHERE id='$id'";

mysql_query($strsql);
header("location:index.php?do=data.penumpang");
?>