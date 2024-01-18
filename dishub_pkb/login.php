<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body onLoad=document.forms[0].username.focus();>
<center>
<div id=login>
	<fieldset>
		<legend class="tdtitle">Login:</legend>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<form name="form1" method="post" action="proses_login.php">
      <tr class="tdtitle"> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="4"><img src="images/login.png" width="100" height="100"></td>
      </tr>
      <tr class="tdtitle"> 
        <td width="80">Username</td>
        <td width="10">:</td>
        <td width="250"><input type="text" class="inputbox" name="username" maxlength="10" value="<?php echo $username; ?>"></td>
      </tr>
      <tr class="tdtitle"> 
        <td>PASSWORD</td>
        <td>:</td>
        <td><input type="password" class="inputbox" name="password" maxlength="10" value="<?php echo $password; ?>"></td>
      </tr>
      <tr class="tdtitle"> 
        <td colspan="3"><input type="submit" value=" Login "> &nbsp;&nbsp; <input type="reset" value=" Reset "> <!--&nbsp;&nbsp; <input type="button" value=" Close " onClick="javascript.close();">--></td>
      </tr><!--
      <tr class="text"> 
        <td colspan="4">Masukkan Username &amp; Password dengan Benar untuk Dapat 
          Mengakses Halaman Administrator <strong>SISTEM INFORMASI AUTO GENERATE 
          KELAS</strong>.</td>
      </tr>-->
	  </form>
    </table>
	</fieldset>
</div>
</center>
</body>
</html>
