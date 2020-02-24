<?php
	$to = 'webalive.srv@gmail.com,khaled@bitmascot.com,khld_saifullah@yahoo.com';
	//$to = 'khaled@bitmascot.com';
	$subject = 'Welcome SGUA';
	
	$html .=' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newsletter</title>
</head>
<body style="background:#f7f7f7;">
<table width="100%" border="0" cellspacing="0" cellpadding="0"  bgcolor="#f7f7f7" align="center">
  <tr>
    <td valign="top" align="center">
    	<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#f7f7f7" align="center">
        	<tr>
            	<td valign="top" align="center" height="20px"></td>
            </tr>
        </table>
        
        <table width="748" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border:1px solid #e2e2e2; padding:2px;">
          <tr>
              <td valign="top" align="center">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    	<tr><td width="100%" height="15px"></td></tr>
                    </table>

        			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    	<tr>
                       		<td width="2%" align="left"></td>
                            <td width="72%" align="left">
                        	<a href="#"> <img src="images/company-logo.png"  border="0"  alt="Logo" width="150" height="84"   /></a></td>
                            <td width="6%" align="left"><img src="images/call-us.png" border="0" alt="call-us" width="36" height="35"  /></td>
                        	<td width="15%" align="left">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tr><td valign="top" align="left">
                                <a href="tel:08 9417 8501" style="color:#777777;font-size:18px;text-decoration:none;font-family:Arial,Helvetica,sans-serif;">
                                08 9417 8501</a></td></tr>
                                <tr><td valign="top" align="left">
                                <a href="tel:1800 355 559"  style="color:#777777; font-size:18px;text-decoration:none;font-family:Arial, Helvetica, sans-serif;">		
                                1800 355 559</a>
                                </td></tr>
                                </table>
                            </td>
                       		<td width="5%" align="left"></td>
                        </tr>
                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    	<tr><td width="100%" height="15px"></td></tr>
                    </table>
                    
                    
              </td>
          </tr>
        </table>


      
        
    </td>
  </tr>
</table>
</body>
</html>
	';



	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'To: WebAlive <khaled@bitmascot.com>' . "\r\n";
	mail($to, $subject, $html, $headers);

?>


 