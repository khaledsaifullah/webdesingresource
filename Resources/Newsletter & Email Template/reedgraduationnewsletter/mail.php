<?php
	$to = 'webalive.srv@gmail.com,khaled@bitmascot.com,webalive';
	
 	
	$subject = 'Welcome Reedgraduation';
	
	
$html = <<<EOD



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REEDGRADUATIONS</title>
<style>
    *{
		margin:0;
		padding:0;
	}
</style>
</head>
<body style="background-color:#fff;">
<table align="center" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
<tr><td align="center" valign="top" height="40"></td></tr>
<tr>
<td align="center" valign="top">
    <table align="center" cellpadding="0" cellspacing="0" width="750"  bgcolor="#f0f0f0">
        <tr><td colspan="3" height="40"></td></tr>
        <tr>
            <td width="40"></td>
            <td align="center" valign="top">
                <table align="center" cellpadding="0" cellspacing="0" width="100%">
                    <tr><td align="left" valign="top"><img src="http://larry.webmascot.com/reedgraduationnewsletter/company-logo.png" alt="logo"  /></td></tr>
                </table>
            </td>
            <td width="40"></td>
        </tr>
        <tr><td colspan="3" height="40"></td></tr>
    </table>
    
    
      <table align="center" cellpadding="0" cellspacing="0" width="750"  bgcolor="#fff" style="border:1px solid #000;">
        <tr><td colspan="3" height="40"></td></tr>
        <tr>
            <td width="40"></td>
            <td align="center" valign="top">
                <table align="center" cellpadding="0" cellspacing="0" width="100%">
                    <tr><td align="left" valign="top" style="color: rgba(0,0,0,0.9);font-size: 18px;font-family:Arial, Helvetica, sans-serif;">
                    Dear Family Name</td></tr>
                    <tr><td align="left" valign="top" height="15"></td></tr>
                    <tr><td align="left" valign="top" style="color: rgba(0,0,0,0.9);font-size: 18px;font-family:Arial, Helvetica, sans-serif;">
                    <strong>Refund Notice</strong> Your refund request has been processed today, please allow 2 business days
                    for the transaction to go throgh.</td></tr>
                    <tr><td align="left" valign="top" height="15"></td></tr>
                    <tr><td align="left" valign="top">
                    	<table align="center" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                        <td width="30"></td>
                        <td align="left" valign="top">
                    	<ul>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                               	<strong style="font-size: 15px;">Order Number:</strong> </li>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                                <strong style="font-size: 15px;">Refund Amount:</strong>Amount entered in the Refund amount field in the Refund tab.                           </li>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                               	<strong style="font-size: 15px;">Description:</strong> If Any in the Description field of Refund tab. </li>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                                <strong style="font-size: 15px;">University:</strong> </li>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                               	<strong style="font-size: 15px;">Order Date:</strong> </li>
                        	<li style="color: rgba(0,0,0,0.9);font-size: 14px;font-family:Arial, Helvetica, sans-serif;">
                               	<strong style="font-size: 15px;">Messager Date:</strong>Tdoays date when submit button is hit i.e.Sytem date.</strong> </li>
                        </ul>
                        </td>
                        <td width="30"></td>
                        </tr>
                        </table>
                        
                        
                    </td></tr>
                </table>
                
                
            </td>
            <td width="40"></td>
        </tr>
        <tr><td colspan="3" height="40"></td></tr>
    </table>
    
    
    <table align="center" cellpadding="0" cellspacing="0" width="750"  bgcolor="#f0f0f0">
        <tr><td colspan="3" height="40"></td></tr>
        <tr>
            <td width="40"></td>
            <td align="center" valign="top">
                <table align="center" cellpadding="0" cellspacing="0" width="100%">
                    <tr><td align="left" valign="top" style="color: rgba(0,0,0,0.5);font-size: 15px;font-family:Arial, Helvetica, sans-serif;">
                    If you have any question , please do not hesitate to contact us at 
                    <a href="mailto:hello@reedgradutaion.com.au" style="color:#c2a03f;">hello@reedgradutaion.com.au</a>
                    </td></tr>
                </table>
            </td>
            <td width="40"></td>
        </tr>
        <tr><td colspan="3" height="40"></td></tr>
    </table>
    
    
    
</td>
</tr>
<tr><td align="center" valign="top" height="40"></td></tr>
</table>
</body>
</html>






EOD;








	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'To: WebAlive <forms@webalive.biz>' . "\r\n";


	mail($to, $subject, $html, $headers);

?>


 

 