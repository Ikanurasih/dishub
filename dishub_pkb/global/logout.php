<?php
session_start();
session_destroy();
echo "<script>alert('LogOut Success'); parent.location='../index.php';</script>\n";
		exit();
?>