<?php
function null($angka)
{
$nilai = number_format($angka,2,".",",");
echo $nilai;
}

function cost($angka2)
{
$nilai2 = number_format($angka2,0,".",",");
echo $nilai2;
}

function gantiwarna($no)
{
  if ($no%2==1) { echo "efefef"; } else { echo "dddddd"; } 
}

#################### MENCARI BULAN DI DALAM FIELD ###################
function bulan($nilai)
{
//
if ($nilai=='01')
{echo "Januari";}
elseif ($nilai=='02')
{echo "Februari";}
elseif ($nilai=='03')
{echo "Maret";}
elseif ($nilai=='04')
{echo "April";}
elseif ($nilai=='05')
{echo "Mei";}
elseif ($nilai=='06')
{echo "Juni";}
elseif ($nilai=='07')
{echo "Juli";}
elseif ($nilai=='08')
{echo "Agustus";}
elseif ($nilai=='09')
{echo "September";}
elseif ($nilai=='10')
{echo "Oktober";}
elseif ($nilai=='11')
{echo "November";}
elseif ($nilai=='12')
{echo "Desember";}
//end function
}

function bulan2($nilai)
{
//
if ($nilai=='01')
{echo "JANUARI";}
elseif ($nilai=='02')
{echo "FEBRUARI";}
elseif ($nilai=='03')
{echo "MARET";}
elseif ($nilai=='04')
{echo "APRIL";}
elseif ($nilai=='05')
{echo "MEI";}
elseif ($nilai=='06')
{echo "JUNI";}
elseif ($nilai=='07')
{echo "JULI";}
elseif ($nilai=='08')
{echo "AGUSTUS";}
elseif ($nilai=='09')
{echo "SEPTEMBER";}
elseif ($nilai=='10')
{echo "OKTOBER";}
elseif ($nilai=='11')
{echo "NOVEMBER";}
elseif ($nilai=='12')
{echo "DESEMBER";}
//end function
}

function get_user_online()
{
	$session_id = session_id();
	$timestamp = time();
	$timeout = 600; // $timeout 600 = 10 menit 

	$query = "SELECT * FROM user_online WHERE session_id='" . $session_id . "'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);

	if ($count < 1)
	{
		$query = "INSERT INTO user_online values ('" .$session_id. "', '".$timestamp."')";
	}
	else
	{
		$query = "UPDATE user_online SET timestamp='" . $timestamp . "'" . " WHERE session_id='" . $session_id . "'";
	} 
	$result = mysql_query($query);

	// menghitung jumlah pengunjung yang aktif
	$record = mysql_fetch_array(mysql_query("SELECT count(*) total FROM user_online"));
	$user_online = $record['total'];

	// menghapus session yang sudah kadaluwarsa
	mysql_query("DELETE FROM user_online WHERE timestamp < " . ($timestamp - $timeout));

	mysql_close();

	return $user_online;
}

############################# FUNGSI MENCARI TGL, BULAN, TAHUN FORMAT INDONESIA #############################
function tampiltgl($valtgl)
{
$temp=explode("-",$valtgl);
$tgl=$temp[2];
$bulan=$temp[1];
$tahun=$temp[0];
echo $tgl." ";
bulan($bulan);
echo " ".$tahun;
}

############################# FUNGSI MENCARI TGL, BULAN, TAHUN FORMAT INDONESIA #############################
function tampiltgl2($valtgl)
{
$temp=explode("-",$valtgl);
$tgl=$temp[2];
$bulan=$temp[1];
$tahun=$temp[0];
echo $tgl." ";
bulan2($bulan);
echo " ".$tahun;
}

function null2($angka)
{
$nilai = number_format($angka,0,"",",");
echo "$nilai";
}

#################### MENCARI BULAN DI DALAM FIELD ###################
function bulan_c($nilai)
{
//
if ($nilai=='01')
{echo "Jan.";}
elseif ($nilai=='02')
{echo "Feb.";}
elseif ($nilai=='03')
{echo "Mar.";}
elseif ($nilai=='04')
{echo "Apr.";}
elseif ($nilai=='05')
{echo "Mei";}
elseif ($nilai=='06')
{echo "Jun.";}
elseif ($nilai=='07')
{echo "Jul.";}
elseif ($nilai=='08')
{echo "Agu.";}
elseif ($nilai=='09')
{echo "Sep.";}
elseif ($nilai=='10')
{echo "Okt.";}
elseif ($nilai=='11')
{echo "Nov.";}
elseif ($nilai=='12')
{echo "Des.";}
//end function
}

function bulan2_c($nilai)
{
//
if ($nilai=='01')
{echo "Jan.";}
elseif ($nilai=='02')
{echo "Feb.";}
elseif ($nilai=='03')
{echo "Mar.";}
elseif ($nilai=='04')
{echo "Apr.";}
elseif ($nilai=='05')
{echo "May";}
elseif ($nilai=='06')
{echo "Jun.";}
elseif ($nilai=='07')
{echo "Jul.";}
elseif ($nilai=='08')
{echo "Aug.";}
elseif ($nilai=='09')
{echo "Sep.";}
elseif ($nilai=='10')
{echo "Oct.";}
elseif ($nilai=='11')
{echo "Nov.";}
elseif ($nilai=='12')
{echo "Dec.";}
//end function
}

?>
