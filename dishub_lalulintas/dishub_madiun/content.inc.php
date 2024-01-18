<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr> 
    <td>
		<?php
		if ($act=="participant")
		{include "peserta.inc.php";}		
		elseif ($act=="symbol_name")
		{include "perusahaan.inc.php";}		
		elseif ($act=="default_price")
		{include "set_harga.inc.php";}
		else
		{ 	
		?>
<table width="400" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <!--DWLayoutTable-->
  <tr bgcolor="#FFFFFF"> 
    <td width="378" height="25" align="center"  background="../images/bgcell.gif" class="tdtitle"><div align="left"> 
        &nbsp;&nbsp;&nbsp;:: Welcome ::</div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="28" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="85" height="24" valign="top" bgcolor="efefef">
<div align="center"><br>
              <img src="images/user.png" width="48" height="48"><br>
              <br>
            </div></td>
          <td width="307" bgcolor="efefef"  class="text">Anda Telah Berada 
            di Halaman Administrator<br>
            Untuk Keluar dari Halaman Administrator, <br>
            Silahkan Anda klik LogOut </td>
        </tr>
      </table></td>
  </tr>
</table>		
		<?php
		}
		?>
    </td>
  </tr>
  <tr>
  	<td height="3"></td>
  </tr>
</table>
