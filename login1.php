<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
?>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body onLoad=document.forms[0].username.focus();>
	<center>
	<div id=login>
        <div class="container">
		
			<!-- Codrops top bar -->
			
			<section class="main">
				<form name="form1" method="post" action="proses_login.php" class="form-1">
					<p class="field">
						<input type="text" class="inputbox" name="username" maxlength="10" value="<?php echo $username; ?>">
						<i><img src="images/useri.png" width="22px" height="30px"></i>
					</p>
						<p class="field">
							<input type="password" class="inputbox" name="password" maxlength="10" value="<?php echo $password; ?>">
							<i><img src="images/locki.png" width="22px" height="30px"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><input type="reset" value=" Reset "><i><img src="images/unlock.png" width="35px" height="40px"></i></button>
					</p>
				</form>
			</section>
        </div>
	</center>	
    </body>
</html>