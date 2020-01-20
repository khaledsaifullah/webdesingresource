<?php
if (sizeof($_POST)>0) {
	 $to = 'khaled@bitmascot.com';
	 $subject = 'Contact us';
	 
	 $html ='';
	 $html .= '<b>'.'Name:'.'&nbsp;'.'</b>'.$_POST['name'].'<br>';
	 $html .= '<b>'.'Email:'.'&nbsp;'.'</b>'.$_POST['email'].'<br>';
	 $html .= '<b>'.'Telephone:'.'&nbsp;'.'</b>'.$_POST['telephone'].'<br>';
	 $html .= '<b>'.'Message:'.'&nbsp;'.'</b>'.$_POST['message'];
	
	
	  
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'To:'.$_POST['email']."\r\n";
	$headers .= 'From:'.$_POST['name'];

	 
	 if(isset($_POST['savebtn'])){
	   mail($to, $subject, $html, $headers);
	   echo '<div class="mail-sent-ok">'.'Your message has been sent successfully.'.'</div>';
	 }
	 else {
	  echo '<div class="mail-not-send">'.'Email is not sent. Please try again.'.'</div>';
	 };
}
?>