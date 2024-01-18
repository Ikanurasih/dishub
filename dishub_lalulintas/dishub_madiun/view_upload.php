	<?php
	$id=$_REQUEST['id'];
	$cek=$_REQUEST['cek'];
	?>
<html>
<head>
<title> Upload Files/Images </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body bgcolor="#efefef" leftmargin="10" topmargin="10">
<table width="280" border="0" cellspacing="0" cellpadding="0" class="box_CCCCCC">
<form name="form1"  method="post" action="insert_file.php" enctype='multipart/form-data'>
  <tr>
      <td height="30" class="tdtitle_black">&nbsp;&nbsp; Upload 
        Files / Images:</td>
  </tr>
  <tr>
    <td height="25">&nbsp;
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="cek" value="<?php echo $cek; ?>">
    <input type="file" name="userfile" size="30" class="inputbox">
    </td>
  </tr>
  <tr>
    <td height="30">&nbsp;&nbsp; 
      <input type="submit" name="Submit" value="Upload" class="button">
    </td>
  </tr><!--
  <tr>
      <td height="30" class="text">&nbsp;&nbsp;&nbsp;&nbsp;Max. file size is 1 MB. valid file type(s): JPG</td>
  </tr>-->
  </form>
</table>

</body>
</html>
