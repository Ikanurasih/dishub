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
      <!--<tr class="tdtitle"> 
        <td width="80">Tipe User</td>
        <td width="10">:</td>
        <td width="250"><input type="radio" class="inputbox" name="tipe_user" value="admin" onClick=" $('#operator').hide(); " checked> Admin <input type="radio" class="inputbox" name="tipe_user" value="admin" onClick=" $('#operator').show(); "> Operator </td>
      </tr>
      <tr class="tdtitle" id="operator" style=" display: none; ">
      	<td width="80">Operator</td>
        <td width="10">:</td>
        <td width="250"><select name="tipe_operator" class="inputbox">
        <option value="3">Angkutan Orang</option>
        <option value="4">Angkutan Barang</option>
        <option value="2">Lalu Lintas</option>
        <option value="5">Pajak Kendaraan Bermotor</option>
        <option value="6">Terminal Penumpang</option>
        <option value="7">Terminal Cargo</option>
        <option value="8">Kepegawaian</option>
        </select></td>
      </tr>-->
      <tr>
      	<td>&nbsp;</td>
      </tr>
      <tr class="tdtitle"> 
        <td colspan="3"><input type="submit" value=" Login "> &nbsp;&nbsp; <input type="reset" value=" Reset "> </td>
      </tr>
	  </form>
    </table>
	</fieldset>
</div>
</center>
</body>
</html>
