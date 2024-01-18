<?php
$id							=$_REQUEST['id'];
$id_kendaraan_bermotor_umum	=$_REQUEST['id_kendaraan_bermotor_umum'];
$nama						=$_REQUEST['nama'];
$alamat						=$_REQUEST['alamat'];
$no_kend					=$_REQUEST['no_kend'];
$no_uji						=$_REQUEST['no_uji'];
$merk						=$_REQUEST['merk'];
$jenis_kend					=$_REQUEST['jenis_kend'];
$cc							=$_REQUEST['cc'];
$bahan_bakar				=$_REQUEST['bahan_bakar'];
$tahun						=$_REQUEST['tahun'];
$no_rangka					=$_REQUEST['no_rangka'];
$no_mesin					=$_REQUEST['no_mesin'];
$daya_orang					=$_REQUEST['daya_orang'];
$daya_barang				=$_REQUEST['daya_barang'];
$jenis_angkutan				=$_REQUEST['jenis_angkutan'];
$jenis_trayek				=$_REQUEST['jenis_trayek'];
$jenis_pelayanan			=$_REQUEST['jenis_pelayanan'];
$kode_trayek				=$_REQUEST['kode_trayek'];
$status_trayek				=$_REQUEST['status_trayek'];
$jadwal_perjalanan			=$_REQUEST['jadwal_perjalanan'];
$wilayah_opr				=$_REQUEST['wilayah_opr'];
$masa_operasi				=$_REQUEST['masa_operasi'];
$no_izin_operasi			=$_REQUEST['no_izin_operasi'];
$tgl_izin_operasi			=$_REQUEST['tgl_izin_operasi'];


if ($act=="del")
{
mysql_query("delete from ang_izin_operasi where id='$id'");
}
?>

<html>
<head>
<title>Angkutan Orang / Angkutan Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59"><div align="left"><img src="images/addedit.png" width="48" height="48" hspace="5" vspace="5"></div></td>
    <td><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Data Pelayanan Izin Operasi </font></strong></td>
  </tr>
</table>
<?php
if ($act=="cetak")
{
?>
<fieldset class="tdtitle_black">
<legend> Cetak Laporan Data Pelayanan Izin Operasi: </legend>
<table class="tdtitle_black">
<form method="post" action="lap_izin_operasi.php" target="_blank">
<input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<tr>
<td width="100">Jabatan</td>
<td width="10">:</td>
<td width="200"><input type="text" name="jabatan" class="inputbox2" size="50"></td>
</tr>
<tr>
<td width="100">Nama Pegawai</td>
<td width="10">:</td>
<td width="200"><input type="text" name="nama_pegawai" class="inputbox" size="30"></td>
</tr>
<tr>
<td width="100">NIP</td>
<td width="10">:</td>
<td width="200"><input type="text" name="nip" class="inputbox" size="30"></td>
</tr>
<tr>
<td width="100">Golongan</td>
<td width="10">:</td>
<td width="200"><input type="text" name="golongan" class="inputbox" size="30"></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3"><a href="index.php?do=data.izin_operasi"><img src="images/batal.gif" title="Klik disini untuk Batal" width="70" height="23" border="0"></a>&nbsp;&nbsp;
  <input type="image" src="images/cetak.gif" title="Klik disini untuk Cetak Laporan">
  </td>
</tr>
</form>
</table>
</fieldset>
<?php
}
else
{
?>
<table width="1350" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td><a href="?act=add&do=data.izin_operasi"><img src="images/add.png" width="30" height="30" border="0" title="klik disini untuk Tambah Data Pelayanan Izin Operasi Baru"></a><a href="javascript:document.location.reload();"><img src="images/refresh.png" title="klik disini untuk Refresh" width="30" height="30" hspace="20" border="0"></a></td>
  </tr>
  <tr class="tdtitle_black">
  <form method="post" action="index.php?do=data.izin_operasi">
    <td>Pencarian: &nbsp;<select name="kategori" class="inputbox">
	<!--<option value="masa_operasi" <?php if ($kategori=="masa_operasi") echo "selected"; ?>>Masa Operasi</option>-->
	<option value="no_izin_operasi" <?php if ($kategori=="no_izin_operasi") echo "selected"; ?>>No. Izin Operasi</option>
	<!--<option value="tgl_izin_operasi" <?php if ($kategori=="tgl_izin_operasi") echo "selected"; ?>>Tgl. Izin Operasi</option>-->

	</select>
	<input type="text" name="key" value="<?php echo $key; ?>" class="inputbox"> &raquo; <font size="1.5">Enter</font>
	&nbsp;&nbsp;</td>
	<td width="377"><div align="right"><a href="index.php?do=data.izin_operasi&act=cetak&kategori=<?php echo $kategori; ?>&key=<?php echo $key; ?>"><img src="images/cetak.gif" title="Klik disini untuk Cetak Laporan" border="0"></a></div></td>
	</form>
  </tr>
 </table>
 <table border="1" cellspacing="0" cellpadding="1" width="1350">
  <tr class="tdtitle_white">
	<td colspan="2" rowspan="2" background="images/bgcell.gif" width="70">&nbsp;</td>
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Nama<br>Pemilik/Perusahaan</td> 
    <td rowspan="2" width="150" background="images/bgcell.gif" height="25" align="center">Alamat</td>                                     
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">No.Kend</td>              
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">No.Uji</td>              
    <td rowspan="2" width="70" background="images/bgcell.gif" height="25" align="center">Merk/Type</td>                           
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">CC</td>                        
    <td rowspan="2" width="50" background="images/bgcell.gif" height="25" align="center">Tahun</td>                      
    <td colspan="2" background="images/bgcell.gif" height="25" align="center">Daya Angkut</td>             
    <td rowspan="2" width="130" background="images/bgcell.gif" height="25" align="center">Jenis<br>Angkutan</td>                          
    <td rowspan="2" width="80" background="images/bgcell.gif" height="25" align="center">Jenis<br>Pelayanan</td>              
    <td rowspan="2" width="120" background="images/bgcell.gif" height="25" align="center">Wilayah<br>Operasi</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Masa Berlaku<br>
Izin Operasi </td>           
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">No. Izin<br>Operasi</td>              
    <td rowspan="2" width="100" background="images/bgcell.gif" height="25" align="center">Tgl. Izin<br>Operasi</td>                       
  </tr>
  <tr class="tdtitle_white">
	<td width="60" background="images/bgcell.gif" height="25" align="center">Orang<br>(0rg)</td>              
    <td width="60" background="images/bgcell.gif" height="25" align="center">Barang<br>(Kg)</td>
  </tr>
   <?php
  if ($act=='add')
  {
  ?>
  <form method="post" action="insert_izin_operasi.php" >
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id_kendaraan_bermotor_umum" value="<?php echo $id_kendaraan_bermotor_umum; ?>">
    <td align="center" width="35"><a href="index.php?do=data.izin_operasi"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="10" value="<?php echo $nama; ?>" class="inputbox" readonly />
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen_kend_umum("view_kendaraan_bermotor_umum3.php")'></td>
    <td height="25" align="center"><input type="text" name="alamat" size="10" value="<?php echo $alamat; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="no_kend" size="7" value="<?php echo $no_kend; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="7" value="<?php echo $no_uji; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="merk" size="7" value="<?php echo $merk; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="jenis_kend" size="10" value="<?php echo $jenis_kend; ?>" class="inputbox" readonly /><input type="text" name="cc" size="3" maxlength="5" value="<?php echo $cc; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="bahan_bakar" size="10" value="<?php echo $bahan_bakar; ?>" class="inputbox" readonly /><input type="text" name="tahun" size="3" maxlength="4" value="<?php echo $tahun; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="no_rangka" size="10" value="<?php echo $no_rangka; ?>" class="inputbox" readonly /><input type="hidden" name="no_mesin" size="10" value="<?php echo $no_mesin; ?>" class="inputbox" readonly /><input type="text" name="daya_orang" size="3" value="<?php echo $daya_orang; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="text" name="daya_barang" size="3" value="<?php echo $daya_barang; ?>" class="inputbox" readonly /></td>
	
	<td height="25" align="center"><input type="text" name="jenis_angkutan" size="12" value="<?php echo $jenis_angkutan; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="jenis_trayek" size="10" value="<?php echo $jenis_trayek; ?>" class="inputbox" readonly /><input type="text" name="jenis_pelayanan" size="10" value="<?php echo $jenis_pelayanan; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="kode_trayek" size="10" value="<?php echo $kode_trayek; ?>" class="inputbox" readonly /><input type="hidden" name="status_trayek" size="10" value="<?php echo $status_trayek; ?>" class="inputbox" readonly /><input type="hidden" name="jadwal_perjalanan" size="10" value="<?php echo $jadwal_perjalanan; ?>" class="inputbox" readonly /><input type="text" name="wilayah_opr" size="10" value="<?php echo $wilayah_opr; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="text" id="masa_operasi" name="masa_operasi" size="10" value="<?php echo $masa_operasi; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_operasi'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	<td height="25" align="center"><input type="text" name="no_izin_operasi" size="7" value="<?php echo $no_izin_operasi; ?>" class="inputbox"/></td>
	<td height="25" align="center"><input type="text" id="tgl_izin_operasi" name="tgl_izin_operasi" size="10" value="<?php echo $tgl_izin_operasi; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin_operasi'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
	</form>
   <?php
  }
  elseif($act=="edit")
  {
  $strsql="select a.id_kendaraan_bermotor_umum, a.id as id_operasi,a.masa_operasi,a.no_izin_operasi,a.tgl_izin_operasi, b.*, c.*, d.*, e.* from ang_izin_operasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.id='$id' order by a.id desc";
  $hasil=mysql_query($strsql);
  $row=mysql_fetch_array($hasil);  
  ?>
  <form method="post" action="update_izin_operasi.php">
  <tr class="text" bgcolor="efefef">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="id_kendaraan_bermotor_umum" value="<?php echo $row[id_kendaraan_bermotor_umum]; ?>">
    <td align="center" width="35"><a href="index.php?do=data.izin_operasi"><img src="images/kembali.png" title="Klik disini untuk Batal" border="0"></a></td>
    <td align="center" width="35"><input type="image" src="images/save.gif" title="Klik disini untuk Simpan"></td>
    <td height="25" align="center"><input type="text" name="nama" size="10" value="<?php echo $row[nama]; ?>" class="inputbox" readonly />
    <input type="button" value="..." class="inputbox" onClick='Popreport_look_mtkopen_kend_umum("view_kendaraan_bermotor_umum.php")'></td>
    <td height="25" align="center"><input type="text" name="alamat" size="10" value="<?php echo $row[alamat]; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="no_kend" size="7" value="<?php echo $row[no_kend]; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="no_uji" size="7" value="<?php echo $row[no_uji]; ?>" class="inputbox" readonly /></td>
    <td height="25" align="center"><input type="text" name="merk" size="7" value="<?php echo $row[merk]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="jenis_kend" size="10" value="<?php echo $row[jenis_kend]; ?>" class="inputbox" readonly /><input type="text" name="cc" size="3" maxlength="5" value="<?php echo $row[cc]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="bahan_bakar" size="10" value="<?php echo $row[bahan_bakar]; ?>" class="inputbox" readonly /><input type="text" name="tahun" size="3" maxlength="4" value="<?php echo $row[tahun]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="no_rangka" size="10" value="<?php echo $row[no_rangka]; ?>" class="inputbox" readonly /><input type="hidden" name="no_mesin" size="10" value="<?php echo $row[no_mesin]; ?>" class="inputbox" readonly /><input type="text" name="daya_orang" size="3" value="<?php echo $row[daya_orang]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="text" name="daya_barang" size="3" value="<?php echo $row[daya_barang]; ?>" class="inputbox" readonly /></td>
	
	<td height="25" align="center"><input type="text" name="jenis_angkutan" size="12" value="<?php echo $row[jenis_angkutan]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="jenis_trayek" size="10" value="<?php echo $row[jenis_trayek]; ?>" class="inputbox" readonly /><input type="text" name="jenis_pelayanan" size="10" value="<?php echo $row[jenis_pelayanan]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="hidden" name="kode_trayek" size="10" value="<?php echo $row[kode_trayek]; ?>" class="inputbox" readonly /><input type="hidden" name="status_trayek" size="10" value="<?php echo $row[status_trayek]; ?>" class="inputbox" readonly /><input type="hidden" name="jadwal_perjalanan" size="10" value="<?php echo $row[jadwal_perjalanan]; ?>" class="inputbox" readonly /><input type="text" name="wilayah_opr" size="10" value="<?php echo $row[wilayah_opr]; ?>" class="inputbox" readonly /></td>
	<td height="25" align="center"><input type="text" id="masa_operasi" name="masa_operasi" size="10" value="<?php echo $row[masa_operasi]; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('masa_operasi'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
	<td height="25" align="center"><input type="text" name="no_izin_operasi" size="7" value="<?php echo $row[no_izin_operasi]; ?>" class="inputbox"/></td>
	<td height="25" align="center"><input type="text" id="tgl_izin_operasi" name="tgl_izin_operasi" size="10" value="<?php echo $row[tgl_izin_operasi]; ?>" class="inputbox" readonly />
	<img src="popupcal/images/calendar.gif" width="24" height="12" onClick="displayCalendar(document.getElementById('tgl_izin_operasi'),'yyyy-mm-dd',this)" style="cursor:pointer" /></td>
  </tr>
	</form>
  <?php
    }
  if ($kategori=="masa_operasi")
  {  $strsql="select a.id as id_operasi,a.masa_operasi,a.no_izin_operasi,a.tgl_izin_operasi, b.*, c.*, d.*, e.* from ang_izin_operasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.masa_operasi like '%$key%' order by a.id desc"; }
  elseif ($kategori=="no_izin_operasi")
  {  $strsql="select a.id as id_operasi,a.masa_operasi,a.no_izin_operasi,a.tgl_izin_operasi, b.*, c.*, d.*, e.* from ang_izin_operasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.no_izin_operasi like '%$key%' order by a.id desc"; }
  elseif ($kategori=="tgl_izin_operasi")
  {  $strsql="select a.id as id_operasi,a.masa_operasi,a.no_izin_operasi,a.tgl_izin_operasi, b.*, c.*, d.*, e.* from ang_izin_operasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id && a.tgl_izin_operasi like '%$key%' order by a.id desc"; }
  else
  {  $strsql="select a.id as id_operasi,a.masa_operasi,a.no_izin_operasi,a.tgl_izin_operasi, b.*, c.*, d.*, e.* from ang_izin_operasi a, ang_kendaraan_bermotor_umum b, ang_master_pemilik c, ang_master_kendaraan d, ang_master_trayek e where a.id_kendaraan_bermotor_umum=b.id && b.id_pemilik=c.id && b.id_kendaraan=d.id && b.id_trayek=e.id order by a.id desc"; }
  $hasil=mysql_query($strsql);
  while($row=mysql_fetch_array($hasil))
  {
  $NO++;
  ?>
  <tr class="text" bgcolor="<?php gantiwarna($NO); ?>">
    <td align="center" width="50"><a href="?do=data.izin_operasi&act=edit&id=<?php echo $row[id_operasi]; ?>"><img src="images/icon_edit.gif" border="0" title="Klik disini untuk Edit Data"></a></td>
    <td align="center" width="20"><a href="?do=data.izin_operasi&act=del&id=<?php echo $row[id_operasi]; ?>" onClick="return confirmdelete('Data ini');"><img src="images/icon_delete.gif" title="Klik disini untuk Hapus Data" border="0"></a></td>
    <td height="25" align="left"><?php echo $row[nama]; ?></td>
    <td height="25" align="left"><?php echo $row[alamat]; ?></td>
    <td height="25" align="center"><?php echo $row[no_kend]; ?></td>
	<td height="25" align="center"><?php echo $row[no_uji]; ?></td>
	<td height="25" align="center"><?php echo $row[merk]; ?></td>
    <td height="25" align="center"><?php echo $row[cc]; ?></td>
    <td height="25" align="center"><?php echo $row[tahun]; ?></td>
	<td height="25" align="center"><?php echo $row[daya_orang]; ?></td>
    <td height="25" align="center"><?php echo $row[daya_barang]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_angkutan]; ?></td>
    <td height="25" align="center"><?php echo $row[jenis_pelayanan]; ?></td>
    <td height="25" align="left"><?php echo $row[wilayah_opr]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[masa_operasi]); 
	  $tahun=$temp[0];
	  $bulan=$temp[1];
	  $tgl=$temp[2];
	  echo $tgl;
	  echo " ";
	  bulan($bulan);
	  echo " ";
	  echo $tahun;
	  ?></td>
    <td height="25" align="center"><?php echo $row[no_izin_operasi]; ?></td>
    <td height="25" align="center"><?php
	  $temp=explode("-",$row[tgl_izin_operasi]); 
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
  <?php
  }
  ?>
  </table>
<?php
}
?>
</body>
</html>
