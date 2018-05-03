<SCRIPT LANGUAGE="JavaScript">
    function startjam(){
var d = new Date();
var curr_hour = d.getHours();
var curr_min = d.getMinutes();
var curr_sec = d.getSeconds();
document.getElementById('start_daftar').value=(curr_hour + ":" + curr_min+ ":" + curr_sec);
	}
</SCRIPT>

<div align="center">
  <div id="frame" style="width:100%;">
  <div id="frame_title"><h3 align="left">&nbsp;</h3>

</div>

<form name="myform" id="myform" action="laundry/pendaftaran_laundry.php" method="post">
    <fieldset class="fieldset"><legend>Form Pendaftaran Laundry</legend>

      <table width="100%" border="0" title=" From Ini Berfungsi Sebagai Form Pendaftaran Laundry.">
      <tr>
        <td width="24%">Tanggal Daftar </td>
        <td width="28%"><input type="text" name="TGLREG" class="text" value="<?php echo date("Y-m-d"); ?>" size="20"/>
          <input type='hidden' name='start_daftar' id='start_daftar' /></td>
        <td width="48%" align="right">Shift
          :
          <input type="radio" name="SHIFT" value="1" checked="checked" />
          1
          <input type="radio" name="SHIFT" value="2" />
          2
          <input type="radio" name="SHIFT" value="3" />
          3 </td>
      </tr>
      
    
    </table>
    </fieldset>


   <div id="all">	
     <? include("pemulasaran/view_prosess_aps.php");?>
  </div>
       </form>

  </div>
  </div>
