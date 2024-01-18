<?php
include "global/config.php"; 
$id=$_REQUEST['id'];
$cek=$_REQUEST['cek'];
?>
<html>
<head>
<link rel="stylesheet" href="global/style.css" type="text/css">
<title> Upload Files </title>
<SCRIPT language="JavaScript">
<!--
var browserName=navigator.appName; 
if (browserName=="Netscape") { 

function closynoshowsme() 
{
window.open('','_parent','');
window.close();}
}
else { 
if (browserName=="Microsoft Internet Explorer")
{
function closynoshowsme()
{
window.opener = "whocares";
window.close();
}
}
}

//-->
</SCRIPT>

</head>
<body leftmargin="10" topmargin="10">
<?php
$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

$fileName = $_FILES['userfile']['name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
if ($cek=="1")
{
$perintah="update cargo_legalitas set upload_file='$fileName' where id='$id'";
}

if (!empty($fileName))
{
$hasil=mysql_query($perintah);
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
echo "
<table width=280 border=0 cellspacing=0 cellpadding=0 class=box_cccccc>
    <tr> 
      <td height=55 class=tdtitle_black align=center>Upload File is Successfully</td>
    </tr>
    <tr> 
      <td height=57 class=normal_text_01 align=center><a href=javascript:closynoshowsme(); class=link>Close</a></td>
    </tr>
</table>";
}
else
{
echo "
<table width=280 border=0 cellspacing=0 cellpadding=0 class=box_cccccc>
    <tr> 
      <td height=55 class=tdtitle_black align=center>Sorry!, Upload File is Failure</td>
    </tr>
    <tr> 
      <td height=57 align=center><a href='view_upload.php?id=$id&cek=$cek' class=link>Back</a></td>
    </tr>
</table>";
}
?>

</body>
</html>