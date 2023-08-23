<?php

// echo "tts"; exit();
//  $date=$_POST['date'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $usermessage=$_POST['message'];
// exit();
// echo "i am email";
//include('mail/mail.php');

$to      = 'info@arearugcleanersnassau.com';
        $subject = 'NEW CLIENT MESSAGE !!! - '.$name;
        $message =  "\r\n" .$name . "\r\n" . $email  . "\r\n" . $phone  . "\r\n" . $usermessage;
        //$headers = 'From: newcustomer@carpet.com' . "\r\n" .
            //'X-MAILER: PHP/' . phpversion();
            $headers = 'From: info@arearugcleanersnassau.com' . "\r\n" .
            'X-MAILER: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers))
        {

	header( "Location: ContactUs.php" );
        }
   /*$to="info@brooklynarearugcleaning.net";	https://brooklynarearugcleaning.net
// $to="aandbcarpet@gmail.com";
// $to="usmansarwar487@gmail.com";
$subject="BROOKLYN-AREA-RUG-CLEANING.NET - NEW MESSAGE";
// $message="NAME:".$name,"EMAIL:".$email,"PHONE:".$phone,"MESSAGE:".$usermessage;
$message ="Name : ".$name ." 
Email :" .$email." 
Phone # :" .$phone ." 
Message :" .$usermessage."
This Message came from brooklynarearugcleaning.net";

//$headers= "From: info@aandbcarpet.com";
$headers= "From: info@brooklynarearugcleaning.net";
   If (mail($to, $subject, $message, $headers)){
   	// echo "email sent ";
   	header( "Location: ContactUs.php" );
   // alert("Success");
   	

   }
   else
   {
   	// echo "email not sent";
   }
*/
  

// $to = "toheed619@gmail.com";
// $subject = "BROOKLYN-AREA-RUG-CLEANING.NET - NEW MESSAGE" .$name;
// $txt =" <h3>Name :".$name." </h3>
// <h3>Email :".$email ." </h3>
// <h3>Phone number :".$phone ." </h3>
// <p>".$usermessage."</p>";
// $headers = 'MIME-Version: 1.0' ."\r\n" .'Content-Type: text/html; charset=UTF-8' . "\r\n";
// if (mail($to,$subject,$txt,$headers)) {
// 	echo "mail sent";
// 	# code...
// }
// else
// {
// 	echo "mail not sent";
// }

?>