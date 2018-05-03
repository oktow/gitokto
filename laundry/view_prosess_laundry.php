<script language="javascript" src="include/cal3.js"></script>
<script language="javascript" src="include/cal_conf3.js"></script>

<SCRIPT LANGUAGE="JavaScript">
    function stopjam(){
var d = new Date();
var curr_hour = d.getHours();
var curr_min = d.getMinutes();
var curr_sec = d.getSeconds();
document.getElementById('stop_daftar').value=(curr_hour + ":" + curr_min+ ":" + curr_sec);
	}
</SCRIPT>
<script>
jQuery(document).ready(function(){

	jQuery('#TGLLAHIR').blur(function(){
		var tgl = jQuery(this).val();						  
		if(tgl == ('0000/00/00') || tgl == ('0000-00-00') || tgl == ('00-00-0000') || tgl == ('00/00/0000')  ){
			alert('Tanggal Lahir Tidak Boleh 00-00-0000');
			jQuery(this).val('');
		}
	});
	
</script>
      <div id='msg'></div>
	<div id="list_data"></div>
    <fieldset class="fieldset"><legend>Identitas Pasien</legend>
	<table width="70%" border="0" cellpadding="0" cellspacing="0" title=" From Ini Berfungsi Sebagai Form Entry Data Customer Laundry." style="float:left;">
    <tr><td width="20%">Nama Lengkap Pasien</td><td width="56%">
    	<input class="text required" type="text" <?php if($_SESSION['NAMA']){ echo"value='".$_SESSION['NAMA']."'";} ?> name="NAMA" size="30" value="<?=$m_pasien->NAMA?>" id="AWAL"  /></td></tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td>Tempat
            <input type="text" value="<? if($m_pasien->TEMPAT || $_SESSION['TEMPAT']){ echo $_SESSION['TEMPAT'].$m_pasien->TEMPAT; }?>" class="text required" name="TEMPAT" size="15" />
            <input onblur="calage1(this.value,'umur');" type="text" class="text required" value="<? if($m_pasien->TGLLAHIR || $_SESSION['TGLLAHIR']){ echo date('d/m/Y', strtotime($_SESSION['TGLLAHIR'].$m_pasien->TGLLAHIR)); }?>" name="TGLLAHIR" id="TGLLAHIR" size="20" />
            <a href="javascript:showCal1('Calendar1')"><img align="top" src="img/date.png" border="0" /></a> ex : 29/09/1999</td>
          </tr>
       
        <tr>
          <td valign="top">Alamat Pasien</td>
          <td colspan="1"><input name="ALAMAT" class="text required" type="text" value="<? if($m_pasien->ALAMAT || $_SESSION['ALAMAT']){echo $_SESSION['ALAMAT'].$m_pasien->ALAMAT;} ?>" size="45" /></td>
          </tr>
       
        <tr>
          <td>No Telepon / HP Pasien</td>
          <td><input  class="text" value="<? if($m_pasien->NOTELP || $_SESSION['NOTELP']){echo $_SESSION['NOTELP'].$m_pasien->NOTELP;}?>" type="text" name="NOTELP" size="25" /></td>
        </tr>
                <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type='hidden' name='stop_daftar' id='stop_daftar' /></td>
        </tr>
     
<br clear="all">
<br clear="all">
      
      
    </fieldset>
    
   
  