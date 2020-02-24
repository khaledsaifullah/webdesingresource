<?php
	$to = 'khaled@bitmascot.com';
	$subject = 'Test Borderradius';
	
$html = <<<EOD



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newsletter</title>
</head>
<body style="background:#f7f7f7;">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<style type="text/css">
*{
	font-family:Open Sans;
}
p,span,a,strong,tabel,tr,th,td{
	font-family:Open Sans;
}
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  bgcolor="#f7f7f7" align="center">
  <tr>
    <td valign="top" align="center"><table width="748" border="0" cellspacing="0" cellpadding="0" bgcolor="#f7f7f7" align="center">
 	
	<div><!--[if mso]>
  <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="50%" stroke="f" fillcolor="#ff0000">
    <w:anchorlock/>
    <center>
  <![endif]-->
      <a href="http://"
style="background-color:#ff0000;border-radius:20px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Click</a>
  <!--[if mso]>
    </center>
  </v:roundrect>
<![endif]--></div>


	</td>
  </tr>
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


 

 