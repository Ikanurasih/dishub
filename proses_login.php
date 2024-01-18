<?php
//include file koneksi database
include "global/config.php";
//ambil var
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$tipe_user = $_REQUEST["tipe_user"];
$tipe_operator = $_REQUEST["tipe_operator"];
//tgl+jam
//$jam = date("H:i:s");                         
$sekarang=date("y-m-d, H:i:s");
//$sekarang="$hari $jam";
//echo $sekarang;
//ambil tabel


$perintah="SELECT id,login,pwd,tipe,aktif,modul FROM usermanager WHERE login='$username' AND pwd='$password' AND aktif='1'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
if (empty($username))
{
echo "<script>alert('Anda belum memasukkan Username.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}

if (empty($password))
{
echo "<script>alert('Anda belum memasukkan Password.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}
if ($row['login']==$username AND $row['pwd']==$password)
{
session_start();
/* $_SESSION["nameuser";
session_register("passuser");
session_register("tipe"); */
$_SESSION['nameuser']=$row[login];
$_SESSION['passuser']=$row[pwd];
$_SESSION['tipe']=$row[tipe];

$_SESSION["dishub_madiun"] = true;
$_SESSION["modul"] = $row['modul'];

		$str_insert="UPDATE usermanager SET last_login='$sekarang' WHERE login='$username'";
		mysql_query($str_insert);
		
		if($row['modul'] > 1){
		
			if($row['modul'] == "2"){
				
				header("location: dishub_lalulintas/index.php");
				
			}elseif($row['modul'] == "3"){
				
				header("location: dishub_angkutan_orang/index.php");
				
			}elseif($row['modul'] == "4"){
				
				header("location: dishub_angkutanbarang/index.php");
			
			}elseif($row['modul'] == "5"){
			
				header("location: dishub_pkb/index.php");
			
			}elseif($row['modul'] == "6"){
			
				header("location: dishub_simterminalpenumpang/index.php");
			
			}elseif($row['modul'] == "7"){
			
				header("location: dishub_terminalcargo/index.php");
			
			}elseif($row['modul'] == "8"){
			
				header("location: dishub_kepegawaian/index.php");
			
			}
		
		}else{
		
				header("location:index.php");
		
		}
}
else
{
echo "<script>alert('Silahkan masukkan Username dan Password Anda dengan benar.'); document.location.href='index.php?username=$username&password=$password';</script>\n";
		exit();
}
?>