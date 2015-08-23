
<form id="Captcha" name="Captcha" method="POST" action="test.php" >
<table> 
  <tr>
    <td align="left">
      <label for="captcha">Captcha</label>
    </td>
    <td>
      <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" />
    </td>
    <td> 
      <img id="imgCaptcha" src="create_image.php" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <button type="submit">Submit</button>
	  </td>
  </tr>
</table> 
</form>