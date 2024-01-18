<?php 
session_start();
?>
<html>
<head>
<title>SISTEM INFORMASI DISHUB KOTA MADIUN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="global/style.css" type="text/css">
<link href="csss/style_menu.css" rel="stylesheet" type="text/css" />
<link href="csss/ifzonecss.css" rel="stylesheet" type="text/css" />
<link href="csss/css_portfolio.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
<style>
<?php if($_SESSION["dishub_madiun"] == true){ ?>
body { margin:0px 0px 0px 0px; background:url(../images/bg.jpg); }
<?php }else{ ?>
body { margin:0px 0px 0px 0px; background: #FFFFFF; }
<?php 
}
?>
</style>
</head>

<body>
<?php include "global/header.inc.php"; ?>
<?php 
if($_SESSION["dishub_madiun"] == true)
{
	include "main_page.php";
}else{
 	include "login.php";
}
?>
</body>
</html>
