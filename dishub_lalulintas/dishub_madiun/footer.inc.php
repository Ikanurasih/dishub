<table border="0" align="center" cellpadding="0" cellspacing="0" width="880">
  <tr class="tdtitle_black">
  	<td width="500" align="center">&nbsp;</td>
  	<td width="100" align="center">&nbsp;</td>
  	<td width="280" align="center">Madiun, 
    <?php
	  $temp=explode("-",$sekarang); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">Mengetahui</td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><?php echo $jabatan; ?></td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><u><?php echo $nama_pegawai; ?></u></td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><?php echo $golongan; ?></td>
  </tr>
  <tr class="tdtitle_black">
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">NIP. <?php echo $nip; ?></td>
  </tr>
</table>