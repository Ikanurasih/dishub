<div id="master_menu">
<table width="100%">
	<tr>
    	<td width="100%" rowspan="4" align="right">
  <a href="global/logout.php" class="text_pasar">LogOut</a></td>
	
	</td>
    </tr>
</table>
</div>
<br>
<div id=master2>
<br><br>
<div class="dock" id="dock">
  <div class="dock-container">
  <a class="dock-item" href="dishub_angkutan_orang/"><img src="images/46.png" />Angkutan Orang</a> 
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_angkutanbarang/"><img src="images/78.png" />Angkutan Barang</a> 
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_lalulintas/"><img src="images/25.png" />Lalu Lintas</a>
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_pkb/"><img src="images/66.png" />Pajak Kendaraan Bermotor</a>
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_simterminalpenumpang/"><img src="images/49.png" />Terminal Penumpang</a>
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_terminalcargo/"><img src="images/48.png" />Terminal Cargo</a>
  <a class="dock-item" href="#">&nbsp;<span></span></a> 
  <a class="dock-item" href="dishub_kepegawaian/"><img src="images/44.png" />Kepegawaian</a>
  </div>
</div>
<script type="text/javascript">	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 80,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 80,
					proximity: 90,
					halign : 'center'
				}
			)
		}
	);

</script>
</div>
</div>