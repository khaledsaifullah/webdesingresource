<?php
$host = "localhost"; //database location
$user = "root"; //database username
$pass = ""; //database password
$db_name = "booking"; //database name

//database connection
$link = @mysql_connect($host, $user, $pass);
@mysql_select_db($db_name);


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$fulladdress = $_POST['fulladdress'];


$sql = "INSERT INTO  reservation VALUES (NULL,'$name','$phone','$email','$fullname','$fulladdress');";
echo $sql;
@mysql_query("$sql");




if (sizeof($_POST)>0) {
    $to = 'khaledcse2008@gmail.com';
    $subject = 'Contact us';

    $html ='';
    $html .= '<b>'.'Name:'.'&nbsp;'.'</b>'.$_POST['name'].'<br>';
    $html .= '<b>'.'Phone:'.'&nbsp;'.'</b>'.$_POST['phone'].'<br>';
    $html .= '<b>'.'Email:'.'&nbsp;'.'</b>'.$_POST['email'].'<br>';
    $html .= '<b>'.'Full Name:'.'&nbsp;'.'</b>'.$_POST['fullname'];
    $html .= '<b>'.'Full Address:'.'&nbsp;'.'</b>'.$_POST['fulladdress'].'<br>';



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